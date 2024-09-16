<h1>pass value from route</h1>
{{-- <p>WelCome :- {{$name}}</p>
<p>Belong to :- {{$city}}</p> --}}
@foreach ($user as $id => $n )
  <h3>{{$id}}|{{$n['name']}}|{{$n['city']}}</h3>
@endforeach