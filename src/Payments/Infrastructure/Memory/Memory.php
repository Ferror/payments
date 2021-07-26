<?php
declare(strict_types=1);

namespace Ferror\Payments\Infrastructure\Memory;

class Memory
{
    protected array $memory;

    public function __construct(array $memory = [])
    {
        $this->memory = $memory;
    }
}
