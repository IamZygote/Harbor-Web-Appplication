<?php
require_once "bootstrap.php";
require_once "Model/dbConfig.php";
require_once('./Model/Product.php');
require_once("Controller/Sorting.php");
$userID=$_GET['userID'];
?>

<html>
    <head>
    <title>In Process Orders</title>
    </head>
<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Orders You Should Deliver</h2>
                        </div>
                        <form method="POST">
                        <input type="submit" name="SortByID" class="btn btn-primary" value="Sort By ID">
                        <input type="submit" name="SortByName" class="btn btn-primary" value="Sort By Name">
                        <input type="submit" name="SortByFinished" class="btn btn-primary" value="Sort By Finished">
                        </form>
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
                                    
                                    $result=sorted();

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
                            
                            echo"<p><a href='DriverHome.php?userID=".$userID."'>Back</a></p>";
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>