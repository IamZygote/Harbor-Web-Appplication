<?php
require_once "bootstrap.php";
$userType=$_GET['usrt'];
?>

<html>
    <head>
    <title>View Cases</title>
    </head>
<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Cases Details</h2>
                        <<?php echo "a href='createCase.php?usrt=". $userType ."' class='btn btn-success pull-right'>Add New Case</a>";?>
                        </div>
                            <table class='table table-bordered table-striped'>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>EmployeeID</th>
                                        <th>AnalystID</th>                                       
                                        <th>ImporterID</th>
                                        <th>PaymentMethod</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include_once("Model/Case.php");
                                    $result= CaseCl::ListView();
                                    while($row = mysqli_fetch_array($result))
                                    {
                                        echo "<tr>";
                                        echo "<td>" . $row['ID'] . "</td>";
                                        echo "<td>" . $row['Name'] . "</td>";
                                        echo "<td>" . $row['EmployeeID'] . "</td>";
                                        echo "<td>" . $row['AnalystID'] . "</td>";
                                        echo "<td>" . $row['ImporterID'] . "</td>";
                                        echo "<td>" . $row['PaymentMethod'] . "</td>";
                                        echo "<td>" .  "</td>";
                                        echo "<td>";
                                            echo "<a href='readCase.php?usrt=". $userType ."&id=". $row['ID'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='updateCase.php?usrt=". $userType ."&id=". $row['ID'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='deleteCase.php?usrt=". $userType ."&id=". $row['ID'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
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