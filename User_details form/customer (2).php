<!DOCTYPE html>
<html>
<head>
    <title>User Details Form</title>
    <link rel="stylesheet" type="text/css" href="user.css">
</head>
<body>



<section class="p-10">
<div style="text-align:center">
    <h3 class="">Form</h3>
    </div>
    <br><br>
   
    <div class="container">
    <ul id="progressbar">
        <li class="active">Personal Details</li>
        <li>Company Details</li>
        <li>Facilities</li>
        <li>Address Details</li>
        <li>Submit</li>     
    </ul>
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
                                <input type="text" id="fname" placeholder="Enter first name" name="fname" required>
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

                    <label for="Explain1">Explain about your business</label>
                    <input type="text" id="Explain1" placeholder="Explain about your business" name="Explain1" required>

                    <table>
                        <th><h5 style="text-align:left">Type of website: </h5></th>
                        <tr>
                            <td>
                                <select style="font-size: 15px;" name="websiteType" id="websiteType" required>
                                    <option value="">Choose</option>
                                    <option value="Event management">Event management</option>
                                    <option value="E-commerce">E-commerce</option>
                                    <option value="Business">Business</option>
                                    <option value="Education">Education</option>
                                    <option value="Travel">Travel</option>
                                    <option value="Agriculture">Agriculture</option>
                                </select>                                                   
                            </td>
                        </tr>                   
                    </table>
                    <br>
                    <table>
                        <th><h5 style="text-align:left">Are you having users outside India?</h5> </h5></th>
                        <tr>
                            <td>
                                <select style="font-size: 15px;" name="usersOutsideIndia" id="usersOutsideIndia">
                                <option>Yes</option>
                                <option>No</option>
                                </select>                                                   
                            </td>
                        </tr>                   
                    </table>
                </div>
            </div>    
            
            <div style="text-align:center">
                <h2 class="fs-title">Facility</h2>
                <h3 class="fs-subtitle">Explore about Us</h3>

                <table cellpadding="10px" >
                <table>
                    <th><h5 style="text-align:left">Type of package : </h5></th>
                    <tr>
                        <td>
                            <select style="font-size: 15px;" name="package_type" id="package_type">
                                <option value="">Choose</option>    
                                <option>₹2999</option>
                                <option>₹6999</option>
                                <option>₹8999</option>
                                <option>₹14999</option>
                            </select>                                                   
                        </td>
                    </tr>                   
                </table><br>
                <table>
                    <th><h5 style="text-align:left">Choose any particular facility: </h5></th>
                    <tr>
                        <td>
                            <select style="font-size: 15px;" name="facility" >
                                <option value="">Choose</option>    
                                <option>DESIGN</option><option>WEB DEVELOPMENT</option><option>SEARCH ENGINE OPTIMIZATION</option>
                                <option>PHOTOGRAPHY</option><option>APP DEVELOPMENT</option><option>DIGITAL MARKETING</option><option>BRANDING</option>
                                <option>SOCIAL MEDIA MANAGEMENT</option><option>NONE</option>
                            </select>                                                   
                        </td>
                    </tr>                   
                </table><br> 
            </div>

            <div style="text-align:center">
                <h2 class="fs-title">Address Details</h2>
                <h3 class="fs-subtitle">Address information</h3>

                <table>
                    <tr>
                        <td colspan="3"><input type="text" name="peraddress" id="peraddress" placeholder="Permanent Address" ></td> 
                    </tr>
                    <tr>
                       <!-- <td><input type="text" name="add1" placeholder="Permanent Address" ></td> -->
                        <td><input type="text" name="state" placeholder="State" ></td>
                        <td><input type="text" name="pincode" placeholder="Pincode" ></td>
                    </tr><br>
                </table>
                
                    <table>
                        <th><h5 align="left" >Any color preferences? </h5></th>
                        <tr>
                            <td>
                              <select style="font-size: 15px;" name=color_preference>
                                  <option>DARK AND POP</option><option>BRIGHT AND COLORFUL</option><option>SUBTLE AND SIMPLE</option>
                                  <option>OTHER</option>
                             </select>                                                   
                            </td>
                        </tr>                   
                    </table><br> 
                    
                    <table>
                        <th><h5 align="left" >Convinient time to contact you?</h5></th>
                        <tr>
                            <td>
                              <select style="font-size: 15px;" name="time" >
                                  <option>9AM TO 11AM</option><option>1PM TO 4PM</option><option>5PM TO 8PM</option>
                             </select>                                                   
                            </td>
                        </tr>                   
                    </table><br>

                    <h5 align="left" >Do you have any more feedback,If yes please share</h5>
                    <input type="text" name="feedback" placeholder="feedback"/> 
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
    $Explain1 = $_POST['Explain1'];
    $websiteType = $_POST['websiteType'];
    $usersOutsideIndia = $_POST['usersOutsideIndia'];
    $packageType = $_POST['packageType'];
    $facility = $_POST['facility'];
    $peraddress = $_POST['peraddress'];
    $city = $_POST['city'];
    $country_state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $country = $_POST['country'];
    $color_pref=$_POST['color_preference'];
    $package_type=$_POST['package_type'];
    $convi_time=$_POST['time'];
    $feedback=$_POST['feedback'];

    $conn = mysqli_connect("localhost","root","","webgyor") or die($conn);

    $fname = mysqli_real_escape_string($conn,$fname);
    $lname = mysqli_real_escape_string($conn,$lname);
    $pemailid = mysqli_real_escape_string($conn,$pemailid);
    $pcontact = mysqli_real_escape_string($conn,$pcontact);
    $companyName = mysqli_real_escape_string($conn,$companyName);
    $CompEmailid = mysqli_real_escape_string($conn,$CompEmailid);
    $Explain1 = mysqli_real_escape_string($conn,$Explain1);
    $websiteType = mysqli_real_escape_string($conn,$websiteType);
    $usersOutsideIndia = mysqli_real_escape_string($conn,$usersOutsideIndia);
    $facility = mysqli_real_escape_string($conn,$facility);
    $peraddress = mysqli_real_escape_string($conn,$peraddress);
    $city = mysqli_real_escape_string($conn,$city);
    $country_state = mysqli_real_escape_string($conn,$country_state);
    $pincode = mysqli_real_escape_string($conn,$pincode);
    $country = mysqli_real_escape_string($conn,$country);
    $color_pref = mysqli_real_escape_string($conn, $color_pref);
    $package_type = mysqli_real_escape_string($conn, $package_type);
    $convi_time = mysqli_real_escape_string($conn, $convi_time);
    $feedback = mysqli_real_escape_string($conn, $feedback);

    $result = mysqli_query($conn,"insert into customer values ('$fname', '$lname', '$pemailid', '$pcontact', '$companyName', '$CompEmailid', '$Explain1', '$websiteType', '$usersOutsideIndia', '$facility', '$peraddress', '$city', '$country_state', '$pincode', '$country','$color_pref','$package_type','$feedback','$convi_time')") or die("Query Failed".mysqli_error($conn));

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