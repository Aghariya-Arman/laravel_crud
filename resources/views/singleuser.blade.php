<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>single user</title>
</head>
{{-- @dd($details); --}}

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <table>
                    <tr>
                        @foreach ($details as $detail)
                        @endforeach
                        <h3>{{ $detail->id }}</h3>
                        <h3>{{ $detail->name }}</h3>
                        <h3>{{ $detail->email }}</h3>
                        <h3>{{ $detail->age }}</h3>
                        <h3>{{ $detail->city }}</h3>
                    </tr>
                </table>
                <a href="{{ route('show_user') }}" class="btn btn-primary">Back To Home</a>
            </div>
        </div>
    </div>
</body>

</html>
