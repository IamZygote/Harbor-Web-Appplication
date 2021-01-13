<?php
require_once("bootstrap.php");
$userType=$_GET['usrt'];
require_once ("Controller/CreateCaseController.php");
?>
<html>
    <head>
    <title>Create Case</title>
    </head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p><h1>Add Case</h1></p>
                        <form method="POST">
                            <?php
                            echo "<input type='hidden' name='usrt' value=$userType>";
                            ?>
                            <label>Title</label>
                            <input type="text" name="Name" class="form-control" required>
                           
                            <label>Employee</label>
                            <select name="employeeID" class="form-control">
                            <?php
                                include_once("Model/Case.php");
                                $result= CaseCl::ListEmployee();
                                while ($row = $result->fetch_assoc())
                                {
                                    echo "<option value=".$row['ID'].">" .$row['ID'] ." - ".$row['Name'] . "</option>";
                                }
                            ?>
                            </select>
                            
                            <label>Analyst ID</label>
                            <select name="analystID" class="form-control">
                            <?php
                                include_once("Model/Case.php");
                                $result= CaseCl::ListAnalyst();
                                while ($row = $result->fetch_assoc())
                                {
                                    echo "<option value=".$row['ID'].">" .$row['ID'] ." - ".$row['Name'] . "</option>";
                                }
                            ?>
                            </select>

                            <label>Importer ID</label>
                            <select name="importerID" class="form-control">
                            <?php
                                include_once("Model/Case.php");
                                $result= CaseCl::ListImporter();
                                while ($row = $result->fetch_assoc())
                                {
                                    echo "<option value=".$row['ID'].">" .$row['ID'] ." - ".$row['Name'] . "</option>";
                                }
                            ?>
                            </select>

                            <label>Product ID</label>
                            <select name="productID" class="form-control">
                            <?php
                                include_once("Model/Product.php");
                                $result= ProductCR::ListView();
                                while ($row = $result->fetch_assoc())
                                {
                                    echo "<option value=".$row['ID'].">" .$row['ID'] ." - ".$row['Name'] . "</option>";
                                }
                            ?>
                            </select>
                        
                            <label>Payment Method</label>
                            <select name="paymentMethod" class="form-control">
                            <?php
                                include_once("Model/Case.php");
                                $result= CaseCl::ListPayment();
                                while ($row = $result->fetch_assoc())
                                {
                                    echo "<option value=".$row['ID'].">" .$row['ID'] ." - ".$row['Name'] . "</option>";
                                }
                            ?>
                            </select>
                        
                            <input type="submit" name="CaseSubmit" class="btn btn-primary" value="Submit">
                            <?php echo "<a href='indexCase.php?usrt=". $userType ."' class='btn btn-default'>Back</a></p>";?>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>