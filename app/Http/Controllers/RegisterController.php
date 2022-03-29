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
        $employee = new employee();
        $employee->CDE = request('cde');
        $employee->Name = request('name');
        $employee->Position = 'IT Generalist';
        $employee->UserName = request('UserName');
        #$employee->Password = request('Password');
        $employee->Email = 'IT Generalist';
        $employee->ContactInfo = 'IT Generalist';
        $employee->Status = 'IT Generalist';
        $employee->Admin = true;

        $employee->setPassword(request('Password'));
        $employee->IdPrivilege = request('IdPrivilege');

        $employee->save();

        auth()->login($employee);
        return redirect()->to('/login');
    }

    public function destroy(){
        auth()->logout();

        return redirect()->to('/');
    }
}
