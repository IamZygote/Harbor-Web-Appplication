<?php
session_start();
$username=$_SESSION['Name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="CSS/index.css">
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

    <body>
        <pfbox>
            <img src="Material/usrimg.jpg" class="usrimg"></img>
            <pfboxdiv>
                <ul class="pfinfo">
                    <?php
                        echo"<li>Name: ". $username ."</li>";
                        echo"<li>Type:</li>";
                        
                    ?>
                </ul>
            </pfboxdiv>
        </pfbox>
        <a href="login.php" class="lgout">LOGOUT</a>
        <table class="prdctinfo">
        <?php
        // Include config file
        require_once "PHP/Controller/config.php";
        // Attempt select query execution
        $sql = "SELECT * FROM product";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                        echo "<tr>";
                            echo "<th>#</th>";
                            echo "<th>Name</th>";
                            echo "<th>Int_Date</th>";
                            echo "<th>Exp_Date</th>";
                            echo "<th>Description</th>";
                            echo "<th></th>";
                            echo "<th></th>";
                        echo "</tr>";
                    echo "<tbody>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>" . $row['ID'] . "</td>";
                            echo "<td>" . $row['Name'] . "</td>";
                            echo "<td>" . $row['Int_Date'] . "</td>";
                            echo "<td>" . $row['Exp_Date'] . "</td>";
                            echo "<td>" . $row['Description'] . "<td><a href='PHP/Controller/read.php?id=". $row['ID'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span>
                            </a><a href='PHP/Controller/delete.php?id=". $row['ID'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                            <a href='PHP/Controller/update.php?id=". $row['ID'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a></td></td>";
                            echo "<td><button class='analysis'>Send Analysis</button>
                            </td>";
                            echo "<tr>";
                            echo "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";                            
                echo "</table>";
                echo "<a href='PHP/Controller/create.php' class='addprdct'>" . "+" . "</a>";
                // Free result set
                mysqli_free_result($result);
            } else{
                echo "<td><em>No records were found.</em></td>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

        // Close connection
        mysqli_close($link);
        ?>
          </table>
    </body>
</html>