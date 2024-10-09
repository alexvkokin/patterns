<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Structured\Facade;

final readonly class OrderFacade
{
    public function __construct(
        private OrderService $order = new OrderService(),
        private NotificationEmail $notificationEmail = new NotificationEmail(),
        private NotificationSms $notificationSms = new NotificationSms()
    )
    {
    }

    public function save(): void
    {
        // Используем логику объектов, ничего от себя не добавляем

        $productId = 123;

        $this->order->save($productId);

        $this->notificationEmail->send("Order with " . $productId . " Products saved");
        $this->notificationSms->send("Order with " . $productId . " Products saved");
    }
}