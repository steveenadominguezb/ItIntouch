<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class SessionsController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(request(['use_name','password'])) == false){
            return back()->withErrors([
                'message' => 'The user name or password is incorrect, please try again'
            ]);
        }
        return redirect()->to('/');
    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
}
