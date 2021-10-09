<?php
declare(strict_types=1);

namespace Ferror\SharedKernel;

interface Aggregate
{
    public function toAggregate(): array;
}
