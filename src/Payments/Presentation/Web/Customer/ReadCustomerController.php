<?php
declare(strict_types=1);

namespace Ferror\Payments\Presentation\Web\Customer;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class ReadCustomerController
{
    #[Route(path: '/customers', name: "CUSTOMER_GET", methods: ['GET'])]
    public function __invoke(): JsonResponse
    {
        return new JsonResponse([], 200);
    }
}
