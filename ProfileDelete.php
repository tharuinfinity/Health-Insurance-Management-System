

<html>
 <link rel="stylesheet" href="styles/Manager.css">
   <link rel="stylesheet" href="styles/css.css">
  <head>
    <div class="header">
        <title>Safety-First Insuarance</title>

        <!--company logo-->
        <img class="logo" src="images/picture3.png">

        <!--go to profile-->
        <a href="profile.html"><img class="profile" style="width:50px" src="images/profile.PNG"></a>
        <div id="log">
        <a href="sign.html"><button class="logbut" type="button" onclick="">Log Out</button></a></div>
        
        
        <div class="topnav">

          <a class="abc" href="#about">About Us</a>
          <a class="abc" href="Complains.html">Complaints & Feedback</a>
          <a href="#about">News</a>
          <a href="#contact">Packages</a>
          <a  href="index.html">Home </a> 

      </div>

    </div style="font-size:20px">
    <hr>
  </head>
	<body >
    <div class="border">
      <br>
    <center><img class="confirm" src="images/Confirm.png" width="100px"></center>
    <?php


session_start();
include_once 'DB.php';
$phid = $_SESSION['phid'];
// Fetch claim details from the database
$sql = "DELETE FROM policyholder WHERE PHID ='$phid';";

$result = $connect->query($sql);
if($result){

  $dis='<center><p style="font-size:50px;">Data Deleted Successfully!</p><center>';
  echo $dis ;
}
else{
  echo "Error";
}

?>
<br>
<a href="customerdetails.php"><button class="dlt" type="button" >Back</button></a></div><br><br><br><br><br>
<?PHP

include 'footer.php';


mysqli_close($connect);


?></div>
    </body>
    
</html> 
                
                
                    
                

                

