<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Structured\Adapter\classes;

use Alexvkokin\Patterns\Structured\Adapter\interfaces\NotifyInterface;

final class EmailSender implements NotifyInterface
{
    public function send(string $message): void
    {
        echo 'Email sent: ' . $message . PHP_EOL;
    }
}