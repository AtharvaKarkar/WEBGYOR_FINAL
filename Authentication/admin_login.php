<?php
require("Db_connection.php");

if(isset($_POST['Signin']))
{
    $name=$_POST["username"];
    $pwd=$_POST["password"];
    $id=$_POST["ID"];
    $query="SELECT * FROM admin_login WHERE username= $name AND password='$pwd' AND id='$id' ";
    $result=mysqli_query($con,$query);
    if(!$result)
    {
      echo "The query is not functioning";
    }
    $cnt=mysqli_num_rows($result);
    if($cnt==1) {
        header("Location:index.php"); ## this needs to be changed as homepage.php rn rough work is done.
        exit;
    }
    else{
        echo "<script>
        alert('incorrect username and password');
        </script>";
        
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <div class="login-frame">
        <h2>Admin Login</h2>
        <form action="" method="post">
            <div class="input-field">
                <input type="text" placeholder="User Id" name="ID">
                <input type="text" placeholder="Admin User Name" name="username">
            </div>
            <div class="input-field">
                <input type="password" placeholder="Password" name="password">
            </div>
            <button class="submit" name="Signin">Sign In</button>
            <button class="extra">
                <a href="a">Forget Password?</a>
            </button>
        </form>
    </div>
</body>
</html>