<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Structured\Adapter\classes;

class TelegramSender
{
    public function sendMessage(string $message): void
    {
        echo 'Telegram sent: ' . $message . PHP_EOL;
    }
}