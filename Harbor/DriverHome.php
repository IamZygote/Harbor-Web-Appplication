<?php
require_once "bootstrap.php";
require_once "Model/dbConfig.php";
require_once('./Model/Product.php');
require_once ('Model/Notification.php');
require_once ('Model/User.php');
$userID=$_GET['userID'];

?>

<html>
    <head>
    <title>Driver Home</title>
    </head>
<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Driver Home</h2>
                        <<?php echo "a href='InProcessDeliver.php?userID=". $userID ."' class='btn btn-success pull-right'>Orders History</a>";?>
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
                                    $result=ProductCR::ListView();
                                    while($row = mysqli_fetch_array($result))
                                    {
                                        echo "<tr>";
                                        echo "<td>" . $row['Name'] . "</td>";
                                        echo "<td>" . $row['Quantity'] . "</td>";
                                        echo "<td>" . $row['Weight'] . "</td>";
                                        echo "<td>" .  "</td>";
                                        echo "<td>";
                                        
                                        if($row['deliverFlag']==1)
                                        {
                                            echo "<a href='DeliverProduct.php?id=". $row['ID']  ."&userID=".$userID."' class='btn btn-success pull-right'>Deliver</a>";
                                        }
                                        else
                                        {
                                            echo "<button type='button' disabled>Deliver</button> ";
                                        }
                                        
                                        echo "</td>";
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
                            
                            echo"<p><a href='login.php?userID=".$userID."'>Back</a></p>";
                    
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>