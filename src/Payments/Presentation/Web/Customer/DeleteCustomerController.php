<?php
declare(strict_types=1);

namespace Ferror\Payments\Presentation\Web\Customer;

use Ferror\Payments\Application\Action\DeleteCustomer;
use Ferror\Payments\Domain\Customer\CustomerIdentifier;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class DeleteCustomerController
{
    public function __construct(
        private DeleteCustomer $action,
    ) {
    }

    #[Route(path: '/customers/{identifier}', name: 'CUSTOMER_DELETE', methods: ['DELETE'])]
    public function __invoke(string $identifier): JsonResponse
    {
        $this->action->execute(
            new CustomerIdentifier($identifier)
        );

        return new JsonResponse([], Response::HTTP_NO_CONTENT);
    }
}
