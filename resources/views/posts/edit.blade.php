{{-- resources/views/posts/edit.blade.php --}}
<x-app-layout>
    <x-slot name="header">
    <h1>Edit Post</h1>

    <form class="form form-control" action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="flex items-center justify-center gap-5">
                <div class="col-md-3 " >
                    <div class="form-floating">
                        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
                        <label class="form-label" for="post-title">Title:</label>
                    </div>
                </div>
                <div class="col-md-3 form-floating">
                    <textarea class="form-control" id="post-body" name="body" required>{{ $post->body }}</textarea>
                    <label class="form-label" for="post-body">Body:</label>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </div>
        </div>
    </form>
    </x-slot>
</x-app-layout>
