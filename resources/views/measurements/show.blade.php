@extends('adminlte::page')
@section('content_header')
    <h1>Detail of Customer</h1>
@stop

@section('content')

@foreach($customer->measurements as $measurement )
    <p class="type"> Height - {{$measurement->height}}</p> 
    <p class="base"> Weight - {{$measurement->weight}} </p> 
@endforeach

   
    
    <a href="/customers" class="back"> back to list of customers </a>

    

@endsection