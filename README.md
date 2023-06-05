# AutoConfig
AutoConfig é um pacote PHP que automatiza a configuração de projetos com base nas informações de seu repositório no GitHub e no arquivo `composer.json`.

## Requisitos

- PHP 7.4 ou superior
- Composer
- Uma conta no GitHub com um repositório do projeto
- Um token do GitHub
- Um token da OpenAI

## Instalação

1. Instale o pacote via Composer:

```bash
composer require aeusteixeira/auto-config
```

2. Configure as variáveis de ambiente necessárias no seu arquivo .env:
```bash
OPENAI_TOKEN=
OPEN_IA_ORGANIZATION=
GITHUB_TOKEN=
```

#Uso
Execute o script auto-config.php no terminal:
```bash
php auto-config.php
```
Quando solicitado, insira a URL do seu repositório no GitHub. O script então fará o seguinte:

- Recupera as informações do repositório do GitHub
- Analisa o arquivo composer.json e configura as dependências necessárias
- Usa a API da OpenAI para executar configurações adicionais
  
# Contribuições
Contribuições são bem-vindas! Sinta-se à vontade para abrir um issue ou enviar um pull request.

# Licença
Este projeto está sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.