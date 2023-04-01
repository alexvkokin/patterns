<?php

use Alexvkokin\Patterns\Events\BusinessLogic\StaffServices;
use Alexvkokin\Patterns\Events\Dispatchers\SimpleDispatch;
use Alexvkokin\Patterns\Events\Listeners\LogListener;
use Alexvkokin\Patterns\Events\Listeners\NotifyListener;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

require_once __DIR__ . "/../../vendor/autoload.php";

$logger = new Logger('main', [new StreamHandler('php://stdout')]);

$dispatcher = new SimpleDispatch(
    listeners: [
        \Alexvkokin\Patterns\Events\Events\CreateUserEvent::class => [
            new LogListener($logger),
            new NotifyListener(),
        ],
        \Alexvkokin\Patterns\Events\Events\UpdateUserEvent::class => [
            new LogListener($logger),
        ],
    ]
);
$staffServices = new StaffServices($dispatcher);
$staffServices->createUser();
$staffServices->updateUser();

