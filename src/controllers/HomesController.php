<?php

class HomesController {
    public function getHomes() {
        $response = [
            ["id" => 1, "name" => "Casa 01"],
            ["id" => 2, "name" => "Casa 02"],
        ];
        $this->sendResponse(200, $response);
    }

    private function sendResponse($status, $data) {
        header("Content-Type: application/json");
        http_response_code($status);
        echo json_encode($data);
    }
}