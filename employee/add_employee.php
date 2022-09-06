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

    <title>Add Employee</title>

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

<ul class="nav navbar-nav">
&nbsp;
</ul>
</div>
</div>
</nav>
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Add Employee</div>
<div class="panel-body">
<form action="insert.php" method="POST">
<div class="form-group">
<label for="firstname">Firstname:</label>
<input type="firstname" class="form-control" id="firstname" name="firstname">
</div>
<div class="form-group">
<label for="lastname">Lastname:</label>
<input type="lastname" class="form-control" id="lastname" name="lastname">
</div>
<div class="form-group">
<label for="contact">Contact Number:</label>
<input type="contact" class="form-control" id="contact" name="contact">
</div>
<button type="submit" class="btn btn-primary">Create</button>
<a type="submit" class="btn btn-default" href="index.php">Back</a>
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
