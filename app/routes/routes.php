<?php

$routes = [
    'index' => '/index.php',
    'components' => '/pages/componentsCss.php',
    'elements' => '/pages/elementsCss.php',
];

$url = $_SERVER['REQUEST_URI'];
foreach($routes as $k => $v){
    echo $v.'<br>';
    if($url == $v) {
        var_dump($routes);
    } else {
        header('Location: https://google.com');
    }

}

