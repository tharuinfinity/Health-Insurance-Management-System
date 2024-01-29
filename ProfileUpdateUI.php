<?php
include_once 'header2.php';
?>
    <link rel="stylesheet" href="styles/reg.css">

    <body class="back">
    <form action="ProfileUpdate.php"  method="post">
    <div class="reg">
      <center><h1>Update Profile</h1></center>
      <br>
      <b>Phone number</b>
      <input class="rBox"  type="tel" placeholder="Phone Number" name="nPhnNO" required>
      <br>

     <b>>Email:</b<br>
      <input class="rBox"  type="text" placeholder="Enter Email" name="nemail" required><br>
     <b>Address:</b>
       <input class="rBox"  type="text" placeholder="Address" name="naddress" required>
      <br>
      Old Password:<br>
       <input class="rBox"  type="password" placeholder="Enter Password" name="opsw" required><br>
      New Password:<br>
       <input class="rBox"  type="password" placeholder="Enter Password" name="npsw" required><br>
      Repeat New Password:<br>
      <input class="rBox"  type="password" placeholder="Repeat Password" name="rnpsw" required><br>
      
  
      <button class="regbut" type="submit" class="registerbtn">Update</button>
    </div>
  </form>

</body>
</html>