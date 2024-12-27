<?php

trait FileHandler {
    private $file = __DIR__ . "F:\Project\Data\vehicles.json";

    public function read() {
        if (file_exists($this->file)) {
            $json = file_get_contents($this->file);
            return json_decode($json, true);
        }
        return [];
    }

    public function write($data) {
        file_put_contents($this->file, json_encode($data, JSON_PRETTY_PRINT));
    }
}
?>
