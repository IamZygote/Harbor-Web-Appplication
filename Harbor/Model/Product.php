<?php
require_once('dbConfig.php');
interface sort
{
    public static function Sorting($DriverID);
}

class SortByName implements sort
{
    public static function Sorting($DriverID)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM product WHERE driverID='$DriverID'ORDER BY Name ";
        $result=$mysqli->query($query);
        return $result;
    }
}

class SortByFinished implements sort
{
    public static function Sorting($DriverID)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM product WHERE driverID='$DriverID'ORDER BY deliverFlag ";
        $result=$mysqli->query($query);
        return $result;
    }
}

class SortByID implements sort
{
    public static function Sorting($DriverID)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM product  WHERE driverID='$DriverID' ORDER BY ID";
        $result=$mysqli->query($query);
        return $result;
    }
}

class ProductCR
{
    public $id,$name, $ImportedCountry, $EnteranceDate, $Quantity, $desc, $Weight,$productType, $deliverFlag;

    public static function CreateProduct($objProduct)
    {
        
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "insert into product (Name ,ImportedCountry ,Description ,EnteranceDate ,Quantity ,Weight, deliverFlag ) values('$objProduct->name','$objProduct->ImportedCountry','$objProduct->desc','$objProduct->EnteranceDate','$objProduct->Quantity','$objProduct->Weight','1')";
        $mysqli->query($query);
        echo"Data inserted succussefully";
    }

    public static function ListView()
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM product";
        $result=$mysqli->query($query);
        return $result;
    }

    public static function InProcessOrders($DriverID)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM product WHERE driverID='$DriverID'";
        $result=$mysqli->query($query);
        return $result;
    }

    public static function readProduct()
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM product WHERE id=";
        $result=$mysqli->query($query);
        return $result;
    }

    public static function getRecord($id)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM product WHERE id='$id'";
        $result=$mysqli->query($query);
        return $result;
    }

    public static function updateProduct(ProductCR $objProduct)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $idTask = $_GET['id'];
        $query= "update product SET Name='$objProduct->name', ImportedCountry='$objProduct->ImportedCountry', Description='$objProduct->desc', EnteranceDate='$objProduct->EnteranceDate' ,Quantity='$objProduct->Quantity' ,Weight='$objProduct->Weight' WHERE ID='$idTask'";
        $mysqli->query($query);


        
    }

    public static function deleteProduct($id)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query= "delete FROM product WHERE id ='$id'";
        $mysqli->query($query);
    }

    public static function updateDelivery($deleviryID,$Flag)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "update product SET deliverFlag=$Flag WHERE ID=".$deleviryID;
        $mysqli->query($query);
    }

    public static function updateProductDriver($deleviryID,$userID)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "update product SET driverID=$userID WHERE ID=".$deleviryID;
        $mysqli->query($query);
    }
    
    
}

?>
