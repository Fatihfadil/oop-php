<?php
    class Animal {

        public $name;
        public $legs;
        public $coldblooded;

        public function __construct($name,$legs,$coldblooded) {
            $this->name = $name;
            $this->legs = $legs;
            $this->coldblooded = "No";
        }

        public function __tostring(): string {
            return "Name: ".$this->name."<br>"."Legs: ".$this->legs."<br>"."Cold Blooded: ".$this->coldblooded."<br>";
        }
    }
?>