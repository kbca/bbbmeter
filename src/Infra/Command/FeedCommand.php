<?php

declare(strict_types=1);

namespace Kbca\BBBMeter\Infra\Command;

use Kbca\BBBMeter\Infra\CandidatesJsonFactory;
use Kbca\BBBMeter\Infra\Twitter\Client;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use function file_get_contents;

class FeedCommand extends Command
{
    protected static $defaultName = 'bbb:feed';

    public function __construct(
        private Client $twitterClient,
        private CandidatesJsonFactory $candidatesFactory,
        private string $jsonCandidatesFilepath
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $jsonCandidates = file_get_contents($this->jsonCandidatesFilepath);

        $this->twitterClient->searchCommentsAboutCandidates(
            $this->candidatesFactory->create($jsonCandidates)
        );

        $output->writeln('Testing');

        return self::SUCCESS;
    }
}
