<?php

session_start();

require_once 'app/lib/Debug/DebugMod.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?=$title?></title>

        <meta charset="UTF-8">
        <meta name="theme-color" content="rgb(0, 0, 0)">
        <meta name="author" content="TOO WebNet">
        <meta name="description" content="Made in WebNet">
        <meta name="keywords" content="WebNet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="/public/img/miniLogo.png" type="image/png">
        <link rel="apple-touch-icon" href="/public/img/logo.png">
        <link rel="stylesheet" href="/public/css/frotHelper.css">
        <link rel="manifest" href="/public/json/manifest.json">
        
    </head>

    <body>
        
    <div class="dropdown">
        <button>Button</button>
        <div>
            <a href="">RazDva</a>
            <a href="">RazDva</a>
            <a href="">RazDva</a>
            <a href="">RazDva</a>
            <a href="">RazDva</a>
        </div>
    </div>
    <div>
        <ul class="HorizontalMenu">
            <li><a href="">112312</a></li>
            <li><a href="">212312</a></li>
            <li><a href="">3sdafsd</a></li>
            <div class="dropdown">
                    <button>Button</button>
                    <div>
                        <a href="">RazDva</a>
                        <a href="">RazDva</a>
                        <a href="">RazDva</a>
                        <a href="">RazDva</a>
                        <a href="">RazDva</a>
                    </div>
            </div>
            <li><a href="" class="active">4asdfa sd</a></li>
        </ul>
    </div>
    
    <div>
        <ul class="VerticalMenu">
            <li><a href="" class="active">112312</a></li>
            <li><a href="">212312</a></li>
            <div class="dropdown">
                    <button>Button</button>
                    <div>
                        <a href="">RazDva</a>
                        <a href="">RazDva</a>
                        <a href="">RazDva</a>
                        <a href="">RazDva</a>
                        <a href="">RazDva</a>
                    </div>
            </div>
            <li><a href="">3sdafsd</a></li>
            <li><a href="">4asdfa sd</a></li>
        </ul>
    </div>
    <div>
        <input type="text" class="inp">
    </div>




        <script>
             // Проверка браузера на поддержку service worker
            if('serviceWorker' in navigator) {
                navigator.serviceWorker
                    .register('public/sw.js')
                    .then(function() { console.log("Service Worker Registered"); });
            }
        </script>
            <script src="public/js/frontHelper.js"></script>
    </body>
</html>