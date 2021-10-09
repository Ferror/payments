<?php
declare(strict_types=1);

namespace Ferror\Payments\Presentation\Web\Customer;

use Ferror\Payments\Application\Query\CustomerQuery;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class ReadAllCustomerController
{
    public function __construct(
        private CustomerQuery $customerQuery,
    ) {
    }

    #[Route(path: '/customers', name: "CUSTOMER_ALL_GET", methods: ['GET'])]
    public function __invoke(): JsonResponse
    {
        return new JsonResponse($this->customerQuery->getAll(), 200);
    }
}
