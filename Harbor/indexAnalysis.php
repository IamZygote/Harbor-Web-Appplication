<?php
require_once "bootstrap.php";
?>

<html>
    <head>
    <title>Analysis</title>
    </head>
<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Analysis</h2>
                        </div>
                        <?php echo"<p><a href='AnalyzedBefore.php' class='btn btn-default'>Show Reports</a></p>"?>
                            <table class='table table-bordered table-striped'>
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th></th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include_once("Model/Analyze.php");
                                    $result=Analyze::DeliveredProducts();
                                    while($row = mysqli_fetch_array($result))
                                    {
                                        echo "<tr>";
                                        echo "<td>" . $row['ID'] . "</td>";
                                        echo "<td>" . $row['Name'] . "</td>";
                                        echo "<td>" .  "</td>";
                                        echo "<td>";
                                        echo "<a href='AnalyzeProduct.php?id=". $row['ID'] ."&&Name=".$row['Name']."' class='btn btn-success pull-right'>Analyze</a>";
                                        echo "</td>";
                                        echo "</tr>";
                                        echo "<td>" .  "</td>";
                                    }
                                echo "</tbody>";                            
                            echo "</table>";
                            
                            echo"<p><a href='home.php?usrt=3' class='btn btn-primary'>Back</a></p>";
                    
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>