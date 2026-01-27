@extends('layouts.app')

@section('Title') index @endsection

@section('Content')

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>All Posts</h4>
        <a href="{{ route("posts.create") }}" class="btn btn-success">Create Post</a>
    </div>

    <table class="table table-bordered table-striped text-center align-middle">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Posted By</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $post )
                <tr>
                <td>{{ $post['id'] }}</td>
                <td>{{ $post['title'] }}</td>
                <td>{{ $post->user->name }}</td>
                <td>{{ $post->created_at->format('Y-m-d') }}</td>
                <td>
                    <a href="{{route('posts.show',$post['id']) }}" class="btn btn-info btn-sm me-4">View</a>
                    <a href="{{route('posts.edit',$post['id']) }}" class="btn btn-primary btn-sm me-4">Edit</a>
                    <form style="display: inline;" method="POST" action="{{ route('posts.destroy',$post['id']) }}">
                        @csrf
                        @method('DELETE')
                    <button  type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

</div>

@endsection
  