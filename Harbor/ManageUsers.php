<?php
require_once "bootstrap.php";
$userType=$_GET['usrt'];
$see=$_GET['see'];
?>

<html>
    <head>
    <title>Manage Users</title>
    </head>
<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <a href='ManageUsers.php?usrt=". $userType=4 ."&see=1' class='btn btn-default'>Employees</a>
                <a href='ManageUsers.php?usrt=". $userType=4 ."&see=2' class='btn btn-default'>Drivers</a>
                <a href='ManageUsers.php?usrt=". $userType=4 ."&see=3' class='btn btn-default'>Analysts</a>
                <a href='ManageUsers.php?usrt=". $userType=4 ."&see=4' class='btn btn-default'>Managers</a>
                <a href='ManageUsers.php?usrt=". $userType=4 ."&see=5' class='btn btn-default'>Importers</a>
                <a href='ManageUsers.php?usrt=". $userType=4 ."&see=6' class='btn btn-default'>Scheduler</a>
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Manage Users</h2>
                        </div>
                            <table class='table table-bordered table-striped'>
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>                                   
                                        <th>Telephone</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include_once("Model/User.php");
                                    $result=User::listUserType($see);
                                    while($row = mysqli_fetch_array($result))
                                    {
                                        echo "<tr>";
                                        echo "<td>" . $row['ID'] . "</td>";
                                        echo "<td>" . $row['Name'] . "</td>";
                                        echo "<td>" . $row['Telephone'] . "</td>";
                                        echo "<td>" . $row['Email'] . "</td>";
                                        echo "<td>" .  "</td>";
                                        echo "<td>";
                                        echo "<a href='ManageUser.php?id=". $row['ID'] ."&Type=". $row['UserType'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                        echo "</td>";
                                        echo "</tr>";
                                        echo "<td>" .  "</td>";
                                    }
                                echo "</tbody>";                            
                            echo "</table>";

                            echo"<p><a href='home.php?usrt=4&id=0' class='btn btn-primary'>Back</a></p>";
                    
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>