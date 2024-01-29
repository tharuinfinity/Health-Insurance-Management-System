<?php
session_start();
include_once 'DB.php';


$fname = $_POST['FirstName'];
$lname = $_POST['LastName'];
$phn = $_POST['PhnNO'];
$email=$_POST['email'];
$nic = $_POST['NIC'];
$add = $_POST['address'];
$dob = $_POST['DOB'];
$ptype = $_POST['policyType'];
$pass=$_POST['psw'];
$con_pass=$_POST['rpsw'];




if($pass==$con_pass){
       //$hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
       //$hashedconPassword = password_hash($con_pass, PASSWORD_DEFAULT);

       $prefix = 'SF'; // Prefix for the ID
       $uniqueNumber = rand(1000, 9999);
       $phid = $prefix . $uniqueNumber;

      
       $_SESSION['nic'] = $nic; 
       $_SESSION['pass'] = $pass;

$sql = "INSERT INTO policyholder (PHID, Fname, Lname, phone,email, NIC, address, DOB, policyID, password)
       VALUES ('$phid', '$fname', '$lname', '$phn','$email', '$nic', '$add', '$dob', '$ptype', '$pass');";
$result = $connect->query($sql);
echo "<script>alert('Signup Successful.');</script>";
header('Location:index.html?signup=success');
exit;
}

else {
       
       $
    
       // Redirect back to the signup form
       header('Location:reg.html?signup=success');
       echo"error";

       exit;
exit;
    
}

session_destroy();
mysqli_close($connect);

?>