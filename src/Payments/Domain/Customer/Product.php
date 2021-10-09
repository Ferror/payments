<?php
declare(strict_types=1);

namespace Ferror\Payments\Domain\Customer;

use Ferror\Payments\Domain\Customer\Product\ProductIdentifier;
use Ferror\Payments\Domain\Customer\Product\ProductPrice;
use Ferror\Payments\Domain\Customer\Product\ProductTax;

final class Product
{
    public function __construct(
        private ProductIdentifier $identifier,
        private ProductPrice $price,
        private ProductTax $tax,
    )
    {
    }
}
