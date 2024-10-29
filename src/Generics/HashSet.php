<?php
namespace Alexvkokin\Patterns\Generics;

/**
 * @template TKey of array-key
 * @template T
 */
class HashSet
{
    /**
     * @var array<TKey, T>
     */
    private array $values = [];


    /**
     * @param TKey $key
     * @param T $value
     */
    public function set($key, $value): void
    {
        $this->values[$key] = $value;
    }

    /**
     * @param TKey $key
     * @return T|null
     */
    public function get($key)
    {
        return $this->values[$key] ?? null;
    }
}