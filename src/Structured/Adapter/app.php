<?php
declare(strict_types=1);

use Alexvkokin\Patterns\Structured\Adapter\classes\JsonToXmlAdapter;
use Alexvkokin\Patterns\Structured\Adapter\classes\XmlWeatherReader;

require_once __DIR__ . '/../../../vendor/autoload.php';

// Инициализируем объект (обычно с помощью DI)
$data = new XmlWeatherReader();

// Теперь если мы хотим получить данные из других источников используем адаптер
$data = new JsonToXmlAdapter();

// Выполнение логики
var_dump($data->getXml());