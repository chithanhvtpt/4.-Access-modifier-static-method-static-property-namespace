<?php
include_once 'models/Product.php';
include_once 'service/ProductManager.php';
$productManager = new ProductManager();
$productManager->add(new Product('laptop'));
$productManager->add(new Product('mobile'));
$products = $productManager->getProduct();
foreach ($products as $product) {
    echo $product->getName() . "<br/>";
}
