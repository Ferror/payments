<?php
declare(strict_types=1);

namespace Ferror\Payments\Application\Action;

use Ferror\Payments\Application\Repository\CustomerRepository;
use Ferror\Payments\Domain\Customer;
use Ferror\Payments\Domain\Customer\CustomerIdentifier;

final class CreateCustomer
{
    public function __construct(
        private CustomerRepository $customerRepository,
    ) {
    }

    public function execute(): Customer
    {
        $customer = new Customer(
            new CustomerIdentifier(\base64_encode(\random_bytes(16))),
            new \Collection(),
            new \Collection(),
            new \Collection(),
            new \Collection(),
        );
        $this->customerRepository->create($customer);

        return $customer;
    }
}
