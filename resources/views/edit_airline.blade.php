<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Edit airline</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body style="background-color: beige;">
    @include('partials/navbar')

    <div class="container-fluid mt-3">
        <div class="text-center">
  <h1>Lets edit this airline!</h1>
</div>

<form action="/update_airline/{{ $airline -> id }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="airline_name" class="form-label">Airline name</label>
        <input name="airline_name" type="text" value="{{ $airline -> airline_name }}" class="form-control" id="airline_name">
    </div>

    <div class="mb-3">
      <label for="country_name" class="form-label">Country name</label>
      <input name="country_name" type="text" value="{{ $airline -> country_name }}" class="form-control" id="country_name">
    </div>
    <button type="submit" class="btn btn-success">Edit</button>
</form>

      </div>
</body>
</html>
