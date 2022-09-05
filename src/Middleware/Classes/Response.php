<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Middleware\Classes;

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