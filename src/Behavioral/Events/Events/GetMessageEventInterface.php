<?php

namespace Alexvkokin\Patterns\Behavioral\Events\Events;

interface GetMessageEventInterface
{
    public function getMessage(): string;
}