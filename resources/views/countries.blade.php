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
    <title>Countries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body style="background-color: beige;">
    @include('partials/navbar')

    <div class="container-fluid mt-3">


        <div class="btn-group d-flex justify-content-center" role="group">
            <div>
                <a href="/add_country" class="btn btn-danger" style="margin-top: 6px; margin-right: 3px;">New
                    country</a>
            </div>

            <div>
                <a href="/countries_without_airlines" class="btn btn-danger" style="margin-top: 6px;">Country without
                    airlines</a>
            </div>

            <div>
                <a href="/countries_w_airlines_airports" class="btn btn-danger"
                    style="margin-top: 6px; margin-left: 3px;">Country without airlines and airports</a>
            </div>
        </div>

        <div class="table" style="margin-top: 13px;">
            <table class="table table-bordered bg-info">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Code</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($country as $countries)
                        <tr>
                            <th scope="row">{{ $countries->id }}</th>
                            <td>{{ $countries->country_name }}</td>
                            <td>{{ $countries->country_ISO }}</td>
                            <td>
                                <a href="/edit_country/{{ $countries->id }}" class="btn btn-success">Edit</a>
                                <a data-bs-toggle="modal" data-bs-target="#delete_country" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="delete_country" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog bg-light">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete
                                            this country?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <a href="/delete_country/{{ $countries->id }}" type="button"
                                            class="btn btn-danger">Confirm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </tbody>
            </table>
        </div>
</body>

</html>
