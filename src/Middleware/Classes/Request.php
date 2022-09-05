<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Middleware\Classes;

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