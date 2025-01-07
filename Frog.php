<?php
require_once "Animal.php";
class frog extends Animal {
    public function __construct() {
        parent::__construct(name: "Buduk",legs: "4",coldblooded: "No");
    }

    public function jump(): string {
        return "Hop Hop";
    }

    public function __tostring(): string {
        return parent::__tostring().'Jump: '.$this->jump();
    }
}
$frog = new frog();
?>