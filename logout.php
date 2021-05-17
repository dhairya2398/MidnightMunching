<?php
//logout.php
session_start();
$_SESSION['logout']=1;
session_destroy();
header("location: login.html");
?>