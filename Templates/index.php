<?php
session_start();
if(empty($_SESSION))
{
    echo "<script>
    alert('Signin To Start Booking!');
    window.location.href='../Authentication/index.php';
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WEBGYOR templates</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
    
 
    <!-- header section starts  -->

<header class="header">

  <div id="menu-btn" class="fas fa-bars"></div>

  <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <i class="fas fa-shapes"></i>WEBGYOR </a>

  <nav class="navbar">
      <a href="../Homepage/index.php" data-aos="zoom-in-left" data-aos-delay="300" >Home</a>
      <a  href="../Homepage/index.php" data-aos="zoom-in-left" data-aos-delay="450" >About</a>
      <a href="../Templates/index.php" data-aos="zoom-in-left" data-aos-delay="600" >Our Work</a>
      <a href="../services/Services.php" data-aos="zoom-in-left" data-aos-delay="750" >Services</a>
      <a href="../User_details form/customer.php" data-aos="zoom-in-left" data-aos-delay="900">Interested?</a>
      <a href="../ContactUs/index.php" data-aos="zoom-in-left" data-aos-delay="1150" >Contact-Us</a>
  </nav>

  <!-- <a data-aos="zoom-in-left" data-aos-delay="1300" href="../Authentication/index.php" class="btn">Sign-In</a> -->
  <a data-aos="zoom-in-left" data-aos-delay="1300" href="../Animation/index.php" class="btn">Logout</a>


</header>


<!-- header section ends -->
    <section class="head" id="head"> 
    <div class="heading">

      <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
          <span></span>
          <h3></h3>
          
      </div>
    
  </div>
  </section>

      <!--Start of ART-->
    
      <section class="figure">
        <div class="artheading">

          <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
              <span></span>
              <h3></h3>
              
          </div>
      
      </div>
      </section>
      <section>
    <figure class="container" class="i1">
      <img src="images/F1.jpg" alt="sample89" />
      <figcaption>
        <h3></h3>
      </figcaption>
      <a href="../ContactUs/index.php" class="btn1">Know More</a>
      
    </figure>
    

    
    <figure class="container" class="i2">
      <img src="images/F2.jpg" alt="sample94" />
      <figcaption>
        <h3></h3>
      </figcaption>
      <a href="../ContactUs/index.php" class="btn1">Know More</a>
      
    </figure>
    

    
    <figure class="container">
      <img src="images/F3.jpg" alt="sample92" />
      <figcaption>
        <h3></h3>
      </figcaption>
      <a href="../ContactUs/index.php" class="btn1">Know More</a>
      
    </figure>
    

    <figure class="container">
      <img src="images/F4.jpg" alt="sample94" />
      <figcaption>
        <h3></h3>
      </figcaption>
      <a href="../ContactUs/index.php" class="btn1">Know More</a>
      
    </figure>
    
    
    </section>
    <!--end of ART-->

    <!--Start of BUSINESS-->
    
    <section class="figure">
      <div class="busheading">

        <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
            <span></span>
            <h3></h3>
            
        </div>
    
    </div>
    </section>

    <section class="figure">
      <figure class="container">
        <img src="images/F5.png" alt="sample89" />
        <figcaption>
          <h3></h3>
        </figcaption>
        <a href="../ContactUs/index.php" class="btn1">Know More</a>
      </figure>
      

    
      <figure class="container">
        <img src="images/F6.jpg" alt="sample94" />
        <figcaption>
          <h3></h3>
        </figcaption>
        <a href="../ContactUs/index.php" class="btn1">Know More</a>
      </figure>
      

      <figure class="container">
        <img src="images/F7.png" alt="sample92" />
        <figcaption>
          <h3></h3>
        </figcaption>
        <a href="../ContactUs/index.php" class="btn1">Know More</a>
        
      </figure>
      

      <figure class="container">
        <img src="images/F8.jpg" alt="sample94" />
        <figcaption>
          <h3></h3>
        </figcaption>
        <a href="../ContactUs/index.php" class="btn1">Know More</a>
        
      </figure>
      

      
      </section>
      <!--end of BUSINESS-->

            
<div class="credit">Created by <span>Webgyor</span> | All rights reserved! Designed & Created By: Aditi,Atharva</div>

      
        

      



</body>
</html>
