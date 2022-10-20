<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <title>Edit country</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body style="background-color: beige;">
    @include('partials/navbar')

    <div class="container-fluid mt-3">
        <div class="text-center">
            <h1>Lets edit this country!</h1>
        </div>

        <form action="/update_country/{{ $country->id }}" method="post">
          @csrf
            <label for="name" class="form-label">Name</label>
            <div class="md-form active-purple active-purple-2 mb-3">
                <input name="country_name" id="country_name" value="{{ $country->country_name }}" class="form-control"
                    type="text" placeholder="">
            </div>

            <label for="ISO" class="form-label">ISO code</label>
            <div class="md-form active-purple active-purple-2 mb-3">
                <input name="country_ISO" id="country_ISO" value="{{ $country->country_ISO }}" class="form-control"
                    type="text" placeholder="">
            </div>
            <button type="submit" class="btn btn-success">Edit</button>
        </form>
    </div>
</body>

</html>
