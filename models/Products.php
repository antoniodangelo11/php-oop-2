<?php

class Products {
    public function __construct(public string $title, public int $price, public string $img, public string $type)
    {
        
    }
}