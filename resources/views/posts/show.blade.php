<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<<<<<<< HEAD
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="card-title text-center">{{$post->title}}</h1>
                <p class="card-text">{{$post->content}}</p>
                <hr>
                <p class="text-muted">Created at: {{$post->created_at->format('M d, Y')}}</p>
                <p class="text-muted">Author: {{$post->user->name}}</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
=======
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>
    <p>Created at: {{$post->created_at}}</p>
    <p>Author : {{$post->user->name}}</p>
>>>>>>> ddec44d7e6d7777388fabf9aa7ecb420111a0610
</body>

</html>
