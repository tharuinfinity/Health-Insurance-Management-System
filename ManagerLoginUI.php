<?php
include_once 'header3.php';
?>
<body class="back">

  <div class="log">
   <center><h1>Login as Manager</h1></center>   
<form action="ManagerLogin.php" method="post">
   <label for="uname">Email</label><br>
   <input class="up" type="text" placeholder="Email" name="mail" required><br>

   <label for="psw">Password</label><br>
   <input class="up" type="password" placeholder="Enter Password" name="psw" required>
   <?php
   session_start();
   error_reporting(0);
   $warn=$_SESSION['error'];
   echo "<center><div style='color:red;'>$warn</div></center>";?>
   <br>  
   <button class="lbut" type="submit">Login</button>
   <label>
     <br>
     <input  type="checkbox"  name="remember" > Remember me
   </label>
 <br><br><br>

 
   <span class="psw">Forgot <a class="link" href="#">password?</a></span>
 
 </form>
    
</body>
</html>
