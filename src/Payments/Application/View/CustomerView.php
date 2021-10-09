<?php
declare(strict_types=1);

namespace Ferror\Payments\Application\View;

use JsonSerializable;

final class CustomerView implements JsonSerializable
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

    public function jsonSerialize(): array
    {
        return [
            'identifier' => $this->identifier,
        ];
    }
}
