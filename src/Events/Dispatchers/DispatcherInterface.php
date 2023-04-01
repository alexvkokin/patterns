<?php
namespace Alexvkokin\Patterns\Events\Dispatchers;

use Alexvkokin\Patterns\Events\Events\Event;

interface DispatcherInterface
{
    public function dispatch(Event $event): void;
}