<?php
require_once('./Model/Case.php');
require_once('./createCase.php');

if(isset($_POST['CaseSubmit']))
{
    $case= new CaseCl();
    $case->name=$_POST['Name'];
    $case->employeeID=$_POST['employeeID'];
    $case->analystID=$_POST['analystID'];
    $case->importerID=$_POST['importerID'];
    $case->paymentMethod=$_POST['paymentMethod'];
    $case->productID=$_POST['productID'];
    $userType=$_POST['usrt'];
    $pmthd=$_POST['paymentMethod'];
    $cID=CaseCl::getLastCase();
    $case->id=$cID;
    
    CaseCl::CreateCase($case);
    header("location: ./paymentDetails.php?usrt=". $userType ."&pmthd=". $pmthd ."&cID=". $cID);
}
?>