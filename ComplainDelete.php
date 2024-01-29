<?php
include_once 'DB.php';
include_once 'header.php';


session_start();

$id=$_GET['phid'];
// Fetch claim details from the database
$sql = "DELETE FROM complaints  WHERE PHID='$id';";

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
<a href="complainDetails.php"><button class="dlt" type="button" >Back</button></a></div><br><br><br><br><br>
<?PHP

include 'footer.php';




?>