<?php 

class Food extends Product {
    public function __construct (
        public string $age, 
        public string $weight,
    ) {}
}
