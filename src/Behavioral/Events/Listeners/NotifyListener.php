<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Behavioral\Events\Listeners;

use Alexvkokin\Patterns\Behavioral\Events\Events\Event;

final class NotifyListener implements ListenerInterface
{
    public function handle(Event $event): void
    {
        var_dump('Send Email event ' . $event->getMessage());
    }
}