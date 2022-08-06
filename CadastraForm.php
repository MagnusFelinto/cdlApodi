<?php 

use League\Csv\Whiter;
//require __DIR__."/vendor/autoload.php";
//$csv = Writer::createFromString("");
//$csv ->insertOne();
    $n = 56;
if (!empty($_POST))
 {
    echo "<h1>POST COM ELEMENTOS</h1>";
    $select0    = $_POST['inputSelect01-00'];
    $select1    = $_POST['inputSelect01-01'];
    $select2    = $_POST['inputSelect01-02'];
    $q2         = $_POST['inlineRadioOptions-02'];
    $q3         = $_POST['inlineRadioOptions-03'];
    $q4         = $_POST['inlineRadioOptions-04'];
   
 //================ Formulario ===================\\  
 
//
}
else
{
    echo "<h1>POST ESTA VAZIO</h1>";
}
    echo '<br> -'.$select0   ;
    echo '<br> -'.$select1   ;
    echo '<br> -'.$select2   ;
    echo '<br> -'.$q2        ;
    echo '<br> -'.$q3        ;
    echo '<br> -'.$q4        ;
 

//================ Formulario ===================\\
?>