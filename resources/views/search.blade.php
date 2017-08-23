@extends('layouts.app')
@section('content')


<input type="text" class="form-control" name="search">

@foreach($users as $user)

{{ $user->name }} <br>

@endforeach

@stop