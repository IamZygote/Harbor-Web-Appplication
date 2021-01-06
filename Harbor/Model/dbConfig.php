<?php
$conn = mysqli_connect('localhost','root','','theharbour');
//if(mysqli_connect_error())
//{
//    die(" Connect Failed ");
//}
class  DbConnection {
    private $_connection;
    private $host="localhost";
    private $username="root";
    private $password="";
    private $db_name="theharbour";//your database name 
    private  $database_connection; // 
    private static $instance;
    public  static $Counter=0;


  
    private function __construct() {
      $this->database_connection = $this->database_connect($this->host, $this->username,$this->password);

      $this->_connection = new mysqli($this->host, $this->username, 
			$this->password, $this->db_name);
	
      self::$Counter++;
      
     // $this->database_select($this->db_name);
    }
    public static function getInstance(){// create only one object for databse 
        if(self::$instance==null){
          echo "Return New Instance";
          echo self::$Counter;
          echo "<br>";
            self::$instance=new DbConnection();
        }
        else 
        {
          echo "Object is their <br>";
        }
        return self::$instance;
    }
     private function database_connect($database_host, $database_username, $database_password) {
        //if ($connection = mysqli_connect($database_host, $database_username, $database_password)) {
      if ($connection = mysqli_connect("localhost", "root", "")){
             mysqli_select_db($connection,"theharbour");
            return $connection;
            
        } else {
                die("Database connection error");
            
        }
    }
    public function getConnection() {
		return $this->_connection;
	}
}
?>