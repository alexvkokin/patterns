<?php
declare(strict_types=1);


use Alexvkokin\Patterns\Structured\Adapter\classes\ClientCode;
use Alexvkokin\Patterns\Structured\Adapter\classes\EmailSender;
use Alexvkokin\Patterns\Structured\Adapter\classes\TelegramSender;
use Alexvkokin\Patterns\Structured\Adapter\classes\TelegramSenderAdapter;

require_once __DIR__ . '/../../../vendor/autoload.php';

$clientCode = new ClientCode(new EmailSender());
$clientCode->run('Hello world!');

$clientCode = new ClientCode(new TelegramSenderAdapter(new TelegramSender()));
$clientCode->run('Hello world! 2');