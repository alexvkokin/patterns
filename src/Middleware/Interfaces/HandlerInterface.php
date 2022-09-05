<?php
namespace Alexvkokin\Patterns\Middleware\Interfaces;

use Alexvkokin\Patterns\Middleware\Classes\Request;
use Alexvkokin\Patterns\Middleware\Classes\Response;

interface HandlerInterface
{
    public function handle(Request $request): Response;
}