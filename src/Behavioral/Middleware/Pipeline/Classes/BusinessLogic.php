<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Classes;

use Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Interfaces\HandlerInterface;

class BusinessLogic implements HandlerInterface
{
    public function handle(Request $request): Response
    {
        usleep(100);

        return new Response(Status::OK);
    }
}