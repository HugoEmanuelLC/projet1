<?php

require '../vendor/autoload.php';

$router = new router\Router($_GET['url']);
$router->show();