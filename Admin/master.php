<?php
// this page is not ready yet 
session_start();
error_reporting (E_ALL ^ E_NOTICE);

include('Db_connection.php');
//include('functions.php');

if(isset($_POST['add']))
{
    $cat=strip_tags($_POST['cat']);
    $name=strip_tags($_POST['name']);
    $desc=strip_tags($_POST['desc']);
    $price=strip_tags($_POST['price']);
    $location=strip_tags($_POST['location']);
    $state=strip_tags($_POST['state']);
    $city=strip_tags($_POST['city']);
    $f_cat=strip_tags($_POST['f_cat']);
    $f_type=strip_tags($_POST['f_type']);
    $img_url=strip_tags($_POST['img_url']);
    $status=strip_tags($_POST['status']);

    $master_query = "INSERT INTO master_list(item_category, item_name, item_description, price, location, state, city, food_category, food_type, images, status) VALUES ('$cat' ,'$name' ,'$desc' ,'$price' ,'$location' ,'$state' ,'$city' ,'$f_cat' ,'$f_type' ,'$img_url' ,'$status')";

    $result = $con->query($master_query);
    $run = mysqli_query($con, $master_query);

    if($result)
    {
        echo 'Added Successfully!';
    }

    
    else
    {
        //redirect("add.php", "Somethin' went wrong 😣");
    }
}


?>