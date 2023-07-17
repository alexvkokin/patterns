<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\DiContainer\Classes;

final readonly class BusinessLogicAutoWire
{
    public function __construct(
        private Repository $repository
    ) {
    }

    public function doSomething(): void
    {
        echo 'Hello, ' . $this->repository->getUserName() . PHP_EOL;
    }
}