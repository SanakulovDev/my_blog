@extends('layouts.app')

@section('title', 'profile')

@section('content')
    <h1>profile</h1>
    <a href="{{ route('profile.create') }}">Create New Profile</a>
    <ul>
        @foreach ($profile as $profile)
            <li>
                <a href="{{ route('profile.show', $profile->id) }}">{{ $profile->name }}</a>
                <form action="{{ route('profile.destroy', $profile->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
