<?php
namespace Alexvkokin\Patterns\Generics\Factories;

use Alexvkokin\Patterns\Generics\Instruments\IGuitar;

/**
 * @template T of IGuitar
 */
interface IGuitarFactory
{
    /**
     * @return T
     */
    public function make(): mixed;
}