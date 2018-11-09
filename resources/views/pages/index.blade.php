@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h2>
            Welcome to MyBlog
        </h2>
        <p>
            This is an attempt to create my first app in Laravel
        </p>
        <p>
            <a class="btn btn-primary" href="/login" role="button">
                Login
            </a>
            <a class="btn btn-success" href="/register" role="button">
                Register
            </a>
        </p>
    </div>

@endsection