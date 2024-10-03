<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\DiContainer\Container;

interface Container
{
    public function register(string $className, callable $definition): void;

    public function singleton(string $className, callable $definition): void;

    /**
     * @template TClassName
     * @param class-string<TClassName> $className
     * @return TClassName
     */
    public function get(string $className): object;
}