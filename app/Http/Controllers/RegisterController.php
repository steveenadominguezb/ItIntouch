<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){
        $employee = employee::created(request(['name','email','password']));

        #auth()->login($employee);
        return redirect()->to('/');
    }
}
