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

        section.contactlist {
            padding: 50px 0 50px !important;
        }

        .mobile-frame {
    background-image: url('{{ url('user-assets/images/mobile-mockup.png') }}');
    background-size: cover;
    background-position: center;
    width: 50vh;
    height: 49vw;
    position: relative;
    margin: 0 auto;
    border-radius: 30px;
    overflow: hidden; /* Ensure no overflow */

}

.instagram-feed {
    width: 83%; /* Adjusted to fit inside the frame */
    height: 100%; /* Fills the height */
    position: absolute;
    top: 4vw;
    left: 24px;
    border: none;
    overflow: hidden;
    padding: 0; /* Remove padding for a snug fit */
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
            height: 60vw;
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
            height: 50vw;

            /* Transparent background */
        }

        .form-container {
            z-index: 3;
            height:48vw;
            
           
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
         /* Dropdown button styling */
         .custom-dropdown {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .custom-dropdown-button {
            width: 100%;
            padding: 2px;
            border: 2px solid white;
            background-color: white;
            cursor: pointer;
            
        }

        /* Dropdown content (hidden by default) */
        .custom-dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 100%;
            border: 1px solid #ccc;
            max-height: 200px;
            overflow-y: scroll;
            z-index: 1;
        }

        /* Checkbox options styling */
        .custom-dropdown-content label {
            display: block;
            padding: 10px;
            cursor: pointer;
        }

        .custom-dropdown-content label:hover {
            background-color: #f1f1f1;
        }

        /* Show the dropdown when clicked */
        .dropdown-open {
            display: block;
        }
        /* Custom height adjustments for different screen sizes */

/* Extra Small Screens (≤576px) */

@media (max-width: 768px) {
    
    .contactussec {
        
        height: 60vh !important; /* Adjust the height for smaller screens */
    }
    .form-container {
        width:100%;
        height: 100vw !important; 
    }
    .mobile-frame {
        width: 60vw; 
        height: 120vw; 
    }
    .button-container {
            margin-top: 10px;
        }
    .instagram-feed {
        width: 100%;
        height: 100%;
    }
    /* Position the slider behind the section */
    .background-slider {
        height: 100vw !important; /* Increase the slider height */
    }
    .slider-image {
        height: 100vw !important; /* Adjust individual image height */
    }
    .text2 {
            font-size: 10px !important;

        }
        .menu-container {
        max-height: 200px; /* Reduce height for smaller screens */
        width: 100%; /* Ensure it spans the container width */
    }
    .custom-dropdown-content {
        max-height: 100px; /* Adjust max height for small screens */
    }
    .form-container {
        width: 100%;
        height: 130vw !important;
        position: relative;
        margin: 0 auto; /* Center the container */
        padding: 10px; /* Optional padding for better spacing */
   
        background-color: rgba(255, 255, 255, 0.9); /* Ensure a visible background */
    }
    body.lock-scroll {
        overflow: hidden;
    }
    }
    @media (max-width: 576px) { 
        .background-slider {
        height: 130vw !important; /* Increase the slider height */
    }
  
    .slider-image {
        height: 130vw !important; /* Adjust individual image height */
    }
    .form-container {
        width: 100%;
        height: 130vw !important;
        position: relative;
        margin: 0 auto; /* Center the container */
        padding: 10px; /* Optional padding for better spacing */
   
        background-color: rgba(255, 255, 255, 0.9); /* Ensure a visible background */
    }
    body.lock-scroll {
        overflow: hidden;
    }
    #generalInquiryForm,
    #clientInquiryForm {
        display: block;
        height: 100%; /* Ensure the form takes up the container height */
    }
    @media (max-width: 576px) { 
        .background-slider {
        height: 130vw !important; /* Increase the slider height */
    }
  
    .slider-image {
        height: 130vw !important; /* Adjust individual image height */
    }
    .form-container {
        width: 100%;
        height: 130vw !important;
        margin: 0 auto; /* Center the container */
        padding: 10px; /* Optional padding for better spacing */
        overflow-y: auto; /* Add scroll if content overflows */
        background-color: rgba(255, 255, 255, 0.9); /* Ensure a visible background */
    }
    #generalInquiryForm,
    #clientInquiryForm {
        display: block;
        height: 100%; /* Ensure the form takes up the container height */
    }

    .step {
        display: block;
        margin: 0 auto;
    }
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

        <div class="container slider">
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

                <div class="col-md-6 col-12 form-container custom-height-sm mt-md-3">
                    <!-- General Inquiry Form (initially hidden) -->
                    <div id="generalInquiryForm" style="display: none; " class="custom-height-sm ">
                        <div class="card-title innertext">
                            <h1 class="" style="text-align:left;">General <span>Enquiry</span></h1><br>
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
                                    <div class="col-6 col-md-6">
                                        <div class="contactlist">
                                            <label>First Name</label>
                                            <input type="text" name="first_name" class="form-control"
                                                placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <div class="contactlist">
                                            <label>Last Name</label>
                                            <input type="text" name="last_name" class="form-control"
                                                placeholder="Last Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end ">
                                    <button type="button" class="btn-next">NEXT</button>
                                </div>
                            </div>
                            <!-- Second step -->
                            <div class="form-step">
                                <div class="row">
                                    <div class="col-md-12 col-12">
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
                                    <div class="col-6 col-md-6">
                                        <div class="contactlist">
                                            <label>Calling Number</label>
                                            <input type="tel" name="calling_number" id="calling_number"
                                                placeholder="Calling Number" class="form-control phone-input" required>
                                            <input type="hidden" name="calling_country_code" id="calling_country_code"
                                                value="ae">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6">
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
                                    <div class="text-end ">
                                        <button type="submit" class="btn-next ">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Client Inquiry Form (initially hidden) -->
                    <div id="clientInquiryForm"  style="display: none;">
                        <div class="card-title innertext">
                            <h1 style="text-align:left;">Client <span>Enquiry</span></h1><br>
                        </div>
                        <!-- Progress Bar for Client Inquiry Form -->
                        <div class="progress mb-4">
                            <div id="clientProgressBar" class="progress-bar bg-success" role="progressbar"
                                style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                        </div>
                        <form id="client-form" clas="clientForm" method="post" ">
                            @csrf
                            <!-- Step 1: Basic Info -->
                            <div class="step" id="step1">
                                <div class="row">
                                    <div class="col-6   ">
                                        <div class="form-group">
                                            <label class=" text fw-bold">FIRST NAME</label>
                                            <input type="text" class=" form-control" name="first_name"
                                                placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class=" text fw-bold">LAST NAME</label>
                                            <input type="" class=" text form-control" name="last_name"
                                                placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-6">
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
                                    <div class="col-lg-12">
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
                                <div class="col-lg-3 col-4">
                                    <div class="form-group">
                                        <label class="text fw-bold">PROJECT</label>
                                        <select class="form-select" name="project" required>
                                            <option value="Shoot">Shoot</option>
                                            <option value="Film">Event</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-8">
                                    <div class="form-group">
                                        <label class="  text fw-bold">LOCATION OF PROJECT</label>
                                        <div class="row">
                                            <div class="col-md-4 col-4">
                                            <select id="countryDropdown" class="form-select" name="country" required>
                                                <option value="" disabled selected>Country</option>
                                            </select>

                                            </div>

                                                <div class="col-md-4 col-4">
                                                <select id="stateDropdown" class="form-select" name="state" required disabled>
                                                    <option value="" disabled selected>State</option>
                                                </select>
                                                </div>
                                                <div class="col-md-4 col-4">
                                                <select id="cityDropdown" class="form-select" name="city" required disabled>
                                                    <option value="" disabled selected>City</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- No of Days & No of Hours -->
                                    <div class="col-lg-3 col-4">
                                        <div class="form-group">
                                            <label class=" text fw-bold">NO OF DAYS</label>
                                            <input type="number" class="form-control" name="no_of_days" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-4">
                                        <div class="form-group">
                                            <label class=" text fw-bold">NO OF HOURS</label>
                                            <input type="number" class="form-control" name="no_of_hours" required
                                                max="24" min="1">
                                        </div>
                                    </div>
                                    <!-- start and end date  -->

                                    <div class="col-lg-3 col-4">
                                        <div class="form-group">
                                            <label class=" text fw-bold">START DATE</label>
                                            <input type="date" class="form-control" name="start_date" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-4">
                                        <div class="form-group">
                                            <label class=" text fw-bold">END DATE</label>
                                            <input type="date" class="form-control" name="end_date" required>
                                        </div>
                                    </div>
                                    <!-- male and female   -->

                                    <div class="col-md-4 col-4">
                                        <div class="form-group">
                                            <label class=" text text2 fw-bold">NO OF TALENTS(MALE)</label>
                                            <input type="number" class="form-control" name="no_of_talents_male"
                                                placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-4">
                                        <div class="form-group">
                                            <label class=" text text2 fw-bold" class>NO OF TALENTS(FEMALE)</label>
                                            <input required type="number" class="form-control"
                                                name="no_of_talents_female" placeholder="" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-6">
    <div class="form-group">
        <label class="text fw-bold">NATIONALITIES</label>
        <div class="custom-dropdown" id="nationalityDropdown">
            <div class=" form-control" id="dropdownButton">Select Nationalities</div>
            <div class="custom-dropdown-content" id="dropdownContent">
    <label><input type="checkbox" value="Afghanistan"> Afghanistan</label>
    <label><input type="checkbox" value="Albania"> Albania</label>
    <label><input type="checkbox" value="Algeria"> Algeria</label>
    <label><input type="checkbox" value="Andorra"> Andorra</label>
    <label><input type="checkbox" value="Angola"> Angola</label>
    <label><input type="checkbox" value="Antigua and Barbuda"> Antigua and Barbuda</label>
    <label><input type="checkbox" value="Argentina"> Argentina</label>
    <label><input type="checkbox" value="Armenia"> Armenia</label>
    <label><input type="checkbox" value="Australia"> Australia</label>
    <label><input type="checkbox" value="Austria"> Austria</label>
    <label><input type="checkbox" value="Azerbaijan"> Azerbaijan</label>
    <label><input type="checkbox" value="Bahamas"> Bahamas</label>
    <label><input type="checkbox" value="Bahrain"> Bahrain</label>
    <label><input type="checkbox" value="Bangladesh"> Bangladesh</label>
    <label><input type="checkbox" value="Barbados"> Barbados</label>
    <label><input type="checkbox" value="Belarus"> Belarus</label>
    <label><input type="checkbox" value="Belgium"> Belgium</label>
    <label><input type="checkbox" value="Belize"> Belize</label>
    <label><input type="checkbox" value="Benin"> Benin</label>
    <label><input type="checkbox" value="Bhutan"> Bhutan</label>
    <label><input type="checkbox" value="Bolivia"> Bolivia</label>
    <label><input type="checkbox" value="Bosnia and Herzegovina"> Bosnia and Herzegovina</label>
    <label><input type="checkbox" value="Botswana"> Botswana</label>
    <label><input type="checkbox" value="Brazil"> Brazil</label>
    <label><input type="checkbox" value="Brunei"> Brunei</label>
    <label><input type="checkbox" value="Bulgaria"> Bulgaria</label>
    <label><input type="checkbox" value="Burkina Faso"> Burkina Faso</label>
    <label><input type="checkbox" value="Burundi"> Burundi</label>
    <label><input type="checkbox" value="Cabo Verde"> Cabo Verde</label>
    <label><input type="checkbox" value="Cambodia"> Cambodia</label>
    <label><input type="checkbox" value="Cameroon"> Cameroon</label>
    <label><input type="checkbox" value="Canada"> Canada</label>
    <label><input type="checkbox" value="Central African Republic"> Central African Republic</label>
    <label><input type="checkbox" value="Chad"> Chad</label>
    <label><input type="checkbox" value="Chile"> Chile</label>
    <label><input type="checkbox" value="China"> China</label>
    <label><input type="checkbox" value="Colombia"> Colombia</label>
    <label><input type="checkbox" value="Comoros"> Comoros</label>
    <label><input type="checkbox" value="Congo (Congo-Brazzaville)"> Congo (Congo-Brazzaville)</label>
    <label><input type="checkbox" value="Congo (Congo-Kinshasa)"> Congo (Congo-Kinshasa)</label>
    <label><input type="checkbox" value="Costa Rica"> Costa Rica</label>
    <label><input type="checkbox" value="Croatia"> Croatia</label>
    <label><input type="checkbox" value="Cuba"> Cuba</label>
    <label><input type="checkbox" value="Cyprus"> Cyprus</label>
    <label><input type="checkbox" value="Czech Republic"> Czech Republic</label>
    <label><input type="checkbox" value="Denmark"> Denmark</label>
    <label><input type="checkbox" value="Djibouti"> Djibouti</label>
    <label><input type="checkbox" value="Dominica"> Dominica</label>
    <label><input type="checkbox" value="Dominican Republic"> Dominican Republic</label>
    <label><input type="checkbox" value="Ecuador"> Ecuador</label>
    <label><input type="checkbox" value="Egypt"> Egypt</label>
    <label><input type="checkbox" value="El Salvador"> El Salvador</label>
    <label><input type="checkbox" value="Equatorial Guinea"> Equatorial Guinea</label>
    <label><input type="checkbox" value="Eritrea"> Eritrea</label>
    <label><input type="checkbox" value="Estonia"> Estonia</label>
    <label><input type="checkbox" value="Eswatini"> Eswatini (formerly Swaziland)</label>
    <label><input type="checkbox" value="Ethiopia"> Ethiopia</label>
    <label><input type="checkbox" value="Fiji"> Fiji</label>
    <label><input type="checkbox" value="Finland"> Finland</label>
    <label><input type="checkbox" value="France"> France</label>
    <label><input type="checkbox" value="Gabon"> Gabon</label>
    <label><input type="checkbox" value="Gambia"> Gambia</label>
    <label><input type="checkbox" value="Georgia"> Georgia</label>
    <label><input type="checkbox" value="Germany"> Germany</label>
    <label><input type="checkbox" value="Ghana"> Ghana</label>
    <label><input type="checkbox" value="Greece"> Greece</label>
    <label><input type="checkbox" value="Grenada"> Grenada</label>
    <label><input type="checkbox" value="Guatemala"> Guatemala</label>
    <label><input type="checkbox" value="Guinea"> Guinea</label>
    <label><input type="checkbox" value="Guinea-Bissau"> Guinea-Bissau</label>
    <label><input type="checkbox" value="Guyana"> Guyana</label>
    <label><input type="checkbox" value="Haiti"> Haiti</label>
    <label><input type="checkbox" value="Honduras"> Honduras</label>
    <label><input type="checkbox" value="Hungary"> Hungary</label>
    <label><input type="checkbox" value="Iceland"> Iceland</label>
    <label><input type="checkbox" value="India"> India</label>
    <label><input type="checkbox" value="Indonesia"> Indonesia</label>
    <label><input type="checkbox" value="Iran"> Iran</label>
    <label><input type="checkbox" value="Iraq"> Iraq</label>
    <label><input type="checkbox" value="Ireland"> Ireland</label>
    <label><input type="checkbox" value="Israel"> Israel</label>
    <label><input type="checkbox" value="Italy"> Italy</label>
    <label><input type="checkbox" value="Jamaica"> Jamaica</label>
    <label><input type="checkbox" value="Japan"> Japan</label>
    <label><input type="checkbox" value="Jordan"> Jordan</label>
    <label><input type="checkbox" value="Kazakhstan"> Kazakhstan</label>
    <label><input type="checkbox" value="Kenya"> Kenya</label>
    <label><input type="checkbox" value="Kiribati"> Kiribati</label>
    <label><input type="checkbox" value="Kuwait"> Kuwait</label>
    <label><input type="checkbox" value="Kyrgyzstan"> Kyrgyzstan</label>
    <label><input type="checkbox" value="Laos"> Laos</label>
    <label><input type="checkbox" value="Latvia"> Latvia</label>
    <label><input type="checkbox" value="Lebanon"> Lebanon</label>
    <label><input type="checkbox" value="Lesotho"> Lesotho</label>
    <label><input type="checkbox" value="Liberia"> Liberia</label>
    <label><input type="checkbox" value="Libya"> Libya</label>
    <label><input type="checkbox" value="Liechtenstein"> Liechtenstein</label>
    <label><input type="checkbox" value="Lithuania"> Lithuania</label>
    <label><input type="checkbox" value="Luxembourg"> Luxembourg</label>
    <label><input type="checkbox" value="Madagascar"> Madagascar</label>
    <label><input type="checkbox" value="Malawi"> Malawi</label>
    <label><input type="checkbox" value="Malaysia"> Malaysia</label>
    <label><input type="checkbox" value="Maldives"> Maldives</label>
    <label><input type="checkbox" value="Mali"> Mali</label>
    <label><input type="checkbox" value="Malta"> Malta</label>
    <label><input type="checkbox" value="Marshall Islands"> Marshall Islands</label>
    <label><input type="checkbox" value="Mauritania"> Mauritania</label>
    <label><input type="checkbox" value="Mauritius"> Mauritius</label>
    <label><input type="checkbox" value="Mexico"> Mexico</label>
    <label><input type="checkbox" value="Micronesia"> Micronesia</label>
    <label><input type="checkbox" value="Moldova"> Moldova</label>
    <label><input type="checkbox" value="Monaco"> Monaco</label>
    <label><input type="checkbox" value="Mongolia"> Mongolia</label>
    <label><input type="checkbox" value="Montenegro"> Montenegro</label>
    <label><input type="checkbox" value="Morocco"> Morocco</label>
    <label><input type="checkbox" value="Mozambique"> Mozambique</label>
    <label><input type="checkbox" value="Myanmar"> Myanmar (formerly Burma)</label>
    <label><input type="checkbox" value="Namibia"> Namibia</label>
    <label><input type="checkbox" value="Nauru"> Nauru</label>
    <label><input type="checkbox" value="Nepal"> Nepal</label>
    <label><input type="checkbox" value="Netherlands"> Netherlands</label>
    <label><input type="checkbox" value="New Zealand"> New Zealand</label>
    <label><input type="checkbox" value="Nicaragua"> Nicaragua</label>
    <label><input type="checkbox" value="Niger"> Niger</label>
    <label><input type="checkbox" value="Nigeria"> Nigeria</label>
    <label><input type="checkbox" value="North Korea"> North Korea</label>
    <label><input type="checkbox" value="North Macedonia"> North Macedonia</label>
    <label><input type="checkbox" value="Norway"> Norway</label>
    <label><input type="checkbox" value="Oman"> Oman</label>
    <label><input type="checkbox" value="Pakistan"> Pakistan</label>
    <label><input type="checkbox" value="Palau"> Palau</label>
    <label><input type="checkbox" value="Panama"> Panama</label>
    <label><input type="checkbox" value="Papua New Guinea"> Papua New Guinea</label>
    <label><input type="checkbox" value="Paraguay"> Paraguay</label>
    <label><input type="checkbox" value="Peru"> Peru</label>
    <label><input type="checkbox" value="Philippines"> Philippines</label>
    <label><input type="checkbox" value="Poland"> Poland</label>
    <label><input type="checkbox" value="Portugal"> Portugal</label>
    <label><input type="checkbox" value="Qatar"> Qatar</label>
    <label><input type="checkbox" value="Romania"> Romania</label>
    <label><input type="checkbox" value="Russia"> Russia</label>
    <label><input type="checkbox" value="Rwanda"> Rwanda</label>
    <label><input type="checkbox" value="Saint Kitts and Nevis"> Saint Kitts and Nevis</label>
    <label><input type="checkbox" value="Saint Lucia"> Saint Lucia</label>
    <label><input type="checkbox" value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines</label>
    <label><input type="checkbox" value="Samoa"> Samoa</label>
    <label><input type="checkbox" value="San Marino"> San Marino</label>
    <label><input type="checkbox" value="Sao Tome and Principe"> Sao Tome and Principe</label>
    <label><input type="checkbox" value="Saudi Arabia"> Saudi Arabia</label>
    <label><input type="checkbox" value="Senegal"> Senegal</label>
    <label><input type="checkbox" value="Serbia"> Serbia</label>
    <label><input type="checkbox" value="Seychelles"> Seychelles</label>
    <label><input type="checkbox" value="Sierra Leone"> Sierra Leone</label>
    <label><input type="checkbox" value="Singapore"> Singapore</label>
    <label><input type="checkbox" value="Slovakia"> Slovakia</label>
    <label><input type="checkbox" value="Slovenia"> Slovenia</label>
    <label><input type="checkbox" value="Solomon Islands"> Solomon Islands</label>
    <label><input type="checkbox" value="Somalia"> Somalia</label>
    <label><input type="checkbox" value="South Africa"> South Africa</label>
    <label><input type="checkbox" value="South Korea"> South Korea</label>
    <label><input type="checkbox" value="South Sudan"> South Sudan</label>
    <label><input type="checkbox" value="Spain"> Spain</label>
    <label><input type="checkbox" value="Sri Lanka"> Sri Lanka</label>
    <label><input type="checkbox" value="Sudan"> Sudan</label>
    <label><input type="checkbox" value="Suriname"> Suriname</label>
    <label><input type="checkbox" value="Sweden"> Sweden</label>
    <label><input type="checkbox" value="Switzerland"> Switzerland</label>
    <label><input type="checkbox" value="Syria"> Syria</label>
    <label><input type="checkbox" value="Taiwan"> Taiwan</label>
    <label><input type="checkbox" value="Tajikistan"> Tajikistan</label>
    <label><input type="checkbox" value="Tanzania"> Tanzania</label>
    <label><input type="checkbox" value="Thailand"> Thailand</label>
    <label><input type="checkbox" value="Timor-Leste"> Timor-Leste</label>
    <label><input type="checkbox" value="Togo"> Togo</label>
    <label><input type="checkbox" value="Tonga"> Tonga</label>
    <label><input type="checkbox" value="Trinidad and Tobago"> Trinidad and Tobago</label>
    <label><input type="checkbox" value="Tunisia"> Tunisia</label>
    <label><input type="checkbox" value="Turkey"> Turkey</label>
    <label><input type="checkbox" value="Turkmenistan"> Turkmenistan</label>
    <label><input type="checkbox" value="Tuvalu"> Tuvalu</label>
    <label><input type="checkbox" value="Uganda"> Uganda</label>
    <label><input type="checkbox" value="Ukraine"> Ukraine</label>
    <label><input type="checkbox" value="United Arab Emirates"> United Arab Emirates</label>
    <label><input type="checkbox" value="United Kingdom"> United Kingdom</label>
    <label><input type="checkbox" value="United States"> United States</label>
    <label><input type="checkbox" value="Uruguay"> Uruguay</label>
    <label><input type="checkbox" value="Uzbekistan"> Uzbekistan</label>
    <label><input type="checkbox" value="Vanuatu"> Vanuatu</label>
    <label><input type="checkbox" value="Vatican City"> Vatican City</label>
    <label><input type="checkbox" value="Venezuela"> Venezuela</label>
    <label><input type="checkbox" value="Vietnam"> Vietnam</label>
    <label><input type="checkbox" value="Yemen"> Yemen</label>
    <label><input type="checkbox" value="Zambia"> Zambia</label>
    <label><input type="checkbox" value="Zimbabwe"> Zimbabwe</label>
</div>

        </div>
    </div>
</div>

                                    <!-- Required Talent -->
                                    <div class="col-lg-12 col-6">
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
        subcategories: ['Lead role', 'Featured', 'Extras', 'Voice-over Artist', 'Body double', 'Stunt person']
    },
    {
        name: 'Model',
        subcategories: ["Art Models",
"Body Parts",
"Child",
"Commercial",
"Expecting (Pregnant)","Erotic Photography",
"Fashion (Catalogue)",
"Fitness",
"Freelance",
"Glamour","Hair Model",
"Plus-Size",
"Image / Party",
"Mature",
"Petite",
"High Fashion (Editorial)",
"Promotional",
"Runway / Catwalk",
"Stock Photography",
"Swimsuit & Lingerie"]
    },
    {
        name: 'Dancer',
        subcategories: ['Ayyala',
'Background',
'Ballet',
'Ballroom',
'Belly',
'B Boy',
'Break',
'Cabaret',
'Cheerleaders',
'Choreographers',
'Contemporary',
'Dance Group',
'Dancing Couple',
'Fictional',
'Folk',
'Samba',
'Go Go',
'Hip Hop',
'Kathak',
'Parade Away',
'Salsa',
'Sufi D',
'Swing',
'Tap']},
    
    {
        name: 'Film Crew',
      subcategories: [
  'Art Director',
  'Art & Costume',
  'Assistant Director',
  'Animation & Graphic Designer',
  'Copy Writer',
  'Camera Crew',
  'Crane Operator',
  'Director',
  'DOP',
  'Sound Crew',
  'Lighting Crew',
  'Editor',
  'Film Maker',
  'Film Producer',
  'Focus Puller Operator',
  'Line Producer',
  'Other Film & Stage Crew',
  'Post Production Staff',
  'Production Manager',
  'Photographer',
  'Runner',
  'Script Writer',
  'Sound Engineer',
  'Videographer'
]

    },
    {
        name: 'Influencers',
       subcategories: [
  'Beauty',
  'Bloggers',
  'Celebrity',
  'Fashion',
  'Fitness & Wellness',
  'Food',
  'Gaming & Tech',
  'Influencers to Attend Events',
  'Lifestyle',
  'Men’s Products',
  'Travel',
  'Women’s Products',
  'VIEW ALL'
]

    },
    {
        name: 'Makeup and Hair',
        subcategories: ['Body Painter',
'Creative Makeup Artist',
'Face Painter',
'Fashion Stylist',
'Hair Stylist',
'Henna Artist',
'Makeup Artists',
'Wardrobe Stylist']
    },
    {
        name: 'Photo | Video',
        subcategories: ['Abstract',
'Aerial',
'Architecture',
'Child',
'Commercial',
'Digital',
'Documentary',
'Event',
'Fashion',
'Film',
'Fine Art',
'Food',
'Landscape',
'Lifestyle',
'Nature',
'Portrait',
'Sports',
'Street',
'Travel',
'Wedding']
    },
    {
        name: 'Musicians',
     subcategories: [
  'Guitarist',
  'Hobbyist',
  'Independent Artist',
  'Independent Label Artist',
  'Live Performer',
  'Music Band',
  'Musician',
  'Orchestral Musician',
  'Producer - Composer',
  'Rapper',
  'Session Musician',
  'Singer',
  'Song Writer',
  'Teacher',
  'TV Show Performer',
  'Violinist'
]

    },
    {
        name: 'Event Staff and Ushers',
      subcategories: [
  'Bartender',
  'Brand Ambassador',
  'Caterer',
  'Chef',
  'Concierge',
  'Decorators',
  'Event Supervisor',
  'Host / Hostess',
  'Marketing Coordinator',
  'Promotional Staff',
  'Ushers',
  'Waitress'
]

    },
    {
        name: 'Entertainer / Performers',
        subcategories: [
  'Balloon Decorator',
  'Bottle Twister',
  'Caricature',
  'Clown',
  'Comedian',
  'Emcee',
  'Fire Artist',
  'Hypnotist',
  'Illustrationist',
  'Jugglers',
  'Live Statue',
  'Magician',
  'Media Reporter',
  'News Reader',
  'Others',
  'Public Speaker',
  'Radio Jockey RJ',
  'Shadow Performer',
  'Stand-Up Artist',
  'Stilt Walker',
  'Unicyclist',
  'Video Jockey VJ',
  'Virtual Host',
  'Voice Over'
]

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
// document.addEventListener('DOMContentLoaded', function () {
//     // When country is selected
//     $('#countryDropdown').on('change', function () {
//         const country = $(this).val();

//         // Fetch states/regions based on the selected country
//         $.ajax({
//             url: '/get-states', // Route to fetch states
//             type: 'GET',
//             data: { country: country },
//             success: function (states) {
//                 $('#stateDropdown').empty().append('<option value="" disabled selected>Select State/Region</option>');
//                 $('#cityDropdown').empty().append('<option value="" disabled selected>Select City</option>');

//                 // Populate states dropdown
//                 $.each(states, function (index, state) {
//                     $('#stateDropdown').append('<option value="' + state + '">' + state + '</option>');
//                 });
//             }
//         });
//     });

//     // When state is selected
//     $('#stateDropdown').on('change', function () {
//         const state = $(this).val();

//         // Fetch cities based on the selected state
//         $.ajax({
//             url: '/get-cities', // Route to fetch cities
//             type: 'GET',
//             data: { state: state },
//             success: function (cities) {
//                 $('#cityDropdown').empty().append('<option value="" disabled selected>Select City</option>');

//                 // Populate cities dropdown
//                 $.each(cities, function (index, city) {
//                     $('#cityDropdown').append('<option value="' + city + '">' + city + '</option>');
//                 });
//             }
//         });
//     });
// });









                </script>

                <div class="col-lg-1"> </div>

                <div class="col-md-5 col-sm-12 p-4 pt-0 text-center mt-2">
                    <!-- <<div class="card-title innertext">
                        <h1 style="text-align:center; color: white !important;"> Follow us on Instagram</h1><br>
                </div> -->


                <!-- Mobile Frame Container -->
                <div class="mobile-frame d-none d-md-block ">
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

// Event listeners for toggling forms
document.getElementById('generalInquiryBtn').addEventListener('click', function () {
    showForm('general');
});

document.getElementById('clientInquiryBtn').addEventListener('click', function () {
    showForm('client');
});

</script>

<section class="contactlist">
    <div class="mobile-frame d-flex justify-content-center  d-md-none mt-5 ">
                    <!-- Instagram Feed Iframe -->
                    <iframe src="https://cdn.lightwidget.com/widgets/0aa177f118285cf7b8c7d7abe5d7c349.html"
                        scrolling="no" allowtransparency="true" class="lightwidget-widget instagram-feed">
                    </iframe>
                </div>
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
                                        class="fa-brands fa-youtube"></i></a>
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
</script>

<script>
      // Dropdown toggle functionality for multople nationalites
      const dropdownButton = document.getElementById('dropdownButton');
    const dropdownContent = document.getElementById('dropdownContent');

    // Function to move selected checkboxes to the top
    function moveSelectedToTop() {
        const labels = dropdownContent.querySelectorAll('label');
        const selectedLabels = [];
        const unselectedLabels = [];

        // Separate selected and unselected checkboxes
        labels.forEach(label => {
            const checkbox = label.querySelector('input[type="checkbox"]');
            if (checkbox.checked) {
                selectedLabels.push(label);
                label.classList.add('selected');  // Add selected class for styling
            } else {
                unselectedLabels.push(label);
                label.classList.remove('selected');
            }
        });

        // Clear the dropdown content
        dropdownContent.innerHTML = '';

        // Append selected labels to the top
        selectedLabels.forEach(label => {
            dropdownContent.appendChild(label);
        });

        // Append unselected labels after the selected ones
        unselectedLabels.forEach(label => {
            dropdownContent.appendChild(label);
        });
    }

    // Dropdown toggle functionality
    dropdownButton.addEventListener('click', function () {
        dropdownContent.classList.toggle('dropdown-open');
    });

    // Event listener for checkbox changes
    dropdownContent.addEventListener('change', function (e) {
        if (e.target.type === 'checkbox') {
            moveSelectedToTop();
        }
    });

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
        if (!event.target.matches('#dropdownButton')) {
            var dropdowns = document.getElementsByClassName("custom-dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('dropdown-open')) {
                    openDropdown.classList.remove('dropdown-open');
                }
            }
        }
    }

    // -----------------------------------------------------------------
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
                    // Add a mouseover event to show the InfoWindow when hovering over the marker
                    google.maps.event.addListener(marker, 'mouseover', function() {
                        infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                                            'Address: ' + place.formatted_address + '</div>');
                        infowindow.open(map, this);
                    });

                    // Add a mouseout event to close the InfoWindow when the mouse leaves the marker
                    google.maps.event.addListener(marker, 'mouseout', function() {
                        infowindow.close();
                    });

                    // Add a click event to open Google Maps in a new tab
                  // Add a mouseover event to show the InfoWindow when hovering over the marker
                    google.maps.event.addListener(marker, 'mouseover', function() {
                        infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                                            'Address: ' + place.formatted_address + '</div>');
                        infowindow.open(map, this);
                    });

                    // Add a mouseout event to close the InfoWindow when the mouse leaves the marker
                    google.maps.event.addListener(marker, 'mouseout', function() {
                        infowindow.close();
                    });

                    // Add a click event to open Google Maps in a new tab
                  // Add a mouseover event to show the InfoWindow when hovering over the marker
                  google.maps.event.addListener(marker, 'mouseover', function() {
                        infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                                            'Address: ' + place.formatted_address + '</div>');
                        infowindow.open(map, this);
                    });

                    // Add a mouseout event to close the InfoWindow when the mouse leaves the marker
                    google.maps.event.addListener(marker, 'mouseout', function() {
                        infowindow.close();
                    });

                    // Add a click event to open Google Maps in a new tab
                    google.maps.event.addListener(marker, 'click', function() {
                        var googleMapsUrl = "https://www.google.com/maps/place/?q=place_id:{{ config('services.googlemaps.place_id') }}";
                        window.open(googleMapsUrl, '_blank');
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
        "Abu Dhabi": ["Abu Dhabi",
      "Al Ain",
      "Al Dhafra",
      "Mussafah",
      "Khalifa City",
      "Yas Island",
      "Saadiyat Island",
      "Al Bateen"],
        "Dubai": ["Dubai",
      "Deira",
      "Bur Dubai",
      "Jumeirah",
      "Dubai Marina",
      "Business Bay",
      "Al Barsha",
      "Al Quoz",
      "Palm Jumeirah",
      "Dubai Silicon Oasis",
      "Jumeirah Lakes Towers (JLT)",
      "Discovery Gardens"],
        "Sharjah": [  "Sharjah",
      "Khor Fakkan",
      "Dibba Al Hisn",
      "Al Dhaid",
      "Kalba",
      "Muweilah",
      "Al Nahda"],
        "Ajman": [  "Ajman",
      "Al Jurf",
      "Al Nuaimiya",
      "Musheirif"],
        "Ras Al Khaimah": [    "Ras Al Khaimah",
      "Al Hamra",
      "Al Marjan Island",
      "Dhayah",
      "Al Rams"],
        "Fujairah": [ "Fujairah",
      "Dibba Al Fujairah",
      "Mirbah",
      "Masafi",
      "Khor Fakkan"],
        "Umm Al Quwain": [ "Umm Al Quwain",
      "Al Salama",
      "Al Raas",
      "Al Haditha"]
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
        if (country === "United Arab Emirates") {
            option.selected = true; // Set UAE as the default selected option
        }
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
window.addEventListener("DOMContentLoaded", function() {
    // Your existing code to populate country and state
    populateCountryDropdown();
    const defaultCountry = "United Arab Emirates";
    populateStateDropdown(defaultCountry);
});

document.addEventListener('DOMContentLoaded', function () {
    const formContainer = document.querySelector('.form-container');
    let isInsideForm = false;

    // Detect when the user is inside the form container
    formContainer.addEventListener('mouseenter', function () {
        isInsideForm = true;
        document.body.classList.add('lock-scroll');
    });

    formContainer.addEventListener('mouseleave', function () {
        isInsideForm = false;
        document.body.classList.remove('lock-scroll');
    });

    // For mobile touch events
    formContainer.addEventListener('touchstart', function () {
        isInsideForm = true;
        document.body.classList.add('lock-scroll');
    });

    formContainer.addEventListener('touchend', function () {
        isInsideForm = false;
        document.body.classList.remove('lock-scroll');
    });

    // Allow scrolling inside the form container and prevent body scrolling
    formContainer.addEventListener('wheel', function (event) {
        if (isInsideForm) {
            event.stopPropagation(); // Prevent scroll from propagating to the body
        }
    });

    formContainer.addEventListener('touchmove', function (event) {
        if (isInsideForm) {
            event.stopPropagation(); // Prevent touchmove from propagating to the body
        }
    });

    // Prevent page scroll when inside the form container
    document.addEventListener('touchmove', function (event) {
        if (isInsideForm) {
            event.preventDefault(); // Prevent default scrolling behavior
        }
    }, { passive: false }); // Important: Set passive to false to allow preventDefault
});









</script>

{{-- <style>
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
</style> --}}
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