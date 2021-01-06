<?php
require_once "bootstrap.php";
require_once "Controller/ManageUserController.php";
require_once("Model/User.php");
$id=$_GET['id'];
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
                        <h2>Manage User</h2>
                    </div>
                    <form method="POST">
                        
                            <label>Promotion (add more to Salary)</label>
                            <input type="number" name="Salary" class="form-control" required value="<?php echo $data['Salary'] ?>">
                        
                            <label>Add More Working Hours</label>
                            <input type="number" name="WorkingHours" class="form-control" required value="<?php echo $data['WorkingHours'] ?>">
                           
                            <label>Add Description</label>
                            <input type="text" name="Description" class="form-control" required value="<?php echo $data['Description'] ?>">
                            
                        
                            <input type="submit" name="ManageUser" class="btn btn-primary" value="Update">
                            <a href='ManageUsers.php?usrt=". $userType=4 ."&see=1' class='btn btn-default'>Back</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>