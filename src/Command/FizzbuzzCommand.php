<?php

namespace App\Command;

use App\Service\FizzbuzzManager;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:algo:fizzbuzz',
    description: 'Fizz Buzz algorithm',
)]
class FizzbuzzCommand extends Command
{
    public function __construct(protected FizzbuzzManager $fizzbuzzManager)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addArgument('argN', InputArgument::REQUIRED, 'Argument n');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $argN = $input->getArgument('argN');

        $argNInt = filter_var($argN, FILTER_VALIDATE_INT);

        if (!$argNInt) {
            $io->note(sprintf('Argument "%s" must be an integer', $argN));
            return Command::FAILURE;
        }

        $this->fizzbuzzManager->manageNumbers($io, $argNInt);

        return Command::SUCCESS;
    }
}