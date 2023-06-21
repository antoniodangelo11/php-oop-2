<?php

class Product {
    public function __construct (
        protected int $id,
        protected string $title, 
        protected int $price, 
        protected string $img, 
        protected Category $category,
        protected string $description,
    )
    {}

    public function printCard()
    {
        return 'sono il prodotto di ' . $this->title . '<br>';
    }

    public function getFormattedPrice() {
        return $this->price / 100 . ' €';
    }
}