@extends('adminlte::page')
@section('content_header')
    <h1>Detail of Customer</h1>
@stop

@section('content')
    <h1>order for {{$customer->name}}</h1>
    <p class="type"> Email - {{$customer->email}}</p>
    <p class="base"> DOB - {{$customer->date_of_birth}} </p>
    <a href="/customers" class="back"> back to list of customers </a>
@endsection