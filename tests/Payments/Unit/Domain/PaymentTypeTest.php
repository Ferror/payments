<?php
declare(strict_types=1);

namespace Ferror\Payments\Unit\Domain;

use Ferror\Payments\Domain\PaymentType;
use PHPUnit\Framework\TestCase;

final class PaymentTypeTest extends TestCase
{
    public function testConst(): void
    {
        self::assertEquals('RECURRING', PaymentType::RECURRING);
    }

    public function testItEquals(): void
    {
        self::assertTrue(PaymentType::oneTime()->equals(PaymentType::oneTime()));
        self::assertFalse(PaymentType::recurring()->equals(PaymentType::oneTime()));
    }
}
