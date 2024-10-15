<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Classes;

use Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Interfaces\HandlerInterface;
use Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Interfaces\MiddlewareInterface;

final class Pipeline
{
    /**
     * @param HandlerInterface $handler
     * @param List<MiddlewareInterface> $middlewares
     */
    public function __construct(
        private readonly HandlerInterface $handler,
        private array $middlewares,
    ){
    }

    /**
     * Метод сначала обрабатывает все миддлвары по очереди.
     * Когда перебор закончен, запрос передается в хэндлер.
     *
     * @param Request $request
     * @return Response
     */
    public function handle(Request $request): Response
    {
        $middleware = array_shift($this->middlewares);
        if ($middleware !==  null) {
            return $middleware->handle($request, [$this, 'handle']);
        }

        return $this->handler->handle($request);
    }
}