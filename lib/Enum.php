<?php
declare(strict_types=1);

abstract class Enum
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function toString(): string
    {
        return (string) $this->value;
    }

    public function __toString(): string
    {
        return $this->toString();
    }

    public function equals(self $type): bool
    {
        return $this->value === $type->value;
    }
}
