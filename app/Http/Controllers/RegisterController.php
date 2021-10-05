<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //

    public function create()
    {
        return view('registration.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //dd($request);
        $user = User::create(request(['name', 'email', 'password']));

        // auth()->login($user);

        return redirect()->to('/');
    }
}
