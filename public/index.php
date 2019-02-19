<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/utils/DBData.php';
require __DIR__ . '/../app/models/CoreModel.php';
require __DIR__ . '/../app/models/Character.php';
require __DIR__ . '/../app/models/Type.php';
require __DIR__ . '/../app/controllers/CoreController.php';
require __DIR__ . '/../app/controllers/MainController.php';

$router = new AltoRouter();
$baseUrl = isset($_SERVER['BASE_URI']) ? $_SERVER['BASE_URI'] : '';
$router->setBasePath($baseUrl);

$router->map('GET', '/', 'MainController#home', 'home');
$router->map('GET', '/autheurs', 'MainController#authors', 'authors');

$match = $router->match();

if ($match) {
  $dispatcherInfos = explode('#', $match['target']);
  $controllerName = $dispatcherInfos[0];
  $methodName = $dispatcherInfos[1];
  $controller = new $controllerName($router); 
  $controller->$methodName($match['params']);
} else {
  echo '404';
}