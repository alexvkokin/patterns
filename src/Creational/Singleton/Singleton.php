<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Creational\Singleton;

class Singleton
{
    protected static array $instances;


    protected function __construct()
    {
    }

    protected function __clone()
    {
    }

    // В версии php 8.0 данный магический метод должен быть публичный
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): Singleton
    {
        $className = static::class;
        if (isset(static::$instances[$className])) {
            return static::$instances[$className];
        }

        return static::$instances[$className] = new $className;
    }

    public function businessLogic(): void
    {
        print 'do something';
    }

}