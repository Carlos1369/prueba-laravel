@extends('master')

@section('contect')
<h1>Contact 1</h1>
<p>{{ $name }}</p>

@if($name != "Andres")
    tu nombre no es Andres    
@else
    <h2>tu nombre es Andres</h2>
@endif

<ul>
    @foreach ([1,2,3,4,5] as $item)
    <li>{{ $item }}</li>
    @endforeach
    </ul>  
    @endsection
