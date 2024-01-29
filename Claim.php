<?php
session_start();
include_once 'DB.php';

$phid = $_POST['PN'];
$nic = $_POST['NIC'];
$phn = $_POST['phn'];
$tod=$_POST['td'];
$Bill = $_POST['bill'];
$bank = $_POST['banks'];
$brhname = $_POST['brname'];
$brhno = $_POST['brno'];
$accno = $_POST['accno'];
$toa = $_POST['toa'];

$date=date("Y-m-d");

$check="SELECT PHID from policyholder WHERE PHID='$phid';";
$result0 = $connect->query($check);


if($result0){
$sql = "INSERT INTO claim (PHID, NIC, phone, D_Type, bill ,bank_name, branch_name, branch_no, Account_no, acc_type,C_Date)
       VALUES ('$phid', '$nic', '$phn', '$tod','$Bill','$bank', '$brhname', '$brhno', '$accno', '$toa', '$date');";
       
$result = $connect->query($sql);
echo "<script>alert('Signup Successful.');</script>";
header('Location: Claim3.html?CLAIM=success');
exit;
}

else {
    echo "<script>alert('Claim request failed');</script>";
   //header('Location: reg.html?signup=failure');
    
}



mysqli_close($connect);

?>