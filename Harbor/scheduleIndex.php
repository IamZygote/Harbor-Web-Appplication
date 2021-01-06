
<?php
require_once "bootstrap.php";
$userType=$_GET['usrt'];
?>
<html>
    <head>
    <title>View Tasks</title>
    </head>
<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Tasks Details</h2>
                        <?php
                        if($userType==6)
                        {
                            echo "<a href='CreateTask.php?usrt=". $userType ."' class='btn btn-success pull-right'>Add New Task</a>";
                        }
                        ?>
                        </div>
                            <table class='table table-bordered table-striped'>
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Product ID</th>
                                        <th>Task Name</th>
                                        <th>AnalystID</th>
                                        <th>Description</th>
                                        <th></th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include_once("Model/Schedule.php");
                                    $result=Schedule::ListView();
                                    while($row = mysqli_fetch_array($result))
                                    {
                                        echo "<tr>";
                                        echo "<td>" . $row['ID'] . "</td>";
                                        echo "<td>" . $row['Product_ID'] . "</td>";
                                        echo "<td>" . $row['Task_Name'] . "</td>";
                                        echo "<td>" . $row['AnalystID'] . "</td>";
                                        echo "<td>" . $row['Description'] . "</td>";
                                        echo "<td>" .  "</td>";
                                        echo "<td>";
                                        if($userType==6)
                                        {
                                            echo "<a href='updateTask.php?usrt=". $userType ."&id=". $row['ID'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='deleteTask.php?usrt=". $userType ."&id=". $row['ID'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        }
                                        echo "</td>";
                                        echo "</tr>";
                                        echo "<td>" .  "</td>";
                                    }
                                echo "</tbody>";                            
                            echo "</table>";
                            echo"<p><a href='calender.php?usrt=". $userType ."' class='btn btn-primary'>Back</a></p>";
                    
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>