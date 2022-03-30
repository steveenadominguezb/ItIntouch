@extends('layouts.app')
@if (auth()->user()->IdPrivilege == 10001)
    @section('content-register')
    <li><a class="dropdown-item" href="register">Register User</a></li>
    @endsection
@endif
@section('content')
@if (auth()->user()->UserName == "laura")
    <div>   
        ¿Cuándo vamos a rayar paredes?
    </div>
@else
    <div>
        puto el que lo lea
    </div>
@endif
    
@endsection