@extends('layouts.app')
@if (auth()->user()->IdPrivilege == 10001)
    @section('content-register')
    <li><a class="dropdown-item" href="register">Register User</a></li>
    @endsection
@endif
@section('content')
@if (auth()->user()->UserName == "laura")
    <div>   
        ¿Te gusto?
    </div>
@else
    <div>
        WELCOME
    </div>
@endif
    
@endsection