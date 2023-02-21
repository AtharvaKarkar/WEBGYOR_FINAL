<?php
session_start();
session_unset();
session_destroy();
header("location:../Animation/index.php"); ## this should take the user to login/signup page .

?>