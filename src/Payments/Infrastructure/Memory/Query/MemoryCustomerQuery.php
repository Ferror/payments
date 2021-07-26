<?php
declare(strict_types=1);

namespace Ferror\Payments\Infrastructure\Memory\Query;

use Ferror\Payments\Application\Query\CustomerQuery;
use Ferror\Payments\Infrastructure\Memory\Memory;

final class MemoryCustomerQuery extends Memory implements CustomerQuery
{
    public function getAll(): array
    {
        return $this->memory;
    }
}
