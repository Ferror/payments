<?php
declare(strict_types=1);

namespace Ferror\Payments\Application\Query;

use Ferror\Payments\Application\View\CustomerView;
use Ferror\Payments\Domain\Customer\CustomerIdentifier;

interface CustomerQuery
{
    /**
     * @return \Ferror\Payments\Application\View\CustomerView[]
     */
    public function getAll(): array;
    public function get(CustomerIdentifier $identifier): CustomerView;
}
