<?php

use Alexvkokin\Patterns\Behavioral\Middleware\ChainOfResponsibility\Middleware\RoleCheckMiddleware;
use Alexvkokin\Patterns\Behavioral\Middleware\ChainOfResponsibility\Middleware\ThrottlingMiddleware;
use Alexvkokin\Patterns\Behavioral\Middleware\ChainOfResponsibility\Middleware\UserExistsMiddleware;
use Alexvkokin\Patterns\Behavioral\Middleware\ChainOfResponsibility\Server;

require_once __DIR__ . '/../../../../vendor/autoload.php';

/**
 * Клиентский код.
 */
$server = new Server();
$server->register("admin@example.com", "admin_pass");
$server->register("user@example.com", "user_pass");

// Все middleware соединены в цепочки. Клиент может построить различные
// конфигурации цепочек в зависимости от своих потребностей.
$middleware = new ThrottlingMiddleware(2);
$middleware
    ->linkWith(new UserExistsMiddleware($server))
    ->linkWith(new RoleCheckMiddleware());

// Сервер получает цепочку из клиентского кода.
$server->setMiddleware($middleware);

// ...

do {
    $email = "admin@example.com";
    $password = "admin_pass";
    $success = $server->logIn($email, $password);
} while (!$success);
