@extends('layouts.app')

@section('content')
<div class="container  mt-5">
    <div class="row">
        <div class="col-md-6">
            @if (session('status'))
            <div class="alert alert-success">
                <span>{{ session('status') }}</span>
            </div>
            @endif
            <div class="card">
                <div class="card-header">Update Profile</div>
                <div class="card-body">
                    <form action="{{ route('profile.edit') }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" value="{{ Auth::user()->name }}" id="name"
                                class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{ Auth::user()->email }}" id="email"
                                class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
