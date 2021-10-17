<?php
declare(strict_types=1);

namespace Ferror\Payments\Infrastructure\Memory\Repository;

use Ferror\Payments\Application\Repository\PaymentRepository;
use Ferror\Payments\Domain\Customer\CustomerIdentifier;
use Ferror\Payments\Domain\Customer\Payment;
use Ferror\Payments\Domain\Customer\Payment\PaymentIdentifier;
use Ferror\Payments\Domain\Customer\Payment\PaymentStatus;
use Ferror\Payments\Infrastructure\Memory\Memory;

final class MemoryPaymentRepository extends Memory implements PaymentRepository
{
    public function create(Payment $payment): void
    {
    }

    public function delete(PaymentIdentifier $paymentIdentifier): void
    {
    }

    public function find(PaymentIdentifier $paymentIdentifier): Payment
    {
        return new Payment(
            new PaymentIdentifier(\base64_encode(\random_bytes(16))),
            new CustomerIdentifier(\base64_encode(\random_bytes(16))),
            Payment\PaymentType::oneTime(),
            PaymentStatus::created(),
            new \Collection(),
            time(),
        );
    }
}
