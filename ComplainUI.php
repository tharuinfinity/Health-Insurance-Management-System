<?php
include_once 'header3.php';
?>
    
  <link rel="stylesheet" href="styles/claim.css">
  <link rel="stylesheet" href="styles/feedback.css">
 

  <body class="back">
      <div class="bb">
        
        <form class="fbk" action="Complain.php" method="post">
            <center><h1>Complaints & Feedback</h1></center>
            Name:
            <input class="txt" type="text" name="Cname" required><br>
            Policy Number :
            <input class="txt" type="text" name="PN" required><br>
            Email:
            <input class="txt" type="email" name="mail" required><br>
            Subject:
            <input class="txt" type="text" name="sub" required><br>
            Message :<br><br>
            <center><textarea name="msg" class="txtara" cols="50" rows="10" required></textarea></center>

            <center><input class="fsub" type="submit" name="feedbacksub" value="Submit"></center>
        </form>
        <br><br>
        <?php
include_once 'footer.php';
?>
    	
  
  
  </body>
</html>