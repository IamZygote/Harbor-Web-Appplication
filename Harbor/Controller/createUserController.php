<?php
require_once('./Model/User.php');
require_once('./createUser.php');

if(isset($_POST['UserSubmit']))
{
    $obj = new User();
    $obj->name = $_POST['Name'];
    $obj->password = $_POST['Password'];
    $obj->address = $_POST['Address'];
    $obj->userType = $_POST['UserType'];
    $obj->telephone = $_POST['Telephone'];
    $obj->email = $_POST['Email'];
    $obj->nationalID = $_POST['NationalID'];

    if($obj->userType==1)
    {
        $emp=new HarborEmployee();
        $obj->Salary=$emp->getSalary();
        $obj->WorkingHours=$emp->getWorkingHours();
        $obj->desc=$emp->getDescription();
    }
    if($obj->userType==2)
    {
        $driver=new Driverr();
        $obj->Salary=$driver->getSalary();
        $obj->WorkingHours=$driver->getWorkingHours();
        $obj->desc=$driver->getDescription();
    }
    if($obj->userType==3)
    {
        $analyst=new LabAnalyst();
        $obj->Salary=$analyst->getSalary();
        $obj->WorkingHours=$analyst->getWorkingHours();
        $obj->desc=$analyst->getDescription();
    }
    if($obj->userType==4)
    {
        $boss=new Manager();
        $obj->Salary=$boss->getSalary();
        $obj->WorkingHours=$boss->getWorkingHours();
        $obj->desc=$boss->getDescription();
    }
    if($obj->userType==5)
    {
        $obj->desc="importer";
    }
    if($obj->userType==6)
    {
        $schedul=new Shceduler();
        $obj->Salary=$schedul->getSalary();
        $obj->WorkingHours=$schedul->getWorkingHours();
        $obj->desc=$schedul->getDescription();
    }

    $count = 0;
    if($obj->userType<10)
    {
        $count++;
    }
    if($obj->telephone<99999999999)
    {
        $count++;
    }
    if($count==2)
    {
        User::createUser($obj);
    }
    else
    {
        echo "Data Is Incorrect";
    }
}

?>