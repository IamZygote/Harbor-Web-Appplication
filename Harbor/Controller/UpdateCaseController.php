<?php
require_once('./Model/Case.php');
require_once('./updateCase.php');

if (isset($_POST['CaseUpdate']))
{
    $case = new CaseCl();
    $case->name=$_POST['Name'];
    $case->caseDate=$_POST['CaseDate'];
    $case->employeeID=$_POST['employeeID'];
    $case->analystID=$_POST['analystID'];
    $case->importerID=$_POST['importerID'];
    $case->paymentMethod=$_POST['PaymentMethod'];
    CaseCl::updateCase($case);
}
?>