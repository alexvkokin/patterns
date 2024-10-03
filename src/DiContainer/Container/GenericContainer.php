<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\DiContainer\Container;

final class GenericContainer implements Container
{
    private array $definitions = [];

    private array $singletons = [];

    public function register(string $className, callable $definition): void
    {
        $this->definitions[$className] = $definition;
    }

    public function singleton(string $className, callable $definition): void
    {
        $this->definitions[$className] = function () use ($className, $definition) {

            $instance = $definition($this);

            $this->singletons[$className] = $instance;

            return $instance;
        };
    }

    public function get(string $className): object
    {
        if ($instance = ($this->singletons[$className] ?? null)) {
            return $instance;
        }

        /** @var callable $definition */
        $definition = $this->definitions[$className] ?? $this->autowire(...);

        return $definition($className);
    }

    private function autowire(string $clasName): object
    {
        $reflection = new \ReflectionClass($clasName);
        $parameters = array_map(
            fn (\ReflectionParameter $parameter) => $this->get($parameter->getType()->getName()),
            $reflection->getConstructor()?->getParameters() ?? []
        );

        return new $clasName(...$parameters);
    }
}