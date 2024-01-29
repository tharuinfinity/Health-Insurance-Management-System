<?php
include_once 'header.php';
?>
	<body>
        
        <?php
          session_start();
        $uname=$_SESSION['name'];

          echo "<div style='float:right;text-transform: capitalize;'>".$uname."</div>";
          ?>
            <div class="slideshow-container">

                <div class="mySlides">
                 
                  <img src="images/slide1.png" style="width:100%">
                </div>
                
                <div class="mySlides">
                  <img src="images/slide2.png" style="width:100%">
                </div>
                
                <div class="mySlides">
                  <div class="container">
                    <img src="images/slide3.png" style="width:100%">
                    <a href="reg.html"><button class="Register"> Register Now</button></a>
                    </div>
                
                </div>
                <br>
                
                <div class="dt" style="text-align:center">
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                </div>
                <br><br>
            </div>
            <div class="mid">
                    <center><h1>OUR SERVICES</h1></center>
                    <center><div>
                        <a href="ClaimUI.php"><img class="boxes" style="width:80px" src="images/CLAIM.PNG" ></a>
                        <a href="PayUI.php"><img class="boxes" style="width:80px" src="images/PAY.PNG" ></a>
                        <a href="logedPackages.php"><img class="boxes" style="width:80px" src="images/PACKAGES.PNG" ></a>
                        <a href="vacancy.html"><img class="boxes" style="width:80px" src="images/VACANCIES.PNG" ></a>
                    </div></center>

               
                <br><br>
            </div>
        
            <?php
include_once 'footer.php';
?>
    
    
    </body>
    <script>
        let slideIndex = 0;
        showSlides();
        
        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
	
	
</html> 
                
                
                    
                

                


  
  