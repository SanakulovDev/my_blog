<x-app-layout>

    <x-slot name="header">
        <h4>Create New Post</h4>
    </x-slot>

    <div class="container mt-4">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group mb-3">
                <label for="body">Body:</label>
                <textarea class="form-control" id="body" name="body" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</x-app-layout>
