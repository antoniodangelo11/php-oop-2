<?php

class Kennel extends Product {
    public function __construct(public string $meat, public string $fish)
    {}
}
