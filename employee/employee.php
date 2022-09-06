<!DOCTYPE html>
<html lang="en">
<?php
    include 'conn/conn.php';
    session_start();

    if (!isset($_SESSION["username"])) {
        header("index.php");
    }
?>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Employee</title>

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
<li><a href="loout.php">logout</a></li>
</ul>
</div>
</div>
</nav>
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading"><a href="add_employee.php">Add Employee</a> </div>
<div class="panel-body">
    <table class="table table-border">
        <tr>
            <th>Sr. No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Contact Number</th>
            <th>Action</th>
        </tr>    
        <?php
             $sql = "SELECT * FROM employees_list";
             $result = mysqli_query($conn, $sql) or die("query unsuccessful");
             if(mysqli_num_rows($result)>0){
              $i=0;
             while ($row = mysqli_fetch_assoc($result)) {
                  $i++;
                 ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['contact_number']; ?></td>
            <td><a class="btn btn-success" href='edit.php?id=<?php echo $row['id']; ?>'>Edit</a>
            <a class="btn btn-danger" href='delete.php?id=<?php echo $row['id']; ?>'>delete</a>
            </td>
        </tr>
    <?php }
    
    }
    ?>
    </table>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="js/app.js"></script>
</body>
</html>
