<?php
require_once('./Model/Schedule.php');
require_once('./updateTask.php');

if (isset($_POST['TaskUpdate']))
{
    $obje = new Schedule();
    $obje->AnalystID = $_POST['analystID']; 
    $obje->Product_ID = $_POST['Product_ID']; 
    $obje->Task_Name = $_POST['Task_Name'];
    $obje->Description = $_POST['Description'];
    Schedule::updateTask($obje);
}
?>