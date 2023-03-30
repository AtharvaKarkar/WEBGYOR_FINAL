<!DOCTYPE html>
<html>
<head>
    <title>User Details Form</title>
    <link rel="stylesheet" type="text/css" href="user.css">
</head>
<body>



<section class="p-10">
<div style="text-align:center">
    <h3 class="">User Details Form</h3>
    </div>
    <br><br>
   
    <!--div class="container">
    <ul id="progressbar">
        <li class="active">Personal Details</li>
        <li>Company Details</li>
        <li>Facilities</li>
        <li>Address Details</li>
        <li>Submit</li>     
    </ul-->
    <form action="" method="POST" enctype="multipart/form-data" id="msform">
    
    <div class="box">

        <div class="fieldset">
            <h2 class="fs-title" style="text-align:center">Personal Details</h2>
            <h3 class="fs-subtitle" style="text-align:center">Tell us something more about you ..</h3>

                <table cellspacing="10" width="100%">
                    <tr>
                        <td>
                            <div style="text-align:left">
                                <label for="fname">First Name</label>
                                <input type="text" id="fname" placeholder="Enter first name" name="fname" pattern=[A-Za-z]{2,30} title="Only alphabet" onblur="checkFName()" required>
                            </div>
                        </td>
                        <td>
                            <div style="text-align:left">
                                <label for="fname">Last Name</label>
                                <input type="text" id="lname" placeholder="Enter last name" name="lname" required>
                            </div>
                        </td>
                    </tr>
                </table>
                <div style="text-align:left">
                    <label for="pemailid">Personal Email id</label>
                    <input type="text" id="pemailid" placeholder="Enter Personal Email id" name="pemailid" required>

                    <label for="pcontact">Personal Contact number</label>
                    <input type="text" id="pcontact" placeholder="Enter Personal Contact number" name="pcontact" required>
                </div>

            <br>    
            <br>    
            <br>    
            <br>    
            <div>
                <h2 class="fs-title" style="text-align:center">Company/Business details</h2>
                <h3 class="fs-subtitle" style="text-align:center">Tell us something more about your business..</h3>
                
                <div style="text-align:left">
                    <label for="companyName">Company Name</label>
                    <input type="text" id="companyName" placeholder="Enter your Company Name" name="companyName" required>

                    <label for="Emailid">Company Email id</label>
                    <input type="text" id="Emailid" placeholder="Enter your Company Email id" name="Emailid" required>
                    
                    <label for="Emailid">Type of your website and explain about is</label>
                    <input type="text" id="Type" placeholder="Enter your business type" name="Type" required>
                </div>
               <br></br>
                <div class="mt-3 sm:mt-0 form__field" style="text-align:left">
            <label for="address-state">
              Type of your website
              <span data-required="true" aria-hidden="true"></span>
            </label>
            <select id="type" name="type" autocomplete="shipping address-level1"  style="text-align:center"required>
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
         <br></br>
          <div class="mt-3 form__field"style="text-align:left">
            <label for="phone-number">
              Specify (optional)
            </label>
            <input id="specify" type="spe" name="spe" autocomplete="spe" inputmode="spe">
          </div>

          <div class="mt-3 form__field"style="text-align:left">
          <label for="phone-number">
            Phone number (optional)
          </label>
          <input id="phone-number" type="tel" name="phone-number" autocomplete="tel" inputmode="tel">
        </div>

        <div class="mt-3 form__field"style="text-align:left">
        <label for="address">
          Explain about your business...
          <span data-required="true" aria-hidden="true"></span>
        </label>
        <input id="about" type="text" name="explain-business" autocomplete="" required>
      </div>
      <br></br>
      <div class="mt-3 sm:mt-0 form__field"style="text-align:left">
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
        
        <br></br>
        <div class="mt-3 sm:mt-0 form__field"style="text-align:left">
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
        <br></br>
        <div class="mt-3 sm:mt-0 form__field" style="text-align:left">
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
        <br></br>

        <fieldset id="facilities" class="mt-3 form__field"style="text-align:left" required>
        <legend>
          Facilities you are interested in...
        </legend>
        <label class="form__choice-wrapper"style="text-align:left">
          <input type="checkbox" name="product-website" value="A">
          <span>WEB DEVELOPMENT  ₹5000</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-app" value="B">
          <span>APP DEVELOPMENT    ₹3500</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-digital" value="C">
          <span>DIGITAL MARKETING     ₹2000</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-branding" value="B">
          <span>BRANDING    ₹2000</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-design" value="B">
          <span>DESIGN     ₹2000</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-seo" value="B">
          <span>SEARCH ENGINE OPTIMIZATION      ₹3000</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-photo" value="B">
          <span>PHOTOGRAPHY     ₹2800</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-smgmt" value="B">
          <span>SOCIAL MEDIA MANAGEMENT     ₹4000</span>
        </label>
        <label class="form__choice-wrapper">
          <input type="checkbox" name="product-purchase" value="B">
          <span>NONE</span>
        </label>
        </fieldset>
        <br></br>

        <div class="mt-3 form__field" style="text-align:left" required>
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
      <br></br>

      <fieldset id="color" class="mt-3 form__field" style="text-align:left" required>
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
       
      <br></br>
      <div class="mt-3 sm:mt-0 form__field" style="text-align:left">
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
        <br></br>
        

      <div class="mt-3 form__field" style="text-align:left">
        <label for="feedback">
          Do you have any additional feedback or comments about our products?
        </label>
        <textarea id="product-feedback" name="product-feedback" rows="5"></textarea>
      </div>

        
       


                

        </div>        
    </div>

        <div class="">
            <button class="submit-button" id="submit" name="submit">Submit</button>
        </div>
        <br><br>
    </div>
</div>
    </section>

</body>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
<script type="text/javascript" src="user.js" ></script>

</html>


<?php

if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pemailid = $_POST['pemailid'];
    $pcontact = $_POST['pcontact'];
    $companyName = $_POST['companyName'];
    $CompEmailid = $_POST['Emailid'];

    $conn = mysqli_connect("localhost","root","","webgyor") or die($conn);

    $fname = mysqli_real_escape_string($conn,$fname);
    $lname = mysqli_real_escape_string($conn,$lname);
    $pemailid = mysqli_real_escape_string($conn,$pemailid);
    $pcontact = mysqli_real_escape_string($conn,$pcontact);
    $companyName = mysqli_real_escape_string($conn,$companyName);
    $CompEmailid = mysqli_real_escape_string($conn,$CompEmailid);

    $result = mysqli_query($conn,"insert into customer values ('$fname', '$lname', '$pemailid', '$pcontact', '$companyName', '$CompEmailid')") or die("Query Failed".mysqli_error($conn));

    if(move_uploaded_file($tmp_name,$new_name))
	{
        
        $desitationfile ='docs/'.$filename;

		echo "<script>alert('Registration Successfull')</script>";
		echo "<script>location.href='./home.php'</script>";
	}
	else
	{
		echo "<script>alert('Registration Successfull')</script>";
		
	}
    // Close the database connection
    mysqli_close($conn);
	
}
?>