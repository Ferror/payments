<?php
declare(strict_types=1);

namespace Ferror\Payments\Domain;

final class PaymentType
{
    public const RECURRING = 'RECURRING';
    public const ONE_TIME = 'ONE_TIME';
    private string $value;

    public static function recurring(): PaymentType
    {
        return new self(self::RECURRING);
    }

    public static function oneTime(): PaymentType
    {
        return new self(self::ONE_TIME);
    }

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function equals(self $type): bool
    {
        return $this->value === $type->value;
    }
}
