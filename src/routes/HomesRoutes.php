<?php

if (strpos($_SERVER['PATH_INFO'], '/homes') === 0) {
    
    require '../src/controllers/HomesController.php';
    
    $homesController = new HomesController();

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $homesController->getHomes();
    }
}