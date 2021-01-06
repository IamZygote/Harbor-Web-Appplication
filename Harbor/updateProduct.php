<?php
require_once "bootstrap.php";
require_once "Controller/updateProductController.php";
require_once("Model/Product.php");
$id=$_GET['id'];
$userType=$_GET['usrt'];
$result= ProductCR::getRecord($id);
$data=mysqli_fetch_assoc($result);
?>

<html>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p><h1>Add Product</h1></p>
                    <form method="POST">
                        
                            <label>Name</label>
                            <input type="text" name="Name" class="form-control" required value="<?php echo $data['Name'] ?>">
                        
                            <label>Imported Country</label>
                            <input type="text" name="ImportedCountry" class="form-control" required value="<?php echo $data['ImportedCountry'] ?>">
                           
                            <label>Enterance Date</label>
                            <input type="date" name="EnteranceDate" class="form-control" required value="<?php echo $data['EnteranceDate'] ?>">
                            
                            <label>Quantity</label>
                            <input type="number" name="Quantity" class="form-control" required value="<?php echo $data['Quantity'] ?>">

                            <label>Description</label>
                            <input type="text" name="Description" class="form-control" required value="<?php echo $data['Description'] ?>">
                        
                            <label>Weight</label>
                            <input type="number" name="Weight" class="form-control" required value="<?php echo $data['Weight'] ?>">
                        
                            <input type="submit" name="ProductUpdate" class="btn btn-primary" value="Update">
                            <?php echo"<p><a href='indexProduct.php?usrt=". $userType ."' class='btn btn-default'>Back</a></p>"?>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>