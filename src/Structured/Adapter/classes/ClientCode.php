<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Structured\Adapter\classes;

use Alexvkokin\Patterns\Structured\Adapter\interfaces\NotifyInterface;

final readonly class ClientCode
{
    public function __construct(
        private NotifyInterface $notify,
    ) {
    }

    public function run(string $message): void
    {
        $this->notify->send($message);
    }
}