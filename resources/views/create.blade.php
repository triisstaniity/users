@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="col-md-5 col-md-offset-3">
            <form class="form-signin">
                <h2 class="form-signin-heading">Please sign in</h2>
                <div>
                    <label>Fullname</label>
                    <input type="text" id="inputFullname" class="form-control" placeholder="Fullname" required autofocus>
                </div>
                <div>
                    <label>Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                </div>
                <label>Contact Number</label>
                <input type="text" id="inputContact" class="form-control" placeholder="Contact Number" required>
                <div> </div>
                <input class="btn btn-primary" type="submit" value="Save">
                <input class="btn btn-info" type="reset" value="Reset">
            </form>
        </div>
    </div> <!-- /container -->

@endsection
