<?php
session_start();
include_once 'DB.php';

$fdname = $_POST['Cname'];
$phid = $_POST['PN'];
$fdmail = $_POST['mail'];
$sub = $_POST['sub'];
$fdmsg=$_POST['msg'];


$Cdate=date("Y-m-d"); 


$check="SELECT PHID from policyholder WHERE PHID='$phid';";

if($check){
$sql = "INSERT INTO complaints (Cname, PHID, C_mail, Subject, Message,C_Date)
       VALUES ('$fdname','$phid', '$fdmail', '$sub', '$fdmsg','$Cdate');";
       
$result = $connect->query($sql);
echo "<script>alert('Signup Successful.');</script>";
header('Location: loggedin.html?feedback=success');
exit;
}

else {
    echo "<script>alert('Claim request failed');</script>";
   //header('Location: reg.html?signup=failure');
    
}



mysqli_close($connect);

?>