<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('app.css')}}">
</head>

<body>
  <header>
    <nav class="nav">
      <a class="link" href="{{route('home.index')}}">Home</a>
      <a class="link" href="{{route('post.index')}}">Posts</a>
      <a class="link" href="{{route('post.create')}}">Create post</a>
      <a class="link" href="{{route('post.trash')}}">Restore post</a>
    </nav>
  </header>
  <main>
    @yield('content')
  </main>
</body>

</html>