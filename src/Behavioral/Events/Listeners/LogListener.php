<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Behavioral\Events\Listeners;

use Alexvkokin\Patterns\Behavioral\Events\Events\Event;
use Alexvkokin\Patterns\Behavioral\Events\Events\GetMessageEventInterface;
use Monolog\Logger;

readonly class LogListener implements ListenerInterface
{
    public function __construct(
        public Logger $logger,
    ) {
    }

    /**
     * @param GetMessageEventInterface $event
     */
    public function handle(Event $event): void
    {
        $this->logger->info('Log event ' . get_class($event) . ' ' . $event->getMessage());
    }
}