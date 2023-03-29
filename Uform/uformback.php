<?php
// check if form is submitted
require_once('../Authentication/Db_connection.php');
if(isset($_POST['submit'])){
 
    // get form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pemailid = $_POST['pemailid'];
    $pcontact = $_POST['pcontact'];
    $companyName = $_POST['companyName'];
    $CompEmailid = $_POST['Emailid'];
    $Explain = $_POST['Explain'];
    $websiteType = $_POST['websiteType'];
    $usersOutsideIndia = $_POST['usersOutsideIndia'];
   // $packageType = $_POST['packageType'];
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
 
  
    // insert user details into database
    $sql = "INSERT INTO userdetails (fname, lname, pemailid, pcontact, companyName, CompEmailid, Explain, websiteType, usersOutsideIndia, package_type,color_pref, facility, peraddress,city,country_state, pincode, country,feedback,convi_time) VALUES ('$fname', '$lname', '$pemailid', '$pcontact', '$companyName', '$CompEmailid', '$Explain', '$websiteType', '$usersOutsideIndia', '$packageType', '$facility', '$peraddress', '$city', '$country_state', '$pincode', '$country','$color_pref','$package_type','$feedback','$convi_time')";
    if(!mysqli_query($conn, $sql)){
        die("Error in inserting records");
    }
 
    echo "Records added successfully.";
 
    // close database connection
    mysqli_close($conn);
}
