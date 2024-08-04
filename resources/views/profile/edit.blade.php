@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')
    <h1>Edit Profile</h1>
    <form action="{{ route('profile.update', $profile->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $profile->name }}" required>
        </div>
        <div>
            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio">{{ $profile->bio }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
