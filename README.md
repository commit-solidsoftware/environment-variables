# Variáveis de Ambiente em PHP

Biblioteca criada para facilitar o uso de variáveis de ambiente nos projetos em PHP, sem a necessidade de fixar as constantes no próprio código fonte.

## Como utilizar

Basta criar na raiz do projeto um arquivo `.env` que será utilizado para guardar as configurações. Segue exemplo logo abaixo:

```
DB_HOST=localhost
DB_USER=root
DB_PASS=pass
DB_NAME=database
DB_PORT=3307
```

```php
<?php

require 'vendor/autoload.php';
    
use \App\Classes\Environment;

// Carrega o caminho onde se encontra arquivo .env
// Ele pode ser carregado em outro lugar também, basta mudar o paramêtro __DIR__ do método load() informado abaixo.
Environment::load(__DIR__);

// Exibe todas as variáveis de ambiente existentes
print_r($env);

// Buscando uma variável de ambiente existente pelo nome que foi lançado no arquivo .env ou dos padrões já existentes.  
echo getenv('DB_HOST');

```

## Requisito
 - Utilizar o composer.
 - PHP 7.0 ou superior.
