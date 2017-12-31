<?php


require_once "__DIR__/../vendor/autoload.php";
require_once "config.php";
include_once "controller/apiController.php";

//Initializing twig template engine
$loader = new Twig_Loader_Filesystem(dirname(__DIR__) . '/template');
$twig = new Twig_Environment($loader, array('debug' => true, 
// 'cache' => dirname(__DIR__) . '/template/cache'
));
$twig->addExtension(new Twig_Extension_Debug());

//Global variables initialization
$twig->addGlobal('url', Url::base_url()); //base url
$twig->addGlobal('portfolio', Api::getCollection('portfolio'));//portfolio Api variable
$twig->addGlobal('clients', Api::getCollection('clients'));//client Api variable
$twig->addGlobal('testimonials', Api::getCollection('testimonials'));//client Api variable

require "routes/routes.php";
//home page
//Routes::home($twig);

// switch ($favcolor) {
//     case "/":
//         echo "Your favorite color is red!";
//         break;
//     case "blue":
//         echo "Your favorite color is blue!";
//         break;
//     case "green":
//         echo "Your favorite color is green!";
//         break;
//     default:
//         echo "Your favorite color is neither red, blue, nor green!";
// }