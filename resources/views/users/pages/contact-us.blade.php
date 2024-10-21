@extends('users.layouts.layout')

@section('title', 'Casting Talent | Contact')

@section('main-content')
<div id="pageContent" class="blurred">
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ config('services.googlemaps.api_key') }}&callback=initMap&libraries=places&v=weekly"
        defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <style>
        .blurred {
            filter: blur(8px);
            -webkit-filter: blur(8px);
            /* pointer-events: none; Prevent interaction with blurred elements */
        }

        .button-container {
            display: flex;
            justify-content: space-between;
        }

        .testimonial-slider {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
        }

        section.contactlist {
            padding: 50px 0 50px !important;
        }

        .testimonial {
            text-align: left;
            padding: 20px;
            color: #333;
        }

        .testimonial .stars {
            color: #f0c14b;
        }

        .testimonial p {
            font-size: 16px;
            margin: 10px 0;
        }

        .testimonial-author {
            font-weight: bold;
            margin-top: 10px;
        }

        .slick-slide {
            margin: 0 10px;
        }

        .card-style {
            background-color: #ffffff;
            /* White background for the card */
            border-radius: 15px;
            /* Rounded corners for the card */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            /* Soft shadow for elevation effect */
            padding: 20px;
            /* Padding around the content */
            text-align: left;
            /* Align text to the left */
            position: relative;
            /* To allow image positioning */
            overflow: visible;
            /* Allow the image to overflow the card */
            height: 320px;
            /* Set a fixed height for consistency */
            display: flex;
            /* Flexbox for vertical alignment */
            justify-content: center;
            margin: 10px;
            /* Centers content vertically */
        }

        /* Image Styling - Larger and slightly out of the card */
        .styled-avatar {
            max-width: 180px;
            height: 250px;
            border-radius: 15px;
            object-fit: cover;
            border: 2px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: absolute;
            bottom: -30px;
            left: 20px;
        }

        .stars {
            color: #FFD700;
        }

        p.text-center {
            font-size: 15px;
            /* Adjust font size */
            color: #666;
            /* Softer color for testimonial text */
            margin-bottom: 10px;
            /* Add some space below the text */
        }

        .mobile-frame {
            background-image: url('{{ url('user-assets/images/mobile-mockup.png') }}');
            background-size: cover;
            background-position: center;
            width: 400px;
            height: 800px;
            position: relative;
            margin: 0 auto;
            border-radius: 30px;

        }

        .instagram-feed {
            width: 350px;
            height: 600px;
            position: absolute;
            top: 10%;
            left: 7.5%;
            border: none;
            overflow: hidden;
            padding: 10px;
            border-radius: 15px;
        }



        .innertext h3 span {
            color: rgba(216, 31, 38, 1);
        }

        #map {
            height: 450px;
            width: 100%;
        }

        .marker-position {
            bottom: 8px;
            margin-left: 110px;
            ;
            position: relative;
        }

        .form-container {
            position: relative;
            z-index: 1;
            padding: 20px;
            height: 125vh;
            width: 50%;
            background-color: rgba(255, 255, 255, 0.8);
            /* Transparent white bg for the form */
        }

        @media (max-width: 768px) {
            .form-container {
                width: 90%;
                height: auto;
                /* Allow height to adjust for smaller screens */
            }

            .form-step {
                padding: 10px;
            }
        }

        @media (max-width: 480px) {
            .form-container {
                width: 100%;
                padding: 15px;
            }

            .form-step {
                padding: 5px;
            }
        }

        /* Position the slider behind the section */
        .background-slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            /* Place behind other content */
            overflow: hidden;
            /* Hide overflow of images */
        }

        .slider-track {
            display: flex;
            width: calc(100% * 10);
            /* 10 slides in total (5 original + 5 duplicates) */
            animation: scroll 30s linear infinite;
            /* Adjust the duration to control speed */
        }

        .slider-image {
            width: 100vw;
            /* Full width of the viewport for each slide */
            height: 100vw;
            /* Full height of the viewport */
            background-size: cover;
            /* Ensure the image covers the entire container */
            background-position: center;
            /* Center the background image */
            background-repeat: no-repeat;
            flex-shrink: 0;
            /* Prevent the slide from shrinking */
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
                /* Start at the first slide */
            }

            100% {
                transform: translateX(-500vw);
                /* Move across 10 slides (5 original + 5 duplicates) */
            }
        }

        .contactussec {
            position: relative;
            z-index: 2;
            /* Place above the slider */
            padding:  0;
            background-color: transparent;
            /* Transparent background */
        }

        .form-container {
            z-index: 3;
            /* Ensure form stays on top */
        }




        /* Additional form styling */
        .form-step {
            margin-bottom: 20px;
        }

        .contactlist {
            margin-bottom: 15px;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.9);
        }

        .button-container {
            margin-top: 20px;
        }

        .btn-next,
        .btn-prev {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .btn-prev {
            background-color: #ffc107;
        }

        .btn-next:hover,
        .btn-prev:hover {
            opacity: 0.9;
        }

        /* client form style  */
        .form-group {
            margin-bottom: 20px;
        }

        .form-control,
        .form-select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 14px;
        }

        .form-select {
            height: auto;
        }

        .intl-tel-input {
            width: 100%;
        }

        .intl-tel-input input {
            width: 100%;
            padding-left: 50px;
            /* Ensure enough padding for the flag inside the input */
        }

        .btn-primary {
            background-color: #1C7887;
            border: none;
            padding: 10px 30px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #007BFF;
        }

        .text {
            font-size: 13px;


        }

        .is-invalid {
            border-color: #dc3545;
        }

        .is-invalid::placeholder {
            color: #dc3545;
        }

        /* Initially hide subcategories */
        /* Initially hide subcategories */
        .sub-category {
            display: none;
            list-style-type: none;
            margin-top: 5px;
            padding-left: 20px;
        }

        .main-category {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        /* Main category styling */
        .main-category-item {
            cursor: pointer;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
            font-weight: bold;
            position: relative;
        }

        /* Category Checkbox Styles */
        .category-checkbox,
        .subcategory-checkbox {
            margin-right: 5px;
        }

        /* Subcategory styling */
        .sub-category li {
            padding: 5px 0;
            font-size: 14px;
        }

        /* Menu container styles */
        .menu-container {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            background-color: #fff;
            max-height: 350px;
            /* Increase max height to avoid scrolling too soon */
            overflow-y: auto;
            display: none;
            /* Hidden until the dropdown button is clicked */
            transition: max-height 0.3s ease-in-out;
            width: 250px;
            /* Adjusted width for better readability */
        }


        /* Dropdown Button Styles */
        #dropdown-btn {
            width: 100%;
            padding: 10px;
            background-color: #6c757d;
            /* Button color */
            color: white;
            border-radius: 5px;
            border: none;
            text-align: left;
            cursor: pointer;
            font-size: 14px;
            margin-bottom: 5px;
        }

        /* Display categories on hover or click */
        #dropdown-container:hover .menu-container {
            display: block;
        }

        /* Hover effect for subcategories */
        .sub-category li:hover {
            background-color: #f0f0f0;
            cursor: pointer;
        }

        /* Custom Scrollbar */
        .menu-container::-webkit-scrollbar {
            width: 8px;
        }

        .menu-container::-webkit-scrollbar-thumb {
            background-color: #888;
            /* Scrollbar thumb color */
            border-radius: 5px;
        }

        /* Expandable height for subcategories */
        .main-category-item:hover .sub-category {
            display: block;
        }

        .main-category-item.expanded .sub-category {
            display: block;
        }

        /* Adjust max-height dynamically when a subcategory is visible */
        .menu-container.expand {
            max-height: none;
            /* Remove max height when a subcategory is open */
        }
    </style>

    <section class="innerpages">

        <div class="container">
            <div class="col-12">
                <div class="innertext">
                    {{-- <h1>Contact us</h1> --}}
                </div>
            </div>
        </div>
    </section>

    <div class="contactussec">

        <div class="container">
            <!-- Background Image Slider -->
            <div class="row ">
                <!-- Form Container -->
                <div class="background-slider">
                    <div class="slider-track">
                        <div class="slider-image"
                            style="background-image: url('{{ url('user-assets/images/pexels-photo-247287.jpeg') }}');">
                        </div>
                        <div class="slider-image"
                            style="background-image: url('{{ url('user-assets/images/woman-g1553007e5_340.jpg') }}');">
                        </div>
                        <div class="slider-image"
                            style="background-image: url('{{ url('user-assets/images/pexels-photo-247204.jpeg') }}');">
                        </div>
                        <div class="slider-image"
                            style="background-image: url('{{ url('user-assets/images/pexels-photo-247322.webp') }}');">
                        </div>
                        <div class="slider-image"
                            style="background-image: url('{{ url('user-assets/images/woman-g21b0b6abe_340.jpg') }}');">
                        </div>
                        <!-- Duplicate slides to ensure smooth looping -->
                        <div class="slider-image"
                            style="background-image: url('{{ url('user-assets/images/pexels-photo-247287.jpeg') }}');">
                        </div>
                        <div class="slider-image"
                            style="background-image: url('{{ url('user-assets/images/woman-g1553007e5_340.jpg') }}');">
                        </div>
                        <div class="slider-image"
                            style="background-image: url('{{ url('user-assets/images/pexels-photo-247204.jpeg') }}');">
                        </div>
                        <div class="slider-image"
                            style="background-image: url('{{ url('user-assets/images/pexels-photo-247322.webp') }}');">
                        </div>
                        <div class="slider-image"
                            style="background-image: url('{{ url('user-assets/images/woman-g21b0b6abe_340.jpg') }}');">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 form-container mt-5">
                    <!-- General Inquiry Form (initially hidden) -->
                    <div id="generalInquiryForm" style="display: none;">
                        <div class="card-title innertext">
                            <h1 style="text-align:left;">General <span>Enquiry</span></h1><br>
                        </div>
                        <!-- Background Image Slider -->


                        <div class="progress">
                            <div id="progress-bar" class="progress-bar" style="width: 0%;"></div>
                        </div>
                        <form id="contact-form" action="{{ route('contact.post') }}" method="post">
                            @csrf
                            <!-- Form steps go here -->
                            <!-- Example first step -->
                            <div class="form-step form-step-active">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="contactlist">
                                            <label>First Name</label>
                                            <input type="text" name="first_name" class="form-control"
                                                placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="contactlist">
                                            <label>Last Name</label>
                                            <input type="text" name="last_name" class="form-control"
                                                placeholder="Last Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="button" class="btn-next">NEXT</button>
                                </div>
                            </div>
                            <!-- Second step -->
                            <div class="form-step">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="contactlist">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Email"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-container">
                                    <div class="text-start">
                                        <button type="button" class="btn btn-warning btn-prev">BACK</button>
                                    </div>
                                    <div class="text-end">
                                        <button type="button" class="btn-next">NEXT</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Third step -->
                            <div class="form-step">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6">
                                        <div class="contactlist">
                                            <label>Calling Number</label>
                                            <input type="tel" name="calling_number" id="calling_number"
                                                placeholder="Calling Number" class="form-control phone-input" required>
                                            <input type="hidden" name="calling_country_code" id="calling_country_code"
                                                value="ae">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6">
                                        <div class="contactlist">
                                            <label>Whatsapp Number</label>
                                            <input type="tel" name="whatsapp_number" id="whatsapp_number"
                                                placeholder="Whatsapp Number" class="form-control phone-input" required>
                                            <input type="hidden" name="whatsapp_country_code" id="whatsapp_country_code"
                                                value="ae">
                                        </div>
                                    </div>
                                </div>
                                <div class="button-container">
                                    <div class="text-start">
                                        <button type="button" class="btn btn-warning btn-prev">BACK</button>
                                    </div>
                                    <div class="text-end">
                                        <button type="button" class="btn-next">NEXT</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Fourth step -->
                            <div class="form-step">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="contactlist">
                                            <label>Subject</label>
                                            <input type="text" name="subject" placeholder="Subject" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="contactlist">
                                            <label>Message</label>
                                            <textarea name="message" placeholder="Message"
                                                class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-container">
                                    <div class="text-start">
                                        <button type="button" class="btn btn-warning btn-prev">BACK</button>
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" class="btn-next">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Client Inquiry Form (initially hidden) -->
                    <div id="clientInquiryForm" style="display: none;">
                        <div class="card-title innertext">
                            <h1 style="text-align:left;">Client <span>Enquiry</span></h1><br>
                        </div>
                        <!-- Progress Bar for Client Inquiry Form -->
                        <div class="progress mb-4">
                            <div id="clientProgressBar" class="progress-bar bg-success" role="progressbar"
                                style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                        </div>
                        <form id="client-form" method="post" action="{{ route('job-info.post') }}">
                            @csrf
                            <!-- Step 1: Basic Info -->
                            <div class="step" id="step1">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class=" text fw-bold">FIRST NAME</label>
                                            <input type="text" class=" form-control" name="first_name"
                                                placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class=" text fw-bold">LAST NAME</label>
                                            <input type="" class=" text form-control" name="last_name"
                                                placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class=" text  fw-bold">COMPANY / AGENCY NAME</label>
                                            <input type="text" class=" form-control" name="company"
                                                placeholder="Company Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="button" class="btn-next">NEXT</button>
                                </div>
                            </div>
                            <!-- Other steps go here -->
                            <!-- Step 2: Contact Info -->
                            <div class="step d-none" id="step2">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label class=" text fw-bold">CALLING NUMBER</label>
                                            <input id="callingNumber" type="tel" class="form-control"
                                                name="calling_number" placeholder="Calling Number" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class=" text fw-bold">WHATSAPP NUMBER</label>
                                            <input id="whatsappNumber" type="tel" class="form-control"
                                                name="whatsapp_number" placeholder="WhatsApp Number" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class=" text fw-bold">EMAIL</label>
                                            <input type="email" class="form-control" name="email" placeholder="Email"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center d-flex justify-content-between">
                                    <button type="button" class="btn btn-danger  " onclick="prevStep()">Back</button>
                                    <button type="button" class="btn btn-primary " onclick="nextStep()">Next</button>
                                </div>
                            </div>


                            <!-- Project -->
                          <!-- Step 3: Project Info -->
                        <div class="step d-none" id="step3">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="text fw-bold">PROJECT</label>
                                        <select class="form-select" name="project" required>
                                            <option value="Shoot">Shoot</option>
                                            <option value="Film">Film</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label class="  text fw-bold">LOCATION OF PROJECT</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                            <select id="countryDropdown" class="form-select" name="country" required>
            <option value="" disabled selected>Country</option>
        </select>

                    </div>

                                                <div class="col-md-4">
                                                <select id="stateDropdown" class="form-select" name="state" required disabled>
            <option value="" disabled selected>State</option>
        </select>
                                                </div>
                                                <div class="col-md-4">
                                                <select id="cityDropdown" class="form-select" name="city" required disabled>
            <option value="" disabled selected>City</option>
        </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- No of Days & No of Hours -->
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class=" text fw-bold">NO OF DAYS</label>
                                            <input type="number" class="form-control" name="no_of_days" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class=" text fw-bold">NO OF HOURS</label>
                                            <input type="number" class="form-control" name="no_of_hours" required
                                                max="24" min="1">
                                        </div>
                                    </div>
                                    <!-- start and end date  -->

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class=" text fw-bold">START DATE</label>
                                            <input type="date" class="form-control" name="start_date" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class=" text fw-bold">END DATE</label>
                                            <input type="date" class="form-control" name="end_date" required>
                                        </div>
                                    </div>
                                    <!-- male and female   -->

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class=" text fw-bold">NO OF TALENTS(MALE)</label>
                                            <input type="number" class="form-control" name="no_of_talents_male"
                                                placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class=" text fw-bold" class>NO OF TALENTS(FEMALE)</label>
                                            <input required type="number" class="form-control"
                                                name="no_of_talents_female" placeholder="" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class=" text fw-bold">NATIONALITIES</label>
                                            <select class="form-select" name="nationality" required>
                                                <option value="" disabled selected>Select Nationality</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cabo Verde">Cabo Verde</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Central African Republic">Central African Republic
                                                </option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)
                                                </option>
                                                <option value="Congo (Congo-Kinshasa)">Congo (Congo-Kinshasa)</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Eswatini (formerly Swaziland)">Eswatini (formerly
                                                    Swaziland)</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Laos">Laos</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libya">Libya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia">Micronesia</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar (formerly Burma)">Myanmar (formerly Burma)
                                                </option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="North Korea">North Korea</option>
                                                <option value="North Macedonia">North Macedonia</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the
                                                    Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Korea">South Korea</option>
                                                <option value="South Sudan">South Sudan</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syria">Syria</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-Leste">Timor-Leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican City">Vatican City</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>

                                        </div>
                                    </div>


                                    <!-- Required Talent -->
                                    <div class="col-lg-12">
                                        <div class="form-group w-100">
                                            <label class=" text fw-bold">REQUIRED TALENT</label>

                                            <!-- Main Dropdown Button -->
                                            <div class="dropdown" id="dropdown-container">
                                                <button style="background-color: #1C7887"
                                                    class="btn btn-secondary  dropdown-toggle" id="dropdown-btn"
                                                    type="button">
                                                    Select a Category
                                                </button>

                                                <!-- Menu container with categories and subcategories (initially hidden) -->
                                                <div class="menu-container" id="main-category-container"
                                                    style="display: none;"></div>
                                            </div>

                                            <!-- Paragraph to show selected categories and subcategories -->
                                            <p id="selectedCategories" style="margin-top: 10px; font-weight: bold;">
                                                Selected Talents: None
                                            </p>
                                        </div>
                                    </div>






                                </div>
                                <div class="text-center  d-flex justify-content-between">
                                    <button type="button" class="btn btn-danger" onclick="prevStep()">Back</button>
                                    <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                                </div>
                            </div>
                            <!-- Budget for Each Talent -->
                            <div class="step d-none" id="step4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class=" text fw-bold">BUDGET FOR EACH TALENT</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="starting_amount"
                                                        placeholder="Starting Amount" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="maximum_amount"
                                                        placeholder="Maximum Amount" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class=" text fw-bold">DETAIL OF PROJECT</label>
                                            <textarea required class="form-control" name="project_detail" rows="5"
                                                placeholder="Write your text here..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class=" text fw-bold">BRIEF (OPTIONAL)</label>
                                            <input type="file" class="form-control" name="upload_file">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center  d-flex justify-content-between">
                                    <button type="button" class="btn btn-danger" onclick="prevStep()">Back</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- script of client form  -->
                <!-- intl-tel-input JS for phone inputs with flags -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js">
                </script>

                <script>
                    // Progress and step navigation for client form
   let currentStep = 1;
    let progress = 0; // Start with 0%

    function nextStep() {
        const stepElements = document.querySelectorAll('.step');
        const progressBar = document.getElementById('clientProgressBar');
        
        // Get current step form
        const currentStepElement = document.getElementById(`step${currentStep}`);
        const inputs = currentStepElement.querySelectorAll('input, select');
        
        // Validate the current step's inputs
        let isValid = true;
        inputs.forEach(input => {
            if (!input.checkValidity()) {
                input.classList.add('is-invalid');  // Highlight invalid fields
                isValid = false;
            } else {
                input.classList.remove('is-invalid');  // Remove the invalid highlight if corrected
            }
        });

        if (!isValid) {
            // Scroll to the top to focus on the first invalid field
            window.scrollTo({ top: 0, behavior: 'smooth' });
            return;
        }

        // Hide the current step
        currentStepElement.classList.add('d-none');

        // Increment step
        currentStep++;

        // Show the next step if it exists
        const nextStepElement = document.getElementById(`step${currentStep}`);
        if (nextStepElement) {
            nextStepElement.classList.remove('d-none');
        }

        // Increment progress by 25% on each "Next" button press
        progress += 25;
        progressBar.style.width = `${progress}%`;
        progressBar.setAttribute('aria-valuenow', progress);
        progressBar.textContent = `${progress}%`;

        // Scroll to the top of the form after step change
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function prevStep() {
        const stepElements = document.querySelectorAll('.step');
        const progressBar = document.getElementById('clientProgressBar');

        // Hide the current step
        const currentStepElement = document.getElementById(`step${currentStep}`);
        currentStepElement.classList.add('d-none');

        // Decrement step
        currentStep--;

        // Show the previous step
        const prevStepElement = document.getElementById(`step${currentStep}`);
        if (prevStepElement) {
            prevStepElement.classList.remove('d-none');
        }

        // Decrease progress by 25% on each "Back" button press
        progress -= 25;
        progressBar.style.width = `${progress}%`;
        progressBar.setAttribute('aria-valuenow', progress);
        progressBar.textContent = `${progress}%`;

        // Scroll to the top of the form after step change
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    // Event listeners for next and previous buttons
    document.querySelectorAll('.btn-next').forEach(button => {
        button.addEventListener('click', nextStep);
    });

    document.querySelectorAll('.btn-prev').forEach(button => {
        button.addEventListener('click', prevStep);
    });
// -----------------------------------------------
//  talent list js 
document.addEventListener("DOMContentLoaded", function () {
    const talents = [
        {
            name: 'Actor',
            subcategories: ['Lead role','Featured', 'Extras',  'Voice-over Artist','Body double','Stunt person']
        },
        {
            name: 'Model',
            subcategories: []
        },
        {
            name: 'Dancer',
            subcategories: ['Choreographer', 'Belly Dancer', 'Sufi Dancer', 'Gogo Dancer', 'Performer', 'Ayala Dancer', 'B Boyz', 'Dance Groups', 'Tabrey Dancer']
        },
        {
            name: 'Film Crew',
            subcategories: ['Filmmaker', 'DOP', 'Assistant Director', 'Script Writer', 'Dialog Writer', 'Art Director', 'Production Manager', 'Production Designer', 'Line Producer', 'Focus Puller', 'Camera Operator', 'Lights & Gaffer', 'Crane Operator', 'Sound Engineer', 'Spot Boy']
        },
        {
            name: 'Influencers',
            subcategories: []
        },
        {
            name: 'Makeup and Hair',
            subcategories: []
        },
        {
            name: 'Musicians',
            subcategories: ['Singers', 'Music Band', 'Guitarist', 'Violinist', 'Drummers', 'Bassist', 'Rapper']
        },
        {
            name: 'Event Staff and Ushers',
            subcategories: ['Hostess', 'Promoter', 'EmCee',]
        },
        {
            name: 'Entertainer / Performers',
            subcategories: ['Standup Artist', 'VJ', 'RJ', 'Public Speaker', 'Magician', 'Bottle Twister']
        },
        {
            name: 'Celebrity',
            subcategories: []
        },
    ];

    const dropdownBtn = document.getElementById("dropdown-btn");
    const mainCategoryContainer = document.getElementById("main-category-container");
    const selectedCategoriesParagraph = document.getElementById("selectedCategories");

    // Function to create and populate categories and subcategories
    function generateCategories() {
        let html = '<ul class="main-category">';
        talents.forEach(talent => {
            html += `
                <li class="main-category-item">
                    <label>
                        <input  type="checkbox" class="category-checkbox" value="${talent.name}">
                        ${talent.name}
                    </label>`;
            if (talent.subcategories.length > 0) {
                html += `<ul class="sub-category">`;
                talent.subcategories.forEach(sub => {
                    html += `
                        <li>
                            <label>
                                <input type="checkbox" class="subcategory-checkbox" value="${sub}">
                                ${sub}
                            </label>
                        </li>`;
                });
                html += `</ul>`;
            }
            html += `</li>`;
        });
        html += '</ul>';
        mainCategoryContainer.innerHTML = html;
    }

    // Generate the categories on page load
    generateCategories();

    // Toggle the visibility of the main categories on dropdown button click
    dropdownBtn.addEventListener('click', function () {
        if (mainCategoryContainer.style.display === "none" || mainCategoryContainer.style.display === "") {
            mainCategoryContainer.style.display = "block";
        } else {
            mainCategoryContainer.style.display = "none";
        }
    });

    // Function to handle checkbox selections
    function handleCheckboxSelection() {
        const categoryCheckboxes = document.querySelectorAll('.category-checkbox');
        const subCategoryCheckboxes = document.querySelectorAll('.subcategory-checkbox');

        let selectedOptions = [];

        // Collect selected main categories
        categoryCheckboxes.forEach(function (checkbox) {
            if (checkbox.checked) {
                selectedOptions.push(checkbox.value);
            }
        });

        // Collect selected subcategories
        subCategoryCheckboxes.forEach(function (subCheckbox) {
            if (subCheckbox.checked) {
                selectedOptions.push(subCheckbox.value);
            }
        });

        // Update the paragraph with the selected values
        if (selectedOptions.length > 0) {
            selectedCategoriesParagraph.textContent = 'Selected Talents: ' + selectedOptions.join(', ');
        } else {
            selectedCategoriesParagraph.textContent = 'Selected Talents: None';
        }
    }

    // Event delegation for dynamically added checkboxes
    mainCategoryContainer.addEventListener('change', handleCheckboxSelection);

    // Close dropdown if clicked outside
    document.addEventListener('click', function (e) {
        if (!e.target.closest('#dropdown-container')) {
            mainCategoryContainer.style.display = "none";
        }
    });
});



// // --------------------------xxxxxxxxxxxxxxxxx
document.addEventListener('DOMContentLoaded', function() {
    // Initialize intl-tel-input for WhatsApp Number
    const whatsappInput = document.querySelector("#whatsappNumber");
    window.intlTelInput(whatsappInput, {
        initialCountry: "ae",  // Detect country automatically based on the user's IP
        geoIpLookup: function(callback) {
            fetch('https://ipinfo.io/json', { headers: { 'Accept': 'application/json' } })
                .then((resp) => resp.json())
                .then((resp) => {
                    const countryCode = (resp && resp.country) ? resp.country : "US";
                    callback(countryCode);
                });
        },
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",  // Load utility script for formatting
    });

    // Initialize intl-tel-input for Calling Number
    const callingInput = document.querySelector("#callingNumber");
    window.intlTelInput(callingInput, {
        initialCountry: "ae",  // Detect country automatically based on the user's IP
        geoIpLookup: function(callback) {
            fetch('https://ipinfo.io/json', { headers: { 'Accept': 'application/json' } })
                .then((resp) => resp.json())
                .then((resp) => {
                    const countryCode = (resp && resp.country) ? resp.country : "US";
                    callback(countryCode);
                });
        },
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",  // Load utility script for formatting
    });
});
document.addEventListener('DOMContentLoaded', function () {
    // When country is selected
    $('#countryDropdown').on('change', function () {
        const country = $(this).val();

        // Fetch states/regions based on the selected country
        $.ajax({
            url: '/get-states', // Route to fetch states
            type: 'GET',
            data: { country: country },
            success: function (states) {
                $('#stateDropdown').empty().append('<option value="" disabled selected>Select State/Region</option>');
                $('#cityDropdown').empty().append('<option value="" disabled selected>Select City</option>');

                // Populate states dropdown
                $.each(states, function (index, state) {
                    $('#stateDropdown').append('<option value="' + state + '">' + state + '</option>');
                });
            }
        });
    });

    // When state is selected
    $('#stateDropdown').on('change', function () {
        const state = $(this).val();

        // Fetch cities based on the selected state
        $.ajax({
            url: '/get-cities', // Route to fetch cities
            type: 'GET',
            data: { state: state },
            success: function (cities) {
                $('#cityDropdown').empty().append('<option value="" disabled selected>Select City</option>');

                // Populate cities dropdown
                $.each(cities, function (index, city) {
                    $('#cityDropdown').append('<option value="' + city + '">' + city + '</option>');
                });
            }
        });
    });
});









                </script>

                <div class="col-lg-1"> </div>

                <div class="col-md-5 p-4 pt-0 text-center mt-5">
                    <!-- <<div class="card-title innertext">
                        <h1 style="text-align:center; color: white !important;"> Follow us on Instagram</h1><br>
                </div> -->


                <!-- Mobile Frame Container -->
                <div class="mobile-frame">
                    <!-- Instagram Feed Iframe -->
                    <iframe src="https://cdn.lightwidget.com/widgets/0aa177f118285cf7b8c7d7abe5d7c349.html"
                        scrolling="no" allowtransparency="true" class="lightwidget-widget instagram-feed">
                    </iframe>
                </div>
            </div>

        </div>
</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
            // Show modal when page loads
            var inquiryModal = new bootstrap.Modal(document.getElementById('inquiryModal'), {
                keyboard: false,
                backdrop: 'static'
            });
            inquiryModal.show();

            // Show General Inquiry form by default
            document.getElementById('generalInquiryBtn').addEventListener('click', function() {
                showForm('general');
                inquiryModal.hide();
            });

            // Show Client Inquiry form when clicked
            document.getElementById('clientInquiryBtn').addEventListener('click', function() {
                showForm('client');
                inquiryModal.hide();
            });

            // Function to toggle forms
            function showForm(formType) {
                const generalForm = document.getElementById('generalInquiryForm');
                const clientForm = document.getElementById('clientInquiryForm');

                if (formType === 'general') {
                    generalForm.style.display = 'block';
                    clientForm.style.display = 'none';
                } else if (formType === 'client') {
                    generalForm.style.display = 'none';
                    clientForm.style.display = 'block';
                }
            }

            // Initialize with the General Inquiry form visible
            showForm('general');
        });
