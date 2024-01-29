<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>login</title>
    <link rel="stylesheet" href="styles/log.css">
    <link rel="stylesheet" href="styles/css.css">

    <div class="head">
      <title>Safety-First Insuarance</title>

      <!--company logo-->
      <img class="logo" src="images/picture1.png">

      <!--go to profile-->
      <a href="profile.php"><img class="profile" style="width:50px" src="images/profile1.PNG"></a>
      <div id="log">
      <a href="Logout.php"><button class="logbut1" type="button" >Logout</button></a></div>

      
      
      <div class="nav1">

           <a class="abc" href="AboutUs.php">About Us</a>
          <a class="abc" href="ComplainUI.php">Complaints & Feedback</a>
          <a href="news.php">News</a>
          <a href="logedPackages.php">Packages</a>
          <a  href="loggedin.php">Home </a> 

    </div>
  </div>
</head><?php
session_start();
        $uname=$_SESSION['name'];

        echo "<div style='float:right;text-transform: capitalize;color:white;'>".$uname."</div>";
