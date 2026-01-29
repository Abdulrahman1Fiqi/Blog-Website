<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <link href="https://unpkg.com/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Fiqi Blog Website</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      
      

      
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>

          <li class="nav-item">
            <a class="btn btn-outline-primary ms-2" href="{{ route('register') }}">
              Register
            </a>
          </li>
        @endguest

        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button"
               data-bs-toggle="dropdown">
              {{ auth()->user()->name }}
            </a>

            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button class="dropdown-item">Logout</button>
                </form>
              </li>
            </ul>
          </li>
        @endauth

      </ul>

    </div>
  </div>
</nav>





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
                    @auth
                     @if($post->user_id === auth()->id())
                    <a href="{{route('posts.edit',$post['id']) }}" class="btn btn-primary btn-sm me-4">Edit</a>
                    @endif
                    @endauth
                     <a href="{{route('posts.show',$post['id']) }}" class="btn btn-info btn-sm me-4">View</a>
                    @auth
                     @if($post->user_id === auth()->id())
                    <form style="display: inline;" method="POST" action="{{ route('posts.destroy',$post['id']) }}">
                        @csrf
                        @method('DELETE')
                    <button  type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    @endif
                    @endauth
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

</div>



 <script src="https://unpkg.com/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
  