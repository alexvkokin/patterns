<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Classes;

/**
 * @psalm-immutalbe
 */
final class Request
{
    public function __construct(
        public readonly string $requestId,
        public readonly string $title,
    ) {
    }
}