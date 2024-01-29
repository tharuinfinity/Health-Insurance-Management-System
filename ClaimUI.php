<?php
include_once 'header2.php';
?>
    
  <link rel="stylesheet" href="styles/claim.css">
 

  <body class="back">
      <div class="b">
        <div class="claim">
          <center><h1>Claim</h1></center>
           
           <br><br><br><br>
            <form action="Claim.php" method="post">
            Policy Number :
            <input class="txt" type="text" name="PN" required><br><br>
            NIC:
            <input class="txt" type="text" name="NIC" required><br><br>
            Phone Number :
            <input class="txt" type="text" name="phn" required><br><br>
           
            Type of desease :<br><br>
            <input class="tx"  type="radio" name="td" value="Death">Death<br><br>    
            <input class="tx" type="radio" name="td" value="Covid-19">Covid-19<br><br>
            <input class="tx" type="radio" name="td" value="Covid-19">Pregrancy treatement<br><br>
            <input class="tx" type="radio" name="td" value="Covid-19">Accident<br><br>
            <input class="tx" type="radio" name="td" value="Sugery">Sugery<br><br>
            <input class="tx" type="radio" name="td" value="Heart desease">Heart desease<br><br>
            <input class="tx" type="radio" name="td" value="Other">Other<br><br><br>
            Upload hospital bill:<br><br>
            <div class="upload">
                
                <input class="choose" type="file" name="bill" accept="image/png, image/jpeg" required>
                
            </div>
            <br><br>
            <fieldset>
              <legend>Bank Deatails</legend><br><br>
              Select Bank:
              <select class="txt" name="banks" required>
                  
                  <option name="banks" value="Bank Of Ceylon">Bank Of Ceylon</option>
                  <option name="banks"value="People's Bank">People's Bank</option>
                  <option name="banks" value="Commercial Bank">Commercial Bank</option>
                  <option name="banks" value="HNB Bank">HNB Bank</option>
                </select><br><br>
              Branch Name:
              <input type="text" class="txt" name="brname" required><br><br>
              Branch Number:
              <input type="text" class="txt" name="brno" required><br><br>
              Account number:
              <input type="text" class="txt" name="accno" required><br><br>
              Type of Account:<br><br>
              <input type="radio" id="td" name="toa" value="Checking">Checking<br><br>    
              <input type="radio" id="td"  name="toa" value="Saving">Saving<br><br>
              <input type="radio" id="td"  name="toa" value="Other">Other<br><br>
              
            </fieldset>
            <br><br>
            <div id="claim2"><a href="loggedin.html"><button class="back2btn" type="button" onclick="">Back</button></a></div>
              <div id="claim2"><a href="Claim3.html"><input class="submit" value="Next" type="submit" onclick=""></a></div>
          
             </form>   
                

        </div>
          
      </div>
      <?php
include_once 'footer.php';
?>
  
  
  </body>
</html>