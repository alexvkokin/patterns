<?php
namespace Alexvkokin\Patterns\Generics\Factories;

final readonly class GuitarFactory implements IGuitarFactory
{
    public function __construct(
        private string $guitarType
    ) {}

    public function make(): mixed
    {
        return new $this->guitarType;
    }
}