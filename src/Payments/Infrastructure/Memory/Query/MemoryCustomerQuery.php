<?php
declare(strict_types=1);

namespace Ferror\Payments\Infrastructure\Memory\Query;

use Ferror\Payments\Application\Query\CustomerQuery;
use Ferror\Payments\Application\View\CustomerView;
use Ferror\Payments\Domain\Customer\CustomerIdentifier;
use Ferror\Payments\Infrastructure\Memory\Memory;
use Ferror\Payments\Infrastructure\Memory\MemoryException;

final class MemoryCustomerQuery extends Memory implements CustomerQuery
{
    public function getAll(): array
    {
        return $this->memory;
    }

    public function get(CustomerIdentifier $identifier): CustomerView
    {
        if (isset($this->memory[$identifier->toString()])) {
            return $this->memory[$identifier->toString()];
        }

        throw new MemoryException('Customer not found for id: ' . $identifier->toString());
    }
}
