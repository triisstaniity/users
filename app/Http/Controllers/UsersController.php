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

    public function create(Request $request)
    {

        $request->get('fullname');
        $request->get('email');
        $request->get('contact');
        $request->get('id');

        $users=DB::table('users')->get();
        User::create([
            'fullname' => $request->get('fullname'),
            'email' => $request->get('email'),
            'contact' => $request->get('contact'),
            'id' => $request->get('id')
        ]);
        // $users = User::all();
        return back();
        // return view('users.index', $users);
        // return view('users.index')->with('users', $users);
    }

    public function destroy($users)
    {
        $users = DB::table('users');
        $users->delete();

        return Redirect::route('users.index');
    }
}
