<?php

$categories = [
    new Category(1, 'Cats', 'Gatti siamesi, soriani etc..'),
    new Category(1, 'Dogs', 'Cani di razza etc..'),
];

$arrProducts = [
    new Food(1, 'Croccattini', 700, 'stringa immagine', $categories[0], 'descrizione', 'età', 'peso'),
    new Game(1, 'Osso di gomma', 1000, 'stringa immagine', $categories[0], 'descrizione', 'tipo di gioco'),
    new Kennel(1, 'Trasportino', 5000, 'stringa immagine', $categories[0], 'descrizione', 'materiale', 'modello'),
];