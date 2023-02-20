<?php
session_start();
if(isset($_POST["signup"])){
    $name=strip_tags($_POST["logname"]);
    $email=strip_tags($_POST["logemail"]);
    $pwd=strip_tags($_POST["logpass"]);
    $cpwd=strip_tags($_POST["logpass2"]);
  
    if($pwd!=$cpwd){
        die("Password entered are not same!");
    }
    $pwd=md5($pwd);
    include "connection.php";
    $sql="INSERT INTO users_table (id,name,email,password) VALUES (id, '$username','$email','$password')";
    if(mysqli_query($conn,$sql)) {
        header ("Location:index.php"); ##  this should take the user to webgyor homepage.css

                     # index.php should be changed to homepage.css
    } 
    else {
        echo "record not saved";
    }

}
?>