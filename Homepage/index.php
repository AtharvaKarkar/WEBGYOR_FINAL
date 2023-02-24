<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBGYOR</title>
    
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- custom js file link  -->
    <script src="script.js" defer></script>

</head>
<body>

    <div class="hpvideo" id="Home">
    <video autoplay loop muted>
    <source src ="images/homepage video.mp4" type="video/mp4">
    Your browser does not support the video ,change your browser
    </video>
    </div>
<!-- header section starts  -->

<header class="header">

    <!--div id="menu-btn" class="fas fa-bars"></div-->

    <a   data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <i class="fas fa-shapes"></i>WEBGYOR </a>

    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="../Homepage/index.php">Home</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="#About">About</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="#Template">Our Work</a>
        <a data-aos="zoom-in-left" data-aos-delay="750" href="../services/Services.php">Services</a>
        <a  data-aos="zoom-in-left" data-aos-delay="900" href="../Call/index.php">Join Us</a>
        <a href="../ContactUs/index.php" data-aos="zoom-in-left" data-aos-delay="1150">Contact-Us</a>
    </nav>
   <!-- <a href="../Authentication/index.php" data-aos="zoom-in-left" data-aos-delay="1300" href="#Sign-In" class="btn">Sign-In</a> -->
        
    <a href="../Authentication/user_logout.php" data-aos="zoom-in-left" data-aos-delay="1300" href="#Sign-In" class="btn">Logout</a>
           
</header>


<!-- header section ends -->
<section class="columns">
	
	<div class="column">
		<div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-shopping-cart border rounded-circle fa-stack-1x fa-inverse" style="background: rgba(162,54,165,0.74);"></i></span>
            <h4 class="section-heading" style="font-family: Akshar, sans-serif;"> Creative</h4>
            <p class="text-muted">With our wild minds and disciplined eyes, our creativity is naturally connected to our enthusiasm.</p>
        </div>
        </div>
	
  
  <div class="column">
        <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-laptop border rounded-circle fa-stack-1x fa-inverse" style="background: rgba(162,54,165,0.74);border-style: solid;border-color: rgb(154,68,184);font-size: 67px;margin-right: -17px;padding-top: 0px;"></i></span>
             <h4 class="section-heading" style="font-family: Akshar, sans-serif;"> Innovative</h4>
             <p class="text-muted">We push beyond our limits to make each of our works stand out and bring out something new</p>
        </div>
    </div>

    <div class="column">
        <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-lock border rounded-circle fa-stack-1x fa-inverse" style="background: rgba(162,54,165,0.74);"></i></span>
            <h4 class="section-heading" style="font-family: Akshar, sans-serif;"> Proactive</h4>
            <p class="text-muted">Our Proactive culture simplifying leadership, increase positive results and build a more joyful workplace.</p>
        </div>
    </div>
	

</section>	
	
	

</div>

<!-- about section starts  -->

<section class="about" id="About">

    <div class="video-container" data-aos="fade-right" data-aos-delay="300" height="200px" href="">
        <video src="images/about us video.mp4" muted autoplay loop class="video"></video>
        <div class="controls">
            
            
        </div>
    </div>

    <div class="content" data-aos="fade-left" data-aos-delay="600">
        <span>Why choose us?</span>
        <h3>To bring your business online </h3>
        <p>We are few young dreamers, who love creating work that is provocative, has meaning & spreads awareness. Our team is  a blend of creative ideas, digital proficiency and technologies expertise. This will make us capable of handling creative as well as digital needs of your brand or business.

            We'll help brands and businesses to establish a convincing ONLINE presence. Moreover, our extensive range of services include creating all the content and visual elements of your brand. We have it all covered from logos to packaging and design and advertisments. 
            
            Our team of thinkers, developers, designers will deliver content, design,marketing strategy, and everything that revloves around creating a brand image and its marketing . 
            Reach out to us with all your creative and marketing needs we'll show you how well we can align your needs with desired output. 
            
            </p>
        
    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="Services">

    <div class="heading">
        <span>WHY WEBGYOR?</span>
        <h1>For best working and growing</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <i class="fas fa-globe"></i>
            <h3>Best technical team.</h3>
            <p>All your requirements will be fulfilled by our team.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <i class="fas fa-palette"></i>
            <h3>Best designs.</h3>
            <p>Best template designed for the best user experience.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <i class="fas fa-paper-plane"></i>
            <h3>Color Combinations.</h3>
            <p>Best user loving color combinations in all templates.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
            <i class="fas fa-running"></i>
            <h3>Fast Work.</h3>
            <p>Your requirements would be resolved as soon as possible.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
            <i class="fas fa-wallet"></i>
            <h3>Affordable Price.</h3>
            <p>All your work in the best affordable price .</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="900">
            <i class="fas fa-headset"></i>
            <h3>24/7 support</h3>
            <p>Helping you with any doubts.</p>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- templates section starts  -->

