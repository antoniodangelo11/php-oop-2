<?php

class Kennel extends Product {
    public function __construct (
        public string $material, 
        public string $dimension,
        public string $model,)
    {}
}
