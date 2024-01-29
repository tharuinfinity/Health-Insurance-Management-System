<?php
include_once 'header2.php';
?>
  <link rel="stylesheet" href="styles/PCDPAY.css">

	<body class="back">
    <?php
 
    include_once 'DB.php';
    $POLICY=$_SESSION['policy'];

    $sql="SELECT * FROM policy WHERE Pname='$POLICY';";
    $result=$connect->query($sql);

    $row=$result->fetch_assoc();

    $amount=$row['price'];

    $_SESSION['amount']= $amount;
    mysqli_close($connect);
    ?>
    <div>
        <form class="pcdpay" action="Pay_SaveCard.php" method="post">
            <h1><b>PAYMENT</b><?php echo "<div style='float:right;'>LKR $amount</div>"; ?></h1>
            <br><br>
            Select Payment Method:<br><br>
            <input class="radio" type="radio" name="PayType" value="Visa"><img width="50px" src="IMAGES/visa.png" required>&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="radio" type="radio" name="PayType" value="MasterCard"><img width="50px" src="IMAGES/mc.png"required>&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="radio" type="radio" name="PayType" value="AmericanExpress"><img width="50px" src="IMAGES/AE.png"required>&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="radio" type="radio" name="PayType" value="Discover"><img width="50px" src="IMAGES/discover.png"required>&nbsp;&nbsp;&nbsp;&nbsp;
            <br><br>
            Name On Card:<br>
            <input class="Pbox" type="text" name="NOC" required>
            <br><br>
            Card Number:<br>
            <input class="Pbox" id="cdno" type="text" name="Cnum" required>
            <br><p id="errorMessage" style="color: red;"></p>

            <br>
            Expiry Date: <br>               
            <input class="Pbox" type="text" name="exdate" placeholder="MM/YY" required><br><br>
             CVV:<br>
            <input class="Pbox" type="text" name="cvv" required>
            <br><br>
            <input class="check" type="checkbox" name="savecard" Value="1">Save Card Details
            <br><br>
            <center><button class="pay" name="proceed">PAY</button></center><br><br>
        </form>
      </div>
   
        
    </body>
    <script>
       var input = document.getElementById("cdno");
      var errorMessage = document.getElementById("errorMessage");

      // Add an event listener for the input event
      input.addEventListener("input", function() {
        // Get the current value of the input field
        var value = input.value;
        var numberPattern = /^[0-9]+$/;
        
        // Check the length of the entered value
        if ((!numberPattern.test(value))) {
          // Display the error message
          errorMessage.textContent = "invalid card number";
        } else if (value.length != 16 ){
          errorMessage.textContent = "invalid card number";
          // Clear the error message
          
        }
      
         else {
          // Clear the error message
          errorMessage.textContent = "";
        }
      });
</script>
   
	
</html> 
                
                
                    
                

                


           