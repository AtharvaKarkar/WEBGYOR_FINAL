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
    $newsletter=$_POST["email-newsletter"];
    $type=$_POST["type"];
    $phoneno=$_POST["phone-number"];
    $postalcode=$_POST["address-zip"];
    $time=$_POST["time"];
    $aboutbizz=$_POST["about-business"];
    $specify=$_POST["spe"];
    $expbusiness=$_POST["explain-business"];
    $users=$_POST["users"];
    $typewebsite=$_POST["website-type"];
    $packageintrest=$_POST["package"];
    $webdev=$_POST["product-website"];
    $appdev=$_POST["product-app"];
    $digimark=$_POST["product-digital"];
    $branding=$_POST["product-branding"];
    $design=$_POST["product-design"];
    $seo=$_POST["product-seo"];
    $photo=$_POST["product-photo"];
    $smgmt=$_POST["product-smgmt"];
    $recomm=$_POST["recommendation"];
    $darktop=$_POST["dark-top"]; 
    $brightcolorful=$_POST["bright-colorful"];
    $subtlesimple=$_POST["subtle-simple"];
    $productfeed=$_POST["product-feedback"];


    // insert data in db
    $sql="INSERT INTO user_details (firstname,lastname,phone,time,companyname,compemail,peremail,type,postalcode,aboutbizz) VALUES ('$firstname','$lastname','$companyname','$peremail','$compemail','$type','$phoneno','$postalcode','$time','$aboutbizz','$specify','$expbusiness','$users','$typewebsite','$packageintrest','$webdev','$appdev','$digimark','$branding','$design','$seo','$photo','$smgmt','$recomm','$darktop','$brightcolor','$subtlesimple','$productfeed')";
    $result=mysqli_query($conn,$sql); 

    if($result) {
        header('Location:../wait.php'); // give location to a page which says waiting for admin approval and after approval show invoice. // user is redirected to the waiting page
        exit();
    }
    else {
        echo "Error". mysqli_error($conn);
    }



    

    
}
mysqli_close($conn);
