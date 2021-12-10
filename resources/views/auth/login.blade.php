@extends('layouts.app')

@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/login') }}" method="POST">
                @csrf
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
                <button type="submit" class="btn btn-primary">Login</button>
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection