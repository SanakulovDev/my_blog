{{-- resources/views/posts/show.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to Posts</a>
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $post->id}}</td>
                </tr>
                
                <tr>
                    <th>Title</th>
                    <td>{{ $post->title}}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ $post->description}}</td>
                </tr>
                <tr>
                    <th>Body</th>
                    <td>{{ $post->body}}</td>
                </tr>

            
            </tbody>
        </table>
    </x-slot>
        

</x-app-layout>