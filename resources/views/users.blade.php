@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="table-responsive">
                    <table class="table">

                        {{-- @foreach ($users as $user)
                            <td>{{$user->member}}</td> --}}

                        {{-- @endforeach --}}
                        <tr><td>ID</td>
                            <td>FULLNAME</td>
                            <td>EMAIL ADDRESS</td>
                            <td>CONTACT NUMBER</td>
                            <td>ACTIONS</td>
                        </tr>
                        <tr><td>#</td>
                            <td>John Doe</td>
                            <td>johndoe@gmail.com</td>
                            <td>00-100-999</td>
                            <td>EDIT DELETE</td>
                        </tr>
                        <tr><td>#</td>
                            <td>John Doe</td>
                            <td>johndoe@gmail.com</td>
                            <td>00-100-999</td>
                            <td>EDIT DELETE</td>
                        </tr>
                    </table>
                </div>
                <div><a href="user/create">Create User</a></div>
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
                </nav></div>
            </div>
        </div>
    </div>
@endsection
