<?php
require_once('./Model/User.php');
require_once('./updateUser.php');

if(isset($_POST['UserSubmit']))
{
    $user= new User();
    $user->id=$_GET['id'];
    $user->name=$_POST['Name'];
    $user->Password=$_POST['Password'];
    $user->Address=$_POST['Address'];
    $user->UserType=$_POST['UserType'];
    $user->Telephone=$_POST['Telephone'];
    $user->Email=$_POST['Email'];
    $user->NationalID=$_POST['NationalID'];

    User::updateRecord($user);
}