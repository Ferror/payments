<?php
declare(strict_types=1);

namespace Ferror\Payments\Presentation\Web\Customer;

use Ferror\Payments\Application\Query\CustomerQuery;
use Ferror\Payments\Domain\Customer\CustomerIdentifier;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class ReadCustomerController
{
    public function __construct(
        private CustomerQuery $customerQuery,
    ) {
    }

    #[Route(path: '/customers/{identifier}', name: 'CUSTOMER_GET', methods: ['GET'])]
    public function __invoke(string $identifier): JsonResponse
    {
        return new JsonResponse($this->customerQuery->get(new CustomerIdentifier($identifier)), 200);
    }
}
