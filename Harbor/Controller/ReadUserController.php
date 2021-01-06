<?php
require_once('./Model/User.php');
require_once('./readUser.php');

if(isset($_GET['ID']))
{
    $user= new User();
    $user->name=$_POST['Name'];
    $user->Password=$_POST['Password'];
    $user->Address=$_POST['Address'];
    $user->UserType=$_POST['UserType'];
    $user->Telephone=$_POST['Telephone'];
    $user->Email=$_POST['Email'];
    $user->NationalID=$_POST['NationalID'];
    
    ProductCR::createUser($user);
}
?>