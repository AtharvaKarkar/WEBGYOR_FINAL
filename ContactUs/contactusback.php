<?php

require_once('../Authentication/Db_connection.php');
if($_SERVER['REQUEST_METHOD']== 'POST') {
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $message=$_POST["message"];
    // insert data into db
    $sql="INSERT INTO contactus(name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    $result=mysqli_query($conn,$sql);

    if($result){
       // echo "Details successfully added ";
        header("Location:../ContactUS/index.php");
        exit(); // prevents further execution
    }else{
        echo "record not saved" . mysqli_error($conn);
    }
} 

mysqli_close($conn);

?>