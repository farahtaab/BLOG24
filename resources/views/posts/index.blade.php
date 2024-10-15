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
        /* Global Styles */
        body {
            background-color: #f1f3f5;
            font-family: 'Poppins', sans-serif;
        }

        h1 {
            color: #2c3e50;
            font-weight: 800;
            letter-spacing: -1.5px;
            font-size: 2.75rem;
        }

        /* Card Styles */
        .card {
            border: none;
            border-radius: 15px;
            background-color: #ffffff;
            position: relative;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.12);
        }

        .card-body {
            padding: 35px;
            transition: background-color 0.3s ease;
        }

        .card-body:hover {
            background-color: #f8f9fa;
        }

        .card-title {
            color: #34495e;
            font-size: 1.85rem;
            font-weight: 600;
        }

        .card-text {
            font-size: 1rem;
            color: #7f8c8d;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .card .btn {
            border-radius: 50px;
            padding: 10px 25px;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        /* Button Styles */
        .btn-add {
            background-color: #1abc9c;
            color: white;
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: bold;
            font-size: 0.95rem;
            transition: background-color 0.3s;
        }

        .btn-add:hover {
            background-color: #16a085;
        }

        .btn-edit {
            background-color: #f39c12;
            color: white;
            padding: 10px 20px;
        }

        .btn-edit:hover {
            background-color: #e67e22;
        }

        .btn-delete {
            background-color: #e74c3c;
            color: white;
            padding: 10px 20px;
        }

        .btn-delete:hover {
            background-color: #c0392b;
        }

        /* Text Alignment & Styling */
        .display-4 {
            font-size: 3rem;
            font-weight: bold;
            color: #2c3e50;
        }

        .btn-soft {
            background-color: #6c757d;
            color: white;
            border: none;
        }

        .btn-soft:hover {
            background-color: #5a6268;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .card-body {
                padding: 25px;
            }

            .card-title {
                font-size: 1.6rem;
            }

            .card-text {
                font-size: 0.95rem;
            }

            .display-4 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <!-- Header Section -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="display-4">Posts</h1>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <a href="{{ route('posts.create') }}" class="btn btn-add">Add New Post</a>
        </div>

        <!-- Posts Listing -->
        @foreach ($posts as $post)
        <div class="card mb-4" onclick="window.location.href='{{ route('posts.show', $post) }}'">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-edit ml-4 btn-sm mr-2">Edit</a>

                    <!-- Delete button form -->
                    <form method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete btn-sm"
                            onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
