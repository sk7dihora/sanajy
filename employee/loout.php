<?php
include 'conn/conn.php'; 

session_start();

session_unset();

session_destroy();

setcookie("sanjay",$cookie_value, time() -3600);

header("Location:index.php");


?>