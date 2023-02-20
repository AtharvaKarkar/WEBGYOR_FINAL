<?php
session_start();
if(isset($_POST["login"])) {
 $email=$_POST["logemail"];
 $pwd=$_POST["logpass"];
 $loginname=strip_tags($email);
 $loginpassword=($loginpass);
 $loginpassword=md5($loginpassword);
 include "connection.php";
 $sql="SELECT * FROM userstable WHERE email ='$loginname' AND password = '$loginpassword'" ;
 $result=mysqli_query($conn,$sql);
 if(!$result) {
    die ("data not found!".mysqli_error($conn));
    header("index.php"); ## this should be named as homepage.php 
 }
 $cnt=mysqli_fetch_array($result,MYSQLI_ASSOC);
 if($cnt==1){
 $_SESSION=["myname"]=$row["username"];
 $_SESSION=["user_id"]=$row["id"];
 $_SESSION=["email"]=$row["email"];
 header("Location: index.php"); # this should be changed as homepage.php
 }
 else {
    echo "Username and or password incorrect. Check again";
 }

 } else {
    // 
 }
 ?>
