<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Table generator</title>
</head>
<body>
  <div class="container mt-5">
    <div class="row mt-5">
      <div class="col-10 offset-1 mt-5">
        <div class="card shadow">
          <div class="card-header bg-danger text-light">
            <h1>
              Table generator
            </h1>
          </div>
          <div class="card-body">
            <form action="submit/lesson6.php" method="POST">
              <label for="" class="form-label">
                <h5>Select number of rows</h5>
              </label>
              <input type="number" name="rows" class="form-control">
              <label for="" class="form-label mt-2">
                <h5>Select number of colums</h5>
              </label>
              <input type="number" name="colum" class="form-control">
              <input type="submit" class="btn btn-danger float-end mt-2">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>