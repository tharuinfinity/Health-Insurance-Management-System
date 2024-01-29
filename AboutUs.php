<?php
include_once 'header2.php';
?>
    
    <link rel="stylesheet" href="styles/aboutus.css">

<body class="back">
    
        <div>
          <h1>ABOUT US</h1>
          <p class="abtus1">Safety first is a leading insurance provider in the industry of protecting individuals. We are 
            committed to providing you with dependable insurance coverage to safeguard what is most 
            important to you .Our company has been serving individuals, families, and businesses in the 
            insurance industry for over 20 years, acquiring a reputation for excellence and reliability.
            Safety underlies all of our operations. We recognize that unanticipated occurrences and 
            misfortunes can occur, which is why we are committed to providing all-inclusive insurance 
            options that safeguard your assets and give you peace of mind.
            Vision
            Our vision is to be the trusted leader in insurance, prioritizing safety, delivering excellence, and 
            providing innovative solutions for a secure future to our consumers.
            Mission
            Our mission is to provide exceptional insurance solutions that put safety, security, and peace of 
            mind first. We endeavor to provide individualized service, extensive coverage, and prompt 
            claims assistance. Through education, innovation, and a dedication to excellence, we seek to 
            safeguard the assets of our customers, cultivate trust, and positively impact the communities 
            we serve</p>
         
              <img class="abt" src="images/ABOUT US.jpg" style="width:400px">
            </div>
        </div>
      <div class="footer">
        <br>
        <h2>Contact Us +94 11 543 764</h2>
          <a class="f_text" href="">Terms and Conditions</a><br>
          <a class="f_text" href="">Privacy Policy</a><br><br><br>
          <a class="f_text" href="">About us</a><br>
          <a class="f_text" href="">FAQ</a><br>
          <a href="https://www.facebook.com/"><img class="social" style="width:35px" src="images/fb.PNG"></a>
          <a href="https://www.instagram.com/"><img class="social" style="width:35px" src="images/insta.jpg"></a>
          <a href="https://twitter.com/"><img class="social" style="width:35px" src="images/twitter.PNG"></a><br><br>
          <img class="payments" style="width:200px" src="images/PAYMENTS.PNG" />
      </div>	
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