<?php
    include __DIR__ . '/models/Product.php';
    include __DIR__ . '/models/Food.php';
    include __DIR__ . '/models/Game.php';
    include __DIR__ . '/models/Kennel.php';
    include __DIR__ . '/db.php';

    $Products = new Product('Prodotto', 200, 'imamgine', 'tipo');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="products">
            <div class="game_product">

            </div>

            <div class="food_product">

            </div>
        </div>
    </div>
</body>
</html>