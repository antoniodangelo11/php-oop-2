<?php

class Game extends Product {
    public function __construct (
        public string $age, 
        public string $dimension,
        public string $type,)
    {}
}
