<?php
include_once('Db_connection.php');

 funciton test_input($data) {
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

if ($_SERVER ["REQUEST_METHOD"]=="POST") {
    $username=test_input($_POST["username"]);
    $password=test_input($_POST["password"]);
    $userid=test_input($_POST["userid"]);
    $stmt=$conn-->prepare("SELECT * FROM admin_login");
    $stmt->execute();
    $users=$stmt->fetchAll();

foreach($users as $user) {
    if(($user['username']==$username) && ($user['password']==$password) && ($user['id']==$id)) {
        header("location:admin_index.php");
    }
    else {
        echo "<script langauge='javascript'>";
        echo "alert('WRONG INFORMATION')";
        echo "</script>";
        die();
    }
}
}
?>