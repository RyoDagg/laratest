<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // if (auth()->attempt($request->only('email', 'password'))) {
        //     return redirect('/');
        // }

        return back()->with('status', 'Invalid login details');
    }

    // public function destroy()
    // {
    //     auth()->logout();

    //     return redirect('/');
    // }
}
