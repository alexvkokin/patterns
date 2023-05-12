<?php

use Alexvkokin\Patterns\Creational\Singleton\Singleton;

require_once __DIR__ . '/../../../vendor/autoload.php';

$singleton = Singleton::getInstance();
var_dump($singleton);
$singleton = Singleton::getInstance();
var_dump($singleton);
$singleton = Singleton::getInstance();
var_dump($singleton);
