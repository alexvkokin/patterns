<?php

use Alexvkokin\Patterns\Middleware\Classes\Application;
use Alexvkokin\Patterns\Middleware\Classes\BusinessLogic;
use Alexvkokin\Patterns\Middleware\Classes\Request;
use Alexvkokin\Patterns\Middleware\Middlewares\Logging;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

require_once __DIR__ . "/../../vendor/autoload.php";

$logger = new Logger('main', [new StreamHandler('php://stdout')]);

$application = new Application(
    handler: new BusinessLogic(),
    middleware: [
        new Logging($logger),
    ]
);

$request = new Request(uniqid());
$response = $application->handle($request);
var_dump($response);

