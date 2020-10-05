@extends('layouts.auth',['title'=>'Login'])

@section('content')
<div class="card">
    <div class="card-header">Login</div>
    <div class="card-body">
        <form action="/login" method="post">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="username" name="username" id="username"
                    class="form-control @error('username') is-invalid @enderror" required>
                @error('username')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"
                    class="form-control @error('password') is-invalid @enderror" required>
                @error('password')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group d-flex justify-content-between">
                <div class="form-check">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember Me</label>
                </div>
                <div>
                    <a href="/forgot-password" class="text-decoration-none">Forgot Password</a>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-primary">Login</button>
        </form>
        <div class="text-center mt-3">
            Don't have an account ? <a href="/register" class="text-decoration-none">here.</a>
        </div>
    </div>
</div>
@endsection
