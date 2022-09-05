<?php

use Alexvkokin\Patterns\Middleware\Classes\Application;
use Alexvkokin\Patterns\Middleware\Classes\BusinessLogic;
use Alexvkokin\Patterns\Middleware\Classes\Request;

require_once __DIR__ . "/../../vendor/autoload.php";

$application = new Application(
    handler: new BusinessLogic(),
);

$request = new Request(uniqid());
$response = $application->handle($request);
var_dump($response);

