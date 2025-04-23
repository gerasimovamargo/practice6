@extends('partials.layout')

@section('content')
    <div class="card">
        <div class="card-header bg-success text-white">
            Register form
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('register.submit') }}">
                @csrf

                <div class="form-group mb-3">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                </div>

                <div class="form-group mb-3">
                    <label for="email">Your Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>

                <div class="form-group mb-3">
                    <label for="password">Your Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                </div>

                <button type="submit" class="btn btn-success">Register</button>
            </form>
        </div>
    </div>
@endsection
