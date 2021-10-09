<?php
declare(strict_types=1);

namespace Ferror\Payments\Presentation\Console\Customer;

use Ferror\Payments\Application\Action\CreateCustomer;
use Ferror\Payments\Application\Query\CustomerQuery;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class CreateCustomerCommand extends Command
{
    public function __construct(
        private CreateCustomer $action,
        private CustomerQuery $customerQuery,
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setName('customer:create');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            $customer = $this->customerQuery->get(
                $this->action->execute()->getIdentifier()
            );
            $output->writeln('id: ' . $customer->getIdentifier());
        } catch (\Exception $e) {
            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }
}
