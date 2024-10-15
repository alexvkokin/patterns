<?php

declare(strict_types=1);


namespace Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Middlewares;

use Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Classes\Request;
use Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Classes\Response;
use Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Classes\Status;
use Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Interfaces\MiddlewareInterface;

final class Validation implements MiddlewareInterface
{

    public function handle(Request $request, callable $next): Response
    {
        if ($request->title === '') {
            return new Response(Status::BAD_REQUEST);
        }

        return $next($request);
    }
}