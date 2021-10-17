<?php
declare(strict_types=1);

namespace Ferror\Payments\Application\Query;

use Ferror\Payments\Application\View\PaymentView;
use Ferror\Payments\Domain\Customer\CustomerIdentifier;
use Ferror\Payments\Domain\Customer\Payment\PaymentIdentifier;

interface PaymentQuery
{
    public function getAll(): array;
    public function getAllByCustomer(CustomerIdentifier $customerIdentifier): array;
    public function get(PaymentIdentifier $paymentIdentifier): PaymentView;
    public function getByCustomer(CustomerIdentifier $customerIdentifier, PaymentIdentifier $paymentIdentifier): PaymentView;
}
