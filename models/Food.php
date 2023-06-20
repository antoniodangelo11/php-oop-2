<?php 

class Food extends Product {
    private function __construct (
        public string $age, 
        private string $weight,
        private array $type,
        private array $taste,)
    {}
}
