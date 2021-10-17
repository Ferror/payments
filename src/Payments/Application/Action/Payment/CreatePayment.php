<?php
declare(strict_types=1);

namespace Ferror\Payments\Application\Action\Payment;

use Ferror\Payments\Application\Repository\PaymentRepository;
use Ferror\Payments\Domain\Customer\CustomerIdentifier;
use Ferror\Payments\Domain\Customer\Payment;
use Ferror\Payments\Domain\Customer\Payment\PaymentIdentifier;
use Ferror\Payments\Domain\Customer\Payment\PaymentStatus;

final class CreatePayment
{
    public function __construct(
        private PaymentRepository $paymentRepository
    ) {
    }

    public function execute(CustomerIdentifier $customerIdentifier): Payment
    {
        $payment = new Payment(
            new PaymentIdentifier(\base64_encode(\random_bytes(16))),
            $customerIdentifier,
            Payment\PaymentType::oneTime(),
            PaymentStatus::created(),
            new \Collection(),
            time(),
        );
        $this->paymentRepository->create($payment);

        return $payment;
    }
}
