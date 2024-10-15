<?php
namespace Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Interfaces;

use Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Classes\Request;
use Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Classes\Response;

interface HandlerInterface
{
    public function handle(Request $request): Response;
}