<section class="template" id="Template">

    <div class="heading">
        <span>When are you getting ONLINE ?.</span>
        <h1>OUR BEST WORK</h1>
    </div>
    
    <div class="box-container">

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/F8.jpg" alt="">
            <span></span>
            <h3></h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/F4.jpg" alt="">
            <span></span>
            <h3></h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/F3.jpg" alt="">
            <span></span>
            <h3></h3>
        </div>

        <a href="../Templates/index.php" class="btn" href="template">Explore</a>

        
        
    </div>

</section>

<!-- templates section ends -->


<!--quote-->

<div class="banner" >

    <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span></span>
        <h3>YOU DREAM BIG ,WE WILL ACCOMPLISH THEM.</h3>
        
    </div>

</div>

<!-- review section starts  -->

<section class="review">

    <div class="content" data-aos="fade-right" data-aos-delay="300">
        <span>TESTIMONIALS</span>
        <h3>Good news from our clients</h3>
        <p>Your experiences , reviews , improvements are the only source for our growth and helping you grow. Always grateful for our users.

    <div class="box-container" data-aos="fade-left" data-aos-delay="600">

        <div class="box">
            <p>Best experience for me. Fully smooth functioning website delivered.</p>
            <div class="user">
                <img src="images/pic-1.png" alt="">
                <div class="info">
                    <h3>Eeshan</h3>
                    <span>Designer</span>
                </div>
            </div>
        </div>
        <div class="box">
            <p>I am very happy with the results. WEBGYOR supported our business with the way changing business consultation stratergies.</p>
            <div class="user">
                <img src="images/pic-2.png" alt="">
                <div class="info">
                    <h3>Shreeya Mahale</h3>
                    <span>Designer</span>
                </div>
            </div>
        </div>
        <div class="box">
            <p>Best templates with decent color combinations.</p>
            <div class="user">
                <img src="images/pic-3.png" alt="">
                <div class="info">
                    <h3>Pranita Patil</h3>
                    <span>Designer</span>
                </div>
            </div>
        </div>
        <div class="box">
            <p>Digital marketing just boosted my business more and helped me grow my business more.</p>
            <div class="user">
                <img src="images/pic-4.png" alt="">
                <div class="info">
                    <h3>Rushikesh Aware</h3>
                    <span>designer</span>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->


<!-- Call section starts  -->

<div class="banner" id="Call">

    <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span>Be a part of us.</span>
        <h3>EXPLORE WEBGYOR</h3>
        <p>Hiring the best experienced people. Want to be part of WEBGYOR what are you waiting for?</p>
        <a href="../Call/index.php" class="btn">Book a Call</a>
    </div>

</div>

<!-- banner section ends -->

                    

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <a href="#" class="logo"> <i class="fas fa-paper-plane"></i>WEBGYOR </a>
            <p>So when are yo taking your business online??</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <h3>quick links</h3>
            <a href="../ContactUs/index.php" class="links"> <i class="fas fa-arrow-right"></i> Contact Us</a>
            <a href="../Know_more/Know_more.php" class="links"> <i class="fas fa-arrow-right"></i> Know More </a>
            <a href="../Call/index.php" class="links"> <i class="fas fa-arrow-right"></i> Book a Call </a>
            <a href="../Privacy policy/Privacy.php" class="links"> <i class="fas fa-arrow-right"></i>Privacy Policy </a>
            
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <h3>contact info</h3>
            <p> <i class="fas fa-map"></i> Kalpataru,Shivajinagar,Pune, India </p>
            <p> <i class="fas fa-phone"></i> 7083939090 </p>
            <p> <i class="fas fa-envelope"></i> webgyor@gmail.com </p>
            <p> <i class="fas fa-clock"></i> 7:00am - 10:00pm </p>
        </div>

        

    </div>

</section>

<div class="credit">Created by <span>Webgyor</span> | All rights reserved! Designed & Created By: Aditi,Atharva</div>

<!-- footer section ends -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

    AOS.init({
        duration: 800,
        offset:150,
    });

</script>

</body>
</html>