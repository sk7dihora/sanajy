<?php
    include 'conn/conn.php';  
    session_start();

    if (!isset($_SESSION["username"])) {
        header("index.php");
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['password_confirmation'];

    if($password == $cpassword){
        $sql = "INSERT INTO `register`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
  $result = mysqli_query($conn, $sql) or die("query unsuccessful");
  $message = "registration successfully";
  header("Location: login.php");
} 
else
{
    $message = "password and confirm password does not match";
    header("location: register.php?message=$message");
   
} 
   
    mysqli_close($conn);
?>