<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Structured\Decorator;

class OrderCreate implements OrderInterface
{
    public function save(): void
    {
        echo 'Order created' . PHP_EOL;
    }
}