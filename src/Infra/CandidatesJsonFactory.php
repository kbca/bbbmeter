<?php

declare(strict_types=1);

namespace Kbca\BBBMeter\Infra;

use Kbca\BBBMeter\Domain\Candidate;
use function json_decode;

class CandidatesJsonFactory
{
    public static function create(string $jsonData): iterable
    {
        $jsonCandidates = json_decode($jsonData, true);

        foreach($jsonCandidates as $jsonCandidate) {
            yield new Candidate($jsonCandidate['name'], $jsonCandidate['keywords']);
        }
    }
}