<?php
require_once('./Model/Payment.php');
$userType=$_GET['usrt'];
$pmthd=$_GET['pmthd'];
$cID=$_GET['cID'];

if(isset($_POST['Submit']))
{
    $payment = new Payment();

    if($pmthd==2||$pmthd==3)
    {
    $payment->cName=$_POST['cName'];
    $payment->cNumber=$_POST['cNumber'];
    $payment->expDate=$_POST['expDate'];
    $payment->cvv=$_POST['cvv'];
    }
    else if($pmthd==4)
    {
        $payment->pNumber=$_POST['pNumber'];
        $payment->serviceCode=$_POST['serviceCode'];
    }
    else if($pmthd==1)
    {
        $payment->email=$_POST['email'];
        $payment->password=$_POST['password'];
    }

    $userType=$_POST['usrt'];
    $pmthd=$_POST['pmthd'];
    $cID=$_POST['cID'];
    
    Payment::insertPayment($pmthd, $cID, $payment);
    header("location: ./indexCase.php?usrt=". $userType);
}
?>