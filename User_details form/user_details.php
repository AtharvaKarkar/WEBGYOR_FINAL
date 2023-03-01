<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
  <!-- header section starts  -->

<header class="header">

<!--div id="menu-btn" class="fas fa-bars"></div-->

<a  data-aos="zoom-in-left" data-aos-delay="150" href="../Homepage/index.php" class="logo"> <i class="fas fa-shapes"></i>WEBGYOR</a>

<nav class="navbar">
    <a data-aos="zoom-in-left" data-aos-delay="300" href="../Homepage/index.php">Home</a>
    <a data-aos="zoom-in-left" data-aos-delay="450" href="../Homepage/index.php">About</a>
    <a data-aos="zoom-in-left" data-aos-delay="600" href="../Templates/index.php">Our Work</a>
    <a data-aos="zoom-in-left" data-aos-delay="750" href="../services/Services.php">Services</a>
    <a  data-aos="zoom-in-left" data-aos-delay="900" href="../User_details from/user_details.php">Interested?</a>
    <a href="../ContactUs/index.php" data-aos="zoom-in-left" data-aos-delay="1150">Contact-Us</a>
</nav>
<!-- <a href="../Authentication/index.php" data-aos="zoom-in-left" data-aos-delay="1300" href="#Sign-In" class="btn">Sign-In</a> -->
    
<a href="../Authentication/user_logout.php" data-aos="zoom-in-left" data-aos-delay="1300" href="#Sign-In" class="btn">Logout</a>
       
</header>


