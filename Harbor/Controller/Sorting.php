<?php
require_once('./Model/Product.php');
require_once('./InProcessDeliver.php');

function sorted()
{
    $userID=$_GET['userID'];
    if(isset($_POST['SortByID']))
    {
        $result=SortByID::Sorting($userID);
        return $result;
    }
    if(isset($_POST['SortByName']))
    {
        $result=SortByName::Sorting($userID);
        return $result;
    }
    if(isset($_POST['SortByFinished']))
    {
        $result=SortByFinished::Sorting($userID);
        return $result;
    }
    return ProductCR::InProcessOrders($userID);
    
}

?>