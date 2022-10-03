<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Edit airport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body style="background-color: lightgreen;">
    @include('partials/navbar')
    
    <div class="container-fluid mt-3">
        <div class="text-center">
  <h1>Let's edit this airport!</h1>
</div>

<form action="" method="post">
  <input type="hidden" name="_token">  <div class="mb-3">
    <select class="form-select " aria-label="Select airline" id="airline" name="airline">
      <option selected="">Name</option>
      <option selected="">Lithuania</option>
          </select>
  </div>
</form>

<form action="" method="post">
  <input type="hidden" name="_token">  <div class="mb-3">
    <select class="form-select " aria-label="Select airline" id="airline" name="airline">
      <option selected="">Select country</option>
      <option>Lithuania</option>
          </select>
  </div>
  <a href="/test" type="submit" class="btn btn-success">Submit</a>
</form>

      </div>
</body>
</html>