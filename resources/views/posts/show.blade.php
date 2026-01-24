@extends('layouts.app')

@section('Title') show @endsection

@section('Content')

<div class="container d-flex justify-content-center mt-5">
  <div class="card" style="width: 60rem;">
    <h5 class="card-header">Post Info</h5>
    <div class="card-body">
      <h5 class="card-title">Title: {{ $post['title'] }}</h5>
      <p class="card-text">
        Description: {{ $post['Description'] }} 
      </p>
    </div>
  </div>
</div>
<div class="container d-flex justify-content-center mt-5">
  <div class="card" style="width: 60rem;">
    <h5 class="card-header">Post Creater Info</h5>
    <div class="card-body">
      <h5 class="card-title">Name: Ahmed</h5>
      <p class="card-text">
        Email: jlsdljf;ls 
      </p>
      <p class="card-text">
        created ai
      </p>
    </div>
  </div>
</div>

@endsection

