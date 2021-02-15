<?php

declare(strict_types=1);

namespace Kbca\BBBMeter\Infra\Twitter;

use GuzzleHttp\Client as GuzzleClient;
use function json_decode;

class Client
{
    public function __construct(private GuzzleClient $guzzleClient)
    { }

    public function searchCommentsAboutCandidates()
    {
        $result = $this->guzzleClient->request('GET', '/2/tweets/search/recent', [
            'query' => [
                'query' => 'projota'
            ],
        ]);


//        $guzzle = new Client([
//            'base_uri' => 'https://api.twitter.com/',
//            'headers' => [
//                'Authorization' => sprintf('Bearer %s', $token),
//            ],
//            'debug' => true,
//        ]);
//
//        $result = $guzzle->request('GET', '/2/tweets/search/recent', [
//            'query' => [
//                'query' => 'projota'
//            ],
//        ]);

        dump(json_decode($result->getBody()->getContents(), true));
    }
}