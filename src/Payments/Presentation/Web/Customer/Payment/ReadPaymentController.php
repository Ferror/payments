<?php
declare(strict_types=1);

namespace Ferror\Payments\Presentation\Web\Customer\Payment;

use Ferror\Payments\Application\Query\PaymentQuery;
use Ferror\Payments\Domain\Customer\CustomerIdentifier;
use Ferror\Payments\Domain\Customer\Payment\PaymentIdentifier;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class ReadPaymentController
{
    public function __construct(
        private PaymentQuery $paymentQuery
    ) {
    }

    #[Route(path: '/customers/{customer}/payments/{payment}', name: 'CUSTOMER_PAYMENTS_GET', methods: ['GET'])]
    public function __invoke(string $customer, string $payment): JsonResponse
    {
        return new JsonResponse($this->paymentQuery->getByCustomer(new CustomerIdentifier($customer), new PaymentIdentifier($payment)), 200);
    }
}
