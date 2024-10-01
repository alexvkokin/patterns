<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Behavioral\Events\Dispatchers;

use Alexvkokin\Patterns\Behavioral\Events\Events\Event;

final class SimpleDispatch implements DispatcherInterface
{
    public function __construct(
        private readonly array $listeners,
    ) {
    }

    public function dispatch(Event $event): void
    {
        $eventName = get_class($event);
        foreach ($this->listeners[$eventName] ?? [] as $listener) {
            $listener->handle($event);
        }
    }
}