<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/db.php';
require_once __DIR__ . '/../app/config.php';

$route = $_GET['route'] ?? '';

// Matching index.php?route=home URL
if ($route == 'programs') {
    $controller = new \Controller\ProgramController();
    echo $controller->indexAction();
} elseif ($route == 'add') {
    $controller = new \Controller\ProgramController();
    echo $controller->addAction();
} else {
    http_response_code(404);
    echo 'Page inconnue';
}

