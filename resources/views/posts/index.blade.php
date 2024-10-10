<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POSTS</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            border-radius: 15px;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .btn-soft {
            background-color: #6c757d;
            color: white;
            border: none;
        }

        .btn-soft:hover {
            background-color: #5a6268;
        }

        .btn-delete {
            background-color: #e57373;
            color: white;
        }

        .btn-delete:hover {
            background-color: #d32f2f;
        }

        .btn-edit {
            background-color: #ffb74d;
            color: white;
        }

        .btn-edit:hover {
            background-color: #f57c00;
        }

        .btn-add {
            background-color: #81c784;
            color: white;
        }

        .btn-add:hover {
            background-color: #66bb6a;
        }

        h1 {
            color: #495057;
            font-weight: 700;
        }

        p {
            color: #495057;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Posts</h1>
            <a class="btn btn-add">Add New Post</a>
        </div>

        @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="mb-0">
                        <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                    </h5>
                </div>
                <div>
                    <a href="#" class="btn btn-edit btn-sm mr-2">Edit</a>

                    <!-- Delete button form -->
                    <form method="POST" class="d-inline-block">
                        <button type="submit" class="btn btn-delete btn-sm"
                            onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
