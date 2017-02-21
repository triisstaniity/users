@extends('layouts.master')

@section('content')
<h1>Users</h1>


<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="table-responsive">
                    <table class="table">

                        <tr><th>ID</th>
                            <th>FULLNAME</th>
                            <th>EMAIL ADDRESS</th>
                            <th>CONTACT NUMBER</th>
                            <th>ACTIONS</th>
                        </tr>
                        @foreach ($users as $user)
                        <tr><td>{{$user->id}}</td>
                            <td>{{$user->fullname}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->contact}}</td>
                            <td>EDIT DELETE</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <!-- <div><a href="user/create">Create User</a></div>
                <div align="right"><nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav></div> -->
            </div>
        </div>
    </div>
</div>
@stop
