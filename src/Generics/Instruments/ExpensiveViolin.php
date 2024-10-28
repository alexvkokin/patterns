<?php
namespace Alexvkokin\Patterns\Generics\Instruments;

final readonly class ExpensiveViolin implements IViolin
{
    public function getName(): string
    {
        return 'Expensive violin';
    }
}