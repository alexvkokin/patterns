<?php

namespace Alexvkokin\Patterns\Behavioral\Events\Events;

interface GetMessageEventInterface extends Event
{
    public function getMessage(): string;
}