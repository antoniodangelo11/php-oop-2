<?php

class Kennel extends Product {
    private function __construct (
        private string $material, 
        private string $dimension,
        private array $type,)
    {}
}
