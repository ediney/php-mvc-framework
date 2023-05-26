<?php

include './app/Controllers/UserController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
        include './src/views/home.php';
    break;

    case '/users':
        UserController::index();
    break;
}