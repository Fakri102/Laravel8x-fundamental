@extends('layouts.app')

@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" value="{{ old('name') }}">
                    @error('name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">E-Mail</label>
                    <input name="email" type="text" class="form-control" value="{{ old('email') }}">
                    @error('email')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" value="{{ old('password') }}">
                    @error('password')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Confirm Password</label>
                    <input name="password_confirmation" type="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection