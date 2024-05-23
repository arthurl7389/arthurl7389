<?php
//autoload pour charger automatiquement les classes
spl_autoload_register(function ($class_name) {
  include 'controllers/'.$class_name.'.php';
});

$page = isset($_GET['page']) ? $_GET['page'] : '';

swith ($page) {
  case 'accueil':
    require_once('controllers/AccueilController.php');
    $controller = new AccueilController();
    $controller->index();
    break;
  default:
    require_once('controllers/AccueilController.php');
    $controller = new AccueilController();
    $controller->index();
    break;
