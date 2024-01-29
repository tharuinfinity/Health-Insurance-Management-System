<?php
include_once 'DB.php';
$paymethod=$_POST['PayType'];
$cardname=$_POST['NOC'];
$cardno=$_POST['Cnum'];
$exdate=$_POST['exdate'];
$cvv=$_POST['cvv'];


$sql="UPDATE savecard SET payMethod='$paymethod', cardNumber='$cardno',EXdate='$exdate', CVV='$cvv'; ";
$result = $connect->query($sql);

if($result){
    echo "updated Successfully";
     header('location:CardDetails.php?updateprofile=success');
     
  }
  else{
    echo "Error";
   
  }


  

?>