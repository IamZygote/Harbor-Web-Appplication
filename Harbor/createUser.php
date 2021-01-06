<?php
require_once("bootstrap.php");
require_once("Controller/createUserController.php");
$userType=$_GET['usrt'];
?>
<html>
    <head>
    <title>Create User</title>
    </head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p><h1>Add User</h1></p>
                    <form method="POST">
                        
                            <label>Name</label>
                            <input type="text" name="Name" class="form-control" required>
                        
                            <label>Password</label>
                            <input type="text" name="Password" class="form-control" required>
                           
                            <label>Address</label>
                            <input type="text" name="Address" class="form-control" required>
                            
                            <label>UserType</label>
                            <input type="number" name="UserType" class="form-control" required>

                            <label>Telephone</label>
                            <input type="tel" name="Telephone" class="form-control" required>
                        
                            <label>Email</label>
                            <input type="email" name="Email" class="form-control" required>

                            <label>NationalID</label>
                            <input type="number" name="NationalID" class="form-control" required>
                        
                            <input type="submit" name="UserSubmit" class="btn btn-primary" value="Submit">
                            <?php echo"<p><a href='indexUser.php?usrt=". $userType ."' class='btn btn-default'>Back</a></p>"?>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>