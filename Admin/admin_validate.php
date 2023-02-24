<?php

include('Db_connection.php');

if(isset($_POST['login']))
{
    $name=strip_tags($_POST["aname"]);
    $id=strip_tags($_POST["id"]);
   // $contact=strip_tags($_POST["contact"]);
    
    $pwd=md5($_POST['pass']);
    //$cpwd=strip_tags($_POST["loginPasswordConfirm"]);

    echo $id;
    echo $name;

  //  $pwd=md5($_POST['password']);
    $sql="SELECT * FROM admin_login where id = $id;";
    $result= mysqli_query($con,$sql);
    
    if (mysqli_num_rows($result)>0) {

   $row=mysqli_fetch_array($result);
   if($row['password'] === $pwd)
   {
        header("location:../Admin/side_menu.php");
    }
     else 
    {
        echo "No results"  ;      
    }
    $con->close();
}
}
    
    


// include_once('Db_connection.php');



// if ($_SERVER ["REQUEST_METHOD"]=="POST") {
//     $username=test_input($_POST["username"]);
//     $password=test_input($_POST["password"]);
//     $userid=test_input($_POST["userid"]);
//     $stmt=$conn-->prepare("SELECT * FROM admin_login");
//     $stmt->execute();
//     $users=$stmt->fetchAll();

// foreach($users as $user) {
//     if(($user['username']==$username) && ($user['password']==$password) && ($user['id']==$id)) {
//         header("location:admin_index.php");
//     }
//     else {
//         echo "<script langauge='javascript'>";
//         echo "alert('WRONG INFORMATION')";
//         echo "</script>";
//         die();
//     }
// }
// }
