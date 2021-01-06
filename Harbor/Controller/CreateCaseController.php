<?php
require_once('./Model/Case.php');
require_once('./createCase.php');

if(isset($_POST['CaseSubmit']))
{
    $case= new CaseCl();
    $case->name=$_POST['Name'];
    $case->caseDate=$_POST['CaseDate'];
    $case->employeeID=$_POST['employeeID'];
    $case->analystID=$_POST['analystID'];
    $case->importerID=$_POST['importerID'];
    $case->paymentMethod=$_POST['PaymentMethod'];
    
    CaseCl::CreateCase($case);
}
?>