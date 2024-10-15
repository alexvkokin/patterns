<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Behavioral\Middleware\Pipeline\Classes;

/**
 * @psalm-immutable
 */
final class Response
{
    public function __construct(
        public readonly Status $status,
    ) {
    }
}