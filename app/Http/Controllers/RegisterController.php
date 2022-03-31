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
        $employee->Position = request('position');
        $employee->UserName = request('UserName');
        if(request('Password')==""){
            $employee->Password = null;
        }else{
            $employee->Password = request('Password');
        }
        
        $employee->Email = request('position');
        $employee->ContactInfo = request('number');
        $employee->Status = 'Active';
        #$employee->Admin = true;

        $employee->setPassword(request('Password'));
        $employee->IdPrivilege = request('SelectPrivileges');

        $employee->save();

        #auth()->login($employee);
        return redirect()->to('/register');
    }

    public function destroy(){
        auth()->logout();

        return redirect()->to('/');
    }
}
