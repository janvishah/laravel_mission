@extends('adminlte::page')
@section('content_header')
    <h1>Detail of Customer</h1>
@stop

@section('content')
    <h1>order for {{$customer->name}}</h1>
    <p class="type"> Email - {{$customer->email}}</p>
    <p class="base"> DOB - {{$customer->date_of_birth}} </p> <br/>

   
    <a href="{{action('App\Http\Controllers\MeasurementController@show', $customer['id']) }}">Show measurements</a>
    <a href="/customers" class="back"> back to list of customers </a>

    
<img class="image rounded-circle" src="{{asset('/storage/images/'.$customer->image)}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">

@endsection