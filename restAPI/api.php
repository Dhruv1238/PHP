<?php
(header("Content-Type:application/json"));
$products = [
    ['id' => 1, 'name' => 'Product 1', 'price' => 19.99],
    ['id' => 2, 'name' => 'Product 2', 'price' => 29.99],
    ['id' => 3, 'name' => 'Product 3', 'price' => 14.99],
    ['id' => 4, 'name' => 'Product 4', 'price' => 39.99],
    ['id' => 5, 'name' => 'Product 5', 'price' => 24.99],
    ['id' => 6, 'name' => 'Product 6', 'price' => 9.99],
    ['id' => 7, 'name' => 'Product 7', 'price' => 49.99],
    ['id' => 8, 'name' => 'Product 8', 'price' => 19.99],
    ['id' => 9, 'name' => 'Product 9', 'price' => 34.99],
    ['id' => 10,'name' => 'Product 10','price' => 29.99],
];

echo json_encode($products);
?>