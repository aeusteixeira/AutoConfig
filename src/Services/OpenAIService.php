<?php

namespace Aeusteixeira\AutoConfig\Services;

use GuzzleHttp\Client;

class OpenAIService
{
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.openai.com/v1/',
            'headers' => [
                'Authorization' => 'Bearer ' . $_ENV['OPENAI_TOKEN'],
            ]
        ]);
    }

    public function run($repoInfo)
    {
        // Implemente a lógica para usar a API da OpenAI
    }
}
