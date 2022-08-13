<?php

    namespace App\Config;

    use App\DB\Connection;

    class Container
    {
        //Criando container para iniciar o model com a conexao com banco de dados
        public static function getModel($model)
        {
            $class = "App\\Models\\".ucfirst($model);
            $connection = Connection::getDB();

            return new $class($connection);
        }
    }

?>