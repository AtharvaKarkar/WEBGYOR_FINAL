<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
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
                </div>
                <label for="websiteType">Type of website: </label>
                <option value="ev">Event-Management</option>
                <option value="ecom">E-commerce</option>

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