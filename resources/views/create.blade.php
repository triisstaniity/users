@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="col-md-5 col-md-offset-3">
            <form class="form-signin" method="POST" action="/users">
                {{ csrf_field() }}
                <h2 class="form-signin-heading">Please sign in</h2>
                <div>
                    <label>Fullname</label>
                    <input type="text" id="inputFullname" class="form-control" placeholder="Fullname" name="fullname" required autofocus>
                </div>
                <div>
                    <label>ID</label>
                    <input type="text" id="inputID" class="form-control" placeholder="ID" name="id" required autofocus>
                </div>
                <div>
                    <label>Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
                </div>
                <label>Contact Number</label>
                <input type="text" id="inputContact" class="form-control" placeholder="Contact Number" name="contact" required>
                <div> </div>
                <input class="btn btn-primary" type="submit" value="Save">
                <input class="btn btn-info" type="reset" value="Reset">
            </form>
        </div>
    </div> <!-- /container -->

@endsection
