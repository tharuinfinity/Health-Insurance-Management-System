<?php
session_start();
include_once 'header2.php';
?>
<link rel="stylesheet" href="styles/PCDPAY.css">
<body class="back">
   
    <form class="pcdpay" action="CardUpdate.php" method="post">
            <center><h1><b>Update Card</b></h1></center>
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
            <input class="Pbox" id="cdno" type="text" name="Cnum"  placeholder="<?php echo $_SESSION['cNo']; ?>" required>
            <br><p id="errorMessage" style="color: red;"></p>

            <br>
            Expiry Date: <br>               
            <input class="Pbox" type="text" name="exdate"   placeholder="<?php echo $_SESSION['Ex']; ?>" required><br><br>
             CVV:<br>
            <input class="Pbox" type="text" name="cvv"  placeholder="<?php echo $_SESSION['CvV']; ?>" required>
        
            <br><br>
            <center><button class="pay" name="proceed">Update</button></center><br><br>
        </form>
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
        } else if (value.length > 16 ){
          errorMessage.textContent = "invalid card number";
          // Clear the error message
          
        }
      
         else {
          // Clear the error message
          errorMessage.textContent = "";
        }
      });
</script>
<?php
$phid=$_SESSION['phid'];


//include_once 'footer.php';
?>