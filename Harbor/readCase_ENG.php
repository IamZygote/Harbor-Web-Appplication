<?php
require_once "bootstrap.php";
require_once "Controller/readCaseController.php";
require_once("Model/Case.php");
$id=$_GET['id'];
$userType=$_GET['usrt'];
$result= CaseCl::getRecord($id);
$row=mysqli_fetch_assoc($result);
$eName = CaseCl::getUserFromID($row["EmployeeID"]);
$aName = CaseCl::getUserFromID($row["AnalystID"]);
$iName = CaseCl::getUserFromID($row["ImporterID"]);

?>
<html>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Record of Case</h1>
                    </div>
                    <div class="form-group">
                        <label>ID</label>
                        <p class="form-control-static"><?php echo $row["ID"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <p class="form-control-static"><?php echo $row["Name"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Case Date</label>
                        <p class="form-control-static"><?php echo $row["CaseDate"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Employee Name</label>
                        <p class="form-control-static"><?php echo $eName["Name"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Analyst ID</label>
                        <p class="form-control-static"><?php echo $aName["Name"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Importer ID</label>
                        <p class="form-control-static"><?php echo $iName["Name"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Payment Method</label>
                        <p class="form-control-static"><?php echo $row["PaymentMethod"]; ?></p>
                    </div>
                    <?php echo"<p><a href='indexCase.php?usrt=". $userType ."' class='btn btn-primary'>Back</a></p>"?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>