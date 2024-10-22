@extends('users.layouts.layout')

@section('title', 'Casting Talent | Talent Details')

@section('main-content')
<!-- Fancybox CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
<style>
    /* Header styling */
    .header {
        /* padding: 1em; */
        color: #d9480f;
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
        height: 100vh;
        /* Full height of the viewport */
        width: 100%;
        /* Full width of the parent container or viewport */
        font-family: Arial, sans-serif;
        box-sizing: border-box;
        padding: 20px;
    }

    .user-info-row {
        display: flex;
        justify-content: space-between;
        padding: 7px;
        width: 100%;
        /* Make each row span the full width of the parent */
        box-sizing: border-box;
        /* Ensure padding is included in the width */
        font-size: 14px;
    }

    .user-info-row:nth-child(odd) {
        background-color: #DAD7B1;
        /* Base color */
    }

    .user-info-row:nth-child(even) {
        background-color: #CFCBA1;
        /* Slightly darker shade for alternate row */
    }

    .label {
        font-weight: bold;
        color: #333;
    }

    .info {
        text-align: right;
        color: #555;
    }

    .user-info-row i {
        margin-right: 5px;
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
        <div class="col-md-6 p-0">
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
        <div class="col-md-6 p-0">
            <div class="col-md-6 user-info">
                <div class="header p-3">
                    <div class="name">
                        <!--{{ $details['first_name'] }} {{ $details['last_name'] }} => -->
                        <span>CTF-00001</span>
                        <!--{{ route('download.model.details', $details['id']) }} {{ url('/download-all-model-images/' . $details['id']) }}  id="captureButton" -->
                        <button id="captureButton" class="btn btn-success">Download</button>
                    </div>
                </div>
                <div class="user-info-row">
                    <span class="label"><i class="fas fa-flag"></i>Nationality</span>
                    <span class="info">{{ $details['nationality'] }}</span>
                </div>
                <div class="user-info-row">
                    <span class="label"><i class="fas fa-language"></i>Languages Spoken</span>
                    <span class="info">{{ implode(', ', json_decode($details['languages_spoken'], true)) }}</span>
                </div>
                <div class="user-info-row">
                    <span class="label"><i class="fas fa-map-marker-alt"></i>Location</span>
                    <span class="info">{{ $details['location'] }}</span>
                </div>
                <div class="user-info-row">
                    <span class="label"><i class="fas fa-passport"></i>Visa Status</span>
                    <span class="info"></span>
                </div>
                <div class="user-info-row">
                    <span class="label"><i class="fas fa-id-card"></i>Driving License</span>
                    <span class="info">{{ $details['driving_license'] }}</span>
                </div>
                <div class="user-info-row">
                    <span class="label"><i class="fas fa-pen"></i>Tattoos</span>
                    <span class="info">{{ $details['have_tattos'] }}</span>
                </div>
                <div class="user-info-row">
                    <span class="label"><i class="fas fa-eye"></i>Eye Color</span>
                    <span class="info">{{ $details['eye_color'] }}</span>
                </div>
                <div class="user-info-row">
                    <span class="label"><i class="fas fa-tint"></i>Hair Color</span>
                    <span class="info">{{ $details['hair_color'] }}</span>
                </div>
                <div class="user-info-row">
                    <span class="label"><i class="fas fa-cut"></i>Hair Length</span>
                    <span class="info">{{ $details['hair_length'] }}</span>
                </div>
                <div class="user-info-row">
                    <span class="label"><i class="fas fa-arrows-alt-v"></i>Height</span>
                    <span class="info">{{ $details['height'] }} cm</span>
                </div>
                <div class="user-info-row">
                    <span class="label"><i class="fas fa-ruler-vertical"></i>Bust</span>
                    <span class="info">{{ $details['bust'] }} cm</span>
                </div>
                <div class="user-info-row">
                    <span class="label"><i class="fas fa-ruler-horizontal"></i>Hip</span>
                    <span class="info">{{ $details['hip'] }} cm</span>
                </div>
                <div class="user-info-row">
                    <span class="label"><i class="fas fa-tshirt"></i>Dress Size</span>
                    <span class="info">{{ $details['dress_size'] }} cm</span>
                </div>
                <div class="user-info-row">
                    <span class="label"><i class="fas fa-ruler-combined"></i> Waist:</span>
                    <span class="info">{{ $details['waist'] }} cm</span>
                </div>
                <div class="user-info-row">
                    <span class="label"><i class="fas fa-shoe-prints"></i>Shoe Size</span>
                    <span class="info">{{ $details['shoe_size'] }}</span>
                </div>
                <div class="user-info-row">
                    <span class="label"><i class="fas fa-tape"></i>Pants Size</span>
                    <span class="info"></span>
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