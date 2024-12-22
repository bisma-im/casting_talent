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
    <section class="innerpages">
        <div class="container">
           
            </div>
            
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3 col-xl-12 col-xxl-12">
                <div class="innertext">

                    <h1 class="text-white">Login</h1>

                </div>
    </section>

    <style>
        .formSec {
            padding: 25px;
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
    z-index: -1; /* Place behind the login form */
    overflow: hidden; /* Hide overflowing images */
}

/* Slider track for smooth animation */
.slider-track {
    display: flex;
    width: calc(100% * 5); /* 5 slides in total */
    animation: scroll 30s linear infinite; /* Smooth scrolling */
}

/* Individual slider image styling */
.slider-image {
    width: 100vw; /* Full viewport width */
    height: 60vw !important;
    background-size: cover; /* Cover entire slide area */
    background-position: center; /* Center background image */
    background-repeat: no-repeat; /* Avoid repeating images */
    flex-shrink: 0; /* Prevent shrinking */
}

/* Keyframes for scrolling animation */
@keyframes scroll {
    0% {
        transform: translateX(0); /* Start at the first slide */
    }
    100% {
        transform: translateX(-500vw); /* Scroll across 5 slides */
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
    margin: auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Add shadow */
}
    </style>
<div class="background-slider">
    <div class="slider-track">
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
