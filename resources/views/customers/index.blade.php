
@extends('adminlte::page')
@section('content_header')
    <h1>List of Customer</h1>
@stop

@section('content')
    @foreach($customers as $customer)
        <div>
            {{$customer->name}} 
        </div>

    @endforeach
@endsection