<?php
declare(strict_types=1);

namespace Ferror\Payments\Application\Repository;

use Ferror\Payments\Domain\Customer\Payment;
use Ferror\Payments\Domain\Customer\Payment\PaymentIdentifier;

interface PaymentRepository
{
    public function create(Payment $payment): void;
    public function delete(PaymentIdentifier $paymentIdentifier): void;
    public function find(PaymentIdentifier $paymentIdentifier): Payment;
}
