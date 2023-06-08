<?php

namespace Alexvkokin\Patterns\Structured\Adapter\interfaces;
interface NotifyInterface
{
    public function send(string $message): void;
}