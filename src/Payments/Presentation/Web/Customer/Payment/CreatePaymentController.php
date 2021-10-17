<?php
declare(strict_types=1);

namespace Ferror\Payments\Presentation\Web\Customer\Payment;

use Ferror\Payments\Application\Action\Payment\CreatePayment;
use Ferror\Payments\Application\Query\PaymentQuery;
use Ferror\Payments\Domain\Customer\CustomerIdentifier;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class CreatePaymentController
{
    public function __construct(
        private CreatePayment $action,
        private PaymentQuery $query,
    ) {
    }

    #[Route(path: '/customers/{customer}/payments', name: 'CUSTOMER_PAYMENT_CREATE', methods: ['POST'])]
    public function __invoke(string $customer): JsonResponse
    {
        $payment = $this->query->get(
            $this->action->execute(new CustomerIdentifier($customer))->getIdentifier()
        );

        return new JsonResponse($payment, Response::HTTP_NO_CONTENT);
    }
}
