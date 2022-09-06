<?php
    session_start();

    if (!isset($_SESSION["username"])) {
        header("index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Register EMS</title>

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

<li><a href="login.php">Login</a></li>
</ul>
</div>
</div>
</nav>
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Register</div>
<div class="panel-body">
<form class="form-horizontal" method="POST" action="add_register.php">
<div class="form-group">
<label for="name" class="col-md-4 control-label">Name</label>
<div class="col-md-6">
<input id="name" type="text" class="form-control" name="name" value="" required autofocus>
</div>
</div>
<div class="form-group">
<label for="email" class="col-md-4 control-label">E-Mail Address</label>
<div class="col-md-6">
<input id="email" type="email" class="form-control" name="email" value="" required>
</div>
</div>
<div class="form-group">
<label for="password" class="col-md-4 control-label">Password</label>
<div class="col-md-6">
<input id="password" type="password" class="form-control" name="password" required>
</div>
</div>
<div class="form-group">
<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
<div class="col-md-6">
<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
 </div>
</div>
<div class="form-group">
<div class="col-md-6 col-md-offset-4">
<button type="submit" class="btn btn-primary">
Register
</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="js/app.js"></script>
</body>
</html>
