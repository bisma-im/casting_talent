@extends('users.layouts.layout')

@section('title', 'Casting Talent | Talent Details')

@section('main-content')
<!-- Fancybox CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
<style>
    /* Header styling */
    .header {
        /* padding: 1em; */
        /* color: #d9480f; */
        /* border-bottom: 2px solid rgb(233, 171, 88); */
    }

    .name {
        font-size: 28px;
        font-weight: bolder;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .btn-download button {
        font-size: 14px;
    }

    /* Image slider styling */
    .image-slider {
        display: flex;
        overflow-x: auto;
        gap: 10px;
        padding: 1em 0;
    }

    .slide {
        flex: 0 0 auto;
        width: calc(100% / 3 - 10px);
        /* Adjust based on desired number of images visible */
    }

    .slide img {
        width: 100%;
        display: block;
        border-radius: 5px;
    }

    /* Details styling */
    .details {
        border: 2px solid rgb(233, 171, 88);
        border-radius: 5px;
        background-color: #DAD7B1;
        padding: 1em;
        color: #d9480f;
        margin-top: 20px;
    }

    .age-gender {
        display: flex;
        justify-content: space-between;
    }

    .age,
    .gender {
        width: 48%;
    }

    .blurb {
        margin-top: 20px;
    }

    .filmography {
        margin-top: 20px;
    }

    .castimg img {
        height: 550px;
    }
</style>

<style>
    .user-profile-section {
        padding: 20px;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }

    .user-details-card {
        background: linear-gradient(135deg, #ffffff 0%, #f1f1f1 100%);
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 25px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin-bottom: 20px;
    }

    .user-details-card:hover {
        transform: scale(1.02);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
    }

    .profile-divider {
        margin-top: 25px;
        margin-bottom: 25px;
        border-top: 2px solid #ddd;
    }

    .user-biography h5 {
        font-weight: 700;
        margin-bottom: 15px;
        color: #333;
    }

    .user-biography p {
        font-size: 16px;
        line-height: 1.7;
        color: #555;
        padding: 10px;
        background: rgba(0, 123, 255, 0.05);
        border-left: 4px solid #007bff;
        border-radius: 6px;
    }

    .user-biography h5 i {
        margin-right: 8px;
        color: #007bff;
    }

    @media (max-width: 768px) {
        .user-info p {
            font-size: 16px;
            line-height: 1.6;
        }

        .user-details-card {
            padding: 20px;
        }
    }

    .user-info {
        background-color: #DAD7B1;

        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 80vh;
        /* Full height of the viewport */
        width: 100%;
        /* Full width of the parent container or viewport */
        font-family: Arial, sans-serif;
        box-sizing: border-box;
        /* padding: 20px; */
    }

    /* .user-info-row {
        display: flex;
        justify-content: space-between;
        padding: 7px;
        width: 100%;
        box-sizing: border-box;
        font-size: 14px;
        position: relative;
    }

    .label {
        font-weight: bold;
        color: #333;
    }

    .info {
        text-align: right;
        color: #555;
    } */

    .container {
        display: flex;
        align-items: center;
        /* Centers children vertically */
    }

    .user-info-row {
        flex-grow: 1;
        /* Allows it to grow and take up any remaining space */
        display: flex;
        justify-content: space-between;
        padding: 7px;
        box-sizing: border-box;
        font-size: 14px;
    }

    .label {
        font-weight: bold;
        color: #333;
    }

    .info {
        text-align: right;
        color: #555;
    }

    .container>p {
        flex: 0 0 50px;
        margin: 0 20px 0 5px;
        display: flex;
        font-size: 12px;
        align-items: center;
        /* Centers text vertically */
        justify-content: center;
        /* Centers text horizontally */
    }



    .row .container:nth-child(odd) .user-info-row {
        background-color: #DAD7B1;
        /* Lighter color for odd rows */
    }

    .row .container:nth-child(even) .user-info-row {
        background-color: #CFCBA1;
        /* Slightly darker color for even rows */
    }

    .user-info-row i {
        margin-right: 5px;
    }

    .btn.icon-btn {
        background: none;
        /* Removes the background */
        border: none;
        /* Removes the border */
        color: inherit;
        /* Takes the color from the parent or you can set a specific color */
        padding: 5px;
        /* Minimal padding to increase the clickable area, adjust as needed */
        cursor: pointer;
        /* Ensures the cursor changes to a pointer to indicate it's a clickable item */
    }

    .btn.icon-btn:hover,
    .btn.icon-btn:focus {
        background-color: transparent;
        /* Ensures that hovering or focusing doesn't change the background */
        outline: none;
        /* Removes focus outline, you may want to replace this with a more accessible option */
    }

    .btn.icon-btn i {
        color: #333;
        /* Set the color of the icon, adjust as per your design */
    }

    .bg-cfcba1 {
        background-color: #CFCBA1;
        /* Light grayish-brown color */
    }

    .bottom-p {
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* Centers content vertically in the container */
        text-align: center;
        /* Aligns text horizontally */
        height: 100%;
    }

    .h-user-info p {
        font-size: 12px;
        /* Sets font size */
        text-align: center;
        /* Ensures text is centered horizontally */
        margin: 0;
        /* Removes any default margin */
        padding: 8px 0;
    }
</style>

<section class="innerpages">
    <div class="container">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <div class="innertext">
                <h1>MODEL <span>DETAILS</span></h1>
            </div>
        </div>
    </div>
</section>

@php
// Parsing the musician categories from JSON string
$musicianCategories = json_decode($details['musician_categories'], true);
// Extracting the first profile image
$profileImages = json_decode($details['profile_images']);
$firstImage = $profileImages[0] ?? 'default.png'; // Default image if no profile image is available
// Calculating age from the date of birth
$birthDate = new DateTime($details['date_of_birth']);
$currentDate = new DateTime();
$age = $currentDate->diff($birthDate)->y;
// Default values for filmography or other dynamic content
$filmography = 'No filmography available.';

// Assuming $details['user_id'] is an integer or a numeric value
$userId = $details['user_id']; // e.g., 1
$timestamp = time();
@endphp

{{-- ----------------------------------- SECTION 1 ----------------------------------------- --}}
<div class="container my-4">

    <div class="row d-flex align-items-center" id="getSS">

        {{-- ------------- cover image --------------- --}}
        <div class="col-md-5 p-0">
            <!-- Display the first image -->
            <div class="castbox" style="max-height: 100%;">
                <a href="{{ url('uploads/models/profiles/' . $firstImage) }}" data-fancybox="gallery"
                    data-caption="Model Image">
                    <div class="model-cover">
                        <img src="{{ url('uploads/models/profiles/' . $firstImage) }}" class="img-fluid"
                            alt="Model Image">
                    </div>
                </a>
            </div>
        </div>

        <!-- Add the rest of the images to FancyBox gallery -->
        @foreach(array_slice($profileImages, 1) as $image)
        <a href="{{ url('uploads/models/profiles/' . $image) }}" data-fancybox="gallery" data-caption="Model Image"
            style="display: none;">
            <img src="{{ url('uploads/models/profiles/' . $image) }}" alt="Gallery Image">
        </a>
        @endforeach

        {{-- ------------------ model details -------------------- --}}
        <div class="col-md-7 p-0">
            <div class="col-md-6 user-info">
                <div class="row ps-4">
                    <div class="header pe-5 py-3">
                        <div class="name">
                            <!--{{ $details['first_name'] }} {{ $details['last_name'] }} => -->
                            <span>CTF-00001</span>
                            {{--
                            <!--{{ route('download.model.details', $details['id']) }} {{ url('/download-all-model-images/' . $details['id']) }}  id="captureButton" -->
                            <button id="captureButton" class="btn btn-success">Download</button> --}}
                            <div>
                                <button id="captureButton" class="btn icon-btn"><i class="fas fa-share"></i></button>
                                <button id="captureButton1" class="btn icon-btn"><i
                                        class="fad fa-print"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="user-info-row">
                            <span class="label"><i class="fas fa-arrows-alt-v"></i>Height</span>
                            <span class="info">{{ $details['height'] }}</span>
                        </div>
                        <p>CM</p>
                    </div>
                    <div class="container">
                        <div class="user-info-row">
                            <span class="label"><i class="fas fa-ruler-vertical"></i>Bust</span>
                            <span class="info">{{ $details['bust'] }}</span>
                        </div>
                        <p>CM</p>
                    </div>
                    <div class="container">
                        <div class="user-info-row">
                            <span class="label"><i class="fas fa-ruler-horizontal"></i>Hip</span>
                            <span class="info">{{ $details['hip'] }}</span>
                        </div>
                        <p>CM</p>
                    </div>
                    <div class="container">
                        <div class="user-info-row">
                            <span class="label"><i class="fas fa-tshirt"></i>Dress Size</span>
                            <span class="info">{{ $details['dress_size'] }}</span>
                        </div>
                        <p>EURO</p>
                    </div>
                    <div class="container">
                        <div class="user-info-row">
                            <span class="label"><i class="fas fa-ruler-combined"></i> Waist:</span>
                            <span class="info">{{ $details['waist'] }}</span>
                        </div>
                        <p>CM</p>
                    </div>
                    <div class="container">
                        <div class="user-info-row">
                            <span class="label"><i class="fas fa-shoe-prints"></i>Shoe Size</span>
                            <span class="info">{{ $details['shoe_size'] }}</span>
                        </div>
                        <p>EURO</p>
                    </div>
                    <div class="container">
                        <div class="user-info-row">
                            <span class="label"><i class="fas fa-tape"></i>Pants Size</span>
                            <span class="info"></span>
                        </div>
                        <p>EURO</p>
                    </div>
                </div>
                <div class="mt-md-2 ms-md-3 me-md-3 mb-md-3">
                    <div class="row pt-3 ps-3 pe-3 mt-2 h-user-info">
                        <div class="col-md-4 bg-cfcba1 bottom-p">
                            <p class="m-0"><strong>Nationality: </strong><br />{{ $details['nationality'] }}
                            </p>
                        </div>
                        <div class="col-md-4 bottom-p">
                            <p><strong>Languages: </strong><br />{{ implode(', ',
                                json_decode($details['languages_spoken'],
                                true))
                                }}
                            </p>
                        </div>
                        <div class="col-md-4 bg-cfcba1 bottom-p">
                            <p><strong>Location: </strong><br />{{ $details['location'] }}
                            </p>
                        </div>
                    </div>
                    <div class="row ps-3 pe-3 text-center h-user-info">
                        <div class="col-md-4 bottom-p">
                            <p><strong>Visa Status: </strong><br />Golden
                            </p>
                        </div>
                        <div class="col-md-4 bg-cfcba1 bottom-p">
                            <p><strong>Driving License: </strong><br />{{ $details['driving_license'] }}
                            </p>
                        </div>
                        <div class="col-md-4 bottom-p">
                            <p><strong>Tattoos: </strong><br />{{ $details['have_tattos'] }}
                            </p>
                        </div>
                    </div>
                    <div class="row ps-3 pe-3 text-center h-user-info">
                        <div class="col-md-4 bg-cfcba1 bottom-p">
                            <p><strong>Eye Color: </strong><br />{{ $details['eye_color'] }}
                            </p>
                        </div>
                        <div class="col-md-4 bottom-p">
                            <p><strong>Hair Color: </strong><br />{{ $details['hair_color'] }}
                            </p>
                        </div>
                        <div class="col-md-4 bg-cfcba1 bottom-p">
                            <p><strong>Hair Length: </strong><br />{{ $details['hair_length'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Fancybox JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<script>
    $(document).ready(function() {
            $('[data-fancybox="gallery"]').fancybox({
                // Optional: Customize Fancybox options here
                loop: true,
                buttons: ['zoom', 'close'],
            });
        });
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    document.getElementById('captureButton').addEventListener('click', function() {
        // Hide the capture button
        var captureButton = document.getElementById('captureButton');
        captureButton.style.display = 'none';

        // Capture the screenshot
        html2canvas(document.getElementById('getSS')).then(function(canvas) {
            // Create the download link
            var link = document.createElement('a');
            link.href = canvas.toDataURL();
            link.download = 'screenshot.png';
            link.click();

            // Show the capture button again after download
            captureButton.style.display = 'block';
        }).catch(function(error) {
            console.error('Error capturing screenshot:', error);
            // If there's an error, show the button again
            captureButton.style.display = 'block';
        });
    });
</script>

@endsection