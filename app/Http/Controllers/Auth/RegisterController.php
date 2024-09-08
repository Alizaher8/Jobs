<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\confirm;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create(){

        return view('auth.register');

    }
    public function store()
    {
        $validation = request()->validate([
           'first_name' => ['required','max:20'],
           'last_name' => ['required','max:20'],
           'email' => ['required','max:50','email','confirmed'],
           'password' => ['required','confirmed',Password::default()]

       ]);
        $user = User::create($validation);

        Auth::login($user);

       return redirect('/jobs');
    }
}
