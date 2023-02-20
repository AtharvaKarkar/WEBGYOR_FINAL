<?php
session_start();
$_SESSION=array();
session_destroy();
header("location: index.php "); ## this should take the user to login/signup page .

?>