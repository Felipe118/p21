<?php

    namespace App\Config;

    class Model
    {
        protected $database;
        

        public function __construct(\PDO $database)
        {
            $this->database = $database;
        }
    }

?>