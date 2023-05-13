<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Structured\Adapter\classes;

use Alexvkokin\Patterns\Structured\Adapter\interfaces\JsonReaderInterface;

/**
 * Адаптируемый класс
 */
class JsonWeatherReader implements JsonReaderInterface
{
    public function getJson(): string
    {
        return 'This is Json data';
    }
}