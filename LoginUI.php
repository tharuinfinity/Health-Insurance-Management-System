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
      <a href="loginpage.html"><img class="profile" style="width:50px" src="images/profile1.PNG"></a>
      <div id="log">
      <a href="loginpage.html"><button class="logbut1" type="button" onclick="">Login</button></a>
      <a href="RegisterUI.html"><button class="logbut1" type="button" onclick="">Sign Up</button></a></div>
      
      
      <div class="nav1">

        <a class="abc" href="aboutus.html">About Us</a>
        <a class="abc" href="loginpage.html">Complaints & Feedback</a>
        <a href="news.html">News</a>
        <a href="packages.html">Packages</a>
        <a  href="index.html">Home </a> 

    </div>
  </div>
</head>
<body class="back">
  <form class="log" action="login.php" method="post">
    <div >
        <center><h1>Login</h1></center>   

          <label for="uname">Email</label><br>
          <input class="up" type="email" placeholder="Enter Username" name="email" required><br>
    
          <label for="psw">Password</label><br>
          <input class="up" type="password" placeholder="Enter Password" name="psw" required>
          <br> 
          <?php
          error_reporting(0);
         session_start();
          $warn=$_SESSION['msg'];
          echo "<center><div style='color:red;'>$warn</div></center>";
        
          ?> 
 
          <button class="lbut" type="submit">Login</button>
          <label>
            <br>
            <input  type="checkbox"  name="remember" > Remember me
          </label>
        <br><br><br>
  
          <span class="psw">Forgot <a class="link" href="#">password?</a></span>
         <span class="psw">Login as <a class="link" href="ManagerLoginUI.php">Manager </a></span>
        
         </form>
        <br>

        <br>
      </div>

        <div class="footer">
          <br>
          <h2>Contact Us +94 11 543 764</h2>
            <a class="f_text" href="">Terms and Conditions</a><br>
            <a class="f_text" href="">Privacy Policy</a><br><br><br>
            <a class="f_text" href="">About us</a><br>
            <a class="f_text" href="">FAQ</a><br>
            <a href="https://www.facebook.com/"><img class="social" style="width:35px" src="images/fb.PNG"></a>
            <a href="https://www.instagram.com/"><img class="social" style="width:35px" src="images/insta.jpg"></a>
            <a href="https://twitter.com/"><img class="social" style="width:35px" src="images/twitter.PNG"></a><br><br>
            <img class="payments" style="width:200px" src="images/PAYMENTS.PNG" />
  
        </div>	
           
</body>

</html>