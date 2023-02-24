<?php
require_once('../Authentication/Db_connection.php');
if(isset($_POST["Send"])) {
    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $time=$_POST["time"];
    $message=$_POST["message"];
    $sql="INSERT INTO join_us(name, time, phone, discussion topic) VALUES ('$name', '$phone', '$time', '$message')";
    $result=mysqli_query($con,$sql);

    if(mysqli_query($con,$sql)){
        echo "Details successfully added ";
       // header("Location:../ContactUS/index.php");
    }else{
        echo "record not saved";
    }
} 
?>