<?php
namespace Alexvkokin\Patterns\Generics\Factories;

use Alexvkokin\Patterns\Generics\Instruments\IGuitar;

/**
 * @template T of IGuitar
 * @template-implements IGuitarFactory<T>
 */
final readonly class ElectricGuitarFactory implements IGuitarFactory
{
    /**
     * @param class-string<T> $guitarType
     */
    public function __construct(
        private string $guitarType
    ) {}

    public function make(): mixed
    {
        return new $this->guitarType;
    }
}