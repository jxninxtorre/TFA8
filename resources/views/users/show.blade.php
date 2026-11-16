@extends('layouts.cafe')

@section('title', 'User Details')

@section('content')
    <h1>User Details</h1>

    <img src="{{ $user->avatar_url }}" alt="avatar" class="avatar avatar-lg">

    <p><strong>ID:</strong> {{ $user->id }}</p>
    <p><strong>Username:</strong> {{ $user->username }}</p>
    <p><strong>Full Name:</strong> {{ $user->full_name }}</p>

    <div class="actions">
        <a href="{{ route('users.edit', $user) }}" class="btn">Edit</a>
        <a href="{{ route('users.index') }}" class="btn btn-gray">Back</a>
    </div>
@endsection