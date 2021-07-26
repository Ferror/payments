<?php
declare(strict_types=1);

namespace Ferror\Payments\Domain\Customer\Payment;

final class PaymentStatus extends \Enum
{
    public const CREATED = 'CREATED';
    public const PROCESSING = 'PROCESSING';
    public const CANCELED = 'CANCELED';
    public const SUCCESS = 'SUCCESS';
    public const FAILED = 'FAILED';

    public static function created(): self
    {
        return new self(self::CREATED);
    }

    public static function failed(): self
    {
        return new self(self::FAILED);
    }

    public static function processing(): self
    {
        return new self(self::PROCESSING);
    }

    public static function canceled(): self
    {
        return new self(self::CANCELED);
    }

    public static function success(): self
    {
        return new self(self::SUCCESS);
    }
}
