{{-- resources/views/posts/index.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h1>Posts List</h1>
            <a href="{{ route('posts.create') }}" class="btn btn-success        text-light">Create New Post</a>
        </div>
        <table class="table table-bordered table-hover table-sstriped">
            <thead >
                <tr class="bg-dark">
                    <th>ID</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th class="w-50">Action Buttons</th>
                </tr>
            </thead>
            <tbody>

                @foreach($posts as $post)
                    <tr>

                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}">
                                <i class="fas fa-eye"></i>
                            </a>
                        
                            <a href="{{ route('posts.edit', $post->id) }}">
                                <i class="fas fa-edit"></i>
                            </a>
                    

                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fas fa-delete"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </x-slot>
</x-app-layout>

