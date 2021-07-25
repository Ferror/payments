<?php
declare(strict_types=1);

namespace Ferror\Payments\Domain\Customer\Payment\Product;

use Ferror\SharedKernel\Currency;
use Ferror\SharedKernel\Money;

final class ProductPrice
{
    public function __construct(
        private Money $money,
        private Currency $currency
    )
    {
    }
}
