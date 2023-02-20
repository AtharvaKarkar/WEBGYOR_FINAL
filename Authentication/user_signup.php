<?php
require('Db_connection.php');
if(isset($_POST["signup"])){
    $name=strip_tags($_POST["username"]);
    $email=strip_tags($_POST["useremail"]);
   // $contact=strip_tags($_POST["contact"]);
    $pwd=strip_tags($_POST["userpass"]);
    //$cpwd=strip_tags($_POST["loginPasswordConfirm"]);

    //$pwd=md5($pwd);
    $sql="INSERT INTO users(id,username,email,password) VALUES (id, '$name', '$email', '$pwd')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Data added successfully";
        //header("Location:index.php");
    }else{
        echo "record not saved";
    }
}

?>