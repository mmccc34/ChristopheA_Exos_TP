<?php

$products = 
[

    'product1' => [
        'name' => 'computer',
        'price' => 899,
        'stock' => 11
    ],

    'product2' => [
        'name' => 'smartphone',
        'price' => 1200,
        'stock' => 5
    ],

    'product3' => [
        'name' => 'earphone',
        'price' => 199,
        'stock' => 32
    ],

    'product4' => [
        'name' => 'keyboard',
        'price' => 189,
        'stock' => 38
    ],
];

// La valeur totale des stocks :
// Value1 = stock1 * price1 

$stockFinalValue = 0;
$priceValue = 0;
$countStock = 0;
$stockValue = 0;


foreach ($products as $product => $value) {
    $priceValue = $value['price'];
    $countStock = $value['stock'];
    $stockValue = $priceValue * $countStock;
    $stockFinalValue += $stockValue;
    echo 'la valeur stock du produit ' . $value['name'] . ' ' . 'est : ' . $stockValue . '€' . '<br>';
}


echo 'la valeur du stock total est de : ' . $stockFinalValue . '€' . PHP_EOL;