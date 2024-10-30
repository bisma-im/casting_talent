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
        width: 100%;
        /* Full height of the viewport */
        width: 65vw;
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

    /* section 2 styling */
    .full-height {
        height: 100vh;

        position: relative;
        overflow: hidden;
    }

    .background-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
    }


    .carousel-item .background-image-carousel {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    height: 100% !important;
    background-size: cover !important;
    background-position: center center !important;
    background-repeat: no-repeat !important;
}
    .carousel-item {
        height: 90vh;
    }

    .my-section .nav-tabs {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        border: none;
        z-index: 1050;
        background-color: #000;
        color: #fff;
        margin-bottom: 90px;
    }

    .my-section .nav-tabs .nav-item.show .nav-link,
    .my-section .nav-tabs .nav-link.active {
        color: #fff;
        background-color: #000;
        border: none;
        font-weight: bold;
        text-decoration: underline;
    }

    .my-section .nav-link {
        color: #fff;
        border-radius: 0;
        border: none;
    }

    .my-section .nav-link:focus,
    .my-section .nav-link:hover {
        text-decoration: underline;
        border: none;
        font-weight: bold;
        background-color: #000;
        color: #fff;
    }

    .tab-content>.tab-pane {
        display: none;
        height: 90vh;
        position: relative;
        align-items: center;
        width: 100%;
        /* text-align: center; */
    }

    .tab-pane.active {
        display: flex;
        /* Ensures only the active tab is displayed */
    }

    .tab-pane {
        /* padding: 50px; */
        color: white;
        width: 100%;  /* Ensures tab pane takes full available width */
        overflow: hidden;
    }
    .video-tab {
        width: 100%; /* Forces each item div to take full width */
    }
    .slider-image {
        width: 30vw; /* Width can be adjusted via JavaScript if needed */
    height: 90vh; /* Fixed height for all images */
    background-size: 100%; /* Image will stretch to fill the container */
    background-position: center;
    background-repeat: no-repeat;
    flex-shrink: 0;
    
    /* border: 1px solid red */
    }

    .background-slider {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        overflow: hidden;
    }

    .slider-track {
        display: flex;
        transition: transform 0.5s ease;
        border: 1px solid rgb(0, 255, 13);
        /* Smooth slide transition */
    }

    .carousel-control-prev,
    .carousel-control-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        border: none;
        z-index: 1000;
        padding: 20px;
        cursor: pointer;
    }

    .carousel-control-prev {
        left: 10px;
    }

    .carousel-control-next {
        right: 10px;
    }

    .profile-card {
        background: white;
        /* border-radius: 5px; */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        text-align: center;
        /* padding: 15px; */
        height: 60vh;
        margin: 15px;
        overflow: hidden;
        justify-content: center;
        align-items: center;
    }
    .profile-card .img-div{
        height: 90%;
    }
    .cardbody {
        display: flex;
        height: 10%;
    }
    .card-code {
        flex: 1;
        background-color: #f2c67f;
        display: flex; /* Enable flexbox */
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
        font-size: 14px;
        font-weight: 500;
        text-align: center;
        height: 100%; 
    }

    .card-info {
        flex: 1;
        background-color: #4ca1ae;
        display: flex;
        justify-content: center; 
        align-items: center;
        font-size: 14px;
        font-weight: 500;
        text-align: center;
        height: 100%; 
    }
    .profile-card img {
        width: 100%; 
        height: 100%; 
        object-fit: fill;
    }

    .profile-card p {
        margin: 10px 0 5px;
        font-size: 18px;
        color: #333;
        text-align: left;
    }

    .profile-card span {
        display: block;
        font-size: 14px;
        text-align: left;
        color: #666;
    }

    .carousel-container {
        width: 100%;
        padding-top: 20px;
        background-color: #DAD7B1;
        margin: auto;
        position: relative;
        height: 80vh;
    }

    .carousel-container h2 {
        font-size: 66px;
        line-height: 55px;
        font-weight: 500;
        font-family: "Lateef", serif;
        text-shadow: 0 0 black;
        text-align: center;
        text-transform: capitalize;
        position: relative;
    }

    .carousel-container h2 span{
        color: rgba(216, 31, 38, 1);
    }

    .carousel-container h2:before {
        content: "";
        position: absolute;
        width: 248px;
        bottom: -12px;
    }

    .carousel-heading {
        text-align: center;
        font-size: 24px;
        color: #333;
    }

    .custom-carousel {
        position: relative;
        width: 100%;
        overflow: hidden;
        padding-left: 40px;
        padding-right: 40px;
    }

    .custom-carousel-inner {
        display: flex;
        padding: 0;
        margin: 0;
        justify-content: start;
        transition: transform 0.8s ease;
        will-change: transform;
    }

    .custom-carousel-item {
        flex: 0 0 25%;
        scroll-snap-align: start;
    }

    .custom-carousel-control-prev,
    .custom-carousel-control-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        width: 30px;
        height: 30px;
        text-align: center;
        line-height: 30px;
        font-size: 24px;
        border-radius: 50%;
        cursor: pointer;
    }

    .custom-carousel-control-prev {
        left: 10px;
    }

    .custom-carousel-control-next {
        right: 10px;
    }
    #videoCarousel {
        width: 100%;
        position: relative;
    }
    #videoCarousel .carousel-control-prev, 
    #videoCarousel .carousel-control-next {
        position: absolute;
        top: 50%; 
        transform: translateY(-50%); 
        width: auto;
        height: 8%;
        border-radius: 50%;
    }

    #videoCarousel .carousel-control-prev {
        left: 10px; /* Place at the extreme left */
    }

    #videoCarousel .carousel-control-next {
        right: 10px; /* Place at the extreme right */
    }

    #videoCarousel .carousel-control-prev span,
    #videoCarousel .carousel-control-next span {
        font-size: 30px; 
        color: #000;   
    }

    #videoCarousel .carousel-control-prev span:hover,
    #videoCarousel .carousel-control-next span:hover {
        color: rgb(167, 162, 162);  // Change to your preferred hover color
    }
