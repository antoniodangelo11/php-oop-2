<?php

class Product {
    private function __construct (
        protected string $title, 
        private int $price, 
        private string $img, 
        private string $category,
        private string $description,
        private string $availability,)
    {}

    // Metodo per raggrupare tutte le info
    public function getAllInfo()
    {
        return $this->title . '<br>' . $this->price . '<br>' . $this->img . '<br>' . $this->category;
    }
}