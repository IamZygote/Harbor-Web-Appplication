<?php
require_once "bootstrap.php";
require_once "Controller/updateUserController.php";
require_once("Model/User.php");
$id=$_GET['id'];
$userType=$_GET['usrt'];
$result= User::getRecord($id);
$data=mysqli_fetch_assoc($result);
?>

<html>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update User</h2>
                    </div>
                    <p><h1>Update User</h1></p>
                    <form method="POST">
                        
                            <label>Name</label>
                            <input type="text" name="Name" class="form-control" required value="<?php echo $data['Name'] ?>">
                        
                            <label>Password</label>
                            <input type="text" name="Password" class="form-control" required value="<?php echo $data['Password'] ?>">
                           
                            <label>Address</label>
                            <input type="text" name="Address" class="form-control" required value="<?php echo $data['Address'] ?>">
                            
                            <label>UserType</label>
                            <input type="number" name="UserType" class="form-control" required value="<?php echo $data['UserType'] ?>">

                            <label>Telephone</label>
                            <input type="tel" name="Telephone" class="form-control" required value="<?php echo $data['Telephone'] ?>">
                        
                            <label>Email</label>
                            <input type="email" name="Email" class="form-control" required value="<?php echo $data['Email'] ?>">

                            <label>NationalID</label>
                            <input type="number" name="NationalID" class="form-control" required value="<?php echo $data['NationalID'] ?>">
                        
                            <input type="submit" name="UserSubmit" class="btn btn-primary" value="Submit">
                            <?php echo"<p><a href='indexUser.php?usrt=". $userType ."' class='btn btn-default'>Back</a></p>"?>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>