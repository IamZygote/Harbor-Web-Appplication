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
$cDetails = CaseCl::getCaseDetails($id);

?>
<html>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Report</h1>
                    </div>
                    <p class="form-control-static"><?php echo "CaseID: " . $row["ID"]; ?></p>
                    
                    <p class="form-control-static">:إنه في التاريخ الموافق 
                    <?php echo $row["CaseDate"]?> تم بحمد الله تعالى وتوفيقه الإلتفاق بين كل من</p>
                    
                    <p class="form-control-static"><?php echo $iName['Name']." : (المستورد) طرف أول   "; ?></p>

                    <p class="form-control-static"><?php echo $eName['Name']." : (ممثل الميناء) طرف ثاني  "; ?></p>
                    
                    <p class="form-control-static"><?php echo $aName['Name']." : (محلل البضائع) طرف ثالث  "; ?></p>

                    <p class="form-control-static"><?php echo "Payment Method: " . $row["PaymentMethod"]; ?></p>
                    
                    <table class='table table-bordered table-striped'>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Weight</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    echo "<tr>";
                                    echo "<td>" . $cDetails['Name'] . "</td>";
                                    echo "<td>" . $cDetails['Quantity'] . "</td>";
                                    echo "<td>" . $cDetails['Weight'] . "</td>";
                                    ?>
                                </tbody>                           
                    </table>
                    
                    <?php echo"<p><a href='indexCase.php?usrt=". $userType ."' class='btn btn-primary'>Back</a></p>"?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>