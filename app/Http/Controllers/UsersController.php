<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {

        $users=DB::table('users')->get();
        // $users = User::all();
        return view('users.index', compact('users'));
        // return view('users.index', $users);
        // return view('users.index')->with('users', $users);
    }

    public function create(){

        return view('create');

    }

    public function store(Request $request)
    {

        User::create([
            'fullname' => $request->get('fullname'),
            'email' => $request->get('email'),
            'contact' => $request->get('contact'),
            'id' => $request->get('id')
        ]);

        return back();
    }

    public function show($id) {

        $user = User::findOrFail($id);

        return view('users.user', compact ('user'));

    }

    public function destroy(Request $request,$user)
    {

        $users = User::findOrFail($user);
        $users->delete();

        return back()->with([
            'status' => 'User deleted successfully'
        ]);
    }
}
