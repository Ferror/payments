<?php
declare(strict_types=1);

namespace Ferror\Payments\Domain\Customer;

final class PaymentMethod extends \Enum
{
    public const MANUAL = 'MANUAL';
    public const CREDIT_CARD = 'CREDIT_CARD';
}
