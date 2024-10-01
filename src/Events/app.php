<?php

use Alexvkokin\Patterns\Events\BusinessLogic\StaffServices;
use Alexvkokin\Patterns\Events\Dispatchers\SimpleDispatch;
use Alexvkokin\Patterns\Events\Events\CreateUserEvent;
use Alexvkokin\Patterns\Events\Events\UpdateUserEvent;
use Alexvkokin\Patterns\Events\Listeners\LogListener;
use Alexvkokin\Patterns\Events\Listeners\NotifyListener;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

require_once __DIR__ . "/../../vendor/autoload.php";

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

