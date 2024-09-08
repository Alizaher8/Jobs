<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use function PHPUnit\Framework\throwException;

class LoginController extends Controller
{
    public function create(){

       return view('auth.login');

    }

    public function login(){

    $validation = request()->validate([

     'email' => 'required|email',
     'password' => 'required',
    ]);

    if(! Auth::attempt($validation)){

        throw ValidationException::withMessages([

            'email' => 'Sorry these credentials do not matched'
        ]);
    }

    request()->session()->regenerate();

       return redirect('/jobs');
    }

    public function logout()
    {

       Auth::logout();

       return redirect('/jobs');
    }
}
