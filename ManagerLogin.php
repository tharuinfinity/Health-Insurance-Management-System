<?php
include_once 'DB.php';

$email=$_POST['mail'];
$password=$_POST['psw'];

$sql="SELECT *FROM manager";
$result=$connect->query($sql);

$row=$result->fetch_assoc();

$mail=$row['Email'];
$pass=$row['password'];
if($email==$mail){
    if($password==$pass){
        header('location:Manager.php?Login=success');
        exit;
    }
}else{
    $error="Invalid Email or Password";
    $_SESSION['error']=$error;
    header('location:ManagerLoginUI.php?Login=fail');
    exit;
}

mysqli_close($connect);
?>
