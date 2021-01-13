<?php
require_once('dbConfig.php');

class CaseCl
{
    public $id;
    public $name;
    public $employeeID;
    public $analystID;
    public $importerID;
    public $paymentMethod;

    public static function CreateCase($objCase)
    {
        
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "insert into `case` (Name ,EmployeeID ,AnalystID ,ImporterID ,PaymentMethod) 
        values('$objCase->name','$objCase->employeeID','$objCase->analystID','$objCase->importerID','$objCase->paymentMethod')";
        $mysqli->query($query);

        $objCase->id=$objCase->id+1;
        $query = "insert into `case_details` (ProductID ,CaseID) 
        values('$objCase->productID','$objCase->id')";
        $mysqli->query($query);
        
        echo"Data inserted succussefully";
    }

    public static function getUserFromID($id)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection();
        $query = "select Name FROM user WHERE ID = '$id'";
        $result=$mysqli->query($query);
        $result=mysqli_fetch_assoc($result);
        return $result;
    }

    public static function getLastCase()
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection();
        $query = mysqli_query($mysqli,"select ID FROM `case`");

        while ($row = $query->fetch_assoc())
        {
            $cID = $row['ID'];
            
        }
        return $cID;
    }

    public static function getPaymentFromID($id)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection();
        $query = "select Name FROM payment_method WHERE ID = '$id'";
        $result=$mysqli->query($query);
        $result=mysqli_fetch_assoc($result);
        return $result;
    }

    public static function ListView()
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM `case` WHERE isDeleted = '0'";
        $result=$mysqli->query($query);
        return $result;
    }

    public static function ListEmployee()
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select Name, ID FROM user WHERE UserType = '1'";
        $result=$mysqli->query($query);
        return $result;
    }

    public static function ListAnalyst()
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select Name, ID FROM user WHERE UserType = '3'";
        $result=$mysqli->query($query);
        return $result;
    }

    public static function ListImporter()
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select Name, ID FROM user WHERE UserType = '5'";
        $result=$mysqli->query($query);
        return $result;
    }
    public static function ListPayment()
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select Name, ID FROM payment_method";
        $result=$mysqli->query($query);
        return $result;
    }

    public static function getCaseDetails($id)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select ProductID FROM `case_details` WHERE CaseID='$id'";
        $result1=$mysqli->query($query);
        $result1=mysqli_fetch_assoc($result1);
        $productID=$result1["ProductID"];

        $query = "select Name,Quantity,Weight FROM product WHERE ID='$productID'";
        $result2=$mysqli->query($query);
        $result2=mysqli_fetch_assoc($result2);

        return $result2;
    }

    public static function readCase()
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM `case` WHERE id=";
        $result=$mysqli->query($query);
        return $result;
    }

    public static function getRecord($id)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM `case` WHERE id='$id'";
        $result=$mysqli->query($query);
        return $result;
    }

    public static function updateCase(CaseCl $objCase)
    {
        $x=date("Y-m-d");
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $idTask = $_GET['id'];
        $query= "Update `case` SET Name='$objCase->name', EmployeeID='$objCase->employeeID', AnalystID='$objCase->analystID' ,ImporterID='$objCase->importerID' ,Updatedat='$x' WHERE ID='$idTask'";
        $mysqli->query($query);
        $query2 = "update `case_details` SET ProductID='$objCase->productID' WHERE CaseID='$idTask'";
        $mysqli->query($query2);
    }

    public static function deleteCase($id)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query2= "Update `case_details` SET isDeleted='1' WHERE CaseID='$id'";
        $query= "Update `case` SET isDeleted='1' WHERE ID='$id'";
        $mysqli->query($query);
        $mysqli->query($query2);
    }
    
    
}

?>