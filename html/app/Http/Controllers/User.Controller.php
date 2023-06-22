<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;


class UserController extends Controller
{
    // public function renderAnonymousView()
    // {
    //     // Retrieve the $user_id value based on your logic
    //     $user_id = Auth::id(); // using Laravel's Auth facade to get the authenticated user's ID

    public function create() {
        return view('user.new');
    }
    public function store(Request $request) {
        dd($request->all());

        $validatedData = $request->validate([
            'name'      => 'required',
            'fname'     => 'required',
            'username'  => 'required',
            'email'     => 'required|email',
            'password'  => 'required|min:6|confirmed',
        ]);

        $user = new User;
        $user->name = $request->first_name;
        $user->fname = $request->last_name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->name = $request->name;

        $user->save();

    }

}
