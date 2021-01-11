<?php
require_once('./Model/Analyze.php');
require_once('./AnalyzeProduct.php');
$ProductID=$_GET['id'];
$Name=$_GET['Name'];

if(isset($_POST['AnalyzeSubmit']))
{

    $Flag=Analyze::CheckAnalyzedOrNot($ProductID);
    if($Flag==1)//UPDATE DECORATIVE
    {
        $result=Analyze::getRecord($ProductID);
        $Lyze= new Analyze();
        $product= new AnalysisDecorative();
        while($row = mysqli_fetch_array($result))
        {
            $product->PlusComment($row['Comment']);
            $product->PlusStatus($row['Status']);
            $product->PlusType($row['AnalyzeType']);
        }
        $product->PlusComment($_POST['AnalyzeType']);
        $product->PlusComment($_POST['Comment']);
        $product->PlusStatus($_POST['Status']);
        $product->PlusType($_POST['AnalyzeType']);
        $Lyze->AnalyzeType=$product->Type();
        $Lyze->Status=$product->Status();
        $Lyze->Comment=$product->Comment();
        $Lyze->ProductID=$ProductID;
        
        Analyze::UpdateAnalysis($Lyze);
    }
    else
    {//CREATE
        
        $Lyze= new Analyze();
        $Lyze->ProductID=$ProductID;
        $Lyze->Name=$Name;
        $Lyze->AnalyzeType=$_POST['AnalyzeType'];
        $Lyze->Status=$_POST['Status'];
        $Lyze->Comment=$_POST['AnalyzeType'];
        $Lyze->Comment.="\n ".$_POST['Comment'];
        Analyze::CreateAnalysis($Lyze);
    }
}
?>