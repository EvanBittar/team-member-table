<?php

$router =  require 'routers.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function URI_TO_CONTROER($uri,$router){
if (array_key_exists($uri,$router)) {
    require $router[$uri];
}else{
    abort();
}

}

URI_TO_CONTROER($uri,$router);