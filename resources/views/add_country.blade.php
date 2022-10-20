<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Add country</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body style="background-color: beige;">
    @include('partials/navbar')

    <div class="container-fluid mt-3">
        <div class="text-center">
  <h1>Let's add a country!</h1>
</div>

  <form action="/store_country" method="post">
    @csrf
    <div class="mb-3">
      <label for="country_name" class="form-label">Name</label>
      <input name="country_name" type="text" class="form-control" id="country_name" aria-describedby="textHelp">
    </div>
    <div class="mb-3">
      <label for="country_ISO" class="form-label">ISO code</label>
      <input name="country_ISO" type="text" class="form-control" id="country_ISO">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>

    </div>
</body>
</html>
