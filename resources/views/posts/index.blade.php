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
                <td>{{ $post['Poste_by'] }}</td>
                <td>{{ $post['Created_at'] }}</td>
                <td>
                    <a href="{{route('posts.show',$post['id']) }}" class="btn btn-info btn-sm me-4">View</a>
                    <a href="#" class="btn btn-primary btn-sm me-4">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

</div>

@endsection
  