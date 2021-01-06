<?php
require_once('./Model/User.php');
require_once('./ManageUser.php');
$type=$_GET['Type'];

if(isset($_POST['ManageUser']))
{
    $obj= new User();
    $obj->Salary=$_POST['Salary'];
    $obj->WorkingHours=$_POST['WorkingHours'];
    $obj->desc=$_POST['Description'];
    

    /////
    if($type==1)
    {
        $emp=new HarborEmployee();
        $emp->PlusMoney($obj->Salary);
        $obj->Salary=$emp->getSalary();
        $emp->PlusWH($obj->WorkingHours);
        $obj->WorkingHours=$emp->getWorkingHours();
        $emp->addDescription($obj->desc);
        $obj->desc=$emp->getDescription();
    }
    if($type==2)
    {
        $emp=new Driverr();
        $emp->PlusMoney($obj->Salary);
        $obj->Salary=$emp->getSalary();
        $emp->PlusWH($obj->WorkingHours);
        $obj->WorkingHours=$emp->getWorkingHours();
        $emp->addDescription($obj->desc);
        $obj->desc=$emp->getDescription();
    }
    if($type==3)
    {
        $emp=new LabAnalyst();
        $emp->PlusMoney($obj->Salary);
        $obj->Salary=$emp->getSalary();
        $emp->PlusWH($obj->WorkingHours);
        $obj->WorkingHours=$emp->getWorkingHours();
        $emp->addDescription($obj->desc);
        $obj->desc=$emp->getDescription();
    }
    if($type==4)
    {
        $emp=new Manager();
        $emp->PlusMoney($obj->Salary);
        $obj->Salary=$emp->getSalary();
        $emp->PlusWH($obj->WorkingHours);
        $obj->WorkingHours=$emp->getWorkingHours();
        $emp->addDescription($obj->desc);
        $obj->desc=$emp->getDescription();
    }
    if($type==5)
    {
        $obj->desc="importer";
    }
    if($type==6)
    {
        $emp=new Shceduler();
        $emp->PlusMoney($obj->Salary);
        $obj->Salary=$emp->getSalary();
        $emp->PlusWH($obj->WorkingHours);
        $obj->WorkingHours=$emp->getWorkingHours();
        $emp->addDescription($obj->desc);
        $obj->desc=$emp->getDescription();
    }

    $count = 0;
    if($obj->WorkingHours<20)
    {
        $count++;
    }
    if($obj->Salary<10000)
    {
        $count++;
    }
    if($count==2)
    {
        User::ManageUserData($obj);
    }
    else
    {
        echo "Data Is Incorrect";
    }
}
?>