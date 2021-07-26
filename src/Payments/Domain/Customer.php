<?php
declare(strict_types=1);

namespace Ferror\Payments\Domain;

use Ferror\Payments\Domain\Customer\CustomerIdentifier;

final class Customer
{
    public function __construct(
        private CustomerIdentifier $identifier,
        private \Collection $payments,
        private \Collection $paymentMethods,
        private \Collection $billingAddresses,
    )
    {
    }

    public function getIdentifier(): CustomerIdentifier
    {
        return $this->identifier;
    }
}
