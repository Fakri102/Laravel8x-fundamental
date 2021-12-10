@extends('layouts.app')

@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="mb-3">
                    <label for="" class="form-label">E-Mail</label>
                    <input name="email" type="text" class="form-control" value="{{ old('email', $request->email) }}">
                    @error('email')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" value="{{ old('password') }}" autofocus>
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
                <button type="submit" class="btn btn-primary">Reset Password</button>
            </form>
        </div>
    </div>
</div>
@endsection