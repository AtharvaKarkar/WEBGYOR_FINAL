<?php
session_start();
require_once('Db_connection.php');

if(isset($_POST["submit"])) {
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $message=$_POST["message"];
    $sql="INSERT INTO contactus ('name', 'email', 'phoneno', 'message') values ($name, $email, $phoneno, $message)";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Details successfully added";
        header("Location:../ContactUS/index.php");
    }else{
        echo "record not saved";
    }
}

?>