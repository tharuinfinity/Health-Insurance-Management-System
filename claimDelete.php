<?php
include_once 'DB.php';
include_once 'header.php';


session_start();
include_once 'DB.php';
$CID=$_GET['cid'];
// Fetch claim details from the database
$sql = "DELETE FROM claim WHERE claimID='$CID';";

$result = $connect->query($sql);
if($result){

  $dis='<center><p style="font-size:50px;">Data Deleted Successfully!</p><center>';
  echo $dis ;
}
else{
  echo "Error";
}
mysqli_close($connect);
?>
<br>
<a href="claimdetails.php"><button class="dlt" type="button" >Back</button></a></div><br><br><br><br><br>
<?PHP

include 'footer.php';




?>