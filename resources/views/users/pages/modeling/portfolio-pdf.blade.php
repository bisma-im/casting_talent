<!DOCTYPE html>
<html>

<head>
    <style>
        /* Set the page size and orientation */
        @page {
            size: A4 landscape;
            margin: 0;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #DAD7B1;
        }

        /* Main container */
        .container {
            width: 100%;
            height: 100vh;
            display: table;
            table-layout: fixed;
        }

        /* Left half for the portrait image */
        .left-half {
            display: table-cell;
            width: 50%;
            vertical-align: middle;
            text-align: center;
            padding: 10px;
        }

        /* Right half for the 2x2 image table */
        .right-half {
            display: table-cell;
            width: 49%;
            padding: 10px;
        }

        /* Portrait image style */
        .portrait-image {
            width: 85%;
            height: 85%;
            max-height: 80%;
        }

        /* Table under the portrait image */
        .info-table {
            margin: 20px auto;
            /* Center table horizontally */
            width: 85%;
            border-collapse: collapse;
        }

        .info-table th,
        .info-table td {
            padding-left: 3px;
            padding-right: 3px;
            margin-left: 0;
            margin-right: 0;
            padding-top: 0;
            padding-bottom: 0;
            text-align: center;
            font-size: 13px;
            line-height: 1.2;
        }

        .info-table .header-row th {
            font-size: 20px;
            color: #00798c;
        }

        /* Logo cell style */
        .logo-cell {
            width: 50px;
            /* height: 50px; */
        }

        .logo-cell img {
            height: 50px;
            display: block;
        }

        /* 2x2 table for images */
        .image-table {
            width: 100%;
            height: 80%;
            max-height: 80%;
            border-collapse: collapse;
        }

        .image-cell {
            width: 30%;
            height: 30%;
            padding: 5px;
            text-align: center;
        }

        .image-cell img {
            width: 100%;
            height: 40%;
            max-height: 40%;
        }

        .additional-info {
            color: #000
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Left half with portrait image -->
        <div class="left-half">
            @if (isset($images[0]))
                <img src="{{ public_path($images[0]) }}" class="portrait-image" alt="Portrait Image">
            @else
                <p>No image available</p>
            @endif

            <!-- Info Table with Logo Cell -->
            <table class="info-table">
                <tr class="header-row" style="line-height: 0;">
                    <!-- Merged cell for logo with rowspan -->
                    <td class="logo-cell">
                        {{--
                    <td class="logo-cell" rowspan="2"> --}}
                        <img src="{{ public_path('user-assets/images/logo-bg-remove.png') }}" alt="Logo">
                    </td>
                    <th>{{ $modelDetail->height }}</th>
                    <th>{{ $modelDetail->bust }}</th>
                    <th>{{ $modelDetail->weight }}</th>
                    <th>{{ $modelDetail->hip }}</th>
                    <th>{{ $modelDetail->shoe_size }}</th>
                    <th>{{ $modelDetail->age }}</th>
                </tr>
                <tr style="line-height: 0;">
                    <td>{{ $modelDetail->talent_id }}</td>
                    <td>Height</td>
                    <td>Chest</td>
                    <td>Weight</td>
                    <td>Hips</td>
                    <td>Shoes</td>
                    <td>Age</td>
                </tr>
            </table>
        </div>

        <!-- Right half with 2x2 image table -->
        <div class="right-half">
            <table class="image-table">
                <tr>
                    @if (isset($images[1]))
                    <td class="image-cell"><img src="{{ public_path($images[1]) }}" alt="Image 2"></td>
                    @else
                    <td class="image-cell"></td>
                    @endif

                    @if (isset($images[2]))
                    <td class="image-cell"><img src="{{ public_path($images[2]) }}" alt="Image 3"></td>
                    @else
                    <td class="image-cell"></td>
                    @endif
                </tr>
                <tr>
                    @if (isset($images[3]))
                    <td class="image-cell"><img src="{{ public_path($images[3]) }}" alt="Image 4"></td>
                    @else
                    <td class="image-cell"></td>
                    @endif

                    @if (isset($images[4]))
                    <td class="image-cell"><img src="{{ public_path($images[4]) }}" alt="Image 5"></td>
                    @else
                    <td class="image-cell"></td>
                    @endif
                </tr>
            </table>
            <table>
                <tr class="additional-info">
                    <td>{{ 'Hair: ' . ucfirst($modelDetail->hair_color) }}</td>
                    <td style="padding-left: 30px;">{{ 'Nationality: ' . ucfirst($modelDetail->nationality) }}</td>
                </tr>
                <tr class="additional-info">
                    <td>{{'Eyes: ' . ucfirst($modelDetail->eye_color) }}</td>
                    <td style="padding-left: 30px;">{{ 'Ethnicity: ' . ucfirst($modelDetail->ethnicity) }}</td>
                </tr>
                <tr>
                    <td colspan="5" style="height: 15px;"></td>
                </tr>
                <tr>
                    <td colspan="6" class="text-center">
                        <span>For Client Enquiries: +971 50 1234796</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="6" class="text-center">
                        <span>Write to us: info@casttalents.com</span>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>