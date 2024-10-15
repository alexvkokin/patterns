<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Middlewares;

use Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Classes\Request;
use Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Classes\Response;
use Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Interfaces\MiddlewareInterface;
use Psr\Log\LoggerInterface;

final class Logging implements MiddlewareInterface
{
    public function __construct(
        private readonly LoggerInterface $logger,
    ) {
    }

    public function handle(Request $request, callable $next): Response
    {
        $this->logger->info('Request.', [
            'requestId' => $request->requestId,
            'request' => $request,
        ]);

        $response = $next($request);

        $this->logger->info('Application responded.', [
            'requestId' => $request->requestId,
            'response' => $response,
        ]);

        return $response;
    }
}