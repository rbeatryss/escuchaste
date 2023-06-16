<?php

namespace App\Http\Controllers;

use App\Models\User; // Usuarios
use Illuminate\Support\Facades\Hash; // contraseñas
use Illuminate\Support\Facades\Auth; // Autenticación
use Illuminate\Http\Request;

class LoginController extends Controller {
    public function register (Request $request) {
        // Validar los datos
        $user = new User();

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->username = $request->username;
        $user->email = $request->email;
        //$user->mailconfirmation = $request->mailconfirmation;
        $user->password = Hash:: make($request->password);
        //$user->pwconfirmation = $request->pwconfirmation;

        $user->save();

        Auth::login($user);

        return redirect(route('privada'));
    }
    public function login (Request $request) {
        // Validación
        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
            "active" => true // opcional
        ];
        // Mantener sesión iniciada
        $remember = ($request->has('remember') ? true : false);
        if(Auth::attempt($credentials, $remember)){
            $request->session()->regenerate();
            return redirect()->intended(route('privada'));
        } else {
            return redirect('login');
        }
    }
    public function logout (Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}