<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Behavioral\Events\Listeners;

use Alexvkokin\Patterns\Behavioral\Events\Events\Event;
use Alexvkokin\Patterns\Behavioral\Events\Events\GetMessageEventInterface;

final class NotifyListener implements ListenerInterface
{
    /**
     * @param GetMessageEventInterface $event
     */
    public function handle(Event $event): void
    {
        var_dump('Send Email event ' . $event->getMessage());
    }
}