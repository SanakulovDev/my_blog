{{-- resources/views/posts/create.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Create New Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label>Title:</label>
            <input type="text" name="title" required>
        </div>
        <div>
            <label>Body:</label>
            <textarea name="body" required></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection
