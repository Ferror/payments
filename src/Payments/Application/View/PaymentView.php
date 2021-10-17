<?php
declare(strict_types=1);

namespace Ferror\Payments\Application\View;

use JsonSerializable;

final class PaymentView implements JsonSerializable
{
    public function __construct(
        private string $identifier,
    ) {
    }

    public function jsonSerialize(): array
    {
        return [
            'identifier' => $this->identifier,
        ];
    }
}
