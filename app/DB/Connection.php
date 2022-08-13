<?php
    namespace App\DB;

    class Connection
    {
        public static function getDB()
        {
            
            try{
                $connection = new \PDO('mysql:host=127.0.0.1;dbname=AllBlack',
                    getenv('DB_USERNAME'), 
                    getenv('DB_PASSWORD')
                );
                
                return $connection;
            }catch(\PDOException $e){
                echo "ERRO: ".$e->getMessage();
            }
        }
    }
?>
