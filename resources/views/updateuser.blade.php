<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add User</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <h1>Update Record</h1>
                <form action="{{ route('updrecord', $updata->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Enter Name</label>
                        <input type="text" value="{{ $updata->name }}" class="form-control" name="name">
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter Email</label>
                        <input type="email" value="{{ $updata->email }}" class="form-control" name="email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter Age</label>
                        <input type="text" value="{{ $updata->age }}" class="form-control" name="age">
                        <span class="text-danger">
                            @error('age')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter City</label>
                        <input type="text" value="{{ $updata->city }}" class="form-control" name="city">
                        <span class="text-danger">
                            @error('city')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <button type="submit" class="btn btn-warning">UPDATE</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
