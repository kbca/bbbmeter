<?php

declare(strict_types=1);

namespace Kbca\BBBMeter\Infra\Twitter;

use GuzzleHttp\Client as GuzzleClient;
use function json_decode;

class Client
{
    public function __construct(private GuzzleClient $guzzleClient)
    { }

    public function searchCommentsAboutCandidates(iterable $candidates)
    {
//        $result = $this->guzzleClient->request('GET', '/2/tweets/search/recent', [
//            'query' => [
//                'query' => 'bbb negodi'
//            ],
//        ]);
//
//        dump(json_decode($result->getBody()->getContents(), true));
    }
}