<?php
declare(strict_types=1);

namespace Ferror\Payments\Infrastructure\Memory\Query;

use Ferror\Payments\Application\Query\PaymentQuery;
use Ferror\Payments\Application\View\PaymentView;
use Ferror\Payments\Domain\Customer\CustomerIdentifier;
use Ferror\Payments\Domain\Customer\Payment\PaymentIdentifier;
use Ferror\Payments\Infrastructure\Memory\Memory;

final class MemoryPaymentQuery extends Memory implements PaymentQuery
{
    public function getAll(): array
    {
        return [];
    }

    public function getAllByCustomer(CustomerIdentifier $customerIdentifier): array
    {
        return [];
    }

    public function get(PaymentIdentifier $paymentIdentifier): PaymentView
    {
        return new PaymentView(\base64_encode(\random_bytes(16)));
    }

    public function getByCustomer(CustomerIdentifier $customerIdentifier, PaymentIdentifier $paymentIdentifier): PaymentView
    {
        return new PaymentView(\base64_encode(\random_bytes(16)));
    }
}
