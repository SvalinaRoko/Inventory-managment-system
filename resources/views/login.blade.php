@extends('layouts.default')

@section('title','Login')

@push('styles')
<link href="{{ asset('css/login.css')}}" rel="stylesheet">
@endpush

@section('nav-links')
<li><a class="nav-link" href="{{route('about')}}">About us</a></li>
<li><a class="nav-link" href="/">Home</a></li>
@endsection

@section('hero')
<h2 class="heading-secondary">Log in</h2>
@endsection
@section('features')
<div class="login-form-container">
    <form class="login-form " action="/process" method="POST">
        @csrf
        <!-- <div>
            <label>Name
                <input type="text" name="name" id="name" value="{{ old('name')}}" maxlength="20" required>
            </label>
            @error('name')
            <p class="login-err">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label>Surname
                <input type="surname" name="surname" id="surname" value="{{ old('surname')}}" maxlength="30">
            </label>
            @error('surname')
            <p class="login-err">{{$message}}</p>
            @enderror
        </div> -->
        <div>
            <label>Email
                <input type="email" name="email" id="email" value="{{old ('email')}}" maxlength="40" required>
            </label>
            @error('email')
            <p class="login-err">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label>Password
                <input type="password" name="password" id="password" required>
                @error('password')
                <p class="login-err">{{$message}}</p>
                @enderror
            </label>
        </div>
        <input class="login-submit-btn" type="submit" value="Submit">
    </form>
</div>
@endsection