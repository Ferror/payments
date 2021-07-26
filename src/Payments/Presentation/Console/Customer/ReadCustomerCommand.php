<?php
declare(strict_types=1);

namespace Ferror\Payments\Presentation\Console\Customer;

use Ferror\Payments\Application\Query\CustomerQuery;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class ReadCustomerCommand extends Command
{
    public function __construct(
        private CustomerQuery $customerQuery,
    )
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setName('customer:read');
        $this->addOption('--all');
        $this->addArgument('customer_uuid', InputArgument::OPTIONAL);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $customers = $this->customerQuery->getAll();

        foreach ($customers as $customer) {
            $output->writeln('id: ' . $customer->getIdentifier());
        }

        return Command::SUCCESS;
    }
}
