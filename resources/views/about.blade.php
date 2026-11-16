@extends('layouts.cafe')

@section('title', 'About')

@section('content')
    <h1>About Cloud Cafe</h1>

    <p>Cloud Cafe is a point-of-sale (POS) management notebook built with Laravel.
       It keeps the cafe's customer records and staff accounts in one place.</p>

    <h2>What it can do</h2>
    <ul>
        <li>Manage customers: view, add, edit and delete records</li>
        <li>Manage user accounts, including profile pictures</li>
        <li>Validate every form before saving to the database</li>
        <li>Protect the management pages with a login (Laravel Breeze)</li>
    </ul>

    <h2>Built with</h2>
    <ul>
        <li>Laravel 12 and PHP 8.2</li>
        <li>MySQL (XAMPP)</li>
        <li>Laravel Breeze for login and registration</li>
        <li>Intervention Image for avatar thumbnails</li>
    </ul>

    <h2>Made by</h2>
    <p>Janina Charisse Torre</p>
    <p>Web System Technologies, TFA8</p>
@endsection