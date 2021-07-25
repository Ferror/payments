<?php
declare(strict_types=1);

namespace Ferror\Payments\Domain\Customer\Payment;

use Ferror\Payments\Domain\CustomerPayment\Product\ProductIdentifier;
use Ferror\Payments\Domain\CustomerPayment\Product\ProductPrice;

final class Product
{
    public function __construct(
        private ProductIdentifier $identifier,
        private ProductPrice $price,
    )
    {
    }
}
