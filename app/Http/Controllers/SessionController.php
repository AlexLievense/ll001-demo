<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        // validate
        // insert
        // redirect
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
