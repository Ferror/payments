<?php
declare(strict_types=1);

namespace Ferror\Payments\Domain\Customer\Payment\Product;

final class ProductIdentifier
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function toString(): string
    {
        return $this->value;
    }
}
