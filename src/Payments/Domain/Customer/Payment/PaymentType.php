<?php
declare(strict_types=1);

namespace Ferror\Payments\Domain\Customer\Payment;

final class PaymentType extends \Enum
{
    public const RECURRING = 'RECURRING';
    public const ONE_TIME = 'ONE_TIME';

    public static function recurring(): PaymentType
    {
        return new self(self::RECURRING);
    }

    public static function oneTime(): PaymentType
    {
        return new self(self::ONE_TIME);
    }
}
