<!-- resources/views/emails/model-pdf.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f2f2f2;
        }
        .container {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .image-wrapper {
            width: 30%; /* Adjust width to fit your collage design */
            margin-bottom: 20px;
            border: 1px solid #ccc;
            background-color: white;
            padding: 10px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .image-wrapper img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Model Details</h1>
    <div class="container">
        @if (!empty($data['Image']))
            @foreach ($data['Image'] as $image)
                <div class="image-wrapper">
                    <img src="{{ public_path('uploads/models/profile-pics/' . $image) }}" alt="Model Image">
                </div>
            @endforeach
        @else
            <p>No images available.</p>
        @endif
    </div>
</body>
</html>
