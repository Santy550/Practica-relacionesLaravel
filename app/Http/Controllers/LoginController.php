<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::check()) {
            return 'Ya estas logeado';
        }

        if (Auth::attempt($credentials)) {
            $identificador_user = session('idUser');
            return Auth::user()->toJson();
        }
        return 'No funciona';
    }

}
