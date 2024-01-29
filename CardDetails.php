<?php

include_once 'header2.php';
include_once 'DB.php';

$phid=$_SESSION['phid'];

?>  
<link rel="stylesheet" href="styles/card.css">

<body class="back">
    <div>
    <center><h1 style="color:white"><b>Card Details</b></h1></center>
    <?php
    $sql="SELECT *FROM savecard WHERE PHID='$phid';";
    $result=$connect->query($sql);

    if($result){
        while($row=$result->fetch_assoc()){
            $cardID=$row['cardID'];
            $cardType=$row['payMethod'];
            $cardNO=$row['cardNumber'];
            $EXdate=$row['EXdate'];
            $cvv=$row['CVV'];

            $_SESSION['cardid']=$cardID;
            $_SESSION['ctype']=$cardType;
            $_SESSION['cNo']=$cardNO;
            $_SESSION['Ex']=$EXdate;
            $_SESSION['CvV']=$cvv;

            $maskedNumber = substr($cardNO, 0, 6) . str_repeat('X', 10);

            echo"<div class='card'>";
            if($cardType=='Visa'){
                echo"<img src='images/visa.png' width='60px'><br><br><br>";
            }else if($cardType=='MasterCard'){
                echo"<img src='images/mc.png' width='60px'><br><br><br>";
            }else if($cardType=='AmericanExpress'){
                echo"<img src='images/AE.png' width='60px'><br><br><br>";
            }else if($cardType=='Discover'){
                echo"<img src='images/discover.png' width='60px'><br><br><br>";
            }
            
            echo"<center><div class='cardno'>$maskedNumber</div></center><br><br>";
            echo"<div style='float:right;'>$EXdate<br></div>";
            echo"XXX<br>";
            echo"</div><br>";
           ?>
           <center><a href="CardUpdateUI.php?cardid=<?php echo $cardID?>"><button class="update">Update</button></a>
           <a href="CardDelete.php?cardid=<?php echo $cardID?>"><button class="delete" onclick="Confirm()">Delete</button></a></center>
           <br>
           
           <?php

            
        }
    }else{
        echo"No cards Found";
    }


    if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] === 'CardDetails.php') {
        header("Location: Payment.php");
        exit(); 
    }
    ?>
    </div>
</body>
<script>
function Confirm() {
  let text = "Are you Sure Delete Card";
  if (confirm(text) == false) {
    window.location.href = "CardDetails.php";

  } 
  document.getElementById("demo").innerHTML = text;
}
</script>