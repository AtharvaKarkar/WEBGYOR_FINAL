<?php

require_once('../Authentication/Db_connection.php');
if(isset($_POST["Send"])) {
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $message=$_POST["message"];
    $sql="INSERT INTO contactus(name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    $result=mysqli_query($con,$sql);

    if(mysqli_query($con,$sql)){
        echo "Details successfully added ";
        header("Location:../ContactUS/index.php");
    }else{
        echo "record not saved";
    }
} 



?>