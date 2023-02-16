<?php
/* Receber as requisicoes */

namespace App; //referenciando o diretorio App

class Route
{
    private $routers;

    //
    public function __construct(){
        $this->initRoutes();
    }

    public function getRouters(){
        return $this->routers;
    }

    public function setRouters(array $routers){
        $this->routers = $routers;
    }

    public function initRoutes()
    {
        $route['home'] = array
        (
            'route' => '/',
            'controlle' => 'indexController',
            'action' => 'index'
        );

        $route['sobre_nos'] = array
        (
            'route' => '/sobre_nos',
            'controller' => 'indexController',
            'action' => 'sobreNos'
        );

        $this->setRouters($route);
    }

    public function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); //server -> super global do php
    }
}

?>