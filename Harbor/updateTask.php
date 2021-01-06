<?php
require_once "bootstrap.php";
require_once "Controller/updateTaskController.php";
require_once ("Model/Schedule.php");
$id = $_GET['id'];
$userType=$_GET['usrt'];
$result = Schedule::getRecord($id);
$data = mysqli_fetch_assoc($result);
?>
<html>
<head>
    <title>User Record</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2> Update User Info </h2>
                    </div>
                        <div class="card-body">
                        <form method="POST"action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" >
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
                            <input type="text" name="Task_Name" class="form-control" required value="<?php echo $data['Task_Name']?>">

                            <label>Description</label>
                            <input type="text" name="Description" class="form-control" required value="<?php echo $data['Description']?>">
                        
                            <input type="submit" name="TaskUpdate" class="btn btn-primary" value="Submit">
                            <?php echo"<p><a href='scheduleIndex.php?usrt=". $userType ."' class='btn btn-default'>Back</a></p>";?>
                    </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>