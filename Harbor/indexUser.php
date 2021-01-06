<?php
require_once "bootstrap.php";
$userType=$_GET['usrt'];
?>

<html>
    <head>
    <title>View Users</title>
    </head>
<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">User Details</h2>
                        <<?php echo "a href='createUser.php?usrt=". $userType ."' class='btn btn-success pull-right'>Add New User</a>";?>
                        </div>
                            <table class='table table-bordered table-striped'>
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Password</th>
                                        <th>Address</th>
                                        <th>UserType</th>                                       
                                        <th>Telephone</th>
                                        <th>Email</th>
                                        <th>NationalID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include_once("Model/User.php");
                                    $result=User::listUser();
                                    while($row = mysqli_fetch_array($result))
                                    {
                                        echo "<tr>";
                                        echo "<td>" . $row['ID'] . "</td>";
                                        echo "<td>" . $row['Name'] . "</td>";
                                        echo "<td>" . $row['Password'] . "</td>";
                                        echo "<td>" . $row['Address'] . "</td>";
                                        echo "<td>" . $row['UserType'] . "</td>";
                                        echo "<td>" . $row['Telephone'] . "</td>";
                                        echo "<td>" . $row['Email'] . "</td>";
                                        echo "<td>" . $row['NationalID'] . "</td>";
                                        echo "<td>" .  "</td>";
                                        echo "<td>";
                                        echo "<a href='readUser.php?usrt=". $userType ."&id=". $row['ID'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                        echo "<a href='updateUser.php?usrt=". $userType ."&id=". $row['ID'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                        echo "<a href='deleteUser.php?usrt=". $userType ."&id=". $row['ID'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
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