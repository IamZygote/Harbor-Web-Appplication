<?php
require_once('dbConfig.php');
//zabat el decorative
interface  Analysis
{
    //return
    function Comment();
    function Status();
    function Type();
}
abstract class AnalProduct implements Analysis
{
    public $Comment="";
    public $IDproduct;
    public $Type="";
    public $Status="";
    public $name;
    protected $analyzedProduct;
    function Comment()
    {
       return $this->Comment;
    }

    function Status()
    {
        return $this->Status;
    }
    function Type()
    {
        return $this->Type;
    }
}
class AnalysisDecorative extends AnalProduct
{
    function PlusComment($Zyada)
    {
        $this->Comment.=" \n ".$Zyada;
    }
    function PlusStatus($Zyada)
    {
        $this->Status.=" - ".$Zyada;
    }
    function PlusType($Zyada)
    {
        $this->Type.=" - ".$Zyada;
    }
}


class Analyze
{
    public $ID,$ProductID, $Name, $AnalyzeType 	, $Status , $Comment;

    public static function DeliveredProducts()
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM product WHERE deliverFlag=3";
        $result=$mysqli->query($query);
        return $result;
    }
    public static function CreateAnalysis($Lyze)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "insert into analyzedproducts (ProductID ,Name ,AnalyzeType ,Status ,Comment) values('$Lyze->ProductID','$Lyze->Name','$Lyze->AnalyzeType','$Lyze->Status','$Lyze->Comment')";
        $mysqli->query($query);
        echo"Data inserted succussefully";
    }

    public static function AnalyzedProducts()
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM analyzedproducts";
        $result=$mysqli->query($query);
        return $result;
    }
    public static function UpdateAnalysis($Lyze)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query= "update analyzedproducts SET AnalyzeType='$Lyze->AnalyzeType', Status='$Lyze->Status', Comment='$Lyze->Comment' WHERE ProductID='$Lyze->ProductID'";
        $mysqli->query($query);
        echo"Data Updated succussefully";
    }
    public static function CheckAnalyzedOrNot($id)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = " select * FROM analyzedproducts WHERE ProductID= ".$id." ";
        $result=$mysqli->query($query);
        $rowcount=mysqli_num_rows($result);
        if($rowcount>=1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

    public static function getRecord($id)
    {
        $db = DbConnection::getInstance();
        $mysqli = $db->getConnection(); 
        $query = "select * FROM analyzedproducts WHERE ProductID='$id'";
        $result=$mysqli->query($query);
        return $result;
    }
}

?>