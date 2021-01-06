<?php
require_once('dbConfig.php');


interface iobserver
{
    public function Update(ISubject $var);

}

interface ISubject
{
    public function Add(iobserver $var);
    public function Remove(iobserver $var);
    public function Notify();
}


class subject implements ISubject
{
    
    protected $observers = [];

    public $product_Name;
    public $product_ID;

    public function __construct($Name,$ID){

        $this->product_Name = $Name;
        $this->product_ID = $ID;

    }


    public function Add(iobserver $var)
    {
        $this->observers[] = $var;
    }

    public function Remove(iobserver $var)
    {
        foreach ($this->observers as $key => $value) {
			if ($var === $value) {
				unset($this->observers[$key]);
				break;
			}
		}
    }

    public function Notify()
    {
        $string = "";

        foreach ($this->observers as $observer) {
            $string .= $observer->update($this);
        }
        return $string;
    }
}


class DriverList implements iobserver
{
    public function Update(ISubject $var){
        return "Added Product (" . $var->product_ID . "- " . $var->product_Name . ")\\n";
    }
}



class Notify
{
    public static function ListProductAlert()
    {
        $string="";
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = mysqli_query($mysqli,"select * FROM product WHERE ID>17");

        while ($row = $query->fetch_assoc())
        {
            $sub = new subject($row['Name'],$row['ID']);
            $driver=new DriverList();
            $sub->Add($driver);

            $string .= $sub->Notify();
        }

        if($string=="")
        {
            $string="no new products inserted.";
        }
        return strval($string);
    }
}
?>
