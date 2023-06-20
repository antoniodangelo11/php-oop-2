<?php

class Product {
    public function __construct(public string $title, public int $price, public string $img, public string $type)
    {}

    // Metodo per raggrupare tutte le info
    public function getAllInfo()
    {
        return $this->title . '<br>' . $this->price . '<br>' . $this->img . '<br>' . $this->type;
    }
}