
@extends('adminlte::page')
@section('content_header')
    <h1>List of Customer</h1>
@stop

@section('content')
    @foreach($customers as $customer)
        <div>
        <a href="{{action('App\Http\Controllers\CustomerController@show', $customer['id']) }}">{{$customer->name}}</a> 
        </div>

    @endforeach
    <a href="{{action('App\Http\Controllers\CustomerController@create') }}">Enter details of new customer</a> 
@endsection