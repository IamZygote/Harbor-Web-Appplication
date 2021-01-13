<?php
require_once('dbConfig.php');


class Schedule
{
    public $id,$Product_ID, $Task_Name, $AnalystID, $Description;

    public static function CreateSchedule($objSchedule)
    {	
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "insert into schedule (Product_ID ,Task_Name ,AnalystID ,Description) 
        values('$objSchedule->Product_ID','$objSchedule->Task_Name','$objSchedule->AnalystID','$objSchedule->Description')";
        $mysqli->query($query);
        echo"Data inserted succussefully";
    }

    public static function ListView()
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM schedule WHERE isDeleted='0'";
        $result=$mysqli->query($query);
        return $result;
    }

    public static function deleteTask($id)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query= "update schedule SET isDeleted='1' WHERE id ='$id'";
        $result=$mysqli->query($query);
    }
    public $varr;

    public static function getRecord($id)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM schedule WHERE id='$id'";
        $result=$mysqli->query($query);


        return $result;
    }
    public static function updateTask(Schedule $objUpdate)
    {
        $x=date("Y-m-d");
        $idTask=$objUpdate->id;
        $analystID=$objUpdate->AnalystID;
        $taskName=$objUpdate->Task_Name;
        $productID=$objUpdate->Product_ID;
        $desc=$objUpdate->Description;

        $idTask = $_GET['id'];

        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "update schedule SET Product_ID='$productID', Task_Name='$taskName', AnalystID='$analystID', Description='$desc',Updatedat='$x' where ID= '$idTask'";
        $mysqli->query($query);
    }
}