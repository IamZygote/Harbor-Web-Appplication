<?php
require_once('./Model/Case.php');
require_once('./updateCase.php');

if (isset($_POST['CaseUpdate']))
{
    $case = new CaseCl();
    $case->name=$_POST['Name'];
    $case->employeeID=$_POST['employeeID'];
    $case->analystID=$_POST['analystID'];
    $case->importerID=$_POST['importerID'];
    //$case->paymentMethod=$_POST['paymentMethod'];
    $case->productID=$_POST['productID'];
    CaseCl::updateCase($case);
}
?>