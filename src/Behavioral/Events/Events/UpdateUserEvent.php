<?php
declare(strict_types=1);


namespace Alexvkokin\Patterns\Behavioral\Events\Events;

final class UpdateUserEvent extends Event implements GetMessageEventInterface
{
    public function getMessage(): string
    {
        return 'User updated';
    }
}