<?php

$arrTaste = [
    new Taste('Chicken'),
    new Taste('Beef'),
    new Taste('Fish'),
    new Taste('Tuna'),
    new Taste('Salmon'),
    new Taste('Schirmp'),
];

$arrType = [
    new Type('Chewing'),
    new Type('Fetching'),
    new Type('Puzzle'),
    new Type('Swatting'),
    new Type('Jumping'),
];

$arrMaterial = [
    new Material('Plastic'),
    new Material('Wood'),
    new Material('Fabric'),

];

$dataProducts = [
    [
        'category'     => 'dog',
        'image'        => 'food1.jpg',
        'name'         => 'Dog Food',
        'description'  => 'Premium dog food for all breeds',
        'availability' => 'In stock',
        'price'        => 20,
        'weight'       => 10,
        'type'         => 'Dry',
        'age'          => 'Adult',
        'taste'        => [1],
    ],
    [
        'category'     => 'cat',
        'image'        => 'food2.jpg',
        'name'         => 'Cat Food',
        'description'  => 'Healthy cat food for all ages',
        'availability' => 'Out of stock',
        'price'        => 15,
        'weight'       => 5,
        'type'         => 'Wet',
        'age'          => 'Kitten',
        'taste'        => [1],
    ],
    [
        'category'     => 'dog',
        'image'        => 'game1.jpg',
        'name'         => 'Interactive Toy',
        'description'  => 'Engaging toy for dogs',
        'availability' => 'In stock',
        'price'        => 30,
        'age'          => 'Adult',
        'dimension'    => 'Large',
        'type'         => [1],
    ],
    [
        'category'     => 'cat',
        'image'        => 'game2.jpg',
        'name'         => 'Feather Teaser',
        'description'  => 'Interactive toy for cats',
        'availability' => 'In stock',
        'price'        => 12,
        'age'          => 'Kitten',
        'dimension'    => 'Small',
        'type'         => [1],
    ],
    [
        'category'     => 'dog',
        'image'        => 'kennel1.jpg',
        'name'         => 'Plastic Dog Kennel',
        'description'  => 'Durable and easy to clean dog kennel',
        'availability' => 'In stock',
        'price'        => 80,
        'material'     => [1],
        'dimension'    => 'Medium',
        'type'         => 'Outdoor'
    ],
    [
        'category'     => 'cat',
        'image'        => 'kennel2.jpg',
        'name'         => 'Wooden Cat House',
        'description'  => 'Stylish cat house for indoor use',
        'availability' => 'Out of stock',
        'price'        => 100,
        'material'     => [1],
        'dimension'    => 'Small',
        'type'         => 'Indoor'
    ]
];

$arrFood = [];
$arrGame = [];
$arrKennel = [];

foreach ($dataProducts as $food) {
    $arrTaste = [];
    foreach ($food['taste'] as $index) {
        $arrTaste[] = $arrTaste[$index];
    }

    $arrFood[] = new Food(
        $food['age'],
        $food['weight'],
        $food['type'],
        $arrTaste,
    );
}

foreach ($dataProducts as $game) {
    $arrGame = [];
    foreach ($game['type'] as $index) {
        $arrGame[] = $arrGame[$index];
    }

        $arrFood[] = new Game(
        $game['age'],
        $game['dimension'],
        $arrType,
    );
}

foreach ($dataProducts as $kennel) {
    $arrKennel = [];
    foreach ($kennel['material'] as $index) {
        $arrKennel[] = $arrKennel[$index];
    }

        $arrKennel[] = new Kennel(
        $arrKennel,
        $kennel['dimension'],
        $kennel['model'],
    );
}