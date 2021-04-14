@extends('adminlte::page')
@section('content_header')
    <h1>Detail of Customer</h1>
@stop

@section('content')
<h1>Measurements of {{$customer->name}}</h1>
@foreach($customer->measurements as $measurement )
    <p class="type"> Height - {{$measurement->height}}</p> 
    <p class="base"> Weight - {{$measurement->weight}} </p> 
@endforeach

    
<a href="/customers" class="back"> back to list of customers </a>

    

@endsection