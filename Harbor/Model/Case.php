<?php
require_once('dbConfig.php');

class CaseCl
{
    public $id;
    public $name;
    public $caseDate;
    public $employeeID;
    public $analystID;
    public $importerID;
    public $paymentMethod;

    public static function CreateCase($objCase)
    {
        
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "insert into `case` (Name ,CaseDate ,EmployeeID ,AnalystID ,ImporterID ,PaymentMethod) 
        values('$objCase->name','$objCase->caseDate','$objCase->employeeID','$objCase->analystID','$objCase->importerID','$objCase->paymentMethod')";
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

    public static function ListView()
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM `case`";
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
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $idTask = $_GET['id'];
        $query= "update `case` SET Name='$objCase->name', CaseDate='$objCase->caseDate', EmployeeID='$objCase->employeeID', AnalystID='$objCase->analystID' ,ImporterID='$objCase->importerID' ,PaymentMethod='$objCase->paymentMethod' WHERE ID='$idTask'";
        $mysqli->query($query);
    }

    public static function deleteCase($id)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query= "delete FROM `case` WHERE id ='$id'";
        $mysqli->query($query);
    }
    
    
}

?>