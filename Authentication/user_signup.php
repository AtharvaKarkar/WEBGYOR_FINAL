<?php
require('Db_connection.php');
if(isset($_POST["signup"])){
    $name=strip_tags($_POST["username"]);
    $email=strip_tags($_POST["useremail"]);
   // $contact=strip_tags($_POST["contact"]);
    $pwd=strip_tags($_POST["userpass"]);
    //$cpwd=strip_tags($_POST["loginPasswordConfirm"]);

    $pwd=md5($pwd);
    $sql = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$name','$email','$pwd')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Data added successfully";
        header("Location:../Homepage/index.php");
    }else{
        echo "Record not saved";
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>