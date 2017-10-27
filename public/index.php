<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/db.php';
require_once __DIR__ . '/../app/config.php';

$route = $_GET['route'] ?? '';

// Matching index.php?route=home URL
if ($route == 'programs') {
    $controller = new \Controller\ProgramController();
    echo $controller->indexAction();
}
elseif ($route == 'programdescription') {
    $controller = new \Controller\ProgramController();
    echo $controller->showDescription();
}
elseif ($route == 'programsadd') {
    $controller = new \Controller\ProgramController();
    echo $controller->addAction();
}
elseif ($route == 'channels') {
    $controller = new \Controller\ChannelController();
    echo $controller->indexAction();
}
elseif ($route == 'channelsadd') {
    $controller = new \Controller\ChannelController();
    echo $controller->addAction();
}




else {
    http_response_code(404);
    echo 'Page inconnue';
}

