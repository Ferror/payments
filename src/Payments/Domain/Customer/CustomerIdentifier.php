<?php
declare(strict_types=1);

namespace Ferror\Payments\Domain\Customer;

final class CustomerIdentifier
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
