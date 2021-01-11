<?php
require_once("bootstrap.php");
//require_once("Controller/createUserController.php");
$ProductID=$_GET['id'];
include_once("Model/Product.php");
include_once("Controller/AnalyzeProduct.php");
include_once("Model/dbConfig.php");
$result=ProductCR::getRecord($ProductID);
$data=mysqli_fetch_assoc($result);
?>
<html>
    <head>
    <title>Analyze Product</title>
    </head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Analyze Product</h2>
                        <h3>ID: <?php echo $data['ID'] ?></h3>
                        <h3>Name: <?php echo $data['Name'] ?></h3>
                    </div> 
                    <form method="POST">
                            <label>Analyze Type</label>
                            <select name="AnalyzeType" class="form-control"> 
                            <?php 
                                    $sql = mysqli_query($conn, "select Name from lab_types");
                                    while ($row = $sql->fetch_assoc()){
                                    echo "<option value=".$row['Name'].">". $row['Name'] . "</option>";
                                    }
                                ?>
                            </select>
                        
                            <label>Status</label>
                            <select name="Status" class="form-control"> 
                            <option value="Approved">Approved</option>
                            <option value="Pending">Pending</option>
                            <option value="Refuse">Refuse</option>
                            </select>
                           
                            <label>Comment</label>
                            <textarea name="Comment" rows="2" cols="25" placeholder="Your Analyze"  class="form-control" required></textarea>

                            <input type="submit" name="AnalyzeSubmit" class="btn btn-primary" value="Submit">
                            <?php echo"<p><a href='indexAnalysis.php' class='btn btn-default'>Back</a></p>"?>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>