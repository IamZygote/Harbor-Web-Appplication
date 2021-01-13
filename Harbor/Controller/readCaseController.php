<?php
require_once('./Model/Case.php');
require_once('./readCase.php');

if(isset($_GET['ID']))
{
    $case= new CaseCl();
    $case->name=$_POST['Name'];
    $case->employeeID=$_POST['employeeID'];
    $case->analystID=$_POST['analystID'];
    $case->importerID=$_POST['importerID'];
    $case->paymentMethod=$_POST['PaymentMethod'];
    
    CaseCl::Createcase($case);
}
?>