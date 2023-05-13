<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Structured\Adapter\classes;

use Alexvkokin\Patterns\Structured\Adapter\interfaces\JsonReaderInterface;
use Alexvkokin\Patterns\Structured\Adapter\interfaces\XmlReaderInterface;

readonly class JsonToXmlAdapter implements XmlReaderInterface
{
    public function __construct(
        public JsonReaderInterface $jsonReader = new JsonWeatherReader()
    ) {
    }

    public function getXml(): string
    {
        $jsonData = $this->jsonReader->getJson();
        return $this->jsonToXml($jsonData);
    }

    private function jsonToXml(string $jsonData): string
    {
        return 'Преобразованные данные из Json в Xml';
    }
}
