<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="../ContactUs/style.css" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- header section starts  -->

  <header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="../Homepage/index.html" data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <i
        class="fas fa-shapes"></i>WEBGYOR </a>

    <nav class="navbar">
      <a href="../Homepage/index.php" data-aos="zoom-in-left" data-aos-delay="300" href="#Home">Home</a>
      <a href="../Homepage/index.php" data-aos="zoom-in-left" data-aos-delay="450" href="#About">About</a>
      <a href="../Templates/index.php" data-aos="zoom-in-left" data-aos-delay="600" href="#Template">Template</a>
      <a href="../services/Services.php" data-aos="zoom-in-left" data-aos-delay="750" href="#Services">Services</a>
      <a data-aos="zoom-in-left" data-aos-delay="900" href="#Call">Call</a>
      <a href="../ContactUs/index.php" data-aos="zoom-in-left" data-aos-delay="1150" href="#Contact-Us">Contact-Us</a>
    </nav>

    <a href="../Authentication/index.php" data-aos="zoom-in-left" data-aos-delay="1300" href="#Sign-In"
      class="btn">Sign-In</a>

  </header>


  <!-- header section ends -->
  <div class="container">
    <span class="big-circle"></span>
    <img src="img/shape.png" class="square" alt="" />
    <div class="form">
      <div class="contact-info">
        <h3 class="title">Let's get in touch</h3>
        <p class="text">
          Ask us what will make you grow and
          help us know you more.
        </p>

        <div class="info">
          <div class="information">
            <img src="img/location.png" class="icon" alt="" />
            <p>Kalapataru, Shivajinagar , Pune</p>
          </div>
          <div class="information">
            <img src="img/email.png" class="icon" alt="" />
            <p>webgyor@gmail.com</p>
          </div>
          <div class="information">
            <img src="img/phone.png" class="icon" alt="" />
            <p>7083939090/7550755584</p>
          </div>
        </div>

        <div class="social-media">
          <p>Connect with us :</p>
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="contact-form">
        <span class="circle one"></span>
        <span class="circle two"></span>

        <form action="index.html" autocomplete="off">
          <h3 class="title">Contact us</h3>
          <div class="input-container">
            <input type="text" name="name" class="input" />
            <label for="">Name</label>
            <span>Name</span>
          </div>
          <div class="input-container">
            <input type="email" name="email" class="input" />
            <label for="">Email</label>
            <span>Email</span>
          </div>
          <div class="input-container">
            <input type="tel" name="phone" class="input" />
            <label for="">Phone</label>
            <span>Phone</span>
          </div>
          <div class="input-container textarea">
            <textarea name="message" class="input"></textarea>
            <label for="">Message</label>
            <span>Message</span>
          </div>
          <input type="submit" value="Send" class="btn" />
        </form>
      </div>
    </div>
  </div>

  <script src="../ContactUs/app.js"></script>
</body>

</html>