@extends('adminlte::page')
@section('content_header')
    <h1> Add Detail of Customer</h1>
@stop

@section('content')
<form action="/measurements/{{$id}}" method="POST">
    @csrf
    <lable for="height"> Height </lable>
    <input type="text" id="height" name="height" /> <br/>

    <lable for="weight"> Weight </lable>
    <input type="text" id="weight" name="weight" /> <br/>

    <lable for="blood_pressure"> Blood Pressure </lable>
    <input type="text" id="blood_pressure" name="blood_pressure" /> <br/>

    <input type="submit" value="send">
</form>

<a href="/customers" class="back"> back to list of customers </a>
@stop