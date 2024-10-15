<?php

namespace Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Interfaces;

use Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Classes\Request;
use Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Classes\Response;

interface MiddlewareInterface
{
    /**
     * @param Request $request
     * @param callable(Request): Response $next
     * @return Response
     */
    public function handle(Request $request, callable $next): Response;
}