<?php
declare(strict_types=1);

namespace Alexvkokin\Patterns\Structured\Decorator;

readonly class OrderDecorator implements OrderInterface
{
    public function __construct(
        public OrderInterface $order
    ) {
    }

    public function save(): void
    {
        $this->actionBefore();

        $this->order->save();

        $this->actionAfter();
    }

    private function actionBefore()
    {
    }

    private function actionAfter()
    {
    }
}