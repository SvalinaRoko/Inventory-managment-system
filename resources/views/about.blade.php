@extends('layouts.default')

@section('title', 'About us')

@push('styles')
<link href="{{ asset('css/about.css')}}" rel="stylesheet">  
@endpush

@section('nav-links')

@auth
<li><a class="nav-link" href="{{route('loggedin')}}">Home</a></li>
@endauth
@guest
<li><a class="nav-link" href="{{route('welcome')}}">Home</a></li>
@endguest

@endsection

@section('hero')
@endsection

@section('features')
<div class="about-container">
    <h3 class="heading-tertiary">About us</h3>
    <p class="about-text">RabbitTrack was built with one goal in mind: to make inventory management simple, smart, and accessible for businesses of all sizes. Whether you're managing a warehouse, a retail store, or anything in between, RabbitTrack gives you full visibility into your stock—without the headache.
    Born from the frustrations of messy spreadsheets, missing products, and supply chain confusion, RabbitTrack was designed to give you the control you’ve always needed, with the tools you’ve always wanted. Clean interface. Clear data. Real-time tracking.
    We believe that good inventory systems should do more than just count things—they should help you plan, adapt, and grow.</p>
</div>
<div class="info-container">
    <h3 class="heading-tertiary">Our platform</h3>
    <p class="about-text">RabbitTrack is more than just software—it's your inventory's command center.<br>
    Here’s what it offers:</p>
    <div>
        <h4 class="hedaing-quaternary">Dashboard</h4>
        <p class="about-text">An at-a-glance view of your inventory health:</p>
        <ul class="features about-text">
            <li class="feature">Total products</li>
            <li class="feature">Total stock value</li>
            <li class="feature">Low stock alerts</li>
        </ul>
    </div>
    <div>
        <h4 class="hedaing-quaternary">Product Management</h4>
        <p class="about-text">Organize and manage your entire inventory:</p>
        <ul class="features about-text">
            <li class="feature">Add, edit, and delete products</li>
            <li class="feature">Filter by category, supplier, and more</li>
            <li class="feature">Real-time low stock highlights</li>
            <li class="feature">Track who made changes and when</li>
        </ul>
    </div>
    <div>
        <h4 class="hedaing-quaternary">Supplier Management</h4>
        <p class="about-text">Keep your supplier relationships clear and organized:</p>
        <ul class="features about-text">
            <li class="feature">View and update supplier contact info</li>
            <li class="feature">Add and manage suppliers with ease</li>
        </ul>
    </div>
    <div>
        <h4 class="hedaing-quaternary">Category Management</h4>
        <p class="about-text">Stay on top of product categories:</p>
        <ul class="features about-text">
            <li class="feature">Add, edit, and delete categories</li>
            <li class="feature">Ensure every product has a place</li>
        </ul>
    </div>
</div>
<div class="main-features-container">
<h3 class="heading-tertiary">Our features</h3>
        <p class="about-text">RabbitTrack was built to scale with your business, no matter your size:</p>
        <ul class="features about-text">
            <li class="feature">Authentication & Role-Based Authorization</li>
            <li class="feature">Mobile-Friendly & Fully Responsive</li>
            <li class="feature">Export to Excel for reports</li>
            <li class="feature">Admin controls for managing users and data</li>
            <li class="feature">Audit logs to track edits and activity</li>
            <li class="feature">Clean, easy-to-use interface</li>
        </ul>
</div>
<div class="misson-container">
<h3 class="heading-tertiary">Our misson</h3>
<p class="about-text">We exist to take the chaos out of inventory. No more second-guessing, no more missing stock, no more clunky software. Just fast, reliable, transparent inventory management—so you can focus on growing your business.</p>
</div>
<span class="catchphrase about-text">RabbitTrack — Know what you have. Control what you need.</span>
<footer class="about-footer ">
        <small>&copy; {{ date ('Y')}} All rights reserved</small>
</footer>
@endsection