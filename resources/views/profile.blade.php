@extends('layouts.app')

@section('title', 'Profile')

@section('content')

    <h2>Demo User Profile</h2>

    @if ($user)
        <p>
            <strong>Username:</strong>
            {{ $user->username }}
        </p>

        <p>
            <strong>Full Name:</strong>
            {{ $user->full_name }}
        </p>

        <p>
            <strong>Email:</strong>
            {{ $user->email }}
        </p>
    @else
        <p>User record not found.</p>
    @endif

@endsection