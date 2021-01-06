<?php
require_once "bootstrap.php";
require_once("Model/Case.php");
$id=$_GET['id'];
$userType=$_GET['usrt'];

?>
<?php $result= CaseCl::deleteCase($id);?>
<html>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Delete Record</h1>
                    </div>
                    <form <?php echo "action='indexCase.php?usrt=". $userType ."'";?> method="post">
                        <div class="alert alert-danger fade in">
                            <p>Your Data has been Deleted Succussefully</p><br>
                            <p>
                                <input type="submit" value="Ok" class="btn btn-danger">
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>