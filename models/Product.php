<?php

class Product {
    public function __construct (
        public string $title, 
        public int $price, 
        public string $img, 
        public array $category,
        public string $description,
        public string $availability,)
    {}

    // Metodo per raggrupare tutte le info
    public function getAllInfo()
    {
        return $this->title . '<br>' . $this->price . '<br>' . $this->img . '<br>' . $this->category . '<br>' . $this->description . '<br>' . $this->availability;
    }
}