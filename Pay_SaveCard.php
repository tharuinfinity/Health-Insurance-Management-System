<?php
session_start();
include_once 'DB.php';

$paymethod=$_POST['PayType'];
$cardname=$_POST['NOC'];
$cardno=$_POST['Cnum'];
$exdate=$_POST['exdate'];
$cvv=$_POST['cvv'];
$savecard=$_POST['savecard'];


$phid=$_SESSION['phid'];
$cardDate=date('y-m-d');
$paymonth=date('n');
$_SESSION['month']=$paymonth;
$payAmount=$_SESSION['amount'];

if($savecard == '1'){
    $sql="INSERT INTO savecard (PHID,payMethod,cardNumber,EXdate,CVV,Date) VALUES ('$phid','$paymethod','$cardno','$exdate','$cvv','$cardDate');";
    $result=$connect->query($sql);
    header('location:PayConfirm.php?payment=success');

}else{
    //header('location:ConfirmPay.html?payment=success1');
    echo $savecard;
}
$sql0="INSERT INTO payment (PHID,amount,payDate) VALUES ('$phid','$payAmount','$paymonth');";
    $result0=$connect->query($sql0);

mysqli_close($connect);