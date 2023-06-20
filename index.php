<?php
    include __DIR__ . '/models/Products.php';
    include __DIR__ . '/models/Food.php';
    include __DIR__ . '/db.php';

    $Products = new Products('Prodotto', 200, 'imamgine', 'tipo');
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
            <?= $Products->getAllInfo() ?>
        </div>
    </div>
</body>
</html>