<?php
declare(strict_types=1);

namespace Ferror\Payments\Application\Repository;

use Ferror\Payments\Domain\Customer;
use Ferror\Payments\Domain\Customer\CustomerIdentifier;

interface CustomerRepository
{
    public function create(Customer $customer): void;
    public function delete(CustomerIdentifier $identifier): void;
    public function find(CustomerIdentifier $identifier): Customer;
}
