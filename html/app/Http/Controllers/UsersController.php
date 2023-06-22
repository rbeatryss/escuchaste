<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Validation\Validator;
// use App\Http\Requests\NewUserRequest;
use App\Models\User;

class UsersController extends Controller
{
    // public function showProfile(){
    // $userName = "John Doe";
    // return view('profile', ['userName' => $userName]);
    // }
    public function create(){
        return view('user.create');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => ['required'],
            'fname' => ['required'],
            'username' => ['required','unique:users'],
            'email' => ['required','email','unique:users'],
            'password' => ['required','min:6','confirmed']
        ]);

//     $user = User::create([
//         'name'      => $validated['name'],
//         'fname'     => $validated['surname'],
//         'username'  => $validated['username'],
//         'email'     => $validated['email'],
//         'password'  => Hash::make($validated['password']),
//     ]);

        $user = new User();
        $user->name = $request->name;
        $user->fname = $request->fname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->username = $request->username;

        $user->save();
    }
}
