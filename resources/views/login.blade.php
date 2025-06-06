@extends('layout')

@section('main_content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="mb-4 text-center">🔐 Login</h2>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/login/check">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input id="email" type="email" name="email" class="form-control bg-dark text-white" required value="{{ old('email') }}">
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" name="password" class="form-control bg-dark text-white" required>
            </div>

            <button type="submit" class="btn btn-warning">Login</button>
        </form>
    </div>
</div>
@endsection
