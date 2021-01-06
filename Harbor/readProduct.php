<?php
require_once "bootstrap.php";
require_once "Controller/readProductController.php";
require_once("Model/Product.php");
$id=$_GET['id'];
$userType=$_GET['usrt'];
$result= ProductCR::getRecord($id);
$row=mysqli_fetch_assoc($result);
?>
<html>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Record of Product</h1>
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
                        <label>Imported Country</label>
                        <p class="form-control-static"><?php echo $row["ImportedCountry"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <p class="form-control-static"><?php echo $row["Description"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>EnteranceDate</label>
                        <p class="form-control-static"><?php echo $row["EnteranceDate"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <p class="form-control-static"><?php echo $row["Quantity"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Weight</label>
                        <p class="form-control-static"><?php echo $row["Weight"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>ProductType</label>
                        <p class="form-control-static"><?php echo $row["ProductType"]; ?></p>
                    </div>
                    <?php echo"<p><a href='indexProduct.php?usrt=". $userType ."' class='btn btn-primary'>Back</a></p>"?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>