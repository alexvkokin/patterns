<?php
declare(strict_types=1);


namespace Alexvkokin\Patterns\Events\Events;

final class UpdateUserEvent extends Event implements GetMessageEventInterface
{
    public function getMessage(): string
    {
        return 'User updated';
    }
}