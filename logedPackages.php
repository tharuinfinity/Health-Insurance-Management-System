<?php


include_once 'header2.php';
$password=$_SESSION['pass'];

?>

<link rel="stylesheet" href="styles/packages.css">
	<body class="back">
    <br><br>
        
        <!--Legacy keeper-->
          <div Class="PackagesBack">
            <h3 class="Signup">Legacy Keeper</h3>
         <center> <img  src="images/LK.jpg" width="50%"></center>
          <p style="font-size:25px">
           Secure your Legacy for generations.
           Protectiong your lagacy and ensuring financial
            security for the loved one will be covered with
            our newly introduced package 'LEGACY KEEPER'</p>

          <center><div class="price">Only LkR 35,000 per month</div></center>
            <p style="font-size:25px;text-decoration: underline;">Key Features</p>
            <p ><ul  style="font-size:25px">
              <li>Life insurance protection</li>
              <li>E state planning assistance</li>
              <li>Wealth accumulation oppertunity </li>
              <li>Long term care provision</li>
            </ul></p>  
            <p  style="font-size:25px">
              Secure your family's today with Legacy Keeper with us.
            </p> 
            <center><button class="enroll" onclick="confirmActionLK()">Enroll</button></center>  
          </div>

          <!--Family Sheild-->

          <div Class="PackagesBack">
            <h3 class="Signup">Family Sheild</h3>
            <center> <img  src="images/FS.jpg" width="50%"></center>
          <p style="font-size:25px">
           Protect your family from the upcoming dangers.
          It's important to have a beneficial supporter on 
          your every hospitalization and your loved ones.
          We are here to support you</p>

          <center><div class="price">Only LkR 30,000 per month</div></center>
            <p style="font-size:25px;text-decoration: underline;">Key Features</p>
            <p ><ul  style="font-size:25px">
              <li>Claim the hopital bill on your every hospitalization</li>
              <li>Education Funding in case of dismiss</li>
              <li>Comprehensive coverage</li>
              <li>Personalized solutions</li>
            </ul></p>  
            <p  style="font-size:25px">
              Protect what matters most to you.Join with us
            </p> 
            <center><button class="enroll" onclick="confirmActionFS()">Enroll</button></center> 
          </div>

          <!--Eternal Guadian-->

          <div Class="PackagesBack">
            <h3 class="Signup">Eternal Guadian</h3>
            <center> <img  src="images/EG.jpg" width="50%"></center>
          <p style="font-size:25px">
           Comprehensive care and support until end. Aunique package designed to 
           protect and care the policy holder untill the end, ensuring their well being and peace of mind</p>

          <center><div class="price">Only LkR 45,000 per month</div></center>
            <p style="font-size:25px;text-decoration: underline;">Key Features</p>
            <p ><ul  style="font-size:25px">
              <li>Life time care coverage</li>
              <li>Financial security</li>
              <li>Personalized care services</li>
              <li>End of life planning</li>
              <li>Care giver support</li>
            </ul></p>  
            <p  style="font-size:25px">
              Secure your well being and enjoy peace of mind with eternal guadian. Join Now 
              <center><button class="enroll" onclick="confirmActionEG()">Enroll</button></center>  
          </div>
            
        </div> 
      <?php
      include_once 'footer.php';?>
    
   
    </body>
</html> 

<script>
function confirmActionLK() {
  var password = <?php echo json_encode($password); ?>;
  
  const confirmed = confirm("Are you sure you want to update your policy?");
 

  if (confirmed) {
    var enteredPassword = prompt("Please enter your password:","");
   
    if (enteredPassword == password) {
      alert("Password confirmed!");
      window.location.href = "PackageUpgrade.php?package=Legacy Keeper"; // Redirect to the desired PHP page
    } else {
      alert("Invalid Password");
    }
  }else{
    alert("cancelled");
  }
}

function confirmActionFS() {
  var password = <?php echo json_encode($password); ?>;
  
  const confirmed = confirm("Are you sure you want to update your policy?");
 

  if (confirmed) {
    var enteredPassword = prompt("Please enter your password:");
    if (enteredPassword == password) {
      alert("Password confirmed!");
      window.location.href = "PackageUpgrade.php?package=Family Sheild"; // Redirect to the desired PHP page
    } else {
      alert("Invalid Password");
    }
  }else{
    alert("cancelled");
  }
}

function confirmActionEG() {
  var password = <?php echo json_encode($password); ?>;
  
  const confirmed = confirm("Are you sure you want to update your policy?");
 

  if (confirmed) {
    var enteredPassword = prompt("Please enter your password:");
    if (enteredPassword == password) {
      alert("Password confirmed!");
      window.location.href = "PackageUpgrade.php?package=Eternal Guardian"; // Redirect to the desired PHP page
    } else {
      alert("Invalid Password");
    }
  }else{
    alert("cancelled");
  }
}
</script>
                
                    
                

                


  
  