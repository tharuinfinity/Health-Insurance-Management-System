<?php

include_once 'DB.php';
include_once 'header2.php';
?>
<link rel="stylesheet" href="styles/card.css">

<body class="back">
<?php
$CardID=$_GET['cardid'];

$sql="DELETE FROM savecard WHERE cardID='$CardID';";
$result=$connect->query($sql);

if($result){
    echo"<center><div class='cardDLT'><img src='/images/Confirm.png' class='cardDLT'>";
    echo"Successfully Deleted!<br><br>";
}else{
    echo"<div>Error!</div>";
}
if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] === 'CardDelete.php') {
    header("Location: CardDetails.php");
    exit(); 
  }

?>

</div><br><br><br><br>
</body>
<?php
include_once 'footer.php';
?>