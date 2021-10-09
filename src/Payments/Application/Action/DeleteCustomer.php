<?php
declare(strict_types=1);

namespace Ferror\Payments\Application\Action;

use Ferror\Payments\Application\Repository\CustomerRepository;
use Ferror\Payments\Domain\Customer\CustomerIdentifier;

final class DeleteCustomer
{
    public function __construct(
        private CustomerRepository $customerRepository,
    ) {
    }

    public function execute(CustomerIdentifier $customerIdentifier): void
    {
        $this->customerRepository->delete($customerIdentifier);
    }
}
