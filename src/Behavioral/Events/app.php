<?php

use Alexvkokin\Patterns\Behavioral\Events\BusinessLogic\StaffServices;
use Alexvkokin\Patterns\Behavioral\Events\Dispatchers\SimpleDispatch;
use Alexvkokin\Patterns\Behavioral\Events\Events\CreateUserEvent;
use Alexvkokin\Patterns\Behavioral\Events\Events\UpdateUserEvent;
use Alexvkokin\Patterns\Behavioral\Events\Listeners\LogListener;
use Alexvkokin\Patterns\Behavioral\Events\Listeners\NotifyListener;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

require_once __DIR__ . "/../../../vendor/autoload.php";

$logger = new Logger('main', [new StreamHandler('php://stdout')]);

$dispatcher = new SimpleDispatch(
    listeners: [
        CreateUserEvent::class => [
            new LogListener($logger),
            new NotifyListener(),
        ],
        UpdateUserEvent::class => [
            new LogListener($logger),
        ],
    ]
);
$staffServices = new StaffServices($dispatcher);
$staffServices->createUser();
$staffServices->updateUser();

