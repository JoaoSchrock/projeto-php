<?php
require_once "../vendor/autoload.php";
$route = new \App\Route; //Objeto 
echo "<h1> Isso está funcionando </h1>";
$route->getUrl();
print_r($route->getUrl());
print_r($route->getRouters());

?>