<?php

namespace Aeusteixeira\AutoConfig\Commands;
use Symfony\Component\Console\Application;

class AutoConfigCommand
{
    private $commands = [
        'repository' => 'Por favor, insira a URL do seu repositório GitHub: ',
        'composer' => 'Por favor, insira a URL do seu arquivo composer.json:'
    ];

    public function run()
    {
        $application = new Application();
        $application->run();
    }

    public function getCommands()
    {
        return $this->commands;
    }
    
}