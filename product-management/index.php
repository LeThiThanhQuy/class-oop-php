<?php
include "Models/Product.php";
include "Services/ProductManager.php";

use Services\ProductManager;
use Models\Product;
$productManager = new ProductManager();
$productManager->add(new Product("laptop"));
$productManager->add(new Product("mobile"));

$products= $productManager->getProduct();
foreach ($products as $pro){
    echo $pro->getName()."<br>";
}


?>