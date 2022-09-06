<?php
    include 'demo1.php';  
    session_start();

    if (!isset($_SESSION["username"])) {
        header("index.php");
    }
     $emp_nam = $_POST['sname'];
     $emp_phone = $_POST['sphop'];
     $emp_email = $_POST['semail'];
     $emp_dep = $_POST['department'];
  
  $sql = "INSERT INTO datbase(emp_nam,emp_phone,emp_email,emp_dep) VALUES ('{$emp_nam}','{$emp_phone}','{$emp_email}','{$emp_dep}')";
  $result = mysqli_query($conn, $sql) or die("query unsuccessful");
  header("Location: http://localhost/sanjay1/index.php");
  mysqli_close($conn);
?>