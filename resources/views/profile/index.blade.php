@extends('layouts.app')

@section('title', 'Profiles')

@section('content')
    <h1>Profiles</h1>
    <a href="{{ route('profiles.create') }}">Create New Profile</a>
    <ul>
        @foreach ($profiles as $profile)
            <li>
                <a href="{{ route('profiles.show', $profile->id) }}">{{ $profile->name }}</a>
                <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
