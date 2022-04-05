<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\employee;

class SessionsController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function login(){
        
        if(request('Password')!=""){
            $credentials =  request(['UserName','Password']);

            if((auth()->attempt(['UserName' => request('UserName'), 'password' => request('Password')]))){
               $privilege = (auth()->user()->IdPrivilege) ?? 9;
               $name = (auth()->user()->Name) ?? "none";
               return view('home', ['privilege' => $privilege,
                                    'name' => $name]);
               
            }
        }
        return back()->withErrors([
            'message' => 'The username or password is incorrect, please try again'
            ]);
        
    }


    public function createRegister(){
        return view('auth.register');
    }

    public function storeRegister(){
        $this->validate(request(),[
            'cde' => 'required',
            'name' => 'required',
            'position' => 'required',
            'UserName' => 'required',
            'Password' => 'required|confirmed',
            'email' => 'required|email',
            'number' => 'required',
            

        ]);
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
        
        $employee->Email = request('email');
        $employee->ContactInfo = request('number');
        $employee->Status = 'Active';
        #$employee->Admin = true;

        $employee->setPassword(request('Password'));
        $employee->IdPrivilege = request('SelectPrivileges');

        $employee->save();

        #auth()->login($employee);
        return back();
    }



    public function destroy(){
        auth()->logout();
        return redirect()->to('/login');
    }
}
