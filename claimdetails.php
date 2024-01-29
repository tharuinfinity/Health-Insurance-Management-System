
   <?php
     include_once 'headerManager.php';
     ?>
	<body class="back">
    <div class="claimdetails">
  <center><h1><b>Claim Requests</b></h1></center>
  
    <?php


session_start();
include_once 'DB.php';

// Fetch claim details from the database
$sql = "SELECT * FROM claim";

$result = $connect->query($sql);




if ($result && $result->num_rows > 0) {


  echo "<table class='table'>";
  echo "<tr> ";
  echo "<th>Claim ID</th>";
  echo "<th>Policy Holder ID</th>";
  echo "<th>Phone Number</th>";
  echo "<th>Deasease Type</th>"; 
  echo "<th>Bill</th>";
  echo "<th>Date</th>";
  echo "</tr>";

    // Display the claim details
    while ($row = $result->fetch_assoc()) {
        $claimId = $row['claimID'];
      
        $CID = $row['claimID'];
        $PID= $row['PHID'];
        $phn = $row['phone'];
        $Desaease = $row['D_type'];
        $image = $row['bill'];
        $Cdate = $row['C_Date'];
    
        $_SESSION['cpid']=  $PID;
        // Display the claim details on the page
        echo "<tr> ";
        echo "<td>$CID</td>";
        echo "<td>$PID</td>";
        echo "<td>0$phn</td>";
        echo "<td>$Desaease</td>";
        echo "<td>$image</td>";
        echo "<td>$Cdate</td>";
        
        
      ?>
      <br>
      <td>
      <a href="Checkforclaim.php?cid=<?php echo $CID?>"><button class="cdlt" type="button" onclick="">check</button></a></td>
<?PHP
        echo "</tr> ";

    }
    echo"</table>";
} else {
    echo "No claims found.";
}
        
mysqli_close($connect);
?></div>
<?php
     include_once 'footer.php';
     ?>

    </body>

</html> 

                
                
                    
                

                

