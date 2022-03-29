@extends('layouts.app')

@section('content')

<div class="father">
        <form class="child" method="POST" action="">
            @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Code</label>
            <input type="text" name="cde" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User name</label>
            <input type="text" name="UserName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="password" name="Password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Privilege</label>
            <input type="text" name="IdPrivilege" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
@endsection