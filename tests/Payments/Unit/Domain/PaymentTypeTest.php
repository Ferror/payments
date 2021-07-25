<?php
declare(strict_types=1);

namespace Ferror\Payments\Unit\Domain;

use Ferror\Payments\Domain\Customer\Payment\PaymentType;
use PHPUnit\Framework\TestCase;

final class PaymentTypeTest extends TestCase
{
    public function testConst(): void
    {
        self::assertEquals('RECURRING', PaymentType::RECURRING);
        self::assertEquals('ONE_TIME', PaymentType::ONE_TIME);
    }

    public function testItEquals(): void
    {
        self::assertTrue(PaymentType::oneTime()->equals(PaymentType::oneTime()));
        self::assertTrue(PaymentType::recurring()->equals(PaymentType::recurring()));
        self::assertFalse(PaymentType::recurring()->equals(PaymentType::oneTime()));
        self::assertFalse(PaymentType::oneTime()->equals(PaymentType::recurring()));
    }
}
