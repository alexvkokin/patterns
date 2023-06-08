<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Structured\Adapter\classes;

use Alexvkokin\Patterns\Structured\Adapter\interfaces\NotifyInterface;

final readonly class TelegramSenderAdapter implements NotifyInterface
{
    public function __construct(
        private TelegramSender $telegramSender,
    ) {
    }

    public function send(string $message): void
    {
        $this->telegramSender->sendMessage($message);
    }
}