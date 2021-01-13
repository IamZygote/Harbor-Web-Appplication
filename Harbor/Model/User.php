<?php
require_once('dbConfig.php');

abstract class UserType
{
    public $Type="";
}
abstract class employee extends UserType
{
    public $WorkingHours;
    public $Salary;
    protected $emp;
    function __construct(UserType $User)
    {
      $this->emp = $User;
    }
    function description ($Typee)
    {
      $this->Type=" $Typee";
    }

    function getSalary()
    {
        return $this->Salary;
    }
    function getWorkingHours()
    {
        return $this->WorkingHours;
    }
    function getDescription()
    {
        return $this->Type;
    }
}
class Driverr extends employee
{
    function __construct()
    {
      $this->description("Driver");
      $this->Salary=3000;
      $this->WorkingHours=8;
    }
    public function PlusMoney($Zyada)
    {
        $this->Salary+=$Zyada;
    }
    public function PlusWH($Zyada)
    {
        $this->WorkingHours+=$Zyada;
    }
    public function addDescription($add)
    {
        $this->description($add);
    }
}
class LabAnalyst extends employee
{
    function __construct()
    {
      $this->description("Analyst");
      $this->Salary=6000;
      $this->WorkingHours=5;
    }
    public function PlusMoney($Zyada)
    {
        $this->Salary+=$Zyada;
    }
    public function PlusWH($Zyada)
    {
        $this->WorkingHours+=$Zyada;
    }
    public function addDescription($add)
    {
        $this->description($add);
    }
}
class HarborEmployee extends employee
{
    function __construct()
    {
      $this->description("Harbor Employee");
      $this->Salary=5000;
      $this->WorkingHours=7;
    }
    public function PlusMoney($Zyada)
    {
        $this->Salary=$this->Salary+$Zyada;
    }
    public function PlusWH($Zyada)
    {
        $this->WorkingHours+=$Zyada;
    }
    public function addDescription($add)
    {
        $this->description($add);
    }
}
class Shceduler extends employee
{
    function __construct()
    {
      $this->description("Scheduler");
      $this->Salary=4000;
      $this->WorkingHours=6;
    }
    public function PlusMoney($Zyada)
    {
        $this->Salary+=$Zyada;
    }
    public function PlusWH($Zyada)
    {
        $this->WorkingHours+=$Zyada;
    }
    public function addDescription($add)
    {
        $this->description($add);
    }
}
class Manager extends employee
{
    function __construct()
    {
      $this->description("Manager");
      $this->Salary=8000;
      $this->WorkingHours=8;
    }
    public function PlusMoney($Zyada)
    {
        $this->Salary+=$Zyada;
    }
    public function PlusWH($Zyada)
    {
        $this->WorkingHours+=$Zyada;
    }
    public function addDescription($add)
    {
        $this->description($add);
    }
}

class User
{
    public $id;
    public $name;
    public $password;
    public $address;
    public $userType;
    public $telephone;
    public $email;
    public $nationalID;

    //insert user into db
    public static function createUser($objUser)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "insert into user (Name,Password,Address,UserType,Telephone,Email,NationalID) 
        values('$objUser->name','$objUser->password','$objUser->address','$objUser->userType','$objUser->telephone'
        ,'$objUser->email','$objUser->nationalID')";
        $mysqli->query($query);
    }


    //view list of users
    public static function listUser()
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM user WHERE isDeleted='0'";
        $result = $mysqli->query($query);
        return $result;
    }

    public static function returnUserEmail($usrID)//return driver email
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select Email FROM user WHERE ID='$usrID'";
        $result = $mysqli->query($query);
        $result=mysqli_fetch_assoc($result);
        $usrEmail= $result['Email'];
        return $usrEmail;
    }
    
    //view specific user
    public static function getRecord($id)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM user WHERE id='$id'";
        $result = $mysqli->query($query);
        return $result;
    }
    //view specific user for edit
    public static function editRecord($id)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM user WHERE id='$id'";
        $result = $mysqli->query($query);
        $data = mysqli_fetch_assoc($result);
        return $data;
    }

    //Update user record
    public static function updateRecord($objUser)
    {
        $x=date("Y-m-d");
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        echo $objUser->password;
        $query = "update user SET Name='$objUser->name', Password='$objUser->Password', Address='$objUser->Address',
        UserType='$objUser->UserType', Telephone='$objUser->Telephone', Email='$objUser->Email', NationalID='$objUser->NationalID' ,Updatedat='$x'
        WHERE ID='$objUser->id'";
        $mysqli->query($query);
    }

    //Delete user record
    public static function deleteUser($id)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "Update user SET isDeleted='1' WHERE ID='$id'";
        $mysqli->query($query);
    }

    public static function checkLogin($usrname, $pswrd)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM user WHERE Name='$usrname' and Password='$pswrd'";
        $result = $mysqli->query($query);

        if($result->num_rows != 0)//check if it got results by counting the rows
        {
        $data = mysqli_fetch_assoc($result);//turn result into data of the row
        return $data['UserType'];//return the userType from the row
        }
    }

    public static function returnUserID($usrname, $pswrd)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM user WHERE Name='$usrname' and Password='$pswrd'";
        $result = $mysqli->query($query);

        if($result->num_rows != 0)//check if it got results by counting the rows
        {
        $data = mysqli_fetch_assoc($result);//turn result into data of the row
        return $data['ID'];//return the userType from the row
        }
    }

    public static function listUserType($Type)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM user WHERE UserType='$Type'";
        $result = $mysqli->query($query);
        return $result;
    }

    public static function ManageUserData(User $objProduct)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $idTask = $_GET['id'];
        $query= "update user SET Salary='$objProduct->Salary', WorkingHours='$objProduct->WorkingHours', Description='$objProduct->desc' WHERE ID='$idTask'";
        $mysqli->query($query);
    }
    
}

?>
