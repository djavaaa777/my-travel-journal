@extends('layout')

@section('main_content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="mb-4 text-center">📝 Register</h2>

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $err)
                        <li>{{$err}}</li>
                @endforeach
            </ul>
            </div>
        @endif

        <form method="POST" action="/register/check">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input id="name" type="text" name="name" class="form-control bg-dark text-white" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input id="email" type="email" name="email" class="form-control bg-dark text-white" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" name="password" class="form-control bg-dark text-white" required>
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control bg-dark text-white" required>
            </div>

            <button type="submit" class="btn btn-warning">Register</button>
        </form>
        <div class="mt-2">
            <p>Already have an account? <a class="text-decoration-none fw-semibold" href="/login">Login</a></p>
        </div>
    </div>
</div>
@endsection
