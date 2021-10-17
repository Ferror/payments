<?php
declare(strict_types=1);

namespace Ferror\Payments\Presentation\Web\Customer\Payment;

use Ferror\Payments\Application\Action\Payment\DeletePayment;
use Ferror\Payments\Domain\Customer\CustomerIdentifier;
use Ferror\Payments\Domain\Customer\Payment\PaymentIdentifier;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class DeletePaymentController
{
    public function __construct(
        private DeletePayment $action,
    ) {
    }

    #[Route(path: '/customers/{customer}/payments/{payment}', name: 'CUSTOMER_PAYMENT_DELETE', methods: ['DELETE'])]
    public function __invoke(string $customer, string $payment): JsonResponse
    {
        $this->action->execute(
            new CustomerIdentifier($customer),
            new PaymentIdentifier($payment),
        );

        return new JsonResponse([], Response::HTTP_NO_CONTENT);
    }
}
