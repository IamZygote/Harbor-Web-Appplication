<?php
require_once('dbConfig.php');

class Payment
{
    public $cName;
    public $cNumber;
    public $expDate;
    public $cvv;
    public $email;
    public $password;
    public $pNumber;
    public $serviceCode;

    public static function insertPayment($pID, $cID, $objPayment)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        if($pID==2||$pID==3)
        {
            $query = "insert into paymentoptionvalue (PaymentOptionID ,CaseID ,Value) values('1','$cID','$objPayment->cName')";
            $mysqli->query($query);

            $query = "insert into paymentoptionvalue (PaymentOptionID ,CaseID ,Value) values('2','$cID','$objPayment->expDate')";
            $mysqli->query($query);

            $query = "insert into paymentoptionvalue (PaymentOptionID ,CaseID ,Value) values('3','$cID','$objPayment->cNumber')";
            $mysqli->query($query);

            $query = "insert into paymentoptionvalue (PaymentOptionID ,CaseID ,Value) values('4','$cID','$objPayment->cvv')";
            $mysqli->query($query);

            echo"Data inserted succussefully";
        }
        else if($pID==4)
        {
            $query = "insert into paymentoptionvalue (PaymentOptionID ,CaseID ,Value) values('5','$cID','$objPayment->pNumber')";
            $mysqli->query($query);

            $query = "insert into paymentoptionvalue (PaymentOptionID ,CaseID ,Value) values('6','$cID','$objPayment->serviceCode')";
            $mysqli->query($query);

            echo"Data inserted succussefully";
        }
        else if($pID==1)
        {
            $query = "insert into paymentoptionvalue (PaymentOptionID ,CaseID ,Value) values('7','$cID','$objPayment->email')";
            $mysqli->query($query);

            $query = "insert into paymentoptionvalue (PaymentOptionID ,CaseID ,Value) values('8','$cID','$objPayment->password')";
            $mysqli->query($query);

            echo"Data inserted succussefully";
        }
        
    }
}
?>