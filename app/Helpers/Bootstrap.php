<?php

    namespace App\Helpers;

    use Throwable;

    abstract class Bootstrap
    {
        private $routes;

        public abstract function initRoutes();

        public function __construct()
        {
            $this->initRoutes();
            $this->run($this->getUrl());
        }
 
        public function getRoutes() :array
        {
            return $this->routes;
        }

        public function setRoutes(Array $routes)
        {
            $this->routes = $routes;
        }

        //Rodando as rotas
        protected function run($url)
        {
            try{
                foreach($this->getRoutes() as $route){
                    if($url == $route['route']){
                        $class = "App\\Controller\\".ucfirst($route['controller']);
                        $controller = new $class;
                        $method = $route['method'];
                        $controller->$method();
                    }
                }
    
            }catch(Throwable $erro){
                echo "erro".$erro->getMessage();
            }
        }
        
        //Pegando a URI
        protected function getUrl()
        {
            return str_replace('/P21', '',parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));
        }

    }
?>