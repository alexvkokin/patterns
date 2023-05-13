<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Structured\Adapter\classes;

use Alexvkokin\Patterns\Structured\Adapter\interfaces\XmlReaderInterface;

class XmlWeatherReader implements XmlReaderInterface
{
    public function getXml(): string
    {
        return 'This is XML data';
    }
}