<?php
require_once("bootstrap.php");
require_once "Controller/CreateProductController.php";
$userType=$_GET['usrt'];
?>
<html>
    <head>
    <title>Create Product</title>
    </head>
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
                            <input type="text" name="Name" class="form-control" required>
                        
                            <label>Imported Country</label>
                            <input type="text" name="ImportedCountry" class="form-control" required>
                           
                            <label>Enterance Date</label>
                            <input type="date" name="EnteranceDate" class="form-control" required>
                            
                            <label>Quantity</label>
                            <input type="number" name="Quantity" class="form-control" required>

                            <label>Description</label>
                            <input type="text" name="Description" class="form-control" required>
                        
                            <label>Weight</label>
                            <input type="number" name="Weight" class="form-control" required>
                        
                            <input type="submit" name="ProductSubmit" class="btn btn-primary" value="Submit">
                            <?php echo"<p><a href='indexProduct.php?usrt=". $userType ."' class='btn btn-default'>Back</a></p>"?>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>