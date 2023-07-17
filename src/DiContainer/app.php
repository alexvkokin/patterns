<?php
declare(strict_types=1);

use Alexvkokin\Patterns\DiContainer\Classes\BusinessLogicAutoWire;
use Alexvkokin\Patterns\DiContainer\Classes\BusinessLogicRegister;
use Alexvkokin\Patterns\DiContainer\Classes\BusinessLogicSingleton;
use Alexvkokin\Patterns\DiContainer\Container\GenericContainer;

require_once __DIR__ . '/../../vendor/autoload.php';

$container = new GenericContainer();

// register
$container->register(BusinessLogicRegister::class, fn () => new BusinessLogicRegister());

$businessLogicReg = $container->get(BusinessLogicRegister::class);
$businessLogicReg->doSomething();

// auto-wiring
$businessLogicAutoWire = $container->get(BusinessLogicAutoWire::class);
$businessLogicAutoWire->doSomething();

// singleton
$container->singleton(BusinessLogicSingleton::class, fn () => new BusinessLogicSingleton());
$businessLogicSingleton = $container->get(BusinessLogicSingleton::class);
$businessLogicSingletonSame = $container->get(BusinessLogicSingleton::class);
var_dump($businessLogicSingleton === $businessLogicSingletonSame);
