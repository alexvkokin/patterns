<?php

declare(strict_types=1);

namespace Alexvkokin\Patterns\Middleware\Classes;

use Alexvkokin\Patterns\Middleware\Interfaces\HandlerInterface;
use Alexvkokin\Patterns\Middleware\Interfaces\MiddlewareInterface;

final class Application
{
    /**
     * @param HandlerInterface $handler
     * @param List<MiddlewareInterface> $middleware
     */
    public function __construct(
        private readonly HandlerInterface $handler,
        private readonly array $middleware,
    ) {
    }

    public function handle(Request $request): Response
    {
        return (new Pipeline($this->handler, $this->middleware))->handle($request);
    }
}