</style>

<section class="innerpages">
    <div class="container">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <div class="innertext">
                <!-- <h1>MODEL <span>DETAILS</span></h1> -->
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

<div class="container  mx-0 px-0">

    <div class="row d-flex align-items-center mx-0 px-0" id="getSS">
        {{-- ------------- cover image --------------- --}}
        <div class="col-5 p-0">
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
        <div class="col-7 p-0 m-0">
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
                                <button id="captureButton1" class="btn icon-btn"><i class="fad fa-print"></i></button>
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
                            <span class="label"><i class="fas fa-ruler-combined"></i> Waist</span>
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
                    <div class="row pt-3  pe-3 mt-2 h-user-info">
                        <div class="col-md-4 bg-cfcba1 bottom-p">
                            <p class="m-0"><strong>Nationality</strong><br />{{ ucfirst($details['nationality']) }}
                            </p>
                        </div>
                        <div class="col-md-4 bottom-p">
                            <p><strong>Languages</strong><br />{{ implode(', ',
                                json_decode($details['languages_spoken'],
                                true))
                                }}
                            </p>
                        </div>
                        <div class="col-md-4 bg-cfcba1 bottom-p">
                            <p><strong>Location</strong><br />{{ ucfirst($details['location']) }}
                            </p>
                        </div>
                    </div>
                    <div class="row  pe-3 text-center h-user-info">
                        <div class="col-md-4 bottom-p">
                            <p><strong>Visa Status</strong><br />Golden
                            </p>
                        </div>
                        <div class="col-md-4 bg-cfcba1 bottom-p">
                            <p><strong>Driving License</strong><br />{{ ucfirst($details['driving_license']) }}
                            </p>
                        </div>
                        <div class="col-md-4 bottom-p">
                            <p><strong>Tattoos</strong><br />{{ ucfirst($details['have_tattos']) }}
                            </p>
                        </div>
                    </div>
                    <div class="row  pe-3 text-center h-user-info">
                        <div class="col-md-4 bg-cfcba1 bottom-p">
                            <p><strong>Eye Color</strong><br />{{ ucfirst($details['eye_color']) }}
                            </p>
                        </div>
                        <div class="col-md-4 bottom-p">
                            <p><strong>Hair Color</strong><br />{{ ucfirst($details['hair_color']) }}
                            </p>
                        </div>
                        <div class="col-md-4 bg-cfcba1 bottom-p">
                            <p><strong>Hair Length</strong><br />{{ ucfirst($details['hair_length']) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ------------------------------section 2------------------------ --}}
