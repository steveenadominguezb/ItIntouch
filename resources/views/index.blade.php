@extends('layouts.app')
@if (auth()->user()->IdPrivilege == 10001)
    @section('content-register')
    <li><a class="dropdown-item" href="register">Register User</a></li>
    @endsection
@endif
@section('content')

    <div>
        puto el que lo lea
    </div>
@endsection