<?php
declare(strict_types=1);

namespace Ferror\Payments\Domain\Customer;

use Ferror\Payments\Domain\Customer\Payment\PaymentIdentifier;
use Ferror\Payments\Domain\Customer\Payment\PaymentStatus;
use Ferror\Payments\Domain\Customer\Payment\PaymentType;

final class Payment
{
    public function __construct(
        private PaymentIdentifier $identifier,
        private CustomerIdentifier $customerIdentifier,
        private PaymentType $type,
        private PaymentStatus $status,
        private \Collection $products,
        private int $createdAt,
    )
    {
    }

    public function changeStatus(PaymentStatus $status): void
    {
        $this->status = $status;
    }

    public function getIdentifier(): PaymentIdentifier
    {
        return $this->identifier;
    }
}
