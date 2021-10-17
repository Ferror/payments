<?php
declare(strict_types=1);

namespace Ferror\Payments\Presentation\Web\Customer\Payment;

use Ferror\Payments\Application\Query\PaymentQuery;
use Ferror\Payments\Domain\Customer\CustomerIdentifier;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class ReadAllPaymentController
{
    public function __construct(
        private PaymentQuery $paymentQuery
    ) {
    }

    #[Route(path: '/customers/{customer}/payments', name: 'CUSTOMER_PAYMENTS_ALL_GET', methods: ['GET'])]
    public function __invoke(string $customer): JsonResponse
    {
        return new JsonResponse($this->paymentQuery->getAllByCustomer(new CustomerIdentifier($customer)), 200);
    }
}
