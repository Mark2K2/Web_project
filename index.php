<?php


$action = $_GET['action'];


switch($action){
    case 'categories':
        require __DIR__.'resource_category_list.php';
        break;
    case 'productes':
        require __DIR__.'resource_product_list.php';
        break;
    default:
        require __DIR__.'/category_list.php';
        break;
}