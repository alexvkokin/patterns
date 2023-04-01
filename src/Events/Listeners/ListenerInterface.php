<?php

namespace Alexvkokin\Patterns\Events\Listeners;

use Alexvkokin\Patterns\Events\Events\Event;

interface ListenerInterface
{
    public function handle(Event $event): void;
}