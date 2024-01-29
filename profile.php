<?php
include_once 'header2.php';
?>
   <link rel="stylesheet" href="styles/profile.css">

	<body class="back">
   <?php
      
      include_once 'DB.php';

    $phID=$_SESSION['phid'];

      ?>
  <div  class="prof">

      <?php
      // Fetch claim details from the database
      $sql = "SELECT * FROM policyholder WHERE PHID = '$phID';";
      $result = $connect->query($sql);


      $row = $result->fetch_assoc();

      $phid= $row['PHID'];
      $Fname = $row['Fname'];
      $Lname = $row['Lname'];
      $email = $row['email'];
      $NIC = $row['NIC'];
      $phn = $row['phone'];
      $address = $row['address'];
      $dob = $row['DOB'];
      $Policy = $row['policyID'];

      echo "Policy Number :<b>$phid</b><hr><br>";
      echo "Name :$Fname $Lname<br>";
      echo "Email :$email<br>";
      echo "NIC :$NIC<br>";
      echo "Phone :0$phn<br>";
      echo "Address :$address<br>";
      echo "DOB :$dob<br>";
      echo "Policy :$Policy<br>";
     
            ?>
            <br>
      <a href="ProfileUpdateUI.php"><button class="profbut" type="button" onclick="">UPDATE</button></a></div><br>
      <?PHP

      mysqli_close($connect);
      include_once 'footer.php';
      ?>
      </div>
    </body>
          
      </html> 
                
                
                    
                

                

