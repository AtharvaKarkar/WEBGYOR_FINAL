<?php
// user details db needs to be created 
require_once('../Authentication/Db_connection.php');
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $firstname=$_POST["first-name"];
    $lastname=$_POST["last-name"];
    $companyname=$_POST["company-name"];
    $peremail=$_POST["personalemail-address"];
    $compemail=$_POST["companyemail-address"];
    $type=$_POST["type"];
    $phoneno=$_POST["phone-number"];
    $postalcode=$_POST["address-zip"];
    $time=$_POST["time"];
    $aboutbizz=$_POST["about-business"];

    // insert data in db
    $sql="INSERT INTO user_details (firstname,lastname,phone,time,companyname,compemail,peremail,type,postalcode,aboutbizz) VALUES ('$firstname',)";
    $result=mysqli_query($conn,$sql); 

    if($result) {
        header('Location: '); // give location to a page which says waiting for admin approval and after approval show invoice.
        exit();
    }
    else {
        echo "Error". mysqli_error($conn);
    }



    

    
}
mysqli_close($conn);
?>