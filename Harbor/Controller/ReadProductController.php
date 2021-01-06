<?php
require_once('./Model/Product.php');
require_once('./readProduct.php');

if(isset($_GET['ID']))
{
    $product= new ProductCR();
    $product->id=$_POST['ID'];
    $product->name=$_POST['Name'];
    $product->ImportedCountry=$_POST['ImportedCountry'];
    $product->EnteranceDate=$_POST['EnteranceDate'];
    $product->Quantity=$_POST['Quantity'];
    $product->desc=$_POST['Description'];
    $product->Weight=$_POST['Weight'];
    $product->productType=$_POST['ProductType'];
    
    ProductCR::CreateProduct($product);
}
?>