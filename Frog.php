<?php
require_once 'animal.php';

class Frog extends Animal {
    public function __construct($name) {
        parent::__construct($name);
        // Frog has 4 legs by default, inherited from Animal
    }

    public function jump() {
        return "Hop Hop";
    }
}