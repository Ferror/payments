<?php
declare(strict_types=1);

namespace Ferror\Payments\Presentation\Console\Customer;

use Ferror\Payments\Application\Repository\CustomerRepository;
use Ferror\Payments\Domain\Customer;
use Ferror\Payments\Domain\Customer\CustomerIdentifier;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class CreateCustomerCommand extends Command
{
    public function __construct(
        private CustomerRepository $customerRepository
    )
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setName('customer:create');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->customerRepository->create(
            new Customer(
                new CustomerIdentifier(\base64_encode(\random_bytes(16))),
                new \Collection(),
                new \Collection(),
                new \Collection(),
            )
        );

        return Command::SUCCESS;
    }
}
