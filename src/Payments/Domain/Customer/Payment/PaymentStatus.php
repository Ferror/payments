<?php
declare(strict_types=1);

namespace Ferror\Payments\Domain\Customer\Payment;

final class PaymentStatus extends \Enum
{
    public const CREATED = 'CREATED';
    public const SUCCESS = 'SUCCESS';
    public const FAILED = 'FAILED';
    public const PROCESSING = 'PROCESSING';
}
