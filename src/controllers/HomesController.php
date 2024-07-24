<?php

require '../src/models/Homes.php';

class HomesController {
    public function getHomes() {
        $response = [];
        
        $casa01 = new Homes(1, 'Casa 01');
        $casa02 = new Homes(2, 'Casa 02');

        array_push($response, $casa01, $casa02);

        $this->sendResponse(200, $response);
    }

    private function sendResponse($status, $data) {
        header("Content-Type: application/json");
        http_response_code($status);
        echo json_encode($data);
    }
}