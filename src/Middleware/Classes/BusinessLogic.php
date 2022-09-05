<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Middleware\Classes;

use Alexvkokin\Patterns\Middleware\Interfaces\HandlerInterface;

class BusinessLogic implements HandlerInterface
{
    public function handle(Request $request): Response
    {
        usleep(100);

        return new Response(Status::OK);
    }
}