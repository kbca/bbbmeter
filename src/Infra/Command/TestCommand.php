<?php

declare(strict_types=1);

namespace Kbca\BBBMeter\Infra\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
    protected static $defaultName = 'bbb:test';

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Testing');

        return self::SUCCESS;
    }
}
