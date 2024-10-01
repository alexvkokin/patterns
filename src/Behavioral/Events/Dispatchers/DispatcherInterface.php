<?php
namespace Alexvkokin\Patterns\Behavioral\Events\Dispatchers;

use Alexvkokin\Patterns\Behavioral\Events\Events\Event;

interface DispatcherInterface
{
    public function dispatch(Event $event): void;
}