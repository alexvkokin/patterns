<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Structured\Facade;

final readonly class OrderService
{
    public function save(int $productId): void
    {
        echo "Order with " . $productId . " Products saved\n";
    }
}