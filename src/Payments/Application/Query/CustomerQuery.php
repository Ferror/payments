<?php
declare(strict_types=1);

namespace Ferror\Payments\Application\Query;

interface CustomerQuery
{
    /**
     * @return \Ferror\Payments\Application\View\CustomerView[]
     */
    public function getAll(): array;
}