<div class="container-fluid full-height m-0 pt-3 my-section">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="portfolio-tab" data-bs-toggle="tab" data-bs-target="#portfolio"
                type="button" role="tab" aria-controls="portfolio" aria-selected="true">Portfolio</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="video-tab" data-bs-toggle="tab" data-bs-target="#video" type="button"
                role="tab" aria-controls="video" aria-selected="false">Video</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="audio-tab" data-bs-toggle="tab" data-bs-target="#audio" type="button"
                role="tab" aria-controls="audio" aria-selected="false">Audio</button>
        </li>
    </ul>

    <div class="tab-content container-fluid m-0 p-0" id="myTabContent">
        <!-- Portfolio Tab -->
        <div class="tab-pane fade show active m-0 p-0" id="portfolio" role="tabpanel" aria-labelledby="portfolio-tab">
            <!-- Background slider -->
            <div class="background-slider m-0 p-0">
                <div class="slider-track m-0 p-0" id="sliderTrack">
                    <div class="slider-image m-0 p-0"
                        style="background-image: url('{{ url('/user-assets/model-images/1.jpeg') }}');"></div>
                    <div class="slider-image m-0 p-0"
                        style="background-image: url('{{ url('/user-assets/model-images/2.jpeg') }}');"></div>
                    <div class="slider-image m-0 p-0"
                        style="background-image: url('{{ url('/user-assets/model-images/3.jpeg') }}');"></div>
                    <div class="slider-image m-0 p-0"
                        style="background-image: url('{{ url('/user-assets/model-images/4.jpeg') }}');"></div>
                    <div class="slider-image m-0 p-0"
                        style="background-image: url('{{ url('/user-assets/model-images/5.jpeg') }}');"></div>
                    <!-- Duplicate slides for smooth looping -->
                    <div class="slider-image m-0 p-0"
                        style="background-image: url('{{ url('/user-assets/model-images/6.jpeg') }}');"></div>
                    <div class="slider-image m-0 p-0"
                        style="background-image: url('{{ url('/user-assets/model-images/7.jpeg') }}');"></div>
                    <div class="slider-image m-0 p-0"
                        style="background-image: url('{{ url('/user-assets/model-images/8.jpeg') }}');"></div>
                    <div class="slider-image m-0 p-0"
                        style="background-image: url('{{ url('/user-assets/model-images/9.jpeg') }}');"></div>
                    {{-- <div class="slider-image"
                        style="background-image: url('{{ url('/user-assets/model-images/model4.jpg') }}');"></div> --}}
                </div>
            </div>

            <!-- Left and right navigation buttons -->
            <button class="carousel-control-prev portfolio-btn" id="prevBtn" type="button">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next portfolio-btn" id="nextBtn" type="button">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>


        </div>

        <!-- Video Tab -->
        <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
            <div id="videoCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @php
                        $videos = [
                            'TivAwezqug4', // Video ID 1
                            'ZPhlSqHN4yg', // Video ID 2
                            'psnAGlcVbcY', // Video ID 3
                        ];
                    @endphp
                    @foreach ($videos as $index => $video)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}" style="background-image: url('https://img.youtube.com/vi/{{ $video }}/maxresdefault.jpg'); background-size: cover; background-position: center center; height: 100vh; width: 100%">
                        <!-- Content of the slide -->
                        <div class="container h-100 w-100 d-flex align-items-center">
                            <iframe width="374" height="280" src="https://www.youtube.com/embed/{{ $video }}?autoplay=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev text-dark" href="#videoCarousel" role="button" data-slide="prev">
                    <span class="fas fa-chevrons-left"></span> <!-- Replacing the default icon with Font Awesome -->
                    <span class="sr-only">Previous</span>
                </a>
                <a class="text-dark carousel-control-next" href="#videoCarousel" role="button" data-slide="next">
                    <span class="fas fa-chevrons-right"></span> <!-- Replacing the default icon with Font Awesome -->
                    <span class="sr-only">Next</span>
                </a>                
            </div>
            
        </div>
        

        <!-- Audio Tab -->
        <div class="tab-pane fade" id="audio" role="tabpanel" aria-labelledby="audio-tab">
            <div class="background-image"
                style="background-image: url('{{ url('/user-assets/model-images/model5.jpg') }}');"></div>
        </div>
    </div>
