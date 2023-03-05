@extends('layout.layout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-4">
            <h1 class="text-center">login form</h1>
            <form method="POST" action="{{ route('authenticate') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" name="name" id="name" class="form-control" />
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" />
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-lg btn-info w-100">Login</button>
            </form>
        </div>
    </div>
@endsection
