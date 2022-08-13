<?php

    namespace App\Config;

    class Controller
    {
        public function view(String $page, array $params = [] )
        {
            $page = str_replace('.','/',$page);
            $page .= '.twig.php'; 
            $loader = new \Twig\Loader\FilesystemLoader('./app/View/');
            $twig = new \Twig\Environment($loader);

            echo $twig->render($page,$params); 
        }
    }
?>