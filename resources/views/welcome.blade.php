@extends('layouts.default')

@section('title', 'Welcome')

@push('styles')
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
@endpush

@section('nav-links')
<li><a class="nav-link" href="/">About us</a></li>
@endsection

@section('hero')
<h1 class="heading-primary">Relax with <span class="rabbittrack">RabbitTrack</span></h1>
<h2 class="heading-secondary">Track your inventory with ease.</h2>
@endsection