<?php

include('Controller/Controller.php');
//echo $_SERVER['REQUEST_URI'];


$controller = new Controller();
if (isset($_SERVER['PATH_INFO'])) {
    $path = $_SERVER['PATH_INFO'];
    // echo "<br>";
    switch ($path) {
        case '/':
            $controller->home();
            break;
        case '/create':
            $controller->create();
            break;
        case '/index':
            $controller->index();
            break;
        case '/edit':
            $controller->edit();
            break;
        case '/delete':
            $controller->delete();
            break;
        case '/country':
            $controller->country();
            break;
        case '/getdata':
            $controller->getdataapi();
            break;
        case '/insertapi':
            $controller->createapi();
            break;
        case '/updateapi':
            $controller->update_api();
            break;
        case '/deleteapi':
            $controller->delete_api();
            break;
        case '/form':
            $controller->form();
            break;
        case '/login':
            $controller->login();
            break;
        default:
            echo "Page not found";
            break;
    }
}
?>