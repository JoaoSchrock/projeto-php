<?php
/* Receber as requisicoes */

namespace App; //referenciando o diretorio App

class Route
{
    public function initRoutes()
    {
        $route['home'] = array
        (
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );

        $route['sobre_nos'] = array
        (
            'route' => '/sobre_nos',
            'controller' => 'indexController',
            'action' => 'sobreNos'
        );
    }

    public function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); //server -> super global do php
    }
}

?>