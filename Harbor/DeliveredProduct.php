<?php
require_once "bootstrap.php";
require_once "Model/dbConfig.php";
require_once('./Model/Product.php');
$userID=$_GET['userID'];
?>

<html>
    <head>
    <title>Deliver it Now</title>
    </head>
<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-mid">You Have succussefully Delivered The Product</h2>
                        </div>
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
                                    include_once("Model/Product.php");
                                    $id = $_GET['id'];
                                    ProductCR::updateDelivery($id,3);
                                    $result=ProductCR::getRecord($id);
                                    while($row = mysqli_fetch_array($result))
                                    {
                                        echo "<tr>";
                                        echo "<td>" . $row['Name'] . "</td>";
                                        echo "<td>" . $row['Quantity'] . "</td>";
                                        echo "<td>" . $row['Weight'] . "</td>";
                                        echo "</tr>";
                                       
                                    }
                                echo "</tbody>";                            
                            echo "</table>";
                            
                            echo"<p><a href='DriverHome.php?userID=".$userID."'>Back</a></p>";
                    
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>