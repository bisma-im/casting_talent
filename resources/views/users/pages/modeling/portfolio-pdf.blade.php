{{-- <style>
    body,
    html {
        margin: 0;
        padding: 0;
        /* background-color: #DAD7B1; */
    }
    td {
        vertical-align: middle;
        text-align: center;
        width: 100%;
        height: 99.4%;
    }
    img {
        max-width: 100%;
        max-height: 99.4%;
        object-fit: contain;
    }
</style>
<table>
    @foreach ($images as $image)
    <tr>
        <td>
            <img src="{{ public_path($image) }}" alt="Image">
        </td>
    </tr>
    @endforeach
</table> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model Profile</title>
    <style>
        body, html { margin: 0; padding: 0; font-family: 'Arial', sans-serif; }
        .container { width: 100%; padding: 20px; box-sizing: border-box; }
        .header { text-align: center; margin-bottom: 20px; }
        /* .images-row { overflow: hidden; } */
        .images-row div { width: 33.33%; float: left; padding: 5px; box-sizing: border-box; }
        .images-row div img { width: 100%; display: block; }
        .details { margin-top: 20px; text-align: center; }
        .details table { margin: auto; }
        .details td, .details th { padding: 8px; text-align: left; }
        .footer { text-align: center; margin-top: 20px; font-size: 0.85em; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Model Profile</h1>
        </div>

        <!-- Assuming $images is an array of URLs to the images -->
        <div class="images-row">
            @foreach(array_slice($images, 0, 3) as $image)
                <div>
                    <img src="{{ public_path($images[0]) }}" alt="Profile Image">
                </div>
            @endforeach
        </div>

        <div class="details">
            <table>
                <tr>
                    <th>Height</th>
                    <td>height cm</td>
                    {{-- <td>{{ $data['height'] }} cm</td> --}}
                </tr>
                <tr>
                    <th>Chest</th>
                    <td>height cm</td>
                    {{-- <td>{{ $data['chest'] }} cm</td> --}}
                </tr>
                <tr>
                    <th>Waist</th>
                    <td>height cm</td>
                    {{-- <td>{{ $data['waist'] }} cm</td> --}}
                </tr>
                <tr>
                    <th>Hips</th>
                    <td>height cm</td>
                    {{-- <td>{{ $data['hips'] }} cm</td> --}}
                </tr>
                <tr>
                    <th>Shoes</th>
                    <td>height cm</td>
                    {{-- <td>{{ $data['shoes'] }}</td> --}}
                </tr>
                <tr>
                    <th>Nationality</th>
                    <td>height cm</td>
                    {{-- <td>{{ $data['nationality'] }}</td> --}}
                </tr>
                <tr>
                    <th>Ethnicity</th>
                    <td>height cm</td>
                    {{-- <td>{{ $data['ethnicity'] }}</td> --}}
                </tr>
            </table>
        </div>

        <div class="footer">
            <p>For Client Enquiries: +971 55 3421613</p>
            <p>Write to Us: enquiry@divadubai.com</p>
        </div>
    </div>
</body>
</html>
