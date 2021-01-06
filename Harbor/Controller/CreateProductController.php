<?php
require_once('./Model/Product.php');
require_once('./CreateProduct.php');

if(isset($_POST['ProductSubmit']))
{
    $product= new ProductCR();
    $product->name=$_POST['Name'];
    $product->ImportedCountry=$_POST['ImportedCountry'];
    $product->EnteranceDate=$_POST['EnteranceDate'];
    $product->Quantity=$_POST['Quantity'];
    $product->desc=$_POST['Description'];
    $product->Weight=$_POST['Weight'];
    $product->deliverFlag=1;
    
    $count = 0;
    if(is_string($product->name))
    {
        $count++;
    }
    if(is_string($product->desc))
    {
        $count++;
    }
    if(is_string($product->ImportedCountry))
    {
        $count++;
    }
    if($product->Quantity<10000)
    {
        $count++;
    }
    if($product->Weight<1000)
    {
        $count++;
    }
    if($count==5)
    {
        ProductCR::CreateProduct($product);
    }
    else
    {
        echo "Data is Incorrect";
    }
}
?>