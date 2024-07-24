<?php

class Homes implements JsonSerializable {

    private $id;
    private $name;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function jsonSerialize() {
        return [
            "id" => $this->id,
            "name" => $this->name
        ];
    }
}