<?php
require_once "bootstrap.php";
require_once("Model/Analyze.php");
$id=$_GET['id'];
$result= Analyze::getRecord($id);
$row=mysqli_fetch_assoc($result);
?>
<html>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Analysis</h1>
                    </div>
                    <div class="form-group">
                        <label>Product ID: </label>
                        <p class="form-control-static"><?php echo $row["ProductID"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Name:</label>
                        <p class="form-control-static"><?php echo $row["Name"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Analysis Types: </label>
                        <p class="form-control-static"><?php echo $row["AnalyzeType"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Status: </label>
                        <p class="form-control-static"><?php echo $row["Status"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Analysis: <br></label>
                        <p class="form-control-static"><?php echo nl2br($row["Comment"]);?></p>
                    </div>
                    <?php echo"<p><a href='AnalyzedBefore.php' class='btn btn-default'>Back</a></p>"?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>