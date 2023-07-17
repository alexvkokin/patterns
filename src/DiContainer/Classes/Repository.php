<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\DiContainer\Classes;

final class Repository
{
    public function getUserName(): string
    {
        return 'John Doe';
    }
}