<?php
declare(strict_types=1);

namespace Ferror\Payments\Presentation\Console\Customer;

use Ferror\Payments\Application\Query\CustomerQuery;
use Ferror\Payments\Domain\Customer\CustomerIdentifier;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

final class ReadCustomerCommand extends Command
{
    public function __construct(
        private CustomerQuery $customerQuery,
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setName('customer:read');
        $this->addOption('all', null, InputOption::VALUE_NONE);
        $this->addArgument('customer_identifier', InputArgument::OPTIONAL);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        if ($input->getOption('all')) {
            $customers = $this->customerQuery->getAll();
        } else {
            $customers = $this->customerQuery->get(new CustomerIdentifier($input->getArgument('customer_identifier')));
        }

        foreach ($customers as $customer) {
            $output->writeln('id: ' . $customer->getIdentifier());
        }

        return Command::SUCCESS;
    }
}
