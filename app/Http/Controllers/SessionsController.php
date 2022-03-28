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
        /**
         * if(auth()->attempt(request(['user_name','password'])) == false){
           * return back()->withErrors([
          *      'message' => 'The user name or password is incorrect, please try again'
         *   ]);
        *}
        *return redirect()->to('/');
         */
        $credentials =  request(['UserName','Password']);

        if(auth()->attempt($credentials)){
            return 'Loggin';
        }else{
            return 'Loggin Fail';
        }
    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
}
