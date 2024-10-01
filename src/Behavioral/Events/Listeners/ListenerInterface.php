<?php

namespace Alexvkokin\Patterns\Behavioral\Events\Listeners;

use Alexvkokin\Patterns\Behavioral\Events\Events\Event;

interface ListenerInterface
{
    public function handle(Event $event): void;
}