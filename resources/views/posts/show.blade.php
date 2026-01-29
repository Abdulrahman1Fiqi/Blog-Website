@extends('layouts.app')

@section('Title') show @endsection

@section('Content')

<div class="container d-flex justify-content-center mt-5">
  <div class="card" style="width: 60rem;">
    <h5 class="card-header">Post Info</h5>
    <div class="card-body">
      <h5 class="card-title">Title: {{ $post['title'] }}</h5>
      <p class="card-text">
        Description: {{ $post['description'] }} 
      </p>
    </div>
  </div>
</div>
<div class="container d-flex justify-content-center mt-5">
  <div class="card" style="width: 60rem;">
    <h5 class="card-header">Post Creater Info</h5>
    <div class="card-body">
      <h5 class="card-title">Name: {{ $post->user->name }}</h5>
      <p class="card-text">
        Email: {{ $post->user->email }}
      </p>
      <p class="card-text">
        created at: {{ $post->user->created_at }}
      </p>
    </div>
  </div>
</div>

@endsection