</div>

{{-- -------------------------------section 3-------------------------------- --}}
@php
$profiles = [
['img' => 'model1.jpg', 'name' => 'Ivan Reynolds', 'number' => 'CTM-00132'],
['img' => 'model2.jpg', 'name' => 'Adam Sandler', 'number' => 'CTM-80733'],
['img' => 'model3.jpg', 'name' => 'Spartacus Bridget', 'number' => 'CTM-53734'],
['img' => 'model4.jpg', 'name' => 'Karim Bashir', 'number' => 'CTM-38085'],
['img' => 'model1.jpg', 'name' => 'Liam Kroos', 'number' => 'CTM-11234'],
['img' => 'model2.jpg', 'name' => 'Noah Carter', 'number' => 'CTM-22345']
];
@endphp
<div class="carousel-container">
    <h2 class="carousel-heading">Related <span>Profiles</span></h2>
    <div class="custom-carousel" id="customCarousel">
        <div class="custom-carousel-inner" id="customCarouselInner">
            @foreach ($profiles as $profile)
            <div class="custom-carousel-item {{ $loop->first ? 'active' : '' }}">
            
                <div class="profile-card">
                    <div class="img-div">
                    <img src="{{ url('/user-assets/model-images/' . $profile['img']) }}" class="img-fluid"
                        alt="{{ $profile['name'] }}">
                            </div>
                            <div class="cardbody">
                            <div class="card-code text-center">
                                <!-- Insert code related content here -->
                                {{ $profile['number'] }}
                            </div>
                            <div class="card-info text-center">
                                {{ $profile['name'] }}
                                <!-- Insert age, nationality, etc., here -->
                            </div>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
        <a class="custom-carousel-control-prev" id="customCarouselPrev" href="#!" role="button"
            data-slide="prev">&#10094;</a>
        <a class="custom-carousel-control-next" id="customCarouselNext" href="#!" role="button"
            data-slide="next">&#10095;</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom CSS -->
<style>
    .container-fluid {
        width: 100%;
        padding: 0;
    }


    .row.no-gutters {
        margin-right: 0;
        margin-left: 0;
    }

    .col-md-3 {
        padding: 0;
    }

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        height: 100%;
        width: 100%;
        object-fit: cover;
    }



    .card-body h5 {
        font-weight: bold;
        font-size: 1.1rem;
    }

    .card-body p {
        font-size: 0.9rem;
    }
