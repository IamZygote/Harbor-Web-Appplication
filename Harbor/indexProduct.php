<?php
require_once "bootstrap.php";
$userType=$_GET['usrt'];
?>

<html>
    <head>
    <title>View Products</title>
    </head>
<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Product Details</h2>
                        <<?php echo "a href='CreateProduct.php?usrt=". $userType ."' class='btn btn-success pull-right'>Add New Product</a>";?>
                        </div>
                            <table class='table table-bordered table-striped'>
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>ImportedCountry</th>
                                        <th>EnteranceDate</th>
                                        <th>Quantity</th>                                       
                                        <th>Weight</th>
                                        <th>ProductType</th>
                                        <th>ParentKey</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include_once("Model/Product.php");
                                    $result=ProductCR::ListView();
                                    while($row = mysqli_fetch_array($result))
                                    {
                                        echo "<tr>";
                                        echo "<td>" . $row['ID'] . "</td>";
                                        echo "<td>" . $row['Name'] . "</td>";
                                        echo "<td>" . $row['ImportedCountry'] . "</td>";
                                        echo "<td>" . $row['EnteranceDate'] . "</td>";
                                        echo "<td>" . $row['Quantity'] . "</td>";
                                        echo "<td>" . $row['Weight'] . "</td>";
                                        echo "<td>" . $row['ProductType'] . "</td>";
                                        echo "<td>" .  "</td>";
                                        echo "<td>";
                                            echo "<a href='readProduct.php?usrt=". $userType ."&id=". $row['ID'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='updateProduct.php?usrt=". $userType ."&id=". $row['ID'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='deleteProduct.php?usrt=". $userType ."&id=". $row['ID'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                        echo "</tr>";
                                        echo "<td>" .  "</td>";
                                    }
                                echo "</tbody>";                            
                            echo "</table>";
                            
                            echo"<p><a href='home.php?usrt=". $userType ."' class='btn btn-primary'>Back</a></p>";
                    
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>