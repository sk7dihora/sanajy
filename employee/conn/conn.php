<?php
$conn = mysqli_connect("localhost","root","","employees") or die("connectio fail");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>