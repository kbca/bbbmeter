<?php

declare(strict_types=1);

namespace Kbca\BBBMeter\Domain;

class Candidate
{
    public function __construct(
        private string $name,
        private array $keywords,
    ) { }
}