<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>all user</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <h1 class="text-center">ALL DETAILS</h1>
                <a href="/newuser" class="btn btn-primary">Add User</a>
                <table class="table table-bordered-dark table-striped mt-2">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>AGE</th>
                        <th>CITY</th>
                        <th>VIEW</th>
                        <th>DELET</th>
                        <th>UPDATE</th>

                    </tr>
                    @foreach ($data as $id => $details)
                        <tr>
                            <td> {{ $details->id }}</td>
                            <td> {{ $details->name }}</td>
                            <td>{{ $details->email }}</td>
                            <td> {{ $details->age }}</td>
                            <td> {{ $details->city }}</td>
                            <td><a href="{{ route('user', $details->id) }}" class="btn btn-primary">view</a></td>

                            <td><a href="{{ route('delete', $details->id) }}" class="btn btn-danger">delete</a></td>

                            <td><a href="{{ route('updatepage', $details->id) }}" class="btn btn-warning">Update</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div class="mt-5">
                    {{ $data->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>



</body>

</html>
