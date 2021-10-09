<?php
declare(strict_types=1);

namespace Ferror\Payments\Presentation\Web\Customer;

use Ferror\Payments\Application\Action\CreateCustomer;
use Ferror\Payments\Application\Query\CustomerQuery;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class CreateCustomerController
{
    public function __construct(
        private CreateCustomer $action,
        private CustomerQuery $query,
    ) {
    }

    #[Route(path: '/customers', name: 'CUSTOMER_CREATE', methods: ['POST'])]
    public function __invoke(): JsonResponse
    {
        $customer = $this->query->get(
            $this->action->execute()->getIdentifier()
        );

        return new JsonResponse($customer, 200);
    }
}
