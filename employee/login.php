<?php
    session_start();

    if (isset($_SESSION["name"])) {
        header("Location: Location:index.php");
    }
    if (isset($_POST['email'], $_POST['password'])) {

            include 'conn/conn.php';
           $email = mysqli_real_escape_string($conn,$_POST['email']);//security
  
           $password = ($_POST['password']);

            $sql="SELECT * FROM register 
           WHERE email='$email' AND password='$password'"; 
             $result=mysqli_query($conn,$sql) or die ("Query Failed");
             if (mysqli_num_rows($result)>0) {
              
               while ($row=mysqli_fetch_assoc($result)) {
                 $cookie_value = $row ['name'];
                 header("Location:employee.php"); 
                }
                setcookie("sanjay", $cookie_value, time() + 86400, "/");
              }
  }
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Employee Login</title>

<link href="css/app.css" rel="stylesheet">
</head>
<body>
<div id="app">
<nav class="navbar navbar-default navbar-static-top">
<div class="container">
<div class="navbar-header">

<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
<span class="sr-only">Toggle Navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

</div>
<div class="collapse navbar-collapse" id="app-navbar-collapse">
<ul class="nav navbar-nav navbar-right">
<li><a href="register.php">Register</a></li>
</ul>
</div>
</div>
</nav>
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Login</div>
<div class="panel-body">
<form class="form-horizontal" method="POST" action="login.php">

<div class="form-group">
<label for="email" class="col-md-4 control-label">E-Mail Address</label>
<div class="col-md-6">
<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
</div>
</div>
<div class="form-group">
<label for="password" class="col-md-4 control-label">Password</label>
<div class="col-md-6">
<input id="password" type="password" class="form-control" name="password" required>
</div>
</div>

<div class="form-group">
<div class="col-md-8 col-md-offset-4">
<button type="submit" id='submit' class="btn btn-primary">
Login
</button>
</div>
</div>
</form>
<?php
if (isset($_POST['login'])) {

// echo "sanjay";
include 'conn/conn.php';
$email = mysqli_real_escape_string($conn,$_POST['email']);//security

$password = ($_POST['password']);

 $sql="SELECT name,email FROM register 
 WHERE email='{$email}' AND password='{$password}'";
  
// echo  "$sql";
  $result=mysqli_query($conn,$sql) or die ("Query Failed");
  if (mysqli_num_rows($result)>0) {
    
    while ($row=mysqli_fetch_assoc($result)) {
      session_start();
      $_SESSION['name'] = $row ['name'];
      $_SESSION['email'] = $row ['email'];
       $_COOKIE['name'] = $row ['name'];
       $_COOKIE['email'] = $row ['email'];

       header("Location:employee.php"); 
    }
  }else
  {
    echo '<div class="alert alert-danger">Username and password are not match</div>';
  }
}
?>

</div>
</div>
</div>
</div>
</div>
</div>
<script src="js/app.js"></script>
</body>
</html>
