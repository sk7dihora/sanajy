<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Edit Employee</title>

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
</div>
</nav>
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Edit Employee</div>
<div class="panel-body">
<?php

include 'conn/conn.php';  

      $id = $_REQUEST['id'];
      $sql = "select * from employees_list where id=$id";
      $category = mysqli_query($conn,$sql) or die (mysqli_error($conn));
      $row = mysqli_fetch_assoc($category);
 
    ?>

<form action="update.php" method="POST">
<div class="form-group">

<label for="firstname">Firstname:</label>
<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
<input type="firstname" class="form-control"  id="firstname" name="firstname" value="<?php echo $row['first_name']; ?>">
</div>
<div class="form-group">
<label for="lastname">Lastname:</label>
<input type="lastname" class="form-control" id="lastname" name="lastname" value="<?php echo $row['last_name']; ?>"  >
</div>
<div class="form-group">
<label for="contact">Contact Number:</label>
<input type="number" class="form-control" id="contact" name="contact" value="<?php echo $row['contact_number']; ?>" >
</div>
<button type="submit" class="btn btn-primary href="update.php?id=<?php echo $row['id']; ?>>Update</button>
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
