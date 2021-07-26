<?php
declare(strict_types=1);

namespace Ferror\Payments\Application\View;

final class CustomerView
{
    public function __construct(
        private string $identifier,
    )
    {
    }

    public function getIdentifier(): string
    {
        return $this->identifier;
    }
}
