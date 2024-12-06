<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff8e1; 
            color: #856404; 
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #d4a017; 
        }

        form {
            background-color: #fff3cd; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 20px auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"], textarea, input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ffd966; 
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #ffc107; 
            color: #856404; 
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #ffca2c; 
        }

        a {
            display: inline-block;
            margin-top: 20px;
            color: #856404; 
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            color: #d4a017; 
        }

        div {
            background-color: #fff3cd; 
            padding: 15px;
            border-radius: 8px;
            margin: 20px auto;
            max-width: 500px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        img {
            display: block;
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Update Upload</h1>
    <form method="POST" action='{{ url("/uploads/$id") }}' enctype="multipart/form-data">
        @csrf
        @method('put')

        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $title ?? '' }}" required>

        <label for="content">Content:</label>
        <textarea name="content" id="content" rows="4">{{ $content ?? '' }}</textarea>

        <label for="upload">Upload New File (optional):</label>
        <input type="file" name="upload">

        <input type="submit" value="Update Upload">
    </form>

    @if( ! empty($id) )
        <div>
            <a href="{{ url('/uploads', [$id, $originalName]) }}">{{ $id }} {{ $originalName }}</a>
            @if(substr($mimeType, 0, 5) == 'image')
                <img src='{{ url('/uploads', [$id, $originalName]) }}' alt="{{ $originalName }}">
            @endif
        </div>
    @endif

    <a href="{{ url('/uploads') }}">Back to Uploads</a>

    @isset($id) 
    <div>
        <strong>ID:</strong> {{ $id }} <br>
        <strong>Path:</strong> {{ $path }} <br>
        <strong>Original Name:</strong> {{ $originalName }} <br>
        <strong>MIME Type:</strong> {{ $mimeType }} <br>
        <strong>Title:</strong> {{ $title ?? 'N/A' }} <br>
        <strong>Content:</strong> {{ $content ?? 'N/A' }}
    </div>
    @endisset
</body>
</html>
