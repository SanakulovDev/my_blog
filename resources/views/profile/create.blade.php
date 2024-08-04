@extends('layouts.app')

@section('title', 'Create Profile')

@section('content')
    <h1>Create Profile</h1>
    <form action="{{ route('profile.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio"></textarea>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
