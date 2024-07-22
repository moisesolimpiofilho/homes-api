<?php

class Api {
    public function processRequest() {
        $method = $_SERVER['REQUEST_METHOD'];  
        
        if ($method === 'GET') {
            $response = ['message' => 'Requisição GET recebida'];
            header("Content-Type: application/json");
            http_response_code(200);
            echo json_encode($response);
        }        
    }
}
