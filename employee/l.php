<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
      
    </style>
</head>
<body>
   
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card shadow-lg">
                    <div class="card-header text-bg-danger">
                        <h2>
                        <i class="fa-solid fa-user"></i>
                        Login</h2>
                    </div>
                    <div class="card-body">
                        <form action="varify.php">
                            <div class="mb-3">
                                <label for="email" name="email" class="form-label">Email address</label>
                                <input placeholder="your registered email" class="form-control" type="email" name="email" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" name="password" class="form-label">Password</label>
                                <input placeholder="your password" class="form-control" type="password" name="password" id="password">
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-danger">Login</button> &nbsp;
                                <button type="reset" class="btn btn-secondary">Reset all</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/266b76cb57.js" crossorigin="anonymous"></script>       
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>