<?php

declare(strict_types=1);


namespace Alexvkokin\Patterns\Middleware\Middlewares;

use Alexvkokin\Patterns\Middleware\Classes\Request;
use Alexvkokin\Patterns\Middleware\Classes\Response;
use Alexvkokin\Patterns\Middleware\Classes\Status;
use Alexvkokin\Patterns\Middleware\Interfaces\MiddlewareInterface;

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