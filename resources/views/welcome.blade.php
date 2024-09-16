<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welocme</title>
</head>
<body>
    <h1>welocme first page</h1>
</body>
</html>

{{-- {{ "arman" }}
{!!"<h1>arman</h1>" !!} --}}
@php
    $user='123';
    $names=['arman','amir','salman','hashmi']
@endphp
{{-- {{$user}} --}}
{{-- <ul>
    @foreach ($names as $n)
        <li>{{$n}}</li>
    @endforeach
</ul> --}}
<a href="{{route('about')}}">about</a>
