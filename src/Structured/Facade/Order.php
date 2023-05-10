<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Structured\Facade;

readonly class Order
{
    public function __construct(
        public string $productId,
    ) {
    }

    public function save(): void
    {
        echo "Order with " . $this->productId . " Products saved\n";
    }
}