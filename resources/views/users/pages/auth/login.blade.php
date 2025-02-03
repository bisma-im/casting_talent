@extends('users.layouts.layout')

@section('title', 'Casting Talent | Login')

@section('main-content')

    <style>
        html, body {
    height: 100%;
    overflow-y: auto;
}
        section.testtimonailsec {
            display: none;
        }
    </style>
 
    <style>
        .formSec {

            background: #5f9ea052;
            border-radius: 10px;
        }
/* Background slider container */
.background-slider {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    overflow: hidden;
    white-space: nowrap; /* Prevent line breaks */
}

/* Slider track for smooth animation */
.slider-track {
    display: flex;
    width: calc(100% * 10); /* 5 original images + 5 duplicates */
    animation: scroll 30s linear infinite;
}

/* Individual slider image styling */
.slider-image {
    width: 100vw;
    height: 60vw !important;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    flex-shrink: 0;
}

/* Keyframes for scrolling animation */
@keyframes scroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-500vw); /* Scroll across both sets */
    }
}

.slider-track {
            display: flex;
            width: calc(100% * 10);
            /* 10 slides in total (5 original + 5 duplicates) */
            animation: scroll 30s linear infinite;
            /* Adjust the duration to control speed */
        }

/* Login form container */
.form-container {
    position: relative;
    z-index: 1; /* Place above the slider */
    width: 100% !important;
    max-width: 80%; /* Limit width */
    height: 400px;
    
    margin: auto;

    background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Add shadow */
}

    /* Media Query for mobile responsiveness */
    @media (max-width: 768px) {
    
        .slider-image {
            height: 130vw !important;
        }
        .form-container {
            padding:  0px !important;
            height: 50vh !important;
          
        }
        .logintext{
            font-size: 50px !important;
        }
    }
    </style>
     <section class="innerpages">
    <div class="container">

    </div>
</section>
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3 col-xxl-12">
    <div class="innertext">
        <h1 class="text-white">Login</h1>

    </div>

    <div class="background-slider">
    <div class="slider-track">
        <!-- Original Set -->
        <div class="slider-image"
            style="background-image: url('{{ url('user-assets/images/pexels-photo-247287.jpeg') }}');"></div>
        <div class="slider-image"
            style="background-image: url('{{ url('user-assets/images/woman-g1553007e5_340.jpg') }}');"></div>
        <div class="slider-image"
            style="background-image: url('{{ url('user-assets/images/pexels-photo-247204.jpeg') }}');"></div>
        <div class="slider-image"
            style="background-image: url('{{ url('user-assets/images/pexels-photo-247322.webp') }}');"></div>
        <div class="slider-image"
            style="background-image: url('{{ url('user-assets/images/woman-g21b0b6abe_340.jpg') }}');"></div>

        <!-- Duplicate Set for Seamless Loop -->
        <div class="slider-image"
            style="background-image: url('{{ url('user-assets/images/pexels-photo-247287.jpeg') }}');"></div>
        <div class="slider-image"
            style="background-image: url('{{ url('user-assets/images/woman-g1553007e5_340.jpg') }}');"></div>
        <div class="slider-image"
            style="background-image: url('{{ url('user-assets/images/pexels-photo-247204.jpeg') }}');"></div>
        <div class="slider-image"
            style="background-image: url('{{ url('user-assets/images/pexels-photo-247322.webp') }}');"></div>
        <div class="slider-image"
            style="background-image: url('{{ url('user-assets/images/woman-g21b0b6abe_340.jpg') }}');"></div>
    </div>
</div>

</div>
    <section class="contactussec1 form-container">
        <div class="container">
            <div class="formSec">
                <form method="post" action="{{ route('login.post') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="contactlist">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="example@gmail.com"
                                    required>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="contactlist">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <a href="{{ route('register.get') }}">Create account!</a>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <a href="{{ route('forgot.get') }}">Forgot Password!</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="contactlist text-center mt-5">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </section>



@endsection
