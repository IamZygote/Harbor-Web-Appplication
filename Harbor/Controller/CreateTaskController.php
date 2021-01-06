<?php
require_once('./Model/Schedule.php');
require_once('./CreateTask.php');

if(isset($_POST['TaskSubmit']))
{
    $scheudle= new Schedule();
    
    $scheudle->AnalystID=$_POST['analystID'];
    $scheudle->Product_ID=$_POST['Product_ID'];
    $scheudle->Task_Name=$_POST['Task_Name'];
    $scheudle->Description=$_POST['Description'];
    
    Schedule::CreateSchedule($scheudle);
}
?>