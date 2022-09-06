<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("index.php");
}
    include 'conn/conn.php';  

    $id = $_POST['id'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $contact_number = $_POST['contact'];

    $sql = "update employees_list set first_name='$first_name', last_name='$last_name', contact_number= '$contact_number' where id='$id'";
    mysqli_query($conn,$sql) or die(mysqli_error($link));
    $message= "Employee updated Successfuly";
    header("location:index.php?message=$message");
?>