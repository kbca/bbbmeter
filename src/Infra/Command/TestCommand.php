<?php

declare(strict_types=1);

namespace Kbca\BBBMeter\Infra\Command;

use Kbca\BBBMeter\Infra\Twitter\Client;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
    protected static $defaultName = 'bbb:test';

    public function __construct(private Client $twitterClient)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->twitterClient->searchCommentsAboutCandidates();

        $output->writeln('Testing');

        return self::SUCCESS;
    }
}