</style>

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

        document.addEventListener("DOMContentLoaded", function() {
            const imageContainers = document.querySelectorAll('.slider-image');

            imageContainers.forEach(container => {
                const img = new Image();
                img.onload = () => {
                    const containerWidth = container.clientHeight * (img.naturalWidth / img.naturalHeight);
                    container.style.width = `${containerWidth}px`; // Set width based on image ratio and container height
                };
                img.src = container.style.backgroundImage.slice(5, -2); // Extract the URL from the background-image style
            });
        });


        document.addEventListener('DOMContentLoaded', function() {
            const carouselInner = document.getElementById('customCarouselInner');
            const prevButton = document.getElementById('customCarouselPrev');
            const nextButton = document.getElementById('customCarouselNext');
            
            const itemWidth = 22; // The width percentage of each item in the carousel
            const gapWidth = 3; // The percentage of gap based on CSS
            const totalMoveWidth = itemWidth + gapWidth; // Total shift per click

            let currentIndex = 0; // Tracks the current index position
            carouselInner.style.transform = `translateX(0%)`; // Ensure initial position is set correctly

            const totalProfiles = carouselInner.children.length;
            const visibleProfiles = 4;
            const maxIndex = totalProfiles - visibleProfiles;

            // Event listener for the "next" button
            nextButton.addEventListener('click', function() {
                if (currentIndex < maxIndex) {
                    currentIndex++;
                } else {
                    currentIndex = 0; // Loop back to the start
                }
                carouselInner.style.transform = `translateX(-${currentIndex * totalMoveWidth}%)`;
            });

            // Event listener for the "previous" button
            prevButton.addEventListener('click', function() {
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = maxIndex; // Loop back to the end
                }
                carouselInner.style.transform = `translateX(-${currentIndex * totalMoveWidth}%)`;
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


    document.addEventListener("DOMContentLoaded", function() {
        const sliderTrack = document.getElementById('sliderTrack');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        
        const slides = document.querySelectorAll('.slider-image');
        const totalSlides = slides.length;

        // Function to calculate the total offset to the current slide
        function calculateOffset(slideIndex) {
            let offset = 0;
            for (let i = 0; i < slideIndex; i++) {
                offset += slides[i].offsetWidth; // Accumulate widths of all previous slides
                console.log(`Width of slide ${i}: ${slides[i].offsetWidth}`);  // Debugging log
            }
            return offset;
        }

        // Function to move to a specific slide
        function moveToSlide(slideIndex) {
            let offset = calculateOffset(slideIndex);
            sliderTrack.style.transform = `translateX(-${offset}px)`;
            console.log(`Moved to slide ${slideIndex}, Transform: translateX(-${offset}px)`);  // Debugging log
        }

        // Next button functionality
        nextBtn.addEventListener('click', function() {
            if (currentSlide < totalSlides - 1) {
                currentSlide++;
            } else {
                currentSlide = 0; // Reset to the first slide for looping
                sliderTrack.style.transition = 'none'; // Remove transition for instant reset
                moveToSlide(currentSlide);
                requestAnimationFrame(() => { // Re-enable transition after painting
                    sliderTrack.style.transition = '';
                });
                return;
            }
            moveToSlide(currentSlide);
        });

        // Previous button functionality
        prevBtn.addEventListener('click', function() {
            if (currentSlide > 0) {
                currentSlide--;
            } else {
                currentSlide = totalSlides - 1;
                moveToSlide(currentSlide); // Move directly to last slide
                return;
            }
            moveToSlide(currentSlide);
        });

        let currentSlide = 0; // Initialize currentSlide after defining functions to avoid hoisting issues

        // Ensure the portfolio tab is displayed and slider works correctly on initial page load
        function initializeSlider() {
            if (document.getElementById('portfolio').classList.contains('active')) {
                moveToSlide(currentSlide); // Move to the current slide if the tab is active
            }
        }

        // Trigger initialization on page load and tab switch events
        initializeSlider();
        document.getElementById('portfolio-tab').addEventListener('shown.bs.tab', function() {
            initializeSlider();
        });

        // Adjust slide width dynamically on window resize (optional for responsive behavior)
        window.addEventListener('resize', function() {
            moveToSlide(currentSlide); // Adjust the slide position based on new sizes
        });
    });

</script>
<script>
    $(document).ready(function(){
        $('#videoCarousel').carousel();

        // Event listener for the previous button
        $('.carousel-control-prev').click(function() {
            $('#videoCarousel').carousel('prev');
        });

        // Event listener for the next button
        $('.carousel-control-next').click(function() {
            $('#videoCarousel').carousel('next');
        });
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  

@endsection