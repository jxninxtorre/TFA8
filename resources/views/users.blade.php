@extends('layouts.cafe')

@section('title', 'User Accounts')

@section('content')
    <div class="top-bar">
        <h1>User Accounts</h1>
        <a href="{{ route('users.create') }}" class="btn btn-pink">+ Add User</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Avatar</th>
                <th>ID</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td><img src="{{ $user->avatar_url }}" alt="avatar" class="avatar"></td>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->full_name }}</td>
                    <td>
                        <div style="display:flex; gap:6px;">
                            <a href="{{ route('users.show', $user) }}" class="btn btn-gray">View</a>
                            <a href="{{ route('users.edit', $user) }}" class="btn">Edit</a>
                            <form method="POST" action="{{ route('users.destroy', $user) }}"
                                  onsubmit="return confirm('Delete this user?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-pink">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection