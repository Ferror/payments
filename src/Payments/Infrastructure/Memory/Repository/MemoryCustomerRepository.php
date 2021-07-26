<?php
declare(strict_types=1);

namespace Ferror\Payments\Infrastructure\Memory\Repository;

use Ferror\Payments\Application\Repository\CustomerRepository;
use Ferror\Payments\Domain\Customer;
use Ferror\Payments\Domain\Customer\CustomerIdentifier;
use Ferror\Payments\Infrastructure\Memory\Memory;

final class MemoryCustomerRepository extends Memory implements CustomerRepository
{
    public function find(CustomerIdentifier $identifier): Customer
    {
        return $this->memory[$identifier->toString()];
    }

    public function delete(CustomerIdentifier $identifier): void
    {
        unset($this->memory[$identifier->toString()]);
    }

    public function create(Customer $customer): void
    {
        var_dump($this->memory);
        $this->memory[$customer->getIdentifier()->toString()] = $customer;
    }
}