</script>

<section class="contactlist">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="innertext text-left">
                    <h1 style="text-align:left;">Contact <span>Us</span></h1><br>
                    <div class="row">

                        <div class="col-md-12 mb-3">
                            <div class="text-left">
                                <div class="mb-4">
                                    <h4 class="text-left fw_500 lateef"> <i
                                            class="fa-solid px-2 text-yellow fa-phone"></i> PHONE</h4>
                                    <p class="text-left mx-5">
                                        <a class="fw_400 text_grey" href="tel:971501234796">+971 50 123 4796</a>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h4 class="text-left fw_500 lateef"> <i
                                            class=" fab px-2 text-yellow fa-whatsapp"></i> WHATSAPP</h4>
                                    <p class="text-left mx-5 ">
                                        <a class="text_grey" href="https://wa.me/971501234796" target="_blank">
                                            +971 50 123 4796
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h4 class="text-left fw_500 lateef"> <i
                                        class="fa-solid px-2 text-yellow fa-envelope"></i> EMAIL</h4>
                                <p class="text-left mx-5">
                                    <a class="fw_400 text_grey"
                                        href="mailto:info@casttalents.com">info@casttalents.com</a><br />
                                </p>
                            </div>
                            <div class="mb-4">
                                <h4 class="text-left fw_500 lateef"> <i
                                        class="fa-solid px-2 text-yellow fa-location-dot"></i> ADDRESS</h4>
                                <p class="text-left mx-5">
                                    <span class="fw_400 text_grey"><span class="fw_500 text-dark"> UAE
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span>
                                        Business Bay, Dubai, United Arab Emirates | <a class="fw_400 text_grey"
                                            href="mailto:dxb@casttalents.com">dxb@casttalents.com</a></span><br />
                                    <span class="fw_400 text_grey"><span class="fw_500 text-dark"> KSA
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span>
                                        Al Olaya St, Riyadh, KSA | <a class="fw_400 text_grey"
                                            href="mailto:ksa@casttalents.com">ksa@casttalents.com</a></span><br />
                                    <span class="fw_400 text_grey"><span class="fw_500 text-dark"> OMAN &nbsp;:
                                        </span> 18th November St, Muscat, Oman |
                                        <a class="fw_400 text_grey"
                                            href="mailto:oman@casttalents.com">oman@casttalents.com</a></span><br />

                                </p>
                                <!-- <p class="text-left mx-5">
                                        <a class="fw_400 text_grey" href="mailto:dxb@casttalents.com"><span class="fw_500 text-dark"> DUBAI: </span> dubai address</a><br/>
                                        <a class="fw_400 text_grey" href="mailto:oman@casttalents.com"><span class="fw_500 text-dark"> MUSCAT, OMAN: </span> oman address</a><br/>
                                        <a class="fw_400 text_grey" href="mailto:ksa@casttalents.com"><span class="fw_500 text-dark"> RIYADH, KSA: </span> riyadh address</a><br/>
                                    </p> -->
                            </div>
                            <div class="social-icons mx-5 d-flex gap-4">
                                <a class="text-yellow fs-3" target="_blank" href="https://wa.me/+971501234796"><i
                                        class="fa-brands fa-whatsapp"></i></a>
                                <a class="text-yellow fs-3" target="_blank"
                                    href="https://www.instagram.com/casttalents.llc/"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a class="text-yellow fs-3" target="_blank"
                                    href="https://www.facebook.com/abeera.k.sheikh"><i
                                        class="fa-brands fa-facebook"></i></a>
                                <a class="text-yellow fs-3" target="_blank"
                                    href="https://www.linkedin.com/in/abeera-sheikh-uae-based-casting-specialist-actor-and-founder-of-aks-castings-llc-723063147"><i
                                        class="fa-brands fa-linkedin"></i></a>
                                <a class="text-yellow fs-3" target="_blank"
                                    href="https://www.snapchat.com/add/abeeraksheikh"><i
                                        class="fa-brands fa-snapchat"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>

