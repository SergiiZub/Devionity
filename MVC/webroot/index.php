<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('VIEWS_PATH', ROOT . DS . 'views');
try{

require_once (ROOT.DS.'lib'.DS.'init.php');

$uri = $_SERVER['REQUEST_URI'];
//$router = new Router($uri);
//
//
//echo 'hello';
//print_r($uri);
//
//echo "<pre>";
//print_r('Route: ' . $router->getRoute() . PHP_EOL);
//print_r('Language: ' . $router->getLanguage() . PHP_EOL);
//print_r('Controller: ' . $router->getController() . PHP_EOL);
//print_r('Action to be called: ' . $router->getMethodPrefix() . $router->getAction() . PHP_EOL);
//echo "Params: ";
//print_r($router->getParams());

//    Session::setFlash('Test flash message');
session_start();
App::run($uri);

//    $test = App::$db->query('select * from pages');
//    echo "<pre>";
//    print_r($test);

} catch (Exception $e){
    echo "<b style='color: red'>" . $e->getMessage() . PHP_EOL . "</b>>" . "<br>";
    echo $e->getFile() . ' on line: ' . $e->getLine();
}