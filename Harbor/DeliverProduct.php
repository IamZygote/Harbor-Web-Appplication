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
                        <h2 class="pull-mid">Deliver this product to the Central Lab</h2>
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
                                    ProductCR::updateDelivery($id,2);
                                    ProductCR::updateProductDriver($id,$userID);
                                    $result=ProductCR::getRecord($id);
                                    while($row = mysqli_fetch_array($result))
                                    {
                                        echo "<tr>";
                                        echo "<td>" . $row['Name'] . "</td>";
                                        echo "<td>" . $row['Quantity'] . "</td>";
                                        echo "<td>" . $row['Weight'] . "</td>";
                                        echo "<td>" .  "</td>";
                                        echo "<td>";

                                        if($row['deliverFlag']==2)
                                        {
                                            echo "<a href='DeliveredProduct.php?id=". $row['ID']  ."&userID=".$userID."' class='btn btn-success pull-right'>Delivered</a>";
                                        }
                                        else
                                        {
                                            echo "<button type='button' disabled>Delivered</button> ";
                                        }
                                        echo "</td>";
                                        echo "</tr>";
                                        echo "<td>" .  "</td>";
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