</php
    include "Controllers/ProductController.php";
use Controller\ProductController;
$ProductController = new ProductController;
echo $ProductController ->getAllProduct();