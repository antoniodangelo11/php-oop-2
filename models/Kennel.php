<?php

class Kennel extends Product {
    private function __construct (
        private array $material, 
        private string $dimension,
        private string $type,)
    {}
}
