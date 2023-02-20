<?php
session_start();
require_once('Db_connection.php');

session_start();
if(isset($_POST["signin"])) {
	$email=$_POST["useremail"];
	$pwd=$_POST["userpass"];
	$loginname=strip_tags($email);
	$loginpassword=strip_tags($pwd);
	//$loginpassword=md5($loginpassword);
	$sql = "SELECT * FROM users WHERE email ='$email' AND password = '$pwd'";
	$result = mysqli_query($conn,$sql);
	if(!$result){
		die("data not found! ".mysqli_error($conn));
		//die("SIGN UP TO CONTINUE");
		header("index.php");  ## come to homepage
	}
	//reading the data from the $result array
	$cnt = mysqli_num_rows($result);
	if($cnt == 1){
		$row=mysqli_fetch_array($result, MYSQLI_ASSOC);	
		$_SESSION["myname"] = $row["name"];
		$_SESSION["user_id"] = $row["id"];
		$_SESSION["email"]=$row["email"];
		echo "Login successful";
		//header("Location: index.php");
	} else {
		echo "Username and or password incorrect. Check again";
	}
} else {
	//header("Location: form.html");   should direct to homepage
}

?>