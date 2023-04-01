<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Events\Listeners;

use Alexvkokin\Patterns\Events\Events\Event;
use Monolog\Logger;

class LogListener implements ListenerInterface
{
    public function __construct(
        public readonly Logger $logger,
    ) {
    }

    public function handle(Event $event): void
    {
        $this->logger->info('Log event ' . get_class($event) . ' ' . $event->getMessage());
    }
}