<!-- header section ends -->
<link rel="stylesheet" href="../User_details form/user_details.css">
<div class="mx-auto container">

    <!-- Progress Form -->
    <form id="progress-form" class="p-4 progress-form" action="user_detailsback (1).php" lang="en" novalidate method="post">
  
      <!-- Step Navigation -->
      <!--div class="d-flex align-items-start mb-3 sm:mb-5 progress-form__tabs" role="tablist">
        <button id="progress-form__tab-1" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-1" aria-selected="true">
          <span class="d-block step" aria-hidden="true">Step 1 <span class="sm:d-none">of 3</span></span>
          Your Details
        </button>
        <!--button id="progress-form__tab-2" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-2" aria-selected="false" tabindex="-1" aria-disabled="true">
          <span class="d-block step" aria-hidden="true">Step 2 <span class="sm:d-none">of 3</span></span>
          About your website
        </button>
        <button id="progress-form__tab-3" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-3" aria-selected="false" tabindex="-1" aria-disabled="true">
          <span class="d-block step" aria-hidden="true">Step 3 <span class="sm:d-none">of 3</span></span>
          Agree
        </button>
      </div>
      <!-- / End Step Navigation -->
  
      <!-- Step 1 -->
      <section id="progress-form__panel-1" role="tabpanel" aria-labelledby="progress-form__tab-1" tabindex="0">
        <div class="sm:d-grid sm:grid-col-2 sm:mt-3">
          <div class="mt-3 sm:mt-0 form__field">
            <label for="first-name">
              First name
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <input id="first-name" type="text" name="first-name" autocomplete="given-name" required>
          </div>

          <div class="mt-3 sm:mt-0 form__field">
            <label for="last-name">
              Last name
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <input id="last-name" type="text" name="last-name" autocomplete="last-name" required>
          </div>

          <div class="mt-3 sm:mt-0 form__field">
            <label for="last-name">
              Company name
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <input id="company-name" type="text" name="company-name" autocomplete="company-name" required>
          </div>
          </div>
        
  
        <div class="mt-3 form__field">
          <label for="email-address">
             Personal Email address
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <input id="personalemail-address" type="email" name="personalemail-address" autocomplete="personalemail" inputmode="personalemail" required>
        </div>

        <div class="mt-3 form__field">
            <label for="email-address">
             Company Email address
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <input id="companyemail-address" type="email" name="companyemail-address" autocomplete="companyemail" inputmode="companyemail" required>
        </div>
  
        <div class="mt-1 form__field">
          <label class="form__choice-wrapper">
            <input id="email-newsletter" type="checkbox" name="email-newsletter" value="Yes" checked>
            <span>Yes, I would like to sign up to receive the newsletter</span>
          </label>
        </div>

        <div class="mt-3 sm:mt-0 form__field">
            <label for="address-state">
              Type of your website
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <select id="type" name="type" autocomplete="shipping address-level1" required>
              <option value="" disabled selected>Please select</option>
              <option value="E">E-commerce</option>
              <option value="B">Business</option>
              <option value="Ed">Education</option>
              <option value="Tr">Travel</option>
              <option value="We">Wedding & Event Management</option>
              <option value="Ar">Agriculture</option>
              <option value="Ot">Other</option>
            </select>
          </div>

          <div class="mt-3 form__field">
            <label for="phone-number">
              Specify (optional)
            </label>
            <input id="specify" type="spe" name="spe" autocomplete="spe" inputmode="spe">
          </div>
  
  
        <div class="mt-3 form__field">
          <label for="phone-number">
            Phone number (optional)
          </label>
          <input id="phone-number" type="tel" name="phone-number" autocomplete="tel" inputmode="tel">
        </div>

        <div class="mt-3 form__field">
        <label for="address">
          Explain about your business...
          <span data-required="true" aria-hidden="true"></span>
        </label>
        <input id="about" type="text" name="explain-business" autocomplete="" required>
      </div>

      <div class="mt-3 sm:mt-0 form__field">
          <label for="users">
            Do you have users out of India?
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <select id="users" name="users" autocomplete="users" required>
            <option value="" disabled selected>Please select</option>
            <option value="AL">Yes</option>
            <option value="AK">No</option>
          
          </select>
        </div>

        <div class="mt-3 sm:mt-0 form__field">
          <label for="type">
            Type of your website?
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <select id="type" name="website-type" autocomplete="type" required>
            <option value="" disabled selected>Please select</option>
            <option value="AL">Dynamic</option>
            <option value="AK">Static</option>
          
          </select>
        </div>

      

        <div class="mt-3 sm:mt-0 form__field">
          <label for="package">
            Package you are interested in..
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <select id="package" name="package" autocomplete="package" required>
            <option value="" disabled selected>Please select</option>
            <option value="AL">₹2999</option>
            <option value="AK">₹6999</option>
            <option value="AZ">₹8999</option>
            <option value="AK">₹14999</option> 
          </select>
        </div>

        <fieldset id="facilities" class="mt-3 form__field" required>
        <legend>
          Facilities you are interested in...
        </legend>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-website" value="A">
          <span>WEB DEVELOPMENT</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-app" value="B">
          <span>APP DEVELOPMENT</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-digital" value="C">
          <span>DIGITAL MARKETING</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-branding" value="B">
          <span>BRANDING</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-design" value="B">
          <span>DESIGN</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-seo" value="B">
          <span>SEARCH ENGINE OPTIMIZATION</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-photo" value="B">
          <span>PHOTOGRAPHY</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-smgmt" value="B">
          <span>SOCIAL MEDIA MANAGEMENT</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-purchase" value="B">
          <span>NONE</span>
        </label>
        </fieldset>

        <div class="mt-3 form__field" required>
        <label for="product-recommendation">
          How likely are you to recommend our products to friends or family?
          <span data-required="true" aria-hidden="true"></span>
        </label>
        <select id="recommendation" name="recommendation" required>
          <option value="" disabled selected>Please select</option>
          <option value="Highly likely">Highly likely</option>
          <option value="Very likely">Very likely</option>
          <option value="Likely">Satisfied</option>
          <option value="Very unlikely">Very unlikely</option>
          <option value="Highly unlikely">Highly unlikely</option>
        </select>
      </div>

      <fieldset id="color" class="mt-3 form__field" required>
        <legend>
          Color scheme you prefer?
        </legend>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="dark-pop" value="A">
          <span>DARK AND POP</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="bright-colorful" value="B">
          <span>BRIGHT AND COLORFUL</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="subtle-simple" value="C">
          <span>SUBTLE AND SIMPLE</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="other" value="C">
          <span>OTHER</span>
        </label>
      </fieldset>

        
       
        <div class="mt-3 sm:mt-0 form__field">
          <label for="time">
            Convinient time to contact you..
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <select id="time" name="time" autocomplete="time" required>
            <option value="" disabled selected>Please select</option>
            <option value="AL">9am-12pm</option>
            <option value="AK">2pm-4pm</option>
            <option value="AZ">6pm-9pm</option>
            
          </select>
        </div>
        

      <div class="mt-3 form__field">
        <label for="feedback">
          Do you have any additional feedback or comments about our products?
        </label>
        <textarea id="product-feedback" name="product-feedback" rows="5"></textarea>
      </div>


  
        <div class="d-flex align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
          <button type="button" data-action="submit" >
            Submit
          </button>
        </div>
      </section>
      <!-- / End Step 1 -->
  
      

      <!-- Step 2 -->
    <!--section id="progress-form__panel-1" role="tabpanel" aria-labelledby="progress-form__tab-1" tabindex="0" hidden>
      <div class="mt-3 form__field">
        <label for="address">
          Explain about your business...
          <span data-required="true" aria-hidden="true"></span>
        </label>
        <input id="about" type="text" name="explain-business" autocomplete="" required>
      </div>

      <div class="mt-3 sm:mt-0 form__field">
          <label for="users">
            Do you have users out of India?
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <select id="users" name="users" autocomplete="users" required>
            <option value="" disabled selected>Please select</option>
            <option value="AL">Yes</option>
            <option value="AK">No</option>
          
          </select>
        </div>

        <div class="mt-3 sm:mt-0 form__field">
          <label for="type">
            Type of your website?
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <select id="type" name="website-type" autocomplete="type" required>
            <option value="" disabled selected>Please select</option>
            <option value="AL">Dynamic</option>
            <option value="AK">Static</option>
          
          </select>
        </div>

      

        <div class="mt-3 sm:mt-0 form__field">
          <label for="package">
            Package you are interested in..
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <select id="package" name="package" autocomplete="package" required>
            <option value="" disabled selected>Please select</option>
            <option value="AL">₹2999</option>
            <option value="AK">₹6999</option>
            <option value="AZ">₹8999</option>
            <option value="AK">₹14999</option> 
          </select>
        </div>

        
        <fieldset id="facilities" class="mt-3 form__field" required>
        <legend>
          Facilities you are interested in...
        </legend>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-website" value="A">
          <span>WEB DEVELOPMENT</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-app" value="B">
          <span>APP DEVELOPMENT</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-digital" value="C">
          <span>DIGITAL MARKETING</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-branding" value="B">
          <span>BRANDING</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-design" value="B">
          <span>DESIGN</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-seo" value="B">
          <span>SEARCH ENGINE OPTIMIZATION</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-photo" value="B">
          <span>PHOTOGRAPHY</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-smgmt" value="B">
          <span>SOCIAL MEDIA MANAGEMENT</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-purchase" value="B">
          <span>NONE</span>
        </label>
      
      </fieldset>

        
        
      <div class="d-flex flex-column-reverse sm:flex-row align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
        <button type="button" class="mt-1 sm:mt-0 button--simple" data-action="prev">
          Back
        </button>
        <button type="button" data-action="next">
          Continue
        </button>
      </div>
    </section>
    <!-- / End Step 2 -->

     <!-- Step 3 -->
    <!--section id="progress-form__panel-3" role="tabpanel" aria-labelledby="progress-form__tab-3" tabindex="0" hidden>
      
      <div class="mt-3 form__field">
        <label for="product-recommendation">
          How likely are you to recommend our products to friends or family?
          <span data-required="true" aria-hidden="true"></span>
        </label>
        <select id="recommendation" name="recommendation" required>
          <option value="" disabled selected>Please select</option>
          <option value="Highly likely">Highly likely</option>
          <option value="Very likely">Very likely</option>
          <option value="Likely">Satisfied</option>
          <option value="Very unlikely">Very unlikely</option>
          <option value="Highly unlikely">Highly unlikely</option>
        </select>
      </div>

      <fieldset id="color" class="mt-3 form__field" required>
        <legend>
          Color scheme you prefer?
        </legend>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="dark-pop" value="A">
          <span>DARK AND POP</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="bright-colorful" value="B">
          <span>BRIGHT AND COLORFUL</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="subtle-simple" value="C">
          <span>SUBTLE AND SIMPLE</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="other" value="C">
          <span>OTHER</span>
        </label>
      </fieldset>

      <div class="mt-3 sm:mt-0 form__field">
          <label for="time">
            Convinient time to contact you..
            <span data-required="true" aria-hidden="true"></span>
          </label>
          <select id="time" name="time" autocomplete="time" required>
            <option value="" disabled selected>Please select</option>
            <option value="AL">9am-12pm</option>
            <option value="AK">2pm-4pm</option>
            <option value="AZ">6pm-9pm</option>
            
          </select>
        </div>
        

      <div class="mt-3 form__field">
        <label for="feedback">
          Do you have any additional feedback or comments about our products?
        </label>
        <textarea id="product-feedback" name="product-feedback" rows="5"></textarea>
      </div>

      <div class="d-flex flex-column-reverse sm:flex-row align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
        <button type="button" class="mt-1 sm:mt-0 button--simple" data-action="prev">
          Back
        </button>
        <button type="submit">
          Submit
        </button>
      </div>
    </section>
    <!-- / End Step 3 -->

    <!-- Thank You-->
    
          
    <section id="thank-you" hidden>
      <p>Thank you for your submission!</p>
      <p>We appreciate you contacting us. One of our team members will get back to you very&nbsp;soon.</p>
    </section>
    <!-- / End Thank You -->

  </form>
  <!-- / End Progress Form -->

  
  </div>
    </body>
    <!-- <script src="../User_details form/user_details.js" ></script> -->
  </html>
