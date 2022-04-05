@extends('layouts.app')

@section('content')
    <div class="father">
        <form class="form-login child bg-light w-25 shadow-lg" method="POST" action="">
            @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fw-bold">User name</label>
            <input type="text" name="UserName" class="form-control" id="UserName" aria-describedby="userNameHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
            <input type="password" name="Password" class="form-control" id="exampleInputPassword1">
        </div>
        @error('message')
        <p class="alert alert-danger w-100" role="alert">
           {{ $message }}
        </p>
            
        @enderror
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-success w-50 me-md-2 fw-bold">Send</button>
        </div>
        </form>
    </div>
@endsection