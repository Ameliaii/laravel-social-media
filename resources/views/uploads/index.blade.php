<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Photos</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff8e1;
            margin: 0;
            padding: 20px;
            color: #856404;
        }

        h1 {
            text-align: center;
            color: #d4a017;
        }

        a {
            text-decoration: none;
            color: #856404;
            font-weight: bold;
        }

        a:hover {
            color: #d4a017;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 10px;
        }

        .photo-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .photo-item {
            background-color: #fff3cd;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: left;
            width: calc(33.33% - 20px);
            box-sizing: border-box;
        }

        .photo-item img {
            max-width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
        }

        .photo-item .details {
            margin-top: 10px;
            font-size: 14px;
            line-height: 1.5;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }

        .photo-item .actions {
            margin-top: 10px;
        }

        .photo-item input[type="submit"] {
            background-color: #ffc107;
            color: #856404;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        .photo-item input[type="submit"]:hover {
            background-color: #ffca2c;
        }

        .button-container {
            display: flex;
            justify-content: center; 
            gap: 20px; 
            margin-bottom: 20px;
        }

        .home-btn,
        .upload-btn,
        .logout-btn {
            background-color: #ffc107; 
            padding: 10px 15px;
            color: #856404;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            border: none; /* Remove border */
        }

        .home-btn:hover,
        .upload-btn:hover,
        .logout-btn:hover {
            background-color: #ffca2c;
        }
    </style>
</head>

<body>
    <h1>{{ auth()->user()->is_super ? 'All Photos (Super Account)' : 'My Photos' }}</h1>

 
    <div class="button-container">
        <!-- Home Button -->
        <a href="{{ url('/') }}" class="home-btn">Home</a>

        <!-- Upload Button in the center -->
        <a href="{{ url('/uploads/create') }}" class="upload-btn">Upload a New Photo</a>

        @auth
            <!-- Logout Button -->
            <form action="{{ route('logout') }}" method="POST" style="display: inline-block;">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        @endauth
    </div>

    <div class="container">
        <div class="photo-grid">
            @foreach ($uploads as $upload)
                <div class="photo-item">
                    <!-- Display image if MIME type starts with 'image' -->
                    @if (str_starts_with($upload->mimeType, 'image'))
                        <img src="{{ url("/uploads/{$upload->id}/{$upload->originalName}") }}"
                            alt="{{ $upload->originalName }}">
                    @endif

                    <!-- File details -->
                    <div class="details">
                        <p><strong>User:</strong>
                            {{ $upload->user->name ?? 'Unknown User' }}
                        </p>
                        <p><strong>Title:</strong> {{ $upload->title ?? 'Untitled' }}</p>
                        <p><strong>Content:</strong> {{ $upload->content ?? 'No description provided.' }}</p>
                        <p><strong>File ID:</strong> {{ $upload->id }}</p>
                        <p><strong>Path:</strong> {{ $upload->path }}</p>
                        <p><strong>Original Name:</strong> {{ $upload->originalName }}</p>
                        <p><strong>MIME Type:</strong> {{ $upload->mimeType }}</p>
                    </div>

                    <!-- Edit and Delete buttons -->
                    <div class="actions">
                        <form method="GET" action="{{ url("/uploads/{$upload->id}/edit") }}" style="display: inline-block; margin-right: 5px;">
                            <input type="submit" value="Edit">
                        </form>
                        <form method="POST" action="{{ url("/uploads/{$upload->id}") }}" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
