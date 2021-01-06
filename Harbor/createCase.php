<?php
require_once("bootstrap.php");
require_once "Controller/CreateCaseController.php";
$userType=$_GET['usrt'];
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
                        
                            <label>Title</label>
                            <input type="text" name="Name" class="form-control" required>
                        
                            <label>CaseDate</label>
                            <input type="date" name="CaseDate" class="form-control" required>
                           
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
                        
                            <label>Payment Method</label>
                            <input type="text" name="PaymentMethod" class="form-control" required>
                        
                            <input type="submit" name="CaseSubmit" class="btn btn-primary" value="Submit">
                            <?php echo"<p><a href='indexCase.php?usrt=". $userType ."' class='btn btn-default'>Back</a></p>"?>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>