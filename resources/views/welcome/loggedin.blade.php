@extends('layouts.default')

@section('title', 'RabbitTrack')

@push('styles')
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
@endpush

@section('nav-links')
<li><a class="nav-link" href="{{route('about')}}">About us</a></li>
@endsection

@section('hero')
@auth
<h1 class="heading-primary noselect">Welcome <span class=" user-name-cont">{{ Auth::user()->name }}</span></h1>
@endauth
@endsection