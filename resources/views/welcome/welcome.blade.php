@extends('layouts.default')

@section('title', 'RabbitTrack')

@push('styles')
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
@endpush

@section('nav-links')
<li><a class="nav-link" href="{{route('about')}}">About us</a></li>
@endsection

@section('hero')
<h1 class="heading-primary noselect">Relax with</h1>
<div class="rabbittrack-cont">  
    <h1 class="heading-primary special-text noselect"><a class="roll" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&list=RDdQw4w9WgXcQ&start_radio=1">RabbitTrack</a></h1>
</div>
    <h2 class="heading-secondary noselect">Know what you have. Control what you need.</h2>
@endsection