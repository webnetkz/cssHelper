<?php

session_start();

require_once 'app/lib/Debug/DebugMod.php';
require_once 'app/routes/routes.php';

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

        <!-- <link rel="shortcut icon" href="/public/img/miniLogo.png" type="image/png">
        <link rel="apple-touch-icon" href="/public/img/logo.png"> -->
        <link rel="stylesheet" type="text/css" href="/public/styles/frontHelper.css">
        <link rel="manifest" href="/public/json/manifest.json">
        
    </head>

    <body>

    <div>
        <ul class="HorizontalMenu" id="menu">
            <li><a href="http://localhost/index.php" class="activeItem">Home</a></li>
            <li><a href="http://localhost/pages/componentsCss.php">Components only CSS</a></li>
            <li><a href="http://localhost/pages/elementsCss.php">Elements CSS</a></li>
        </ul>
    </div>