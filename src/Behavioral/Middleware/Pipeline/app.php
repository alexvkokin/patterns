<?php

use Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Classes\Application;
use Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Classes\BusinessLogic;
use Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Classes\Request;
use Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Middlewares\Logging;
use Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Middlewares\Validation;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

require_once __DIR__ . "/../../../../vendor/autoload.php";

$logger = new Logger('main', [new StreamHandler('php://stdout')]);

$application = new Application(
    handler: new BusinessLogic(),
    middleware: [
        new Logging($logger),
        new Validation(),
    ]
);

$request = new Request(uniqid(), 'hello');
$response = $application->handle($request);

