<?php

namespace App\Classes\Environment;

class Environment
{

    /**
     * Método responsável por carregar as variáveis de ambiente do projeto
     * @param string $dir
     * @return bool
     */
    public static function load(string $dir){

        // Verifica se o arquivo .env foi criado
        if (!file_exists($dir.'/.env')){
            return false;
        }

        // Define as variáveis de ambiente
        $lines = file($dir.'/.env');
        foreach ($lines as $line){
            putenv(trim($line));
        }
    }

}