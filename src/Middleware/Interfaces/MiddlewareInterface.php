<?php

namespace Alexvkokin\Patterns\Middleware\Interfaces;

use Alexvkokin\Patterns\Middleware\Classes\Request;
use Alexvkokin\Patterns\Middleware\Classes\Response;

interface MiddlewareInterface
{
    /**
     * @param Request $request
     * @param callable(Request): Response $next
     * @return Response
     */
    public function handle(Request $request, callable $next): Response;
}