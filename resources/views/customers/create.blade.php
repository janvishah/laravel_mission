@extends('adminlte::page')
@section('content_header')
    <h1> Add Detail of Customer</h1>
@stop

@section('content')
<form action="/customers" method="POST">
    @csrf
    <lable for="name"> Your name: </lable>
    <input type="text" id="name" name="name" /> <br/>

    <lable for="email"> Your email: </lable>
    <input type="text" id="email" name="email" /> <br/>

    <lable for="dob"> Your date of birth: </lable>
    <input type="text" id="date_of_birth" name="date_of_birth" placeholder="yyyy-date-month" /> <br/>

    <input type="file" name="image">
    <input type="submit" value="Upload">
</form>

<a href="/customers" class="back"> back to list of customers </a>
@stop