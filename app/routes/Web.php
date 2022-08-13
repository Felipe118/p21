<?php

    namespace App\routes;

    use App\Helpers\Bootstrap;


    class Web extends Bootstrap
    {


        //Iniciando as rotas
        public function initRoutes()
        {
            $route['home'] = [
                'route' => '/',
                'controller' => 'XmlController',
                'method' => 'index',
            ];

            $route['store'] = [
                'route' => '/store',
                'controller' => 'XmlController',
                'method' => 'store',
            ];

            $route['list'] = [
                'route' => '/list',
                'controller' => 'XmlController',
                'method' => 'list',
            ];

            
            $route['export'] = [
                'route' => '/export',
                'controller' => 'ExcelController',
                'method' => 'exportPlanilha',
            ];

            $this->setRoutes($route);
        }

       
    
        
    
    }
?>