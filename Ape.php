<?php
require_once "Animal.php";
class ape extends Animal {
    public function __construct() {
        parent::__construct(name: "Kera Sakti",legs: "2",coldblooded: "No");
    }

    public function yell(): string{
        return "Auooo";
    }

    public function __tostring(): string {
        return parent::__tostring().'Yell: '.$this->yell();
    }
}
$ape = new ape();
?>