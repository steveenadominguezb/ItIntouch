@extends('layouts.app')

@if ( ($privilege?? 9) == 10001)
    @section('content-privileges')
    <li><a class="dropdown-item" href="{{ route('register.index') }}">Register User</a></li>
    <li><a class="dropdown-item" href="{{ route('pc.index') }}">Register PC</a></li>
    @endsection
@endif
@section('content')

    @if (($name?? "none") == "laura")
        <div>   
            ¿Te gusto?
        </div>
    @else
        <div>
            WELCOME
        </div>
    @endif
    
@endsection
