@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="col-md-5 col-md-offset-3">
            <h2 class="form-signin-heading" align="right">EDIT USER</h2>
            <form class="form-signin" method="POST" action="/users">
                {{ csrf_field() }}
                <div>
                    <label>Fullname</label>
                    <input type="text" id="inputFullname" class="form-control" placeholder="{{$user->fullname}}" name="fullname" required autofocus>
                </div>
                <div>
                    <label>Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="{{$user->email}}" name="email" required autofocus>
                </div>
                <div>
                    <label>Contact Number</label>
                    <input type="text" id="inputContact" class="form-control" placeholder="{{$user->contact}}" name="contact" required>
                </div>
                <input class="btn btn-primary" type="submit" value="Update">
                <a href="{{ url('user/' . $user->id ) }}" class="btn btn-info">Back</a>
                {{-- <a href="/user/{{'id'}}" class="btn btn-info">Back</a> --}}
            </form>
        </div>
    </div>



@endsection
