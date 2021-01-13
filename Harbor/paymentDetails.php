<?php
require_once ("bootstrap.php");
require_once ("Controller/setPaymentController.php");
$userType=$_GET['usrt'];
$pmthd=$_GET['pmthd'];
$cID=$_GET['cID'];
?>

<head>
    <title>Insert Payment Details</title>
    </head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Insert Details</h2>
                    </div>
                    <form method="POST">

                    <?php
                    echo "<input type='hidden' name='usrt' value=$userType>";
                    echo "<input type='hidden' name='pmthd' value=$pmthd>";
                    echo "<input type='hidden' name='cID' value=$cID>";


                    if($pmthd==2||$pmthd==3)
                    {
                    echo "<label>Card Name</label>";
                    echo "<input type='text' name='cName' class='form-control' required>";

                    echo "<label>Card Number</label>";
                    echo "<input type='number' name='cNumber' class='form-control' required>";

                    echo "<label>Expire Date</label>";
                    echo "<input type='date' name='expDate' class='form-control' required>";

                    echo "<label>CVV</label>";
                    echo "<input type='number' name='cvv' class='form-control' required>";
                    }

                    else if($pmthd==4)
                    {
                    echo "<label>Phone Number</label>";
                    echo "<input type='text' name='pNumber' class='form-control' required>";

                    echo "<label>Service Code</label>";
                    echo "<input type='number' name='serviceCode' class='form-control' required>";
                    }

                    else if($pmthd==1)
                    {
                    echo "<label>Email</label>";
                    echo "<input type='text' name='email' class='form-control' required>";

                    echo "<label>Password</label>";
                    echo "<input type='password' name='password' class='form-control' required>";
                    }
                    ?>

                    <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>