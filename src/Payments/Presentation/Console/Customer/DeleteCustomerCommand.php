<?php
declare(strict_types=1);

namespace Ferror\Payments\Presentation\Console\Customer;

use Ferror\Payments\Application\Repository\CustomerRepository;
use Ferror\Payments\Domain\Customer\CustomerIdentifier;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class DeleteCustomerCommand extends Command
{
    public function __construct(
        private CustomerRepository $customerRepository
    )
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setName('customer:delete');
        $this->addArgument('customer_identifier', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->customerRepository->delete(new CustomerIdentifier($input->getArgument('customer_identifier')));

        return Command::SUCCESS;
    }
}
