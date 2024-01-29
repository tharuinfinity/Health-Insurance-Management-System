<?php
session_start();
include_once 'DB.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['psw'];

  $sql = "SELECT * FROM policyholder WHERE email = '$email';";
  $result = $connect->query($sql);

  if ($result) {
    $row = $result->fetch_assoc();

    if ($row) {
      $storedPassword = $row['password'];
     

      if ($password == $storedPassword) {
        // Passwords match, authentication successful
        $_SESSION['phid'] = $row['PHID'];
        $_SESSION['name'] = $row['Fname'];
        $_SESSION['pass'] = $storedPassword;
        $_SESSION['policy'] = $row['policyID'];
        echo " success";
       header('Location: loggedin.php');
       // exit;
      } else {
        // Passwords do not match, authentication failed
        $msg=" Invalid Email or Password";
        $_SESSION['msg']=$msg;
        header('Location: loginpage.php?error=invalid');
        exit;
      }
    } else {
      $msg=" Invalid Email or Password";
      $_SESSION['msg']=$msg;
      header('Location: loginpage.php?error=invalid');
      exit;
    }
  } else {
    echo "Error executing the query: " . $connect->error;
  }
}

mysqli_close($connect);
?>