<?php

// use an autoloader
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';

$app = new Bootstrap();



/*
 *$url = $_GET['url'];
 *$url = rtrim($url, '/');
 *
 *$url = explode('/', $url);
 *
 *echo '<pre >';
 *print_r($url);
 *echo '</pre >';
 *
 *#echo $url;
 *##http://192.168.100.185:8080/dog
 *#http://192.168.100.185:8080/index.php?url=dog
 *##dog 
 *
 *
 *require 'controllers/' . $url[0] . '.php';
 *$controller = new $url[0];
 *
 *    #http://192.168.100.185:8080/help/other/10
 *if (isset($url[2])){
 *    $controller->{$url[1]}($url[2]);
 *} else {
 *    #http://192.168.100.185:8080/help/other
 *    if (isset($url[1])) {
 *        $controller->{$url[1]}();
 *    }
 *}
 */

?>
