<?php

$arrCategory = [
    new Category('Dog'),
    new Category('Cat'),
];

$dataProducts = [
    [
        'title'        => 'Dog Food',
        'price'        => 20,
        'img'          => 'food1.jpg',
        'category'     => [0],
        'description'  => 'Premium dog food for all breeds',
        'availability' => 'In stock',
    ],
    [
        'title'        => 'Cat Food',
        'price'        => 15,
        'img'          => 'food2.jpg',
        'category'     => [1],
        'description'  => 'Healthy cat food for all ages',
        'availability' => 'Out of stock',
    ],
];

$arrProducts = [];
foreach ($dataProducts as $product) {
    $productCategory = [];
    foreach ($product['category'] as $index) {
        $productCategory[] = $arrCategory[$index];
    }

    $arrProducts[] = new Category(
        $product['title'],
        $product['price'],
        $product['img'],
        $productCategory,
        $product['description'],
        $product['availability'],
    );
}

// var_dump($dataProducts);