<!--  Testimonials  -->


@php
$testimonials = [
[
'image' => 'user-assets/testimonial-images/remo_D_Souza.jpg',
'stars' => '★★★★★',
'text' => 'We were here to shoot street dancer movie, CAST TALENTS have done a fabulous job, helped us a lot and
they are very good and hard working. I wish all the best to ABEERA K SHEIKH May God always bless you and keep up
the
work.',
'author' => 'Remo D’Souza | Indian choreographer, actor, and film director'
],
[
'image' => 'user-assets/testimonial-images/arvindr-khaira.JPG',
'stars' => '★★★★★',
'text' => 'We almost shooted for 4 days which amazingly passed and ABEERA K SEIKH is extremely hard-working
amazing
work.',
'author' => 'Arvindr Khaira | Indian Film and Music video director'
],
[
'image' => 'user-assets/testimonial-images/b-praak.jpg',
'stars' => '★★★★★',
'text' => 'I came here for filming a song and Abeera k sheikh provided Models and dancers. She is great at her
job..
God bless.',
'author' => 'B Praak | Indian singer and music director'
],
[
'image' => 'user-assets/testimonial-images/janani.jpg',
'stars' => '★★★★★',
'text' => 'I came here for filming a song and Abeera k sheikh provided Models and dancers. She is great at her
job..
God bless.',
'author' => 'Janani | Indian Songwriter and Musical Composer'
],
[
'image' => 'user-assets/testimonial-images/jassie-gill.jpg',
'stars' => '★★★★★',
'text' => 'Abeera K Sheikh has helped and supported a lot in our project. All the best God bless.',
'author' => 'Jassie Gill | Indian Singer and Actor'
],
[
'image' => 'user-assets/testimonial-images/manju.jpg',
'stars' => '★★★★★',
'text' => 'I filmed my movie Ayisha in Ras Al Khaimah, UAE, and it was a truly great experience working with
Abeera K. Sheikh as the casting director.',
'author' => 'Manju Warrier | Indian Songwriter and Musical Composer'
],
[
'image' => 'user-assets/testimonial-images/nora-fatehi.jpg',
'stars' => '★★★★★',
'text' => 'Abeera was the casting director for the movie Street Dancer, and I found her to be very energetic,
professional, and cooperative.',
'author' => 'Nora Fatehi | Canadian Dancer and Indian Actress'
],
[
'image' => 'user-assets/testimonial-images/Bohemia.jpg',
'stars' => '★★★★★',
'text' => 'Cast Talents managed the casting for our song Tere Bina and did an excellent job with the casting
process.',
'author' => 'Bohemia | Pakistani-American Rapper and Singer'
],
[
'image' => 'user-assets/testimonial-images/suniel-shetty.jpg',
'stars' => '★★★★★',
'text' => 'I have had the experience of working with Abeera on several events, including the T10 and Kabaddi
events, and found her to be highly professional and responsible in her work.',
'author' => 'Suniel Shetty | Indian Actor and Film Producer'
],
[
'image' => 'user-assets/testimonial-images/shraddha-kapoor.jpg',
'stars' => '★★★★★',
'text' => 'I met Abeera on the set of Street Dancer during our Dubai schedule, where she was handling the
casting. She was perfect in her work and truly a hardworking lady.',
'author' => 'Shraddha Kapoor | Indian Actress'
],
[
'image' => 'user-assets/testimonial-images/prabhu-deva.jpg',
'stars' => '★★★★★',
'text' => 'Abeera was the casting director for our UAE schedule of Street Dancer. It was amazing working with
such a hardworking and professional casting director.',
'author' => 'Prabhu Deva | Indian Dance Choreographer, Film Director, Producer and Actor'
],
[
'image' => 'user-assets/testimonial-images/anu-malik.jpg',
'stars' => '★★★★★',
'text' => 'I did a promotional event for Indian Idol in the UAE, and Cast Talents handled it. I must say the
event was fabulously organized.',
'author' => 'Anu Malik | Indian Music Composer'
],
[
'image' => 'user-assets/testimonial-images/dharmesh.jpg',
'stars' => '★★★★★',
'text' => 'We shot for almost a month for Street Dancer in Dubai, and it felt like home as we all became like a
family. The movie shoot went perfectly. Abeera, who was head of casting, did her work amazingly. It was fun
working with her—she’s truly a gem of a person, a true professional, and a hardworking woman.',
'author' => 'Dharmesh Yelande known as D-sir | Indian dancer, choreographe'
],
[
'image' => 'user-assets/testimonial-images/zareen-2.JPG',
'stars' => '★★★★★',
'text' => 'I met the lovely Abeera while shooting for the General Petroleum commercial, where she was managing
the casting. It was amazing meeting her there, and we quickly became very good friends. Later, we enjoyed
watching PSL matches together at the stadium, cheering for our team. Love you, Abeera!',
'author' => 'Zareen Khan | Bollywood Actress'
],
[
'image' => 'user-assets/testimonial-images/varun-dhawan.jpg',
'stars' => '★★★★★',
'text' => 'During the shooting of Street Dancer, I never saw Abeera sit and relax, no matter how long the day
was. Even during an 18-hour shoot, she was constantly on her feet, ensuring everything went perfectly. Keep
rocking, girl!',
'author' => 'Varun Dhawan | Indian Actor'
],
[
'image' => 'user-assets/testimonial-images/rahat-fateh.jpg',
'stars' => '★★★★★',
'text' => 'Cast Talents has managed my celebrity engagements for several events, and it’s been amazing working
with them. They are always true to their commitments.',
'author' => 'Rahat Fateh Ali Khan | Pakistani Sufi Singer'
],
[
'image' => 'user-assets/testimonial-images/shankar-mahadevan.jpg',
'stars' => '★★★★★',
'text' => 'Cast Talents handled my celebrity management for a concert at Sharjah Stadium, and their teamwork was
truly amazing.',
'author' => 'Shankar Mahadevan | Indian Singer and Composer'
],
[
'image' => 'user-assets/testimonial-images/vaani-kapoor.jpg',
'stars' => '★★★★★',
'text' => 'Cast Talents managed my celebrity performance for a private event, and I absolutely loved their
hospitality and the comfort they provided.',
'author' => 'VAANI KAPOOR | Indian Actress'
],
[
'image' => 'user-assets/testimonial-images/sidhu-moose-wala.jpg',
'stars' => '★★★★★',
'text' => 'Abeera’s company, Cast Talents, has been managing my celebrity appearances, and I must say she is an
incredibly hardworking, ambitious, and brave girl. Keep shining and stay blessed—sky is the limit!',
'author' => 'Sidhu Moose Wala | Indian Singer and Rapper'
],
[
'image' => 'user-assets/testimonial-images/sohail-khan.jpg',
'stars' => '★★★★★',
'text' => 'It’s always a great experience working with Abeera, whether it’s for an event or a shoot.',
'author' => 'Sohail Khan | Indian Actor, Producer, Writer'
],
[
'image' => 'user-assets/testimonial-images/bipasha.jpg',
'stars' => '★★★★★',
'text' => 'Working with ABEERA has always been a pleasure.',
'author' => 'Bipasha Basu | Indian Actress'
],
[
'image' => 'user-assets/testimonial-images/gurpeet-singh.jpg',
'stars' => '★★★★★',
'text' => 'We did the Apna Punjab event in Dubai, and they made the entire experience seamless from start to
finish.',
'author' => 'Gurpreet Singh Waraich | Indian Actor'
],
[
'image' => 'user-assets/testimonial-images/SANGEETA.jpg',
'stars' => '★★★★★',
'text' => 'She handled my celebrity management for a fashion show in Dubai, and her company is truly
impressive.',
'author' => 'Sangeeta Bijlani | Indian Actress'
],
[
'image' => 'user-assets/testimonial-images/jackie-chan.jpg',
'stars' => '★★★★★',
'text' => 'Working with Cast Talents was an amazing experience.',
'author' => 'Jackie Chan | Hong Kong Actor and Stuntman'
],
[
'image' => 'user-assets/testimonial-images/MS-DHONI.jpg',
'stars' => '★★★★★',
'text' => 'Cast Talents organized the private events for the T10 tournament, and they did a great job.',
'author' => 'M.S. Dhoni | Indian Professional Cricketer'
],
[
'image' => 'user-assets/testimonial-images/shahid-af.jpg',
'stars' => '★★★★★',
'text' => 'Cast Talents was the casting agency for our General Petroleum commercial. The shoot went well, and it
feels great to see our own people excelling in their respective fields.',
'author' => 'Shahid Afridi | Pakistani Cricketer'
],
[
'image' => 'user-assets/testimonial-images/nivin-pauly.jpg',
'stars' => '★★★★★',
'text' => 'We shot our movie Ramachandra Boss & Co in the UAE, and Abeera was our casting director. We will
always prefer to work with her and her company.',
'author' => 'Nivin Pauly | Indian Film Actor'
],
[
'image' => 'user-assets/testimonial-images/navv-inder.jpg',
'stars' => '★★★★★',
'text' => 'Cast Talents\' celebrity management handled one of my public appearances, and it was a great
experience working with them.',
'author' => 'Navv Inder | Indian Singer'
],
[
'image' => 'user-assets/testimonial-images/atif-aslam.jpeg',
'stars' => '★★★★★',
'text' => 'I\'ve done plenty of events and concerts with Abeera and her team, and it now feels like family. They
are the best team to work with!',
'author' => 'Atif Aslam | Pakistani Playback Singer'
],
[
'image' => 'user-assets/testimonial-images/akhil.jpg',
'stars' => '★★★★★',
'text' => 'Good company, professional people, and a hardworking team.',
'author' => 'Akhil | Indian Playback Singer'
],
[
'image' => 'user-assets/testimonial-images/manish-malhotra.jpg',
'stars' => '★★★★★',
'text' => 'I did a shoot in Dubai and must say, what a creative and wonderful team! They were incredibly
understanding, and I was so impressed with how Abeera handled the entire process. I couldn’t be happier.',
'author' => 'Manish Malhotra | Indian Fashion Designer'
],
[
'image' => 'user-assets/testimonial-images/srk.jpg',
'stars' => '★★★★★',
'text' => 'We have completed several assignments, including Dubai Tourism, and Abeera is not only professional
and organized but also brings a personal touch to every project. Her enthusiasm and passion for her work are
truly unmatched.',
'author' => 'Shah Rukh Khan | Indian Actor and Producer'
],
[
'image' => 'user-assets/testimonial-images/saba-qamar.jpg',
'stars' => '★★★★★',
'text' => 'I\'ve done many shoots with her, and over time, we became friends as well. She\'s such a professional
and strong lady. Keep rocking, my girl!',
'author' => 'Saba Qamar | Pakistani Actress'
],
[
'image' => 'user-assets/testimonial-images/salman-yusuff.jpg',
'stars' => '★★★★★',
'text' => 'Abeera was the casting director for Street Dancer, and her professionalism, reliability, and
commitment to her work are evident in everything she does.',
'author' => 'Salman Yusuff Khan | Indian Dancer and Actor'
],
[
'image' => 'user-assets/testimonial-images/pankaj-tripathi.jpg',
'stars' => '★★★★★',
'text' => 'I have worked with her on several projects, and each time she has impressed me with her energy, hard
work, and innovative thinking.',
'author' => 'Pankaj Tripathi | Indian Actor'
],
[
'image' => 'user-assets/testimonial-images/arbaaz-khan.jpg',
'stars' => '★★★★★',
'text' => 'She is a true professional and a joy to work with.',
'author' => 'Arbaaz Khan | Indian Actor and Film Producer'
],
[
'image' => 'user-assets/testimonial-images/humayun-saeed.jpg',
'stars' => '★★★★★',
'text' => 'She handled the casting for Jawani Phir Nahi Ani 2, which was shot in Dubai. I look forward to many
more successful collaborations with her.',
'author' => 'Humayun Saeed | Pakistani Actor'
],
[
'image' => 'user-assets/testimonial-images/waseem-akram.jpg',
'stars' => '★★★★★',
'text' => 'I had the experience of working with Cast Talents for T10 and PSL, and they truly go above and beyond
to ensure that everything is executed to perfection.',
'author' => 'Wasim Akram | Pakistani Cricketer'
],
[
'image' => 'user-assets/testimonial-images/murali-sharma.jpg',
'stars' => '★★★★★',
'text' => 'I met her on the set of Street Dancer and was amazed by her exceptional casting skills.',
'author' => 'Murali Sharma | Indian Actor'
],
[
'image' => 'user-assets/testimonial-images/shishir-sharma.jpg',
'stars' => '★★★★★',
'text' => 'We worked together on a Danube commercial where she was the casting director, and it was an excellent
experience. She is hardworking and professional, and as an actor, I can see she is such a beautiful lady. I
would suggest that, apart from being a casting director, she should definitely continue her acting career as
well.',
'author' => 'Shishir Sharma | Indian Actor'
],
[
'image' => 'user-assets/testimonial-images/shohaib-akhtar.jpg',
'stars' => '★★★★★',
'text' => 'I met her at the T10 event, and she is a very hardworking and talented girl.',
'author' => 'Shoaib Akhtar | Pakistani Cricketer'
],
[
'image' => 'user-assets/testimonial-images/abrar-ul-haq.jpg',
'stars' => '★★★★★',
'text' => 'An excellent company with a fantastic team.',
'author' => 'Abrar-ul-Haq | Pakistani Singer-Songwriter'
],
[
'image' => 'user-assets/testimonial-images/nader-al-atat.jpg',
'stars' => '★★★★★',
'text' => 'She was the casting director for my latest song, and it was amazing working with her.',
'author' => 'Nader Al Atat | Lebanese Singer'
],
[
'image' => 'user-assets/testimonial-images/arwa.jpg',
'stars' => '★★★★★',
'text' => 'Cast Talents handled the filming and casting for my music video. Great work, dear!',
'author' => 'Arwa | Yemeni Singer'
],
[
'image' => 'user-assets/testimonial-images/punit-pathak.jpg',
'stars' => '★★★★★',
'text' => 'Cast Talents managed the casting for the UAE schedule of the Street Dancer movie. An amazing and
hardworking team!',
'author' => 'Punit Pathak | Indian Dancer and Actor'
],
[
'image' => 'user-assets/testimonial-images/sugandha-mishra.jpg',
'stars' => '★★★★★',
'text' => 'I worked with Cast Talents for an event in Dubai, and it was a fabulous experience. It was great
working with her!',
'author' => 'Sugandha Mishra | Indian Actress and Comedian'
],
[
'image' => 'user-assets/testimonial-images/hamada.jpg',
'stars' => '★★★★★',
'text' => 'She was the casting director for a few of my songs, and the cast she selected was amazing. Great
teamwork all around. Love you, Abeer!',
'author' => 'Hamada Helal | Egyptian Singer and Composer'
],
[
'image' => 'user-assets/testimonial-images/raghav-juyal.jpg',
'stars' => '★★★★★',
'text' => 'Cast Talents served as the casting department and truly are the best casting agency.',
'author' => 'Raghav Juyal | Indian Dancer'
],
[
'image' => 'user-assets/testimonial-images/flint-j.jpg',
'stars' => '★★★★★',
'text' => 'Abeera was the casting director for my song Tere Bina, and she is the backbone of its success. Thank
you, Abeera!',
'author' => 'Flint J | Pakistani Singer'
],
[
'image' => 'user-assets/testimonial-images/mathira.jpg',
'stars' => '★★★★★',
'text' => 'I shot 8 commercials back to back in Dubai with Cast Talents, and I am truly impressed by Abeera and
her hard work.',
'author' => 'Mathira | Pakistani Model, Actress'
]
];
@endphp
<div class="row with-divider">

    {{---------------------------- google reviews ----------------------}}
    <section class="contactlist col-lg-6 col-md-6 col-xl-6" style="background-color: #f3fbff !important;">
        <div class="container">
            <div class="row">
                <div class="innertext text-left">
                    <h3 style="text-align:left; font-weight:bold;">What Our <span>Clients</span> have to say</h3>
                    @php
                    $fullStars = floor($averageRating); // Number of full stars
                    $halfStar = ($averageRating - $fullStars) >= 0.5 ? 1 : 0; // Whether to show a half star
                    $emptyStars = 5 - $fullStars - $halfStar; // Remaining empty stars
                    @endphp

                    <div style="display: flex; align-items: flex-start; gap: 10px;">
                        <!-- Flexbox to create two columns -->
                        <!-- Column 1: Numeric Rating -->
                        <div style="font-size: 3rem; font-weight: bold;">
                            {{ number_format($averageRating, 1) }}
                            <!-- Example: 4.9 -->
                        </div>

                        <!-- Column 2: Stars and Reviews -->
                        <div style="display: flex; flex-direction: column; align-items: flex-start;">
                            <!-- Stars Row -->
                            <div style="font-size: 1.5rem; color: #FFD700;">
                                <!-- Gold stars -->
                                @for ($i = 0; $i < $fullStars; $i++) ★ @endfor @if ($halfStar) ☆ @endif <!-- Half star
                                    if needed -->
                                    @for ($i = 0; $i < $emptyStars; $i++) ★ @endfor </div>

                                        <!-- Reviews Count Row (below stars) -->
                                        <div style="color: #666;">
                                            <!-- Reviews count -->
                                            <a href="{{ $businessReviewUrl }}" target="_blank">
                                                {{ $reviewsCount }} Reviews
                                            </a>
                                        </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div id="google-reviews" class="owl-carousel">
                            @foreach (collect($reviews)->chunk(2) as $reviewChunk)
                            <!-- Loop through in chunks of 2 -->
                            <div class="item">
                                @foreach ($reviewChunk as $review)
                                <div
                                    class="testimonial card-style position-relative d-flex align-items-center justify-content-center">
                                    <!-- Added Flexbox for vertical centering -->
                                    <!-- Layout for image on left and content on right -->
                                    <div class="row ">
                                        <!-- Author's Image on the left -->
                                        {{-- <div class="col-md-3 text-center">
                                            <img src="{{ $review['profile_photo_url'] }}" alt="Avatar"
                                                class="w-25 styled-avatar">
                                        </div> --}}

                                        <!-- Testimonial Text on the right -->
                                        <div
                                            class="col-md-12 d-flex flex-column justify-content-center align-items-center">
                                            <p class="text-center">
                                                <i class="fas fa-quote-left fs-5"></i> <!-- Opening Quote Icon -->
                                                {{ $review['text'] }}
                                                <i class="fas fa-quote-right fs-5"></i> <!-- Closing Quote Icon -->
                                            </p>
                                            <h5 class="author fs-6 text-center font-weight-bold">— {{
                                                $review['author_name']
                                                }}</h5>
                                            <div class="stars text-center fs-3">★★★★★</div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </section>

    {{---------------------------- client reviews ----------------------}}
    <section class="contactlist col-lg-6 col-md-6 col-xl-6" style="background-color: #f3fbff !important;">
        <div class="container">
            <div class="row">
                <div class="innertext text-left" style="margin-bottom: 48px;">
                    <h3 style="text-align:left; font-weight:bold">What <span>Celebrities </span>worked with us have
                        to say</h3><br>
                </div>
                <div>
                    <div id="client-testimonials" class="owl-carousel">
                        @foreach (collect($testimonials)->chunk(2) as $testimonialChunk)
                        <!-- Loop through in chunks of 2 -->
                        <div class="item">
                            @foreach ($testimonialChunk as $testimonial)
                            <div
                                class="testimonial card-style position-relative d-flex align-items-center justify-content-center">
                                <!-- Added Flexbox for vertical centering -->
                                <!-- Layout for image on left and content on right -->
                                <div class="row">
                                    <!-- Author's Image on the left -->
                                    <div class="col-md-4 text-center">
                                        <img src="{{ url($testimonial['image']) }}" alt="Avatar" class="styled-avatar">
                                    </div>

                                    <!-- Testimonial Text on the right -->
                                    <div class="col-md-8 d-flex flex-column justify-content-center align-items-center">
                                        <p class="text-center">
                                            <i class="fas fa-quote-left fs-5"></i> <!-- Opening Quote Icon -->
                                            {{ $testimonial['text'] }}
                                            <i class="fas fa-quote-right fs-5"></i> <!-- Closing Quote Icon -->
                                        </p>
                                        <h5 class="author fs-6 text-center font-weight-bold">— {{
                                            $testimonial['author']
                                            }}</h5>
                                        <div class="stars text-center fs-3">{{ $testimonial['stars'] }}</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<script>
    // --------------------------------------------
        var input = document.querySelector("#calling_number");
        var input1 = document.querySelector("#whatsapp_number");
        window.intlTelInput(input, {
            initialCountry: "ae",
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // for formatting/validation
        });

        window.intlTelInput(input1, {
            initialCountry: "ae",
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // for formatting/validation
        });

        $(document).ready(function(){

            $("#google-reviews, #client-testimonials").owlCarousel({
                items: 1,
                loop: true,
                margin: 10,
                nav: false, // Navigation arrows can be disabled if you prefer swipe only
                dots: true, // Dots navigation
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                // autoHeight: true,
                touchDrag: true,
                mouseDrag: true
            });
        });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
            // Initialize phone inputs
            var phoneInputs = document.querySelectorAll(".phone-input");
            phoneInputs.forEach(function(input) {
                // window.intlTelInput(input, {
                //     initialCountry: "us",
                //     utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
                // });
            });

            const formSteps = document.querySelectorAll('.form-step');
            const progressBar = document.getElementById('progress-bar');
            let currentStep = 0;
            let progress = 0; // Initialize progress at 0%

            function showStep(step) {
                formSteps.forEach((formStep, index) => {
                    formStep.style.display = index === step ? 'block' : 'none'; // Show/hide steps
                });
            }

            function updateProgressBar() {
                progressBar.style.width = `${progress}%`;
                progressBar.setAttribute('aria-valuenow', progress);
                progressBar.textContent = `${progress}%`; // Update progress bar text
            }

            function validateStep(step) {
                const inputs = formSteps[step].querySelectorAll('input, textarea');
                for (const input of inputs) {
                    if (!input.value) {
                        input.classList.add('is-invalid'); // Add invalid class
                        return false;
                    } else {
                        input.classList.remove('is-invalid'); // Remove invalid class if valid
                    }
                }

            return true;
            }

            document.querySelectorAll('.btn-next').forEach(button => {
                button.addEventListener('click', () => {
                    if (validateStep(currentStep)) {
                        if (currentStep < formSteps.length - 1) {
                            currentStep++;
                            progress += 25; // Increase progress by 25%
                            showStep(currentStep);
                            updateProgressBar(); // Update the progress bar
                        }
                    }
                });
            });

            document.querySelectorAll('.btn-prev').forEach(button => {
                button.addEventListener('click', () => {
                    if (currentStep > 0) {
                        currentStep--;
                        progress -= 25; // Decrease progress by 25%
                        showStep(currentStep);
                        updateProgressBar(); // Update the progress bar
                    }
                });
            });

            // Initialize the first step and set progress to 0%
            showStep(currentStep);
            updateProgressBar(); // This will set the initial progress bar to 0%
        });
</script>

<script>
    function initMap() {
            // Initialize the map with a temporary center point
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 25.1837, lng: 55.2666},
                zoom: 15
            });

            var request = {
                placeId: '{{ config('services.googlemaps.place_id') }}',
                fields: ['name', 'formatted_address', 'geometry']
            };

            var infowindow = new google.maps.InfoWindow();
            var service = new google.maps.places.PlacesService(map);

            service.getDetails(request, function(place, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK) {
                    var marker = new google.maps.Marker({
                        map: map,
                        position: place.geometry.location,
                        label: {
                            text: 'Cast Talents', // The text of the label
                            color: '#EA4335', // Text color
                            fontSize: '14px', // Text size
                            fontWeight: 'bold', // Text weight
                            className: 'marker-position',
                        }
                    });
                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                                              'Address: ' + place.formatted_address + '</div>');
                        infowindow.open(map, this);
                    });
                    // Automatically center the map on the marker
                    map.setCenter(place.geometry.location);
                }
            });
        }

        // JSON data for GCC countries, states/regions, and cities
        const gccData = {
            "Bahrain": {
                "Capital Governorate": ["Manama"],
                "Muharraq Governorate": ["Muharraq", "Arad"],
                "Northern Governorate": ["Al Budaiya", "Diraz"],
                "Southern Governorate": ["Riffa", "Zallaq"]
            },
            "Kuwait": {
                "Al Ahmadi": ["Ahmadi", "Sabah Al-Ahmad", "Fahaheel"],
                "Al Farwaniyah": ["Farwaniyah", "Jleeb Al-Shuyoukh"],
                "Hawalli": ["Salmiya", "Jabriya", "Hawalli"],
                "Capital": ["Kuwait City", "Dasma"],
                "Al Jahra": ["Jahra"]
            },
            "Oman": {
                "Muscat": ["Muscat", "Muttrah", "Seeb", "Bawshar"],
                "Dhofar": ["Salalah", "Taqah", "Mirbat"],
                "Al Batinah South": ["Sohar", "Rustaq"],
                "Ad Dakhiliyah": ["Nizwa", "Bahla", "Samail"]
            },
            "Qatar": {
                "Ad Dawhah": ["Doha", "Al Wakrah"],
                "Al Rayyan": ["Al Rayyan", "Umm Salal", "Al Shahaniya"],
                "Al Daayen": ["Lusail"],
                "Al Khor": ["Al Khor"]
            },
            "Saudi Arabia": {
                "Riyadh Region": ["Riyadh", "Al Kharj", "Diriyah"],
                "Makkah Region": ["Jeddah", "Mecca", "Taif"],
                "Eastern Province": ["Dammam", "Al Khobar", "Dhahran"],
                "Madinah Region": ["Medina", "Yanbu"],
                "Asir Region": ["Abha", "Khamis Mushait"]
            },
            "United Arab Emirates": {
                "Abu Dhabi": ["Abu Dhabi", "Al Ain", "Al Dhafra"],
                "Dubai": ["Dubai"],
                "Sharjah": ["Sharjah", "Khor Fakkan", "Dibba Al Hisn"],
                "Ajman": ["Ajman"],
                "Ras Al Khaimah": ["Ras Al Khaimah"],
                "Fujairah": ["Fujairah"],
                "Umm Al Quwain": ["Umm Al Quwain"]
            }
        };

        // Initialize dropdown elements
        const countryDropdown = document.getElementById("countryDropdown");
        const stateDropdown = document.getElementById("stateDropdown");
        const cityDropdown = document.getElementById("cityDropdown");

        // Populate country dropdown with GCC countries
        function populateCountryDropdown() {
            for (let country in gccData) {
                let option = document.createElement("option");
                option.value = country;
                option.text = country;
                countryDropdown.appendChild(option);
            }
        }

        // Populate state dropdown based on selected country
        function populateStateDropdown(selectedCountry) {
            stateDropdown.innerHTML = '<option value="" disabled selected>Select a state/region</option>'; // Reset states
            cityDropdown.innerHTML = '<option value="" disabled selected>Select a city</option>'; // Reset cities
            stateDropdown.disabled = false;
            cityDropdown.disabled = true;

            let states = gccData[selectedCountry];
            for (let state in states) {
                let option = document.createElement("option");
                option.value = state;
                option.text = state;
                stateDropdown.appendChild(option);
            }
        }

        // Populate city dropdown based on selected state
        function populateCityDropdown(selectedCountry, selectedState) {
            cityDropdown.innerHTML = '<option value="" disabled selected>Select a city</option>'; // Reset cities
            cityDropdown.disabled = false;

            let cities = gccData[selectedCountry][selectedState];
            cities.forEach(city => {
                let option = document.createElement("option");
                option.value = city;
                option.text = city;
                cityDropdown.appendChild(option);
            });
        }

        // Event listener for country dropdown
        countryDropdown.addEventListener("change", function() {
            const selectedCountry = this.value;
            populateStateDropdown(selectedCountry);
        });

        // Event listener for state dropdown
        stateDropdown.addEventListener("change", function() {
            const selectedCountry = countryDropdown.value;
            const selectedState = this.value;
            populateCityDropdown(selectedCountry, selectedState);
        });

        // Initialize the country dropdown on page load
        populateCountryDropdown();
</script>

<style>
    .owl-carousel .testimonial {
        padding: 10px;
        /* background-color: #00798c; */
        background: linear-gradient(135deg, #00798C, #002b27);
        text-align: center;
        margin-bottom: 50px;
        border-radius: 10px;
    }

    .owl-carousel .stars {
        font-size: 18px;
        color: #f39c12;
    }

    .stars span {
        color: #ccc;
        /* light gray for the 'empty' stars */
    }

    .owl-carousel .testimonial h3 {
        font-size: 20px;
        margin-bottom: 5px;
    }

    .owl-carousel .testimonial h5 {
        color: #edae49;
    }

    .owl-carousel .testimonial p {
        font-size: 14px;
        color: #fff;
    }

    .owl-carousel .testimonial .avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 10px;
        float: left;
    }

    .owl-carousel .author {
        font-weight: bold;
        margin-top: 10px;
        /* color: #d1495b; */
    }

    .with-divider {
        position: relative;
    }

    .with-divider::before {
        content: "";
        position: absolute;
        left: 50%;
        /* Center the line between the two columns */
        top: 20px;
        bottom: 30px;
        width: 2px;
        /* Line thickness */
        background-color: #ccc;
        /* Line color, can be adjusted as needed */
        transform: translateX(-50%);
        /* Centers the line exactly between the columns */
    }
</style>
<style>
    .progress {
        height: 20px;
        background: #f3f3f3;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .progress-bar {
        height: 100%;
        background: #4caf50;
        text-align: center;
        color: white;
        line-height: 20px;
        /* Center the text vertically */
        border-radius: 5px;
    }

    .btn-next {
        background: rgba(28, 120, 135, 1) !important;
        padding: 12px 40px !important;
        color: #fff !important;
        border-radius: 10px !important;
        font-size: 17px !important;
        transition: 1s all ease !important;
        border: 2px solid rgba(28, 120, 135, 1) !important;
    }

    .btn-prev {
        border-radius: 10px !important;
        color: #ffffff !important;
        background-color: #D35A6A !important;
        border-color: #D35A6A !important;
        padding: 12px 40px !important;
    }

    .is-invalid {
        border-color: red;
        /* Change border color for invalid fields */
    }
</style>

@endsection
</div>






@include('users.pages.exit-popup')