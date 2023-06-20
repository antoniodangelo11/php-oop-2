<?php

class Taste {
    public function __construct(public string $taste)
    {

    }
    public function __toString()
    {
        return $this->taste;
    }
}