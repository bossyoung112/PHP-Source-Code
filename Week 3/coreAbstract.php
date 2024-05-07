<?php
        abstract class Product {
            public $id;
            public $name;
    
        public function __construct($id, $name) {
            $this->id = $id;
            $this->name = $name;
        }

        public function setId($id) {
            $this->id = $id;
        }
        public function setName($name) {
            $this->name = $name;
        }

        public function getId() {
            return $this->id;
        }
        public function getName() {
            return $this->name;
        }
        abstract function toString();
    }

    class Laptop extends Product {
            public $id;
            public $name;
            public $company;
            public $color;
            public $price;
            public $amount;

        public function __construct($id, $name, $company, $color, $amount, $price) {
            $this->id = $id;
            $this->name = $name;
            $this->company = $company;
            $this->color = $color;
            $this->amount = $amount;
            $this->price = $price;
        }

        public function setId($id) {
            $this->id = $id;
        }
        public function setName($name) {
            $this->name = $name;
        }
        public function setCompany($company) {
            $this->company = $company;
        }
        public function setColor($color) {
            $this->color = $color;
        }
        public function setAmount($amount) {
            $this->amount = $amount;
        }
        public function setPrice($price) {
            $this->price = $price;
        }

        public function getId() {
            return $this->id;
        }
        public function getName() {
            return $this->name;
        }
        public function getCompany() {
            return $this->company;
        }
        public function getColor() {
            return $this->color;
        }
        public function getAmount() {
            return $this->amount;
        }
        public function getprice() {
            return $this->price;
        }
        public function toString()
        {
            return $this->id.'-'.$this->name.'-'.$this->company.'-'.$this->color.'-'.$this->amount.'-'.$this->price . '-' . $this->subtotal();
        }
    }
        ?>