<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>page to learn submit form</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-10 offset-1 mt-5">
                <div class="card">
                    <div class="card-header bg-danger text-light">
                        <h1>Form - through post method</h1>
                    </div>
                    <div class="card-body">
                        <form action="submit/lesson4.php" method="post" name='myform'>
                            <label for="" class="form-label">
                                <h5>
                                    Enter your name
                                </h5>
                            </label>
                            <input type="text" name="txtname" class="form-control" required>
                            <label for="">
                                <h5>
                                    Enter your password
                                </h5>
                            </label>
                            <input type="password" name="txtpass" class="form-control" required>
                            <label for="" class="form-control mt-2">
                                <h5>
                                    Select background color
                                </h5>
                                <select name="selcolor" class="form-control" id="" required>
                                    <option value="0">Select anyone</option>
                                    <option value="1">Red</option>
                                    <option value="2">yellow</option>
                                    <option value="3">Blue</option>
                                </select>
                            </label>
                            <div class="text-end mt-2">
                                <input type="submit" class="btn btn-danger text-light">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>