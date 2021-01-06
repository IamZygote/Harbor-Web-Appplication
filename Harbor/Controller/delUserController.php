<?php
require_once("..\Model\User.php");
$ID = $_GET['id'];
User::deleteRecord($ID);
header("Location: ..\indexUser.php");
?>