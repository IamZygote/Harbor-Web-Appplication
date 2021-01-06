<?php
require_once("bootstrap.php");
require_once("Model/dbConfig.php");
require_once("Controller/CreateTaskController.php");
$userType=$_GET['usrt'];
?>
<html>
    <head>
    <title>Create Task</title>
    </head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p><h1>Add New Task</h1></p>
                    <form method="POST">
                          <div class="form-group >">
                            <label>Analyst</label>
                            <select name="analystID" class="form-control"> 
                                <?php 
                                    $sql = mysqli_query($conn, "SELECT Name , ID FROM user WHERE UserType = 3");
                                    while ($row = $sql->fetch_assoc()){
                                    echo "<option value=".$row['ID'].">" .$row['ID'] ." - ".$row['Name'] . "</option>";
                                    }
                                ?>
                            </select>
                            <label>Product ID</label>
                            <select name="Product_ID" class="form-control"> 
                                <?php 
                                    $sql = mysqli_query($conn, "SELECT Name , ID FROM product");
                                    while ($row = $sql->fetch_assoc()){
                                    echo "<option value=".$row['ID'].">" .$row['ID'] ." - ".$row['Name'] . "</option>";
                                    }
                                ?>
                            </select>
                            </div>
                            <label>Task Name</label>
                            <input type="text" name="Task_Name" class="form-control" required>

                            <label>Description</label>
                            <input type="text" name="Description" class="form-control" required>
                        
                            <input type="submit" name="TaskSubmit" class="btn btn-primary" value="Submit">
                            <?php echo"<p><a href='scheduleIndex.php?usrt=". $userType ."' class='btn btn-default'>Back</a></p>";?>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>