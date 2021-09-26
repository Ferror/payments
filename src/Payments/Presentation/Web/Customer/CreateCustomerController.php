<?php
declare(strict_types=1);

namespace Ferror\Payments\Presentation\Web\Customer;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class CreateCustomerController
{
    #[Route(path: '/customers', name: 'CUSTOMER_CREATE', methods: ['POST'])]
    public function __invoke(): JsonResponse
    {
        return new JsonResponse([], 200);
    }
}
