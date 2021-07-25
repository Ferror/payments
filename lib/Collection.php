<?php
declare(strict_types=1);

final class Collection implements \Countable
{
    public function __construct(
        private array $collection = []
    )
    {
    }

    public function add($item): void
    {
        $this->collection[] = $item;
    }

    public function count(): int
    {
        return \count($this->collection);
    }
}
