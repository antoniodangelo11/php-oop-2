<?php

class Game extends Product {
    private function __construct (
        private string $age, 
        private string $dimension,
        private array $type,)
    {}
}
