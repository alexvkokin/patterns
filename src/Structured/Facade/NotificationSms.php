<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Structured\Facade;

class NotificationSms
{
    public function send(string $message): void
    {
        echo "Notification Sms: " . $message . "\n";
    }
}