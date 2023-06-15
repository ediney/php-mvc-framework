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

    case '/users/create':
        UserController::create();
    break;

    case '/users/save':
        UserController::store();
    break;

    default:
        echo "Error - 404";
    break;
}