<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>AirBnB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body style="background-color: lightgreen;">
    @include('partials/navbar')
    
    <div class="container-fluid mt-3">

    

        <div class="d-flex justify-content-center">
        <a href="/add_airport" class="d-flex justify-content-center btn btn-danger" style="margin-top: 13px;">New airport</a>
        </div>
    
      <div class="form-group nav d-flex justify-content-center col-sm-12" style="margin-top: 13px;">
        <select class="form-control" id="country">
          <option>Search by country</option>
          <option>Lithuania</option>
          <option>Scotland</option>
          <option>United Kingdom</option>
        </select>
      </div>

      <div class="d-flex justify-content-center">
        <a href="/test" class="d-flex justify-content-center btn btn-warning" style="margin-top: 13px;">Search</a>
        </div>

        <div class="table" style="margin-top: 13px;">
        <table class="table table-bordered bg-warning">
           <thead>
             <tr>
               <th scope="col">Name</th>
               <th scope="col">Country</th>
               <th scope="col">Location</th>
               <th scope="col">Airlines</th>
               <th scope="col">Actions</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <th scope="row">Brexit</th>
               <td>United Kingdom</td>
               <td>Walter</td>
               <td>Sample Text</td>
               <td>
                 <a href="/edit_airport" class="btn btn-primary">Edit</a>
                 <a href="/add_airline" class="btn btn-info">Add airline</a>
                 <a href="/remove_airline" class="btn btn-secondary">Remove airline</a>
                 <a href="/delete_airport" class="btn btn-danger">Delete</a>
               </td>
             </tr>
           </tbody>
        </table>
      </div>
</body>
</html>