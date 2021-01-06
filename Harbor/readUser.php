<?php
require_once "bootstrap.php";
require_once "Controller/readUserController.php";
require_once("Model/User.php");
$id=$_GET['id'];
$userType=$_GET['usrt'];
$result= User::getRecord($id);
$row=mysqli_fetch_assoc($result);
?>
<html>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Record of User</h1>
                    </div>
                    <div class="form-group">
                        <label>ID</label>
                        <p class="form-control-static"><?php echo $row["ID"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <p class="form-control-static"><?php echo $row["Name"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <p class="form-control-static"><?php echo $row["Password"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <p class="form-control-static"><?php echo $row["Address"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>UserType</label>
                        <p class="form-control-static"><?php echo $row["UserType"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Telephone</label>
                        <p class="form-control-static"><?php echo $row["Telephone"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <p class="form-control-static"><?php echo $row["Email"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>NationalID</label>
                        <p class="form-control-static"><?php echo $row["NationalID"]; ?></p>
                    </div>
                    <?php echo"<p><a href='indexUser.php?usrt=". $userType ."' class='btn btn-primary'>Back</a></p>"?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>