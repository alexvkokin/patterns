<?php

namespace Alexvkokin\Patterns\Events\Events;

interface GetMessageEventInterface
{
    public function getMessage(): string;
}