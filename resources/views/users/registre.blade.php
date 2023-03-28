@extends('layouts.plantilla')

@section('contenido')
<div class="vh-85 d-flex justify-content-center align-items-start mt-5">
    <div class="col-md-4 p-5 shadow-sm border rounded-3">
        <h2 class="text-center mb-4 text-dark">Register Form</h2>
        <form method="POST" action="{{route('login.registre')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputName1" class="form-label text-dark">Name</label>
                <input type="text" name="name" class="form-control border border-primary" id="exampleInputName1"
                    aria-describedby="emailHelp" value="{{old('name')}}">

                @error('name')
                    <small>*{{$message}}</small>
                @enderror

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-dark">Email address</label>
                <input type="email" name="email" class="form-control border border-primary" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{old('email')}}">

                @error('email')
                    <small>*{{$message}}</small>
                @enderror

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-dark">Password</label>
                <input type="password" name="password" class="form-control border border-primary" id="exampleInputPassword1">

                @error('password')
                    <small>*{{$message}}</small>
                @enderror

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label text-dark">Confirm Password</label>
                <input type="password" name="passwordconf" class="form-control border border-primary" id="exampleInputPassword2">

                @error('passwordconf')
                    <small>*{{$message}}</small>
                @enderror
                
            </div>
            <div class="d-grid">
                <button class="btn btn-primary" type="submit">Sign up</button>
            </div>
        </form>
        <div class="mt-3">
            <p class="mb-0 text-dark text-center">¿Ya tienes una cuenta? <a href="{{route('users.login')}}" class="text-primary fw-bold">Log In</a></p>
        </div>
    </div>
</div>
@endsection
