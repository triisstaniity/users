@extends('layouts.master')

@section('content')

<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-offset-2">
                <h1 align="right">Users Account</h1>

                @if(session('status'))
                <ul>
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                </ul>
                @endif

                <div class="table-responsive">
                    <table class="table">

                        <tr><th>ID</th>
                            <th>FULLNAME</th>
                            <th>EMAIL ADDRESS</th>
                            <th>CONTACT NUMBER</th>
                            <th colspan="2" align="center">ACTIONS</th>
                        </tr>
                        @foreach ($users as $user)
                        <tr><td>{{ $user->id }}</td>
                            <td>{{ $user->fullname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->contact }}</td>
                            <td><input class="btn btn-primary" type="submit" value="Edit"></td>
                            <td>
                                <a href="{{ url('user/' . $user->id . '/delete') }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <a href="users/create">Create User</a>
            </div>
        </div>
    </div>
</div>
@stop
