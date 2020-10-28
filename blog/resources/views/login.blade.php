@extends('layouts.main')
@section('titlePage', 'Login')

@section('content')

<div class="container text-center pt-5">
    <div class="card" style="margin: auto; width: 18rem;">
        <img class="card-img-top" src="{{ asset('images/blog.jpg') }}" alt="Card image cap" width="100%">
        <div class="card-body">
            <form class="text-left">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp"
                        placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

@stop