@extends('layouts.app')
@if ((auth()->user()->IdPrivilege?? 1000) == 10001)
@section('content-register')
<li><a class="dropdown-item" href="{{ route('register.index') }}">Register User</a></li>
@endsection
@endif
@section('content')

<form class="form-register bg-light p-5 w-50 mx-auto" method="POST" action="">
    @csrf
    <div class="box1">
        <div class="mb-3 ">
            <label class="form-label fw-bold">SerialNumber</label>
            <input type="text" name="serial" class="form-control" id="serial">
        </div>
        @error('serial')
        <p class="alert alert-danger w-100" role="alert">
            {{ $message }}
        </p>
        @enderror
        <div class="mb-3 ">
            <label class="form-label fw-bold">HostName</label>
            <input type="text" name="host" class="form-control" id="host">
        </div>
        @error('host')
        <p class="alert alert-danger w-100" role="alert">
            {{ $message }}
        </p>
        @enderror
        <div class="mb-3 ">
            <label class="form-label fw-bold w-100 text-cente">OS</label>
            <input type="text" name="os" class="form-control" id="os">
        </div>
        @error('os')
        <p class="alert alert-danger w-100" role="alert">
            {{ $message }}
        </p>
        @enderror

    </div>

    <div class="box2">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="laptop" value="true" >
            <label class="form-check-label fw-bold" for="flexCheckChecked">
                Is a Laptop
            </label>
        </div>
        <br>
        <div class="mb-3 ">
            <label class="form-label fw-bold">Brand</label>
            <input type="text" name="brand" class="form-control" id="brand">
        </div>
        @error('brand')
        <p class="alert alert-danger w-100" role="alert">
            {{ $message }}
        </p>
        @enderror
        <div class="mb-3 ">
            <label class="form-label fw-bold">Model</label>
            <input type="text" name="model" class="form-control" id="model">
        </div>
        @error('model')
        <p class="alert alert-danger w-100" role="alert">
            {{ $message }}
        </p>
        @enderror
        <div class="mb-3">
            <label class="form-label fw-bold">Status</label>
            <select class="form-select" name="status">
                <!-- <option selected>None</option> -->
                <option value="InStorage">Storage</option>
                <option value="Taken">Taken</option>
                <option value="Damaged">Damaged</option>
            </select>
        </div>
    </div>
    <button type="submit" class="but-register btn btn-success d-block fw-bold">Submit</button>
</form>
@endsection