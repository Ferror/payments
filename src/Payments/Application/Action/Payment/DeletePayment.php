<?php
declare(strict_types=1);

namespace Ferror\Payments\Application\Action\Payment;

use Ferror\Payments\Application\Repository\PaymentRepository;
use Ferror\Payments\Domain\Customer\CustomerIdentifier;
use Ferror\Payments\Domain\Customer\Payment\PaymentIdentifier;

final class DeletePayment
{
    public function __construct(
        private PaymentRepository $paymentRepository
    ) {
    }

    public function execute(
        CustomerIdentifier $customerIdentifier,
        PaymentIdentifier $paymentIdentifier,
    ): void
    {
        $this->paymentRepository->delete($paymentIdentifier);
    }
}
