@extends('layouts.master')

@section('content')





    @if(session('status'))
        <ul>
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        </ul>
    @endif
    <div class="container">
        <div class="col-md-9 col-md-offset-1">
            <h1 align="right">Users Account</h1>
            <div class="table-responsive">
                <table class="table">

                    <tr><th>ID</th>
                        <th>FULLNAME</th>
                        <th>EMAIL ADDRESS</th>
                        <th>CONTACT NUMBER</th>
                        <th colspan="3" align="right">ACTIONS</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr><td>{{ $user->id }}</td>
                            <td>{{ $user->fullname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->contact }}</td>
                            <td>
                                <a href="{{ url('user/' . $user->id . '/edit') }}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <a href="{{ url('user/' . $user->id . '/delete') }}" class="btn btn-danger">Delete</a>
                            </td>
                            <td>
                                <a href="{{ url('user/' . $user->id ) }}" class="btn btn-default">View</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <a href="users/create">Create User</a>

@stop
