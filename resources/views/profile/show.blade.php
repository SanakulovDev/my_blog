@extends('layouts.app')

@section('title', 'Profile Details')

@section('content')
    <h1>{{ $profile->name }}</h1>
    <p>{{ $profile->bio }}</p>
    <a href="{{ route('profile.edit', $profile->id) }}">Edit</a>
    <form action="{{ route('profile.destroy', $profile->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
