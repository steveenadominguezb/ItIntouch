<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function create(){
        return view('register_pc');
    }

    public function store(){
        $this->validate(request(),[
            'serial' => 'required',
            'host' => 'required',
            'os' => 'required',
            'brand' => 'required',
            'model' => 'required'
        ]);

        $computer = new Computer();
        $computer->SerialNumber = request('serial');
        $computer->HostName = request('host');
        $laptop = request('laptop');
        if($laptop){
            $computer->Laptop = true;
        }else{
            $computer->Laptop = false;
        }
        
        $computer->Model = request('model');
        $computer->OS = request('os');
        $computer->Brand = request('brand');
        $computer->Status = request('status');

        $computer->save();
        return back();
    }
}
