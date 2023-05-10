<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Structured\Facade;

class NotificationEmail
{
    public function send(string $message): void
    {
        echo "Notification Email: " . $message . "\n";
    }
}