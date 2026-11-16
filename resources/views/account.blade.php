@extends('layouts.cafe')

@section('title', 'My Account')

@section('content')
    <h1>My Account</h1>
    <p>You are currently logged in as:</p>

    <div class="profile">
        <img src="{{ $user->avatar_url }}" alt="avatar" class="avatar avatar-lg">

        <div>
            <p><strong>Full Name:</strong> {{ $user->full_name }}</p>
            <p><strong>Username:</strong> {{ $user->username }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Member since:</strong> {{ $user->created_at->format('F j, Y') }}</p>
        </div>
    </div>

    <div class="actions">
        <a href="{{ route('users.edit', $user) }}" class="btn">Edit My Profile and Photo</a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-pink">Logout</button>
        </form>
    </div>
@endsection