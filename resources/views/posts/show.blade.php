{{-- resources/views/posts/show.blade.php --}}
<x-app-layout>
    <x-slot name="header">

        <h1 class="text-black">{{ $post->title }}</h1>
    </x-slot>
        <p>{{ $post->body }}</p>
        <a href="{{ route('posts.index') }}">Back to Posts</a>

</x-app-layout>