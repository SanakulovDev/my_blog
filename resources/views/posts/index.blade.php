{{-- resources/views/posts/index.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h1>Posts List</h1>
        <a href="{{ route('posts.create') }}" class="btn bg-primary text-white">Create New Post</a>
        <table class="table table-border table-striped">
            @foreach($posts as $post)
                <tr>

                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}">View</a>
                    </td>
                    <td>
                        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                    </td>
                    <td>

                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </x-slot>
</x-app-layout>

