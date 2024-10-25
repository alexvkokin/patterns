<?php

namespace Alexvkokin\Patterns\Generics;

/**
 * @template T
 */
class Collection
{
    /**
     * @var T[]
     */
    private array $items = [];

    /**
     * @param T $item
     */
    public function add($item): void
    {
        $this->items[] = $item;
    }

    /**
     * @return T[]
     */
    public function all(): array
    {
        return $this->items;
    }
}