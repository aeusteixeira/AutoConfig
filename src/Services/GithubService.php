<?php

namespace Aeusteixeira\AutoConfig\Services;

use GuzzleHttp\Client;

class GithubService
{
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.github.com/',
            'headers' => [
                'Authorization' => 'token ' . $_ENV['GITHUB_TOKEN'],
            ]
        ]);
    }

    public function getRepoInfo($url)
    {
        
    }
}
