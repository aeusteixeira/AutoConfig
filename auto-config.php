<?php

require __DIR__ . '/vendor/autoload.php';

use Aeusteixeira\AutoConfig\Services\GithubService;
use Aeusteixeira\AutoConfig\Services\ComposerService;
use Aeusteixeira\AutoConfig\Services\OpenAIService;

// Carregue as variáveis ​​de ambiente do arquivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Instancie os serviços necessários
$githubService = new GithubService();
$composerService = new ComposerService();
$openAIService = new OpenAIService();

// Recupere a URL do repositório GitHub
echo "Por favor, insira a URL do seu repositório GitHub:\n";
$githubUrl = trim(fgets(STDIN));

// Use o serviço do Github para recuperar informações sobre o repositório
$repoInfo = $githubService->getRepoInfo($githubUrl);

// Analise o arquivo composer.json e configure as dependências
$composerService->setupDependencies($repoInfo->composerJsonUrl);

// Use a API da OpenAI para fazer o que precisar
$openAIService->run($repoInfo);

echo "Configuração automática concluída!\n";
