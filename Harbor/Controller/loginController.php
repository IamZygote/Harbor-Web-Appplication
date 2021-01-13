<?php
require_once("../Model/User.php");
require_once ("../Model/Notification.php");

$usrname = $_GET['username'];
$pswrd = $_GET['password'];
$userType = 0;
$userType = User::checkLogin($usrname, $pswrd);//sending values and waiting func. from user.php to return userType
$userID=User::returnUserID($usrname, $pswrd);


if($userType==0)
{
    echo("wrong data");
}
else
{
    if($userType ==1 || $userType == 4)
    {
        file_put_contents("../lastProductID.txt", "");
        $myfile = fopen("../lastProductID.txt", "w") or die("Unable to open file!");
        $idCount = Notify::getLastProduct();
        fwrite($myfile, $idCount);
        fclose($myfile);
    }

    if($userType == 2)
    {
        $myfile = fopen("../lastProductID.txt", "r") or die("Unable to open file!");
        $idCount = fread($myfile,filesize("../lastProductID.txt"));
        fclose($myfile);
        $result = Notify::ListProductEmail($idCount);
        $email= User::returnUserEmail($userID);
        Notify::sendEmail($email, $result);
    }
    
    header("location: ..\home.php?usrt=". $userType."&id=".$userID);
}


/*if($userType==0)
{
    echo("wrong data");
}
if($userType == 1)
{
    header("location: ..\home.php");
    exit();//gotoemployee page ***left it blank coz whatever i do it won't riderect to any other page coz fuck life****
}
else if($userType == 3)
{
    //go to analyst page
}
else if($userType == 4)
{
    header("location: ..\home.php");//go to manager page
}*/

?>