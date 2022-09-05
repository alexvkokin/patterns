<?php

declare(strict_types=1);

namespace Alexvkokin\Patterns\Middleware\Classes;

use Alexvkokin\Patterns\Middleware\Interfaces\HandlerInterface;

final class Application
{
    public function __construct(
        public readonly HandlerInterface $handler,
    ) {
    }

    public function handle(Request $request): Response
    {
        return $this->handler->handle($request);
    }
}