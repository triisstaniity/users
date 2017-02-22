@extends('layouts.master')

@section('content')

    <div>
        <b><h3>ID: </b>{{ $user->id }}</h3>
        <b><h3>Fullname:  </b>{{ $user->fullname }}</h3>
        <b><h3>Email: </b>{{ $user->email }}</h3>
        <b><h3>Contact Number: </b>{{ $user->contact }}</h3>
        <a href="{{url('user/'. $user->id .'/edit')}}" class="btn btn-primary">Edit</a>
        <a href="{{url('users')}}" class="btn btn-info">Back</a>
    </div>

@stop
