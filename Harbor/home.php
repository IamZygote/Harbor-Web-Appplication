<?php
require_once("bootstrap.php");
require_once("Model/Notification.php");
$userType=$_GET['usrt'];
$result = Notify::ListProductAlert();
?>

<html>
<body>

<?php

echo "<script>
function getAlert(){
    alert('$result');
}
</script>";

if($userType==4)//Manager
{
    echo "<a href='calender.php?usrt=". $userType ."' class='btn btn-default'>Schedule</a>";
    echo "<a href='indexUser.php?usrt=". $userType ."' class='btn btn-default'>Manage Users</a>";
    echo "<a href='indexProduct.php?usrt=". $userType ."' class='btn btn-default'>Manage Products</a>";
    echo "<a href='indexCase.php?usrt=". $userType ."' class='btn btn-default'>Manage Case</a>";
    echo "<a href='ManageUsers.php?usrt=". $userType ."&see=1' class='btn btn-default'>Manager</a>";
}
else if($userType==1)//Employee
{
    echo "<a href='calender.php?usrt=". $userType ."' class='btn btn-default'>Schedule</a>";
    echo "<a href='indexProduct.php?usrt=". $userType ."' class='btn btn-default'>Manage Products</a>";
    echo "<a href='indexProduct.php?usrt=". $userType ."' class='btn btn-default'>Manage Products</a>";
    echo "<a href='indexCase.php?usrt=". $userType ."' class='btn btn-default'>Manage Case</a>";
}
else if($userType==6)//Scheduler
{
    echo "<a href='calender.php?usrt=". $userType ."' class='btn btn-default'>Schedule</a>";
    echo "<a href='indexProduct.php?usrt=". $userType ."' class='btn btn-default'>Manage Products</a>";
    echo "<a href='indexCase.php?usrt=". $userType ."' class='btn btn-default'>Manage Case</a>";
}
else if($userType==2)//Driver
{
    //echo "<script>alert('$result');</script>";
    $userID=$_GET['id'];
    echo "<a href='DriverHome.php?userID=". $userID ."' class='btn btn-default'>Driver Home</a>";
    echo "<button onclick='getAlert()'>Check for Latest Product</button>";
}
else if($userType==3)//Analyst
{
    echo "<a href='indexAnalysis.php?usrt=". $userType ."' class='btn btn-default'>Analyze</a>";
}
echo"<p><a href='login.php' class='btn btn-default'>Back</a></p>";
?>

</body>
</html>
