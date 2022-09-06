<?php
include 'conn/conn.php'; 

    session_start();

    if (!isset($_SESSION["username"])) {
        header("index.php");
    } 

$id = $_GET['id'];
echo $id;
$sql = "DELETE FROM employees_list WHERE id = '$id'";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: index.php");

mysqli_close($conn);
?>