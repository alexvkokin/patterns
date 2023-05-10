<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Structured\Facade;

class OrderFacade
{
    public function save(): void
    {
        // Инициализация объектов прямо в фасаде.
        // Используем логику объектов, ничего от себя не добавляем

        $productId = "123";

        (new Order($productId))->save();

        (new NotificationEmail())->send("Order with " . $productId . " Products saved");
        (new NotificationSms())->send("Order with " . $productId . " Products saved");
    }
}