<?php
namespace Alexvkokin\Patterns\Generics\Instruments;

final readonly class FlyingVGuitar implements IGuitar
{
    public function getName(): string
    {
        return 'Flying Guitar';
    }
}