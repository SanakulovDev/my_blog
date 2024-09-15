{{-- resources/views/posts/index.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h1>Posts List</h1>
        <a href="{{ route('posts.create') }}" class="btn bg-primary text-white bg-current">Create New Post</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Body</td>
                    <td></td>
                </tr>
            </thead>
            @foreach($posts as $post)
                <tr>

                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('posts.edit', $post->id) }}">
                            <i class="fas fa-pencil"></i>
                        </a>
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

