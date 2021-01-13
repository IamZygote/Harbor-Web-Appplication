<?php
require_once "bootstrap.php";
require_once "Controller/UpdateCaseController.php";
require_once("Model/Case.php");
$id=$_GET['id'];
$userType=$_GET['usrt'];
$result= CaseCl::getRecord($id);
$data=mysqli_fetch_assoc($result);
?>

<html>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Case</h2>
                    </div>
                    <p><h1>Update Case</h1></p>
                    <form method="POST">
                        
                            <label>Title</label>
                            <input type="text" name="Name" class="form-control" required value="<?php echo $data['Name'] ?>">
                        
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
                            <input type="submit" name="CaseUpdate" class="btn btn-primary" value="Update">
                            <?php echo"<p><a href='indexCase.php?usrt=". $userType ."' class='btn btn-default'>Back</a></p>"?>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>