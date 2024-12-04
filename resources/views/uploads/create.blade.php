<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <!-- Add styles for a yellow theme -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff8e1; /* Light yellow background */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .container {
            background: #fff3cd; /* Light yellow container background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }
        h1 {
            color: #856404; /* Dark yellow for title */
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        input[type="text"], textarea, input[type="file"] {
            padding: 10px;
            border: 1px solid #ffd966; /* Light yellow border */
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical; /* Allow vertical resizing only */
            min-height: 80px;
        }
        input[type="submit"] {
            background-color: #ffc107; /* Bright yellow button background */
            color: #856404; /* Dark yellow text */
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #ffca2c; /* Lighter yellow hover effect */
        }
        a {
            color: #856404; /* Dark yellow text */
            text-decoration: none;
            margin-top: 10px;
        }
        a:hover {
            text-decoration: underline;
        }
        .uploaded-image {
            text-align: center;
            margin-top: 20px;
        }
        img {
            max-width: 200px; /* Limit image width */
            max-height: 200px; /* Limit image height */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
        }
        .file-info {
            background-color: #fff8e1; /* Light yellow background */
            padding: 10px;
            margin-top: 10px;
            border-radius: 4px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Upload Your File</h1>
        <!-- File upload form -->
        <form method="POST" action="{{ url('/uploads') }}" enctype="multipart/form-data">
            @csrf
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" placeholder="Enter a title for your file" required>

            <label for="content">Content:</label>
            <textarea id="content" name="content" placeholder="Enter a description or content (optional)"></textarea>

            <label for="upload">File:</label>
            <input type="file" id="upload" name="upload" required>

            <input type="submit" value="Save Upload">
        </form>

        @if( ! empty($id) )
            <!-- Uploaded image preview -->
            <div class="uploaded-image">
                <a href="{{ url('/uploads', [$id, $originalName]) }}">{{ $id }} {{ $originalName }}</a>
                <br>
                @if(substr($mimeType, 0, 5) == 'image')
                    <img src="{{ url('/uploads', [$id, $originalName]) }}" alt="{{ $originalName }}">
                @endif
            </div>
        @endif

        <!-- Link to return to the uploads page -->
        <a href="{{ url('/uploads') }}">Back to Uploads</a>

        @isset($id)
            <!-- File information -->
            <div class="file-info">
                <strong>File ID:</strong> {{ $id }} <br>
                <strong>Title:</strong> {{ $title ?? 'N/A' }} <br>
                <strong>Content:</strong> {{ $content ?? 'N/A' }} <br>
                <strong>Path:</strong> {{ $path }} <br>
                <strong>Original Name:</strong> {{ $originalName }} <br>
                <strong>MIME Type:</strong> {{ $mimeType }}
            </div>
        @endisset
    </div>
</body>
</html>
