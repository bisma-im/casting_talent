@extends('users.layouts.layout')

@section('title', 'Casting Talent | Dashboard')

@section('main-content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>


@php
    $existingSubscription = DB::table('memberships')->where('user_id', Auth::id())->first();
@endphp

    <style>
        /* Thumbnail container */
        #portfolioDropzone {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around; /* Adjusts the spacing around items */
            align-items: flex-start; /* Aligns items to the start of the flex line */
        }

        /* Style for each preview thumbnail */
        .dz-preview {
            width: calc(20% - 10px); /* Adjusts the width to be a third minus margins */
            margin: 5px;
            height: 35px;
            box-sizing: border-box;
            position: relative;  /* Ensure positioning context for the absolute elements */
            margin: 5px;
            box-sizing: border-box;
            border: 1px solid #ccc;  /* Optional, adds definition to previews */
            overflow: hidden;
        }

        .dz-image img {
            width: 100%; /* Ensures the image fills the thumbnail */
            height: 100%; /* Maintains aspect ratio */
            display: block;
        }

        /* Additional styling to ensure proper alignment and responsiveness */
        @media (max-width: 800px) {
            .dz-preview {
                width: calc(50% - 10px); /* Two images per row on smaller screens */
            }
        }

        @media (max-width: 500px) {
            .dz-preview {
                width: 100%; /* One image per row on very small screens */
            }
        }

        /* Cross for deletion */
        .dz-remove {
            position: absolute;
            top: -2px;  /* Adjust top position to make it visible */
            right: -2px;  /* Adjust right position to place it in the corner */
            z-index: 1000;  /* Ensure it is above other elements */
            font-size: 12px;  /* Adjust the size of the text or icon */
            cursor: pointer;
            background-color: #FFFFFF;  /* Background to make it stand out */
            border-radius: 50%;  /* Circular background */
            padding: 2px 3px;
        }

        /* Progress bar */
        .dz-progress {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.5);
            height: 5px;
        }

        .dz-upload {
            background-color: green;
            background: green;
            height: 100%;
            width: 0%; /* Initial state, no progress */
        }
        .dz-success .dz-upload {
            background-color: green;  // Change to green when upload is successful
        }

        .jopfooter a {
            background: rgba(28, 120, 135, 1);
            padding: 12px 29px;
            color: #fff;
            border-radius: 10px;
            font-size: 15px !important;
            transition: 1s all ease;
            border: 2px solid rgba(28, 120, 135, 1);
            width: 100%;
            display: inline-block;
            text-align: center;
        }
        
        .jopbody ul li {
            float: left;
            width: 50%;
            line-height: 25px;
            font-size: 12px;
            font-weight: 500;
            font-family: "Poppins", sans-serif;
        }
    
        .about-sec {
            padding: 150px 0px;
        }

        .side-dash {
            background-color: #fff;
            box-shadow: 0px 3px 30px #00000030;
            border: 1px solid #ffffff;
            border-radius: 10px;
        }

        .dash-flex {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 15px 0px 0px 20px;
        }

        .left-dash {
            box-shadow: 0px 3px 30px #00000030;
            border: 1px solid #ffffff;
            border-radius: 10px;
            background-color: #fff;
            padding: 15px;
        }

        .nav-pills .nav-item .nav-link {
            color: black;
            font-weight: 700;
            padding: 15px;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #1C7887;
            padding: 15px;
        }

        .tb-container1 {
            width: 100%;
            position: relative;
            border: 1px dashed;
            border-radius: 5px;
            padding: 80px;
            background-color: #F4F5F6;
        }

        .cstmlbl {
            width: 130px;
            height: 40px;
            background: #003C51;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 14px;
            border-radius: 20px;
            margin-bottom: 10px;
            /* Adjust as needed */
        }

        .checkbox {
            display: none;
        }

        .btn-up {
            padding: 5px 140px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            background-color: white;
            color: black;
            border: 2px solid #26596A;
            border-radius: 15px
        }

        .imgProfile img {
            width: 220px;
            height: 220px;
            border-radius: 50%;
        }

        .servicePeriod {
            padding: 10px;
            background: #f1f1f1;
        }

        .walks-head .slotData {
            font-size: 8px;
            width: 100%;
            padding: 5px;
            background: #00000082;
            border-radius: 20px;
        }

        .slotsMain {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .bookSer {
            padding: 10px;
            background: #d0d5d794;
            border-radius: 15px;
        }

        .ptDtaSlot {
            width: 100%;
            height: 30px;
            border: 1px solid #00132e59;
        }

        .perhour {
            font-size: 11px;
            color: #000;
            font-weight: bold;
        }

        .serprice {
            color: #fff !important;
            font-size: 15px !important;
        }

        .membershipfooter .btn {
            display: block;
            text-align: center;
            padding: 13px 0;
            font-size: 18px;
            color: #fff;
            font-weight: 600;
            border-radius: 0px 0 10px 10px;
            width: 100%;
        }
        /* Unique Dropdown button styling */
        .language-dropdown {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .language-dropdown-button {
            width: 100%;
            padding: 7px;
            border: 1px solid #0000007a;
            background-color: white;
            cursor: pointer;
            border-radius:  4px;
        }

        /* Dropdown content (hidden by default) */
        .language-dropdown-content {
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
        .language-dropdown-content label {
            display: block;
            padding: 10px;
            cursor: pointer;
        }

        .language-dropdown-content label:hover {
            background-color: #f1f1f1;
        }

        /* Show the dropdown when clicked */
        .language-dropdown-open {
            display: block;
        }

        /* Selected options styling */
        .language-selected {
            background-color: #e0ffe0;
        }

        .job-box {
            border: 1px solid #ddd;
            border-radius: 4px;
            overflow: hidden;
            background: #fff;
        }

        .job-image {
            width: 100%;
            height: 200px;
            /* Adjust height as needed */
            background-color: #333;
            /* Dark grey background */
            background-size: cover;
            background-position: center;
        }

        .job-details {
            font-size: 14px;
            color: #333;
        }

        .fw-bold {
            font-weight: bold;
        }

        .fw-normal {
            font-weight: normal;
        }

        .details-box {
            font-size: 12px;
        }

        .job-details .row div{
            margin-bottom: 3px;
            font-size: 12px;
        }
    </style>
    
    <section class="about-sec about-margin">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="side-dash">
                        <div class="dash-flex">
                            {{-- <img class="img-fluid dash-img" src="{{ url('user-assets') }}/images/pic-41.png" alt=""> --}}
                            <div class="">
                                <h6 class="dash-head"></h6>
                                <span class="dash-span"></span>
                            </div>
                        </div>
                        <hr class="height-hr">
                        <ul class="nav flex-column nav-pills" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="dashboard-tab" data-bs-toggle="pill" href="#dashboard"
                                    role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</a>
                            </li>
                            <hr class="">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="subscription-tab" data-bs-toggle="pill" href="#subscription"
                                    role="tab" aria-controls="subscription" aria-selected="false">Packages</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="jobs-tab" data-bs-toggle="pill" href="#jobs" role="tab"
                                    aria-controls="jobs" aria-selected="false">Applied Jobs</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                {{-- <a 
                                    class="nav-link {{ $existingSubscription ? '' : 'disabled' }}" 
                                    id="add-pets-tab" 
                                    data-bs-toggle="{{ $existingSubscription ? 'pill' : '' }}" 
                                    href="{{ $existingSubscription ? '#add-pets' : 'javascript:void(0);' }}" 
                                    role="tab" 
                                    aria-controls="add-pets" 
                                    aria-selected="{{ $existingSubscription ? 'true' : 'false' }}"
                                    tabindex="{{ $existingSubscription ? '0' : '-1' }}"
                                    aria-disabled="{{ $existingSubscription ? 'false' : 'true' }}"
                                    onclick="{{ $existingSubscription ? '' : 'showDisabledAlert(event)' }}"
                                >
                                    Profile Details
                                </a> --}}
                                <a 
                                    class="nav-link" 
                                    id="add-pets-tab" 
                                    data-bs-toggle="pill" 
                                    href="#add-pets" 
                                    role="tab" 
                                    aria-controls="add-pets" 
                                    aria-selected="true"
                                    tabindex="0"
                                    {{-- aria-disabled="{{ $existingSubscription ? 'false' : 'true' }}" --}}
                                    {{-- onclick="{{ $existingSubscription ? '' : 'showDisabledAlert(event)' }}" --}}
                                >
                                    Profile Details
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="{{ route('logout.get') }}"><button class="btn w-100"
                                        style="background: #1C7887; color:#f1f1f1;"><i
                                            class="fa fa-sign-out"></i></button></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-9 col-lg-9 col-xl-9">
                    <div class="tab-content" id="myTabContent">
                        <!-- My models -->
                        <div class="tab-pane fade show active" id="dashboard" role="tabpanel"
                            aria-labelledby="dashboard-tab">
                            <div class="left-dash">
                                <div class="left-main">
                                    <h4 class="left-head">Jobs</h4>
                                </div>
                                <hr>
                                 @php
                                    $jobs = DB::table('model_jobs')->get();
                                    // dump($jobs);
                                @endphp
                                <div class="serve-pad">
                                    @if ($jobs->count() > 0)
                                        @php
                                            $userId = Auth::check() ? Auth::id() : null; // Get user ID if authenticated
                                        @endphp
                                        <div class="row">
                                            @foreach ($jobs as $job)
                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                    {{-- <div class="jopbox">
                                                        <div class="jopimg castimg">
                                                            <img src="{{ $job->job_profile ? url('uploads/job-files/' . $job->job_profile) : url('https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png') }}"
                                                                class="img-fluid" alt="img">
                                                        </div>
                                                        <div class="jopbody">
                                                            <h4>{{ $job->title }}</h4>
                                                            <p>{{ $job->biography }}</p>
                                                            <h5>ROLES HIRING FOR:</h5>
                                                            <ul>
                                                                @php
                                                                    $categories = json_decode($job->category_type, true);
                                                                    $categoriesToShow = array_slice($categories, 0, 4); // Get only the first 4 categories
                                                                    
                                                                    $isApplied = false;
                                                                    if ($userId) {
                                                                        $appliedJob = DB::table('job_applieds')
                                                                                        ->where('job_applier_id', $userId)
                                                                                        ->where('job_id', $job->id)
                                                                                        ->first();
                                                                        $isApplied = $appliedJob !== null;
                                                                    }
                                                                @endphp
                                                                @foreach ($categories as $category)
                                                                    <?php $words = explode(' ', strtoupper(str_replace('_', ' ', $category))); ?>
                                                                    <li>{{ implode(' ', array_slice($words, 0, 2)) }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        @if ($isApplied)
                                                            <div class="jopfooter">
                                                                <a href="javascript:void(0);" class="btn btn-secondary">APPLIED</a>
                                                            </div>
                                                        @else
                                                            @if (Auth::check())
                                                                <div class="jopfooter">
                                                                    <a href="{{ route('job-apply.post', $job->id) }}" class="btn btn-primary">APPLY NOW</a>
                                                                </div>
                                                            @else
                                                                <div class="jopfooter">
                                                                    <a href="{{ route('login.get') }}" class="btn btn-secondary">LOGIN TO APPLY</a>
                                                                </div>
                                                            @endif
                                                        @endif
                                                    </div> --}}
                                                    <div class="job-box shadow-sm border">
                                                        <!-- Grey Image Section -->
                                                        <div class="job-image"
                                                            style="background-image: url('{{ $job->image ? url('uploads/job-files/' . $job->image) : url('https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png') }}');">
                                                        </div>
                                                        <!-- Job Content -->
                                                        <div class="job-details p-2">
                                                            <!-- Project and Required -->
                                                            <div class="row">
                                                                <div class="col-6 fw-bold text-start">PROJECT<br><span
                                                                        class="fw-normal">{{ $job->project }}</span></div>
                                                                <div class="col-6 fw-bold text-end">REQUIRED<br><span class="fw-normal">{{
                                                                        $job->required }}</span></div>
                                                            </div>
        
                                                            <!-- Date, Timings, Days, Payment -->
                                                            <div class="row">
                                                                <div class="col-6 fw-bold text-start">DATE<br><span class="fw-normal">{{
                                                                        $job->date }}</span></div>
                                                                <div class="col-6 fw-bold text-end">TIMINGS<br><span class="fw-normal">{{
                                                                        $job->timings }}</span></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6 fw-bold text-start">DAYS<br><span class="fw-normal">{{
                                                                        $job->days }}</span></div>
                                                                <div class="col-6 fw-bold text-end">PAYMENT<br><span class="fw-normal">{{
                                                                        $job->payment . ' AED' }}</span></div>
                                                            </div>
        
                                                            <!-- Location -->
                                                            <div class="fw-bold mb-2 text-center">LOCATION<br></div>
                                                            <div class="row">
                                                                <div class="col-4 fw-bold text-start">COUNTRY<br><span
                                                                        class="fw-normal">{{ $job->country }}</span></div>
                                                                <div class="col-4 fw-bold text-center">CITY<br><span class="fw-normal">{{
                                                                        $job->city }}</span></div>
                                                                <div class="col-4 fw-bold text-end">AREA<br><span class="fw-normal">{{
                                                                        $job->area }}</span></div>
                                                            </div>
        
                                                            <!-- Transportation, Food, Payment Mode, Paid -->
                                                            <div class="row">
                                                                <div class="col-6 fw-bold text-start">TRANSPORTATION<br><span
                                                                        class="fw-normal">{{ $job->transportation }}</span></div>
                                                                <div class="col-6 fw-bold text-end">FOOD<br><span class="fw-normal">{{
                                                                        $job->food }}</span></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6 fw-bold text-start">PAYMENT MODE<br><span
                                                                        class="fw-normal">{{ $job->payment_mode }}</span></div>
                                                                <div class="col-6 fw-bold text-end">PAID<br><span class="fw-normal">{{
                                                                        $job->payment_status }}</span></div>
                                                            </div>
        
                                                            <!-- Details Textarea -->
                                                            <div class="details-box p-1 text-white mb-2"
                                                                style="text-align: center; background-color: rgba(28, 120, 135, 1);">
                                                                {{ $job->details }}
                                                            </div>
        
                                                            <!-- Apply Button -->
                                                            <div class="text-center">
                                                                @if (Auth::check())
                                                                    <a href="{{ route('job-apply.post', $job->id) }}" style="background-color: rgba(28, 120, 135, 1);"
                                                                        class="btn btn-primary" >APPLY NOW</a>
                                                                @else
                                                                    @php
                                                                        $isApplied = false;
                                                                        if ($userId) {
                                                                            $appliedJob = DB::table('job_applieds')
                                                                                            ->where('job_applier_id', $userId)
                                                                                            ->where('job_id', $job->id)
                                                                                            ->first();
                                                                            $isApplied = $appliedJob !== null;
                                                                        }
                                                                    @endphp
                                                                    <button class="btn btn-secondary" style="background-color: rgba(28, 120, 135, 1);" disabled>
                                                                        APPLIED</button>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="alert alert-info">
                                            <h6>There is no jobs present yet!</h6>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- Add package tab pane -->
                        <div class="tab-pane fade" id="subscription" role="tabpanel" aria-labelledby="subscription-tab">
                            <div class="left-dash">
                                <div class="left-main">
                                    <h4 class="left-head">Subscription Details</h4>
                                </div>
                                <hr>
                                <div class="serve-pad membershipsec">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="row">
                                            <!-- Standard Package -->
                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="membershipbox member1" data-aos="fade-down"
                                                    data-aos-easing="linear" data-aos-duration="1500">
                                                    <div class="membertime">
                                                        <h4>ONE MONTH</h4>
                                                        <h3>Standard</h3>
                                                    </div>
                                                    <div class="memberbody">
                                                        <ul>
                                                            <li>UNLIMITED PHOTOS UPLOAD</li>
                                                            <li>UNLIMITED VIDEOS UPLOAD</li>
                                                            <li>UNLIMITED AUDIO CLIPS</li>
                                                            <li>PROFILE LISTED IN FEATURED MODELS</li>
                                                            <li>GET MORE EXPOSURE SEEN BY BIG BRANDS</li>
                                                            <li>MORE PREFERENCE FOR OUR IN-HOUSE PROJECTS</li>
                                                        </ul>
                                                    </div>
                                                    <div class="membershipfooter">
                                                        @if ($existingSubscription && $existingSubscription->package_name == 'standard')
                                                            <h5>35 AED <small>/per month</small></h5>
                                                            <button class="btn btn-secondary" disabled>Already
                                                                Subscribed</button>
                                                        @else
                                                            <form action="{{ route('stripe.checkout') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="package_name"
                                                                    value="standard">
                                                                <input type="hidden" name="package_price"
                                                                    value="35">
                                                                <h6 class="text-nowrap pkg">35 AED <small>/per month</small></h6>
                                                                <button class="btn" style="background: #D81F26;">Get it
                                                                    now</button>
                                                            </form>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Gold Package -->
                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="membershipbox member2" data-aos="fade-up"
                                                    data-aos-easing="linear" data-aos-duration="1500">
                                                    <div class="membertime">
                                                        <h4>3 MONTHS</h4>
                                                        <h3>GOLD</h3>
                                                    </div>
                                                    <div class="memberbody">
                                                        <ul>
                                                            <li>UNLIMITED PHOTOS UPLOAD</li>
                                                            <li>UNLIMITED VIDEOS UPLOAD</li>
                                                            <li>UNLIMITED AUDIO CLIPS</li>
                                                            <li>PROFILE LISTED IN FEATURED MODELS</li>
                                                            <li>GET MORE EXPOSURE SEEN BY BIG BRANDS</li>
                                                            <li>MORE PREFERENCE FOR OUR IN-HOUSE PROJECTS</li>
                                                        </ul>
                                                    </div>
                                                    <div class="membershipfooter">
                                                        @if ($existingSubscription && $existingSubscription->package_name == 'gold')
                                                            <h5>95 AED <small>/ for 3 months</small></h5>
                                                            <button class="btn btn-secondary" disabled>Already
                                                                Subscribed</button>
                                                        @else
                                                            <form action="{{ route('stripe.checkout') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="package_name" value="gold">
                                                                <input type="hidden" name="package_price"
                                                                    value="95">
                                                                <h6 class="text-nowrap pkg">95 AED <small>/ for 3 months</small></h6>
                                                                <button class="btn" style="background: #000;">Get it
                                                                    now</button>
                                                            </form>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Platinum Package -->
                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="membershipbox member3" data-aos="fade-down"
                                                    data-aos-easing="linear" data-aos-duration="1500">
                                                    <div class="membertime">
                                                        <h4>6 MONTHS</h4>
                                                        <h3>PLATINUM</h3>
                                                    </div>
                                                    <div class="memberbody">
                                                        <ul>
                                                            <li>UNLIMITED PHOTOS UPLOAD</li>
                                                            <li>UNLIMITED VIDEOS UPLOAD</li>
                                                            <li>UNLIMITED AUDIO CLIPS</li>
                                                            <li>PROFILE LISTED IN FEATURED MODELS</li>
                                                            <li>GET MORE EXPOSURE SEEN BY BIG BRANDS</li>
                                                            <li>MORE PREFERENCE FOR OUR IN-HOUSE PROJECTS</li>
                                                        </ul>
                                                    </div>
                                                    <div class="membershipfooter">
                                                        @if ($existingSubscription && $existingSubscription->package_name == 'platinum')
                                                            <h5>175 AED <small>/ for 6 months</small></h5>
                                                            <button class="btn btn-secondary" disabled>Already
                                                                Subscribed</button>
                                                        @else
                                                            <form action="{{ route('stripe.checkout') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="package_name"
                                                                    value="platinum">
                                                                <input type="hidden" name="package_price"
                                                                    value="175">
                                                                <h6 class="text-nowrap pkg">175 AED <small>/ for 6 months</small></h6>
                                                                <button class="btn" style="background: #1C7887;">Get it
                                                                    now</button>
                                                            </form>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @php
                            $jobApplieds = DB::table('job_applieds')->where('job_applier_id', Auth::id())->get();
                        @endphp
                        <div class="tab-pane fade" id="jobs" role="tabpanel" aria-labelledby="subscription-tab">
                            <div class="left-dash">
                                <div class="left-main">
                                    <h4 class="left-head">Applied Jobs</h4>
                                </div>
                                <hr>
                                <div class="serve-pad">
                                    @if ($jobApplieds->count() > 0)
                                        <div class="row">
                                            @foreach ($jobApplieds as $jobDetail)
                                                @php
                                                    // Fetch model details
                                                    $modelData = DB::table('model_details')
                                                        ->where('user_id', $jobDetail->job_applier_id)
                                                        ->first();

                                                    // Fetch job details
                                                    $job = DB::table('model_jobs')
                                                        ->where('id', $jobDetail->job_id)
                                                        ->first();
                                                    // dd($job);
                                                    @endphp
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-4">
                                                    <div class="job-box shadow-sm border">
                                                        <!-- Grey Image Section -->
                                                        <div class="job-image"
                                                            style="background-image: url('{{ $job->image ? url('uploads/job-files/' . $job->image) : url('https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png') }}');">
                                                        </div>
                                                        <!-- Job Content -->
                                                        <div class="job-details p-2">
                                                            <!-- Project and Required -->
                                                            <div class="row">
                                                                <div class="col-6 fw-bold text-start">PROJECT<br><span
                                                                        class="fw-normal">{{ $job->project }}</span></div>
                                                                <div class="col-6 fw-bold text-end">REQUIRED<br><span class="fw-normal">{{
                                                                        $job->required }}</span></div>
                                                            </div>

                                                            <!-- Date, Timings, Days, Payment -->
                                                            <div class="row">
                                                                <div class="col-6 fw-bold text-start">DATE<br><span class="fw-normal">{{
                                                                        $job->date }}</span></div>
                                                                <div class="col-6 fw-bold text-end">TIMINGS<br><span class="fw-normal">{{
                                                                        $job->timings }}</span></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6 fw-bold text-start">DAYS<br><span class="fw-normal">{{
                                                                        $job->days }}</span></div>
                                                                <div class="col-6 fw-bold text-end">PAYMENT<br><span class="fw-normal">{{
                                                                        $job->payment . ' AED' }}</span></div>
                                                            </div>

                                                            <!-- Location -->
                                                            <div class="fw-bold mb-2 text-center">LOCATION<br></div>
                                                            <div class="row">
                                                                <div class="col-4 fw-bold text-start">COUNTRY<br><span
                                                                        class="fw-normal">{{ $job->country }}</span></div>
                                                                <div class="col-4 fw-bold text-center">CITY<br><span class="fw-normal">{{
                                                                        $job->city }}</span></div>
                                                                <div class="col-4 fw-bold text-end">AREA<br><span class="fw-normal">{{
                                                                        $job->area }}</span></div>
                                                            </div>

                                                            <!-- Transportation, Food, Payment Mode, Paid -->
                                                            <div class="row">
                                                                <div class="col-6 fw-bold text-start">TRANSPORTATION<br><span
                                                                        class="fw-normal">{{ $job->transportation }}</span></div>
                                                                <div class="col-6 fw-bold text-end">FOOD<br><span class="fw-normal">{{
                                                                        $job->food }}</span></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6 fw-bold text-start">PAYMENT MODE<br><span
                                                                        class="fw-normal">{{ $job->payment_mode }}</span></div>
                                                                <div class="col-6 fw-bold text-end">PAID<br><span class="fw-normal">{{
                                                                        $job->payment_status }}</span></div>
                                                            </div>

                                                            <!-- Details Textarea -->
                                                            <div class="details-box p-1 text-white mb-2"
                                                                style="text-align: center; background-color: rgba(28, 120, 135, 1);">
                                                                {{ $job->details }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    @else
                                        <div class="alert alert-info">
                                            <h6>There is no job applieds data present at this time!</h6>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Add model register tab pane -->
                        @php
                            $profileInfo = DB::table('model_details')->where('user_id', Auth::id())->first();
                            // dd($profileInfo);
                        @endphp
                        <div class="tab-pane fade" id="add-pets" role="tabpanel" aria-labelledby="pets-tab">
                            <div class="left-dash">
                                <div class="left-main">
                                    <h4 class="left-head">Profile Details</h4>
                                </div>
                                <hr>
                                <div class="serve-pad">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <form method="post" id="profileDetails"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="multiple_steps_container">
                                                    <div class="maintab">
                                                        <div class="tab" data-step="1">
                                                            <div class="row">
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                                    <div class="caterlisttext">
                                                                        <h5>Select A Category</h5>
                                                                    </div>
                                                                    <div class="row  row-cols-2 row-cols-md-5">
                                                                        @php
                                                                            // Decode the JSON into an array
                                                                            $selectedCategories = isset($profileInfo) ? json_decode($profileInfo->category, true) : [];
                                                                            // Define the categories and their respective images and labels
                                                                            $categories = [
                                                                                'actors' => 'category_1.png',
                                                                                'models' => 'category_2.png',
                                                                                'dancers_performers' => 'category_3.png',
                                                                                'film_crew' => 'category_4.png',
                                                                                'musicians' => 'category_5.png',
                                                                                'influencers' => 'category_6.png',
                                                                                'presenters_emcees' => 'category_7.png',
                                                                                'event_staff_ushers' => 'category_8.png',
                                                                                'photographers_videographers' => 'category_9.png',
                                                                                'makeup_hair_painter_fashion_stylists' => 'category_10.png',
                                                                                'celebrity' => 'category_11.png'
                                                                            ];
                                                                        @endphp
                                                                        @foreach ($categories as $key => $image)
                                                                            <div class="col">
                                                                                <div class="selectbox">
                                                                                    <input type="checkbox" name="category[]" value="{{ $key }}" id="category_{{ $key }}"
                                                                                        {{ in_array($key, $selectedCategories) ? 'checked' : '' }}>
                                                                                    <label class="customselect" for="category_{{ $key }}">
                                                                                        <div class="catogerybox">
                                                                                            <img src="{{ url('user-assets/images/' . $image) }}" class="img-fluid" alt="img">
                                                                                            <h5>{{ ucfirst(str_replace('_', ' ', $key)) }}</h5>
                                                                                        </div>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab" data-step="2">
                                                            @php
                                                                $selectedSubcategories = $profileInfo ? json_decode($profileInfo->musician_categories ?? '[]', true) : [];
                                                            @endphp
                                                        
                                                            <!-- Subcategories for Actors -->
                                                            <div id="actors_subcategories" class="subcategory-section" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="caterlisttext">
                                                                            <h5>Category Type - Actors</h5>
                                                                        </div>
                                                                        <div class="musicainlist">
                                                                            <ul>
                                                                                @foreach (['main_lead', 'featured_actors', 'body_double', 'mime_artist', 'stunt_person', 'extras'] as $actorCategory)
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="category_type[]" value="{{ $actorCategory }}" id="actor_{{ $actorCategory }}"
                                                                                            {{ in_array($actorCategory, $selectedSubcategories) ? 'checked' : '' }}>
                                                                                        <label for="actor_{{ $actorCategory }}">{{ ucwords(str_replace('_', ' ', $actorCategory)) }}</label>
                                                                                    </label>
                                                                                </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                            <!-- Subcategories for Models -->
                                                            <div id="models_subcategories" class="subcategory-section" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="caterlisttext">
                                                                            <h5>Category Type - Models</h5>
                                                                        </div>
                                                                        <div class="musicainlist">
                                                                            <ul>
                                                                                @foreach ([
                                                                                    'high_fashion_editorial', 'fashion_catalogue', 'commercial_models', 'mature_models', 'erotic_photography_model',
                                                                                    'promotional_models', 'art_models', 'body_parts_models', 'child_models', 'expecting_models', 'fitness_models',
                                                                                    'freelance_models', 'glamour_models', 'hair_model', 'plus_size_models', 'party_model', 'petite_models', 'runway_models',
                                                                                    'stock_photography_model', 'swimsuit_lingerie_models'
                                                                                    ] as $modelCategory)
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="category_type[]" value="{{ $modelCategory }}" id="model_{{ $modelCategory }}"
                                                                                            {{ in_array($modelCategory, $selectedSubcategories) ? 'checked' : '' }}>
                                                                                        <label for="model_{{ $modelCategory }}">{{ ucwords(str_replace('_', ' ', $modelCategory)) }}</label>
                                                                                    </label>
                                                                                </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                            <!-- Subcategories for Dancers & Performers -->
                                                            <div id="dancers_performers_subcategories" class="subcategory-section" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="caterlisttext">
                                                                            <h5>Category Type - Dancers & Performers</h5>
                                                                        </div>
                                                                        <div class="musicainlist">
                                                                            <ul>
                                                                                @foreach ([
                                                                                    'ballet_dancers', 'ballroom_dancers', 'ayyala_dancers', 'background_dancers', 'belly_dancers', 'b_boy',
                                                                                    'break_dancers', 'cabaret_dancer', 'cheerleaders', 'choreographers', 'contemporary_dancers', 'dance_group',
                                                                                    'dancing_couples', 'fictional_dancers', 'folk_dancer', 'samba_dancers', 'go_go_dancer', 'hip_hop_dancers',
                                                                                    'kathak_dancer', 'parade_away', 'salsa_dancers', 'sufi_dancer', 'swing_dancers', 'tap_dancers'
                                                                                    ] as $dancerCategory)
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="category_type[]" value="{{ $dancerCategory }}" id="dancers_{{ $dancerCategory }}"
                                                                                            {{ in_array($dancerCategory, $selectedSubcategories) ? 'checked' : '' }}>
                                                                                        <label for="dancer_{{ $dancerCategory }}">{{ ucwords(str_replace('_', ' ', $dancerCategory)) }}</label>
                                                                                    </label>
                                                                                </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Subcategories for Film Crew -->
                                                            <div id="film_crew_subcategories" class="subcategory-section" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="caterlisttext">
                                                                            <h5>Category Type - Film Crew</h5>
                                                                        </div>
                                                                        <div class="musicainlist">
                                                                            <ul>
                                                                                @foreach ([
                                                                                    'art_director', 'art_and_costume', 'assistant_director', 'animation_and_graphic_designer', 'copy_writer', 
                                                                                    'camera_crew', 'crane_operator', 'director', 'DOP', 'sound_crew', 'lighting_crew', 'editor', 'film_maker', 
                                                                                    'film_producer', 'focus_puller_operator', 'line_producer', 'other_film_and_stage_crew', 'post_production_staff', 
                                                                                    'production_manager', 'photographer','runner', 'script_writer', 'sound_engineer', 'videographer' 
                                                                                    ] as $filmCrewCategory)
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="category_type[]" value="{{ $filmCrewCategory }}" id="film_crew_{{ $filmCrewCategory }}"
                                                                                            {{ in_array($filmCrewCategory, $selectedSubcategories) ? 'checked' : '' }}>
                                                                                        <label for="photographer_{{ $filmCrewCategory }}">{{ ucwords(str_replace('_', ' ', $filmCrewCategory)) }}</label>
                                                                                    </label>
                                                                                </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Subcategories for Musicians -->
                                                            <div id="musicians_subcategories" class="subcategory-section" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="caterlisttext">
                                                                            <h5>Category Type - Musicians</h5>
                                                                        </div>
                                                                        <div class="musicainlist">
                                                                            <ul>
                                                                                @foreach ([
                                                                                    'guitarist', 'hobbyist', 'independent_artist', 'independent_label_artist', 'live_performer', 'music_band',
                                                                                    'musician', 'orchestral_musician', 'producer_composer', 'rapper', 'session_musician', 'singer', 'song_writer', 
                                                                                    'teacher', 'tv_show_performer', 'violinist'
                                                                                    ] as $musicianCategory)
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="category_type[]" value="{{ $musicianCategory }}" id="musicians_{{ $musicianCategory }}"
                                                                                            {{ in_array($musicianCategory, $selectedSubcategories) ? 'checked' : '' }}>
                                                                                        <label for="musicians_{{ $musicianCategory }}">{{ ucwords(str_replace('_', ' ', $musicianCategory)) }}</label>
                                                                                    </label>
                                                                                </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Subcategories for Influencers -->
                                                            <div id="influencers_subcategories" class="subcategory-section" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="caterlisttext">
                                                                            <h5>Category Type - Influencers</h5>
                                                                        </div>
                                                                        <div class="musicainlist">
                                                                            <ul>
                                                                                @foreach ([
                                                                                    'beauty_influencers', 'bloggers', 'celebrity', 'fashion_influencers', 'fitness_wellness_influencers', 'food_influencers',
                                                                                    'gaming_tech_influencers', 'event_influencers', 'lifestyle_influencers', 'mens_products_influencers',  
                                                                                    'travel_influencers', 'womens_products_influencers'
                                                                                    ] as $influencerCategory)
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="category_type[]" value="{{ $influencerCategory }}" id="influencers_{{ $influencerCategory }}"
                                                                                            {{ in_array($influencerCategory, $selectedSubcategories) ? 'checked' : '' }}>
                                                                                        <label for="musicians_{{ $influencerCategory }}">{{ ucwords(str_replace('_', ' ', $influencerCategory)) }}</label>
                                                                                    </label>
                                                                                </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Subcategories for Presenter & Emcee -->
                                                            <div id="presenters_emcees_subcategories" class="subcategory-section" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="caterlisttext">
                                                                            <h5>Category Type - Presenter & Emcee</h5>
                                                                        </div>
                                                                        <div class="musicainlist">
                                                                            <ul>
                                                                                @foreach ([
                                                                                    'balloon_decorator', 'bottle_twister', 'caricature', 'clown', 'comedian', 'emcee', 'fire_artist', 'hypnotist',
                                                                                    'illustrationist', 'jugglers', 'live_statue', 'magician', 'media_reporter', 'news_reader', 'others', 'public_speaker',  
                                                                                    'radio_jockey', 'shadow_performer', 'stand_up_artist', 'stilt_walker', 'unicyclist', 'video_jockey', 'virtual_host', 'voice_over'
                                                                                    ] as $presenterEmceeCategory)
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="category_type[]" value="{{ $presenterEmceeCategory }}" id="presenters_emcees_{{ $presenterEmceeCategory }}"
                                                                                            {{ in_array($presenterEmceeCategory, $selectedSubcategories) ? 'checked' : '' }}>
                                                                                        <label for="musicians_{{ $presenterEmceeCategory }}">{{ ucwords(str_replace('_', ' ', $presenterEmceeCategory)) }}</label>
                                                                                    </label>
                                                                                </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Subcategories for Presenter & Emcee -->
                                                            <div id="event_staff_ushers_subcategories" class="subcategory-section" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="caterlisttext">
                                                                            <h5>Category Type - Event Staff & Ushers</h5>
                                                                        </div>
                                                                        <div class="musicainlist">
                                                                            <ul>
                                                                                @foreach ([
                                                                                    'bartender', 'brand_ambassador', 'caterer', 'chef', 'concierge', 'decorators', 'event_supervisor', 
                                                                                    'host_or_hostess', 'marketing_coordinator', 'promotional_staff', 'ushers', 'waitress'
                                                                                    ] as $eventStaffCategory)
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="category_type[]" value="{{ $eventStaffCategory }}" id="event_staff_{{ $eventStaffCategory }}"
                                                                                            {{ in_array($eventStaffCategory, $selectedSubcategories) ? 'checked' : '' }}>
                                                                                        <label for="musicians_{{ $eventStaffCategory }}">{{ ucwords(str_replace('_', ' ', $eventStaffCategory)) }}</label>
                                                                                    </label>
                                                                                </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                            <!-- Subcategories for Makeup, Hair, Painter & Fashion Stylists -->
                                                            <div id="makeup_hair_painter_fashion_stylists_subcategories" class="subcategory-section" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="caterlisttext">
                                                                            <h5>Category Type - Makeup, Hair, Painter & Fashion Stylists</h5>
                                                                        </div>
                                                                        <div class="musicainlist">
                                                                            <ul>
                                                                                @foreach ([
                                                                                    'makeup_artists', 'fashion_stylists', 'hair_stylists', 'body_painters', 'creative_makeup_artists',
                                                                                    'face_painter', 'henna_artist', 'wardrobe_stylist'
                                                                                    ] as $stylistCategory)
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="category_type[]" value="{{ $stylistCategory }}" id="stylist_{{ $stylistCategory }}"
                                                                                            {{ in_array($stylistCategory, $selectedSubcategories) ? 'checked' : '' }}>
                                                                                        <label for="stylist_{{ $stylistCategory }}">{{ ucwords(str_replace('_', ' ', $stylistCategory)) }}</label>
                                                                                    </label>
                                                                                </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Subcategories for Photographers / Videographers -->
                                                            <div id="photographers_videographers_subcategories" class="subcategory-section" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="caterlisttext">
                                                                            <h5>Category Type - Photographers / Videographers</h5>
                                                                        </div>
                                                                        <div class="musicainlist">
                                                                            <ul>
                                                                                @foreach ([
                                                                                    'fashion', 'portrait', 'landscape', 'event', 'wedding', 'abstract', 'aerial', 'architecture', 'child',
                                                                                    'commercial', 'digital', 'documentary', 'film', 'fine_art', 'food', 'lifestyle', 'nature', 'sports', 'street',
                                                                                    'travel'
                                                                                    ] as $photographerCategory)
                                                                                <li>
                                                                                    <label>
                                                                                        <input type="checkbox" name="category_type[]" value="{{ $photographerCategory }}" id="photographer_{{ $photographerCategory }}"
                                                                                            {{ in_array($photographerCategory, $selectedSubcategories) ? 'checked' : '' }}>
                                                                                        <label for="photographer_{{ $photographerCategory }}">{{ ucwords(str_replace('_', ' ', $photographerCategory)) }}</label>
                                                                                    </label>
                                                                                </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                        </div>     
                                                        <div class="tab" data-step="3">
                                                            <div class="row">
                                                                <div
                                                                    class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <label>First Name <span class="required">*</span></label>
                                                                        <input type="text" class="form-control" value="{{ $profileInfo->first_name ?? '' }}"
                                                                            name="first_name" placeholder="First name.." required>
                                                                            <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <label>Last Name <span class="required">*</span></label>
                                                                        <input type="text" class="form-control" value="{{ $profileInfo->last_name ?? '' }}"
                                                                            name="last_name" placeholder="Last name..." required>
                                                                            <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <label>Date Of Birth <span class="required">*</span></label>
                                                                        <input type="date" class="form-control" value="{{ $profileInfo->date_of_birth ?? '' }}"
                                                                            name="date_of_birth" required>
                                                                            <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <label>Gender <span class="required">*</span></label>
                                                                        <select class="form-select" name="gender"
                                                                            aria-label="Default select example" required>
                                                                            <option value="female" {{ (isset($profileInfo) && $profileInfo->gender === 'female') ? 'selected' : '' }}>Female</option>
                                                                            <option value="male" {{ (isset($profileInfo) && $profileInfo->gender === 'male') ? 'selected' : '' }}>Male</option>
                                                                        </select>
                                                                        <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <label>Nationality <span class="required">*</span></label>
                                                                        <select required class="form-select" name="nationality" aria-label="Default select example">
                                                                            <option value="">Select Nationality</option>
                                                                                @php
                                                                                    $nationalities = [
                                                                                        "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda",
                                                                                        "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain",
                                                                                        "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia",
                                                                                        "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso",
                                                                                        "Burundi", "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central African Republic",
                                                                                        "Chad", "Chile", "China", "Colombia", "Comoros", "Congo (Congo-Brazzaville)", "Costa Rica",
                                                                                        "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica",
                                                                                        "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea",
                                                                                        "Estonia", "Eswatini (fmr. 'Swaziland')", "Ethiopia", "Fiji", "Finland", "France",
                                                                                        "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala",
                                                                                        "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India",
                                                                                        "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan",
                                                                                        "Kazakhstan", "Kenya", "Kiribati", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon",
                                                                                        "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar",
                                                                                        "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania",
                                                                                        "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro",
                                                                                        "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand",
                                                                                        "Nicaragua", "Niger", "Nigeria", "North Korea", "North Macedonia", "Norway", "Oman",
                                                                                        "Pakistan", "Palau", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru",
                                                                                        "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis",
                                                                                        "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe",
                                                                                        "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia",
                                                                                        "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Sudan", "Spain", "Sri Lanka",
                                                                                        "Sudan", "Suriname", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania",
                                                                                        "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey",
                                                                                        "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom",
                                                                                        "United States of America", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela",
                                                                                        "Vietnam", "Yemen", "Zambia", "Zimbabwe"
                                                                                    ];

                                                                                @endphp
                                                                            @foreach ($nationalities as $nationality)
                                                                                <option value="{{ $nationality }}" {{ (isset($profileInfo) && $profileInfo->nationality === $nationality) ? 'selected' : '' }}>
                                                                                    {{ $nationality }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                        <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <div class="form-group">
                                                                            <label for="ethnicity">Ethnicity <span class="required">*</span></label>
                                                                            <select required name="ethnicity" id="ethnicity"
                                                                                class="form-control">
                                                                                <option value="">Select Ethnicity</option>
                                                                                @php
                                                                                    $ethnicities = [
                                                                                        'african' => 'African',
                                                                                        'african_american' => 'African American',
                                                                                        'asian' => 'Asian',
                                                                                        'caucasian' => 'Caucasian',
                                                                                        'hispanic' => 'Hispanic',
                                                                                        'middle_eastern' => 'Middle Eastern',
                                                                                        'native_american' => 'Native American',
                                                                                        'pacific_islander' => 'Pacific Islander',
                                                                                        'south_asian' => 'South Asian',
                                                                                        'mixed_race' => 'Mixed Race',
                                                                                        'other' => 'Other'
                                                                                    ];
                                                                                @endphp

                                                                                @foreach ($ethnicities as $key => $label)
                                                                                    <option value="{{ $key }}" {{ (isset($profileInfo) && $profileInfo->ethnicity === $key) ? 'selected' : '' }}>
                                                                                        {{ $label }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                            <span class="error-message"></span>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <label>Calling Number <span class="required">*</span></label>
                                                                        <input id="" type="tel" class="form-control phone-input"  value="{{ $profileInfo->calling_number ?? '' }}"
                                                                        name="calling_number" inputmode="numeric" oninput="this.value = this.value.replace(/\D/g, '')"  placeholder="(000) *** ***" required>
                                                                        <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <label>Whatsapp Number <span class="required">*</span></label>
                                                                        <input id="phoneNumber" type="tel" class="form-control phone-input"
                                                                            name="whatsapp_number" inputmode="numeric" oninput="this.value = this.value.replace(/\D/g, '')"  value="{{ $profileInfo->whatsapp_number ?? '' }}"
                                                                            placeholder="(000) *** ***" required>
                                                                            <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <label>Marital Status <span class="required">*</span></label>
                                                                       
                                                                        <select class="form-control" required
                                                                            name="marital_status">
                                                                            <option value="single"  {{ (isset($profileInfo) && $profileInfo->marital_status === 'single') ? 'selected' : '' }}>Single</option>
                                                                            <option value="married" {{ (isset($profileInfo) && $profileInfo->marital_status === 'married') ? 'selected' : '' }}>Married</option>
                                                                        </select>
                                                                        <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <label>Lives in <span class="required">*</span></label>
                                                                        <select class="form-select" name="lives_in" required
                                                                            aria-label="Default select example">
                                                                            @php
                                                                                $countries = [
                                                                                    'United Arab Emirates', 'Afghanistan', 'Albania', 'Algeria', 'Andorra',
                                                                                    'Angola', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Australia',
                                                                                    'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados',
                                                                                    'Belarus', 'Belgium', 'Belize', 'Benin', 'Bhutan', 'Bolivia',
                                                                                    'Bosnia and Herzegovina', 'Botswana', 'Brazil', 'Brunei', 'Bulgaria',
                                                                                    'Burkina Faso', 'Burundi', 'Cabo Verde', 'Cambodia', 'Cameroon', 'Canada',
                                                                                    'Central African Republic', 'Chad', 'Chile', 'China', 'Colombia',
                                                                                    'Comoros', 'Congo (Congo-Brazzaville)', 'Costa Rica', 'Croatia', 'Cuba',
                                                                                    'Cyprus', 'Czech Republic', 'Denmark', 'Djibouti', 'Dominica',
                                                                                    'Dominican Republic', 'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea',
                                                                                    'Eritrea', 'Estonia', 'Eswatini (fmr. "Swaziland")', 'Ethiopia', 'Fiji',
                                                                                    'Finland', 'France'
                                                                                ];
                                                                            @endphp

                                                                            @foreach ($countries as $country)
                                                                                <option value="{{ $country }}" 
                                                                                    {{ (isset($profileInfo) && $profileInfo->location === $country) || (!isset($profileInfo) && $country === 'United Arab Emirates') ? 'selected' : '' }}>
                                                                                    {{ $country }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                        <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label class="required">Visa Status <span class="required">*</span></label>
                                                                        <select class="form-select" name="visa_status" required
                                                                            aria-label="Default select example">                                                                          
                                                                            <option value="visit"  {{ (isset($profileInfo) && $profileInfo->visa_status === 'visit') ? 'selected' : '' }}>Visit Visa</option>
                                                                            <option value="residence" {{ (isset($profileInfo) && $profileInfo->visa_status === 'residence') ? 'selected' : '' }}>Residence Visa</option>
                                                                            <option value="golden" {{ (isset($profileInfo) && $profileInfo->visa_status === 'golden') ? 'selected' : '' }}>Golden Visa</option>
                                                                        </select>
                                                                        <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contact-list-language">
                                                                        <label>Languages Spoken <span class="required">*</span></label>
                                                                        <div class="language-dropdown" id="languageDropdown">
                                                                            <div class="language-dropdown-button" id="languageDropdownButton">-- Select Languages --</div>
                                                                            <div class="language-dropdown-content" id="languageDropdownContent">
                                                                                @php
                                                                                    $selectedLanguages = $profileInfo ? json_decode($profileInfo->languages_spoken, true) : [];
                                                                                @endphp
                                                                                @foreach ($languages as $language)
                                                                                    <label>
                                                                                        <input type="checkbox" name="languages_spoken[]" value="{{ $language['label'] }}"
                                                                                            {{ in_array($language, $selectedLanguages) ? 'checked' : '' }}>
                                                                                        {{ $language['label'] }}
                                                                                    </label>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                        <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                   
                                                                </div>
                                                               
                                                                <div class="row">
                                                                   <div class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <div class="form-group">
                                                                            <label>Driving License <span class="required">*</span></label>
                                                                            <select name="driving_license"
                                                                                id="driving_license" class="form-control" required>
                                                                                <option value="">-- Select --
                                                                                </option>
                                                                                <option value="yes" {{ (isset($profileInfo) && $profileInfo->driving_license === 'yes') ? 'selected' : '' }}>Yes</option>
                                                                                <option value="no" {{ (isset($profileInfo) && $profileInfo->driving_license === 'no') ? 'selected' : '' }}>No</option>
                                                                            </select>
                                                                            <span class="error-message"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Email <span class="required">*</span></label>
                                                                        <input type="email" class="form-control"
                                                                            name="email" value="{{ $profileInfo->email ?? '' }}"
                                                                            placeholder="Dummy321@gmail.com" required>
                                                                            <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Instagram Username <span class="required">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            name="instagram_username" value="{{ $profileInfo->instagram_username ?? '' }}"
                                                                            placeholder="Instagram handle.." required>
                                                                            <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div name="height"
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Height (CM) <span class="required">*</span></label>
                                                                        <input type="text" class="form-control" value="{{ $profileInfo->height ?? '' }}"
                                                                            name="height_cm" placeholder="e.g., 170" required>
                                                                            <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div name="chest"
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Chest (CM) <span class="required">*</span></label>
                                                                        <input type="text" class="form-control" value="{{ $profileInfo->bust ?? '' }}"
                                                                            name="bust_cm" placeholder="e.g., 90" required>
                                                                            <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div name="waist"
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Waist (CM) <span class="required">*</span></label>
                                                                        <input type="text" class="form-control" value="{{ $profileInfo->waist ?? '' }}"
                                                                            name="waist_cm" placeholder="e.g., 60" required>
                                                                            <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div name="hip"
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Hip (CM) <span class="required">*</span></label>
                                                                        <input type="text" class="form-control" value="{{ $profileInfo->hip ?? '' }}"
                                                                            name="hip_cm" placeholder="e.g., 90" required>
                                                                            <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div name="weight"
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Weight (KG) <span class="required">*</span></label>
                                                                        <input type="text" class="form-control" value="{{ $profileInfo->weight ?? '' }}"
                                                                            name="weight_kg" placeholder="e.g., 70" required>
                                                                            <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div name="eye"
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Eye Color <span class="required">*</span></label>
                                                                        <select class="form-select" name="eyes_color"
                                                                            aria-label="Default select example" required>
                                                                            @php
                                                                                $options = [
                                                                                    'Amber' => 'Amber',
                                                                                    'Blue' => 'Blue',
                                                                                    'Brown' => 'Brown',
                                                                                    'Gray' => 'Gray',
                                                                                    'Green' => 'Green',
                                                                                    'Hazel' => 'Hazel',
                                                                                    'Red' => 'Red',
                                                                                    'Black' => 'Black',
                                                                                    'Violet' => 'Violet'
                                                                                ];
                                                                            @endphp
                                                                            <option value="">Select eye color..</option>
                                                                            @foreach ($options as $value => $label)
                                                                                <option value="{{ $value }}" {{ (isset($profileInfo) && $profileInfo->eye_color === $value) ? 'selected' : '' }}>
                                                                                    {{ $label }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                        <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div name="hair"
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Hair Color <span class="required">*</span></label>
                                                                        <select class="form-select" name="hair_color"
                                                                            aria-label="Default select example" required>
                                                                            @php
                                                                                $options = [
                                                                                    'Brown' => 'Brown',
                                                                                    'Black' => 'Black',
                                                                                    'Blonde' => 'Blonde',
                                                                                    'Red' => 'Red',
                                                                                    'Gray' => 'Gray',
                                                                                    'White' => 'White',
                                                                                    'Auburn' => 'Auburn',
                                                                                    'chestnut' => 'Chestnut',
                                                                                    'Platinum Blonde' => 'Platinum Blonde',
                                                                                    'Strawberry Blonde' => 'Strawberry Blonde',
                                                                                    'Blue' => 'Blue',
                                                                                    'Green' => 'Green',
                                                                                    'Pink' => 'Pink',
                                                                                    'Purple' => 'Purple',
                                                                                    'Silver' => 'Silver'
                                                                                ];
                                                                            @endphp
                                                                            <option value="">Select hair color..</option>
                                                                            @foreach ($options as $value => $label)
                                                                                <option value="{{ $value }}" {{ (isset($profileInfo) && $profileInfo->hair_color === $value) ? 'selected' : '' }}>
                                                                                    {{ $label }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                        <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div name="hairlength"
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Hair Length <span class="required">*</span></label>
                                                                        <select class="form-select" name="hair_length" required
                                                                            aria-label="Default select example">
                                                                            <option value="">Select hair length..</option>
                                                                            <option value="long"  {{ (isset($profileInfo) && $profileInfo->hair_length === 'long') ? 'selected' : '' }}>Long</option>
                                                                            <option value="medium" {{ (isset($profileInfo) && $profileInfo->hair_length === 'medium') ? 'selected' : '' }}>Medium</option>
                                                                            <option value="short" {{ (isset($profileInfo) && $profileInfo->hair_length === 'short') ? 'selected' : '' }}>Short</option>
                                                                        </select>
                                                                        <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div name="shoesize"
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Shoe Size (EURO) <span class="required">*</span></label>
                                                                        <input type="text" class="form-control" value="{{ $profileInfo->shoe_size ?? '' }}"
                                                                            name="shoe_size_euro" placeholder="e.g. 12" required>
                                                                            <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div name="dresssize"
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Dress Size (EURO) <span class="required">*</span></label>
                                                                        <input type="text" class="form-control" value="{{ $profileInfo->dress_size ?? '' }}"
                                                                            name="dress_size_euro" placeholder="e.g. 12" required>
                                                                            <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Hourly/ Session Rate (AED) <span class="required">*</span></label>
                                                                        <input type="text" class="form-control" value="{{ $profileInfo->hourly_rate ?? '' }}"
                                                                            name="hourly_rate" placeholder="e.g. 120" required>
                                                                            <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Experience (Years) <span class="required">*</span></label>
                                                                        <input type="text" class="form-control" value="{{ $profileInfo->experience ?? '' }}"
                                                                            name="experience" placeholder="e.g. 4 years" required>
                                                                            <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Skills <span class="required">*</span></label>
                                                                        <select class="form-select" name="skills" required
                                                                            aria-label="Default select example">
                                                                            <option value="">Select skill level...</option>
                                                                            <option value="Fresher" <?php echo e(($profileInfo->skills ?? '') === 'Fresher' ? 'selected' : ''); ?>>Fresher</option>
                                                                            <option value="Experienced" <?php echo e(($profileInfo->skills ?? '') === 'Experienced' ? 'selected' : ''); ?>>Experienced</option>
                                                                            <option value="Expert" <?php echo e(($profileInfo->skills ?? '') === 'Expert' ? 'selected' : ''); ?>>Expert</option>
                                                                        </select>
                                                                        <span class="error-message"></span>
                                                                    </div>
                                                                </div>
                                                                <div name="tattoos"
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Do You Have Tattoos? <span class="required">*</span></label>
                                                                        <select class="form-select" name="have_tattoos" required
                                                                            id="have_tattoos"
                                                                            aria-label="Default select example"
                                                                            onchange="toggleTattoosInput()">
                                                                            <option value="">Select..</option>
                                                                            <option value="yes" {{ (isset($profileInfo) && $profileInfo->have_tattoos === 'yes' || isset($profileInfo) && $profileInfo->have_tattoos === 'Yes') ? 'selected' : '' }}>Yes</option>
                                                                            <option value="no" {{ (isset($profileInfo) && $profileInfo->have_tattoos === 'no' || isset($profileInfo) && $profileInfo->have_tattoos === 'No') ? 'selected' : '' }}>No</option>
                                                                            
                                                                        </select>
                                                                        <span class="error-message"></span>
                                                                        <input type="text" class="form-control mt-2"
                                                                            id="tattoos_other_input" name="tattoos_other"
                                                                            placeholder="Please specify"
                                                                            style="display: none;">
                                                                    </div>
                                                                    <script>
                                                                        function toggleTattoosInput() {
                                                                            var select = document.getElementById('have_tattoos');
                                                                            var input = document.getElementById('tattoos_other_input');

                                                                            if (select.value === 'other') {
                                                                                input.style.display = 'block';
                                                                            } else {
                                                                                input.style.display = 'none';
                                                                            }
                                                                        }
                                                                    </script>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="contactlist">
                                                                        <label for="Biography">Biography</label>
                                                                        <textarea class="form-control" id="biography" name="biography" rows="4" 
                                                                                placeholder="Biography..." aria-label="Biography"
                                                                            >{{ $profileInfo->biography ?? '' }}
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                                    
                                                            </div>
                                                        </div>
                                                        <div class="tab" data-step="4">
                                                            <div class="row">
                                                                <!-- Profile Picture Upload -->
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mx-auto">
                                                                    <div class="uploadimg">
                                                                        <h5>Profile Picture *</h5>
                                                                        <input type="text" id="profilePictureName"
                                                                            name="profile_picture_name"
                                                                            class="form-control" readonly>
                                                                        <div class="uploadbox">
                                                                            <input type="file" name="profile_pic"
                                                                                id="upload-profile-picture" hidden
                                                                                onchange="updateFileName('upload-profile-picture', 'profilePictureName')" />
                                                                            <label class="uploadmain text-center"
                                                                                for="upload-profile-picture">
                                                                                <i class="fa-light fa-image fa-4x m-2" style="color: #E8AF55;" aria-hidden="true"></i>
                                                                                <h6 style="font-size: 14px;">Drag and Drop your profile picture</h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Photo Upload -->
                                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mx-auto">
                                                                    <div class="uploadimg">
                                                                        <h5>Portfolio *</h5>
                                                                        <input type="text" id="profileValues"
                                                                            name="profile_photo_names"
                                                                            class="form-control" readonly>
                                                                        <div class="uploadbox">
                                                                            <div class="uploadmain text-center" for="upload-file-1" id="portfolioDropzone">
                                                                                <i class="fa-light fa-images fa-4x m-2" style="color: #E8AF55;" aria-hidden="true"></i>
                                                                                <h6 style="font-size: 14px;">Drag and Drop your images</h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>                                                     
                                                                </div>                                                                
                                                            </div>
                                                            <div class="row">
                                                                {{-- Audio Upload --}}
                                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mx-auto">
                                                                    <div class="uploadimg">
                                                                        <h5>Upload Your Voice *</h5>
                                                                        <input type="text" id="audioFileName" name="audio_file_names" class="form-control" readonly>
                                                                        <div class="uploadbox">
                                                                            {{-- <input type="file" name="audio_file" id="audio-video" hidden onchange="updateFileName('upload-audio', 'videoFileName')" required /> --}}
                                                                            <div class="uploadmain text-center" for="upload-file-1" id="audioDropzone">
                                                                                <i class="fa-light fa-images fa-4x m-2" style="color: #E8AF55;" aria-hidden="true"></i>
                                                                                <h6 style="font-size: 14px;">Drag and Drop your audio</h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                {{-- Video links --}}
                                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mx-auto">
                                                                    <div class="uploadimg">
                                                                        <h5>YouTube Video URL *</h5>
                                                                        <div id="video-url-container">
                                                                            <!-- Dynamic fields will be added here -->
                                                                            <div class="input-group mb-3">
                                                                                <input type="text" class="form-control" name="video_urls[]" placeholder="Enter YouTube URL" aria-label="YouTube URL">
                                                                                <button class="btn btn-danger remove-video-url" type="button">&times;</button>
                                                                            </div>
                                                                        </div>
                                                                        <button class="btn btn-primary mt-2" id="add-video-url" type="button">Add More</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <script>
                                                            function updateFileName(inputId, textId) {
                                                                const input = document.getElementById(inputId);
                                                                const text = document.getElementById(textId);
                                                                const fileName = input.files.length > 0 ? input.files[0].name : '';
                                                                text.value = fileName;
                                                            }
                                                        </script>
                                                            {{-- function updateFileNames(inputId, textId) {
                                                                const input = document.getElementById(inputId);
                                                                const text = document.getElementById(textId);
                                                                const fileNames = Array.from(input.files).map(file => file.name).join(', ');
                                                                text.value = fileNames ? `${input.files.length} file(s) selected: ${fileNames}` : '';
                                                            } --}}
                                                        
                                                    </div>
                                                    <hr>
                                                    <div class="contactlist text-center btnlist mt-5">
                                                        <button type="button" class="orange previousButtonForm" id="prevStepBtn" style="display:none;">Back</button>
                                                        <button type="button" class="nextButtonForm" id="nextStepBtn">Next</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    {{-- <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> --}}
    <script type="text/javascript">
        $(document).ready(function() {
            var existingSubscription = @json($existingSubscription);
            let numFiles = 5;
            // set number of files as per subscription
            if(existingSubscription !== null){
                numFiles= 20;
            }

            Dropzone.autoDiscover = false;
            new Dropzone("#portfolioDropzone", {
                url: "#",
                autoProcessQueue: false, // Do not process files automatically
                paramName: "portfolio", // The name that will be used to transfer the file
                maxFiles: numFiles,
                maxFilesize: 10, // MB
                clickable: ['#portfolioDropzone .fa-images', '#portfolioDropzone h6', '#portfolioDropzone'],dictRemoveFile: 'Remove', // Customizing the text for remove link
                dictRemoveFile: '×', 
                previewTemplate: `
                    <div class="dz-preview dz-file-preview">
                        <div class="dz-image"><img data-dz-thumbnail /></div>
                        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                        <a class="dz-remove" data-dz-remove>&times;</a>
                    </div>`,
                 acceptedFiles: 'image/*,image/jpeg,image/jpg,image/png,image/gif,image/bmp',
                init: function() {
                    this.on("addedfile", function(file) {
                        if (this.files.length > this.options.maxFiles) {
                            this.removeFile(file);
                        }
                    });
                }
            });

            new Dropzone("#audioDropzone", {
                url: "#",
                autoProcessQueue: false, // Do not process files automatically
                paramName: "audio", // The name that will be used to transfer the file
                maxFiles: numFiles,
                maxFilesize: 10, // MB
                clickable: ['#audioDropzone .fa-images', '#audioDropzone h6', '#audioDropzone'],dictRemoveFile: 'Remove', // Customizing the text for remove link
                dictRemoveFile: '×', 
                previewTemplate: `
                    <div class="dz-preview dz-file-preview">
                        <div class="dz-image"><img data-dz-thumbnail /></div>
                        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                        <a class="dz-remove" data-dz-remove>&times;</a>
                    </div>`,
                acceptedFiles: 'audio/*,audio/mpeg,audio/wav,audio/ogg',
                init: function() {
                    this.on("addedfile", function(file) {
                        if (this.files.length > this.options.maxFiles) {
                            this.removeFile(file);
                        }
                    });
                }
            });
            // $('.ckeditor').ckeditor();
        });
        // document.getElementById('uploadTrigger').addEventListener('click', function() {
        //     document.getElementById('upload-file').click();
        // });
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('video-url-container');
            const addButton = document.getElementById('add-video-url');

            // Function to create a new input group with a remove button
            function addVideoUrlInput() {
                const inputGroup = document.createElement('div');
                inputGroup.className = 'input-group mb-3';
                inputGroup.innerHTML = `
                    <input type="text" class="form-control" name="video_urls[]" placeholder="Enter YouTube URL" aria-label="YouTube URL">
                    <div class="input-group-append">
                        <button class="btn btn-danger remove-video-url" type="button">&times;</button>
                    </div>
                `;
                container.appendChild(inputGroup);

                // Add event listener for the remove button within this input group
                inputGroup.querySelector('.remove-video-url').addEventListener('click', function() {
                    container.removeChild(inputGroup);
                });
            }

            // Add initial input on load
            addVideoUrlInput();

            // Functionality to add new input fields
            addButton.addEventListener('click', addVideoUrlInput);
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.slctPkg .cstmlbl input[type="checkbox"]').change(function() {
                var isChecked = $(this).prop('checked');
                var serviceId = $(this).attr('id');
                var servicePeriodId = serviceId + 'ServicePeriod';
                if (isChecked) {
                    $(this).parent().css('background-color', 'rgb(0 114 0 / 72%)');
                    $('#' + servicePeriodId).show();
                } else {
                    $(this).parent().css('background-color', '#003C51');
                    $('#' + servicePeriodId).hide();
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            const fieldsToHide = ['bust_cm', 'waist_cm', 'hip_cm', 'weight_kg', 'eyes_color', 'hair_color', 'hair_length', 'shoe_size_euro', 'dress_size_euro', 'have_tattoos'];
            const fieldsToShow = ['experience', 'skills'];
            // Function to check the selected categories and show/hide form fields
            function checkCategoriesAndAdjustFields() {
                // Categories that trigger hiding the fields
                const categoriesToCheck = ['makeup_hair_painter_fashion_stylists', 'photographers_videographers', 'film_crew'];
                let selectedCategories = [];

                $('input[name="category[]"]:checked').each(function() {
                    selectedCategories.push($(this).val());
                });

                // Check if any of the specified categories are selected
                // const shouldHideFields = categoriesToCheck.some(category => selectedCategories.includes(category));
                // Check if all selected categories are within the exclusive categories list
                const shouldHideFields = selectedCategories && selectedCategories.length > 0 && selectedCategories.every(cat => categoriesToCheck.includes(cat));
                // Show or hide fields based on the presence of specified categories
                fieldsToHide.forEach(field => {
                    let $field = $(`input[name="${field}"], select[name="${field}"]`);
                    if (shouldHideFields) {
                        $field.closest('.col-12').hide();
                        $field.prop('required', false); // Remove required if hidden
                    } else {
                        $field.closest('.col-12').show();
                        $field.prop('required', true); // Set required if visible
                    }
                });

                fieldsToShow.forEach(field => {
                    let $field = $(`input[name="${field}"], select[name="${field}"]`);
                    if (shouldHideFields) {
                        $field.closest('.col-12').show();
                        $field.prop('required', true); // Set required if visible
                    } else {
                        $field.closest('.col-12').hide();
                        $field.prop('required', false); // Remove required if hidden
                    }
                });
            }

            // Function to show or hide subcategory sections based on the parent category selection
            function toggleSubcategories() {
                // Iterate over each checkbox for parent categories
                $('input[name="category[]"]').each(function() {
                    // Determine the ID of the subcategory section based on the checkbox value
                    let subcategoryId = '#' + $(this).val() + '_subcategories';
                    // Check if the checkbox is checked
                    if ($(this).is(':checked')) {
                        $(subcategoryId).show(); // Show the subcategory section
                    } else {
                        $(subcategoryId).hide(); // Hide the subcategory section
                    }
                });
            }

            // Call the function on page load to handle pre-selected categories
            toggleSubcategories();
            // Initial check on page load
            checkCategoriesAndAdjustFields();

            // Attach a change event listener to the parent category checkboxes
            $('input[name="category[]"]').on('change', function() {
                // Call the function to show or hide subcategories when a checkbox changes state
                toggleSubcategories();
                checkCategoriesAndAdjustFields();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Function to check required fields
            function validateInput(input) {
                let value = $(input).val();
                let messageBox = $(input).next('.error-message');

                if (value === '') {
                    $(input).addClass('invalid');
                    messageBox.text('This field is required').show();
                    return false;
                } else {
                    $(input).removeClass('invalid');
                    messageBox.hide();
                    return true;
                }
            }

            // Validate input on blur
            $('.form-control, .form-select').blur(function() {
                validateInput(this);
            });

            // Initially set the first tab as active
            $('.multiple_steps_container .tab[data-step="1"]').addClass('active_tab_');

            $("#nextStepBtn").click(function(e) {
                let activeTab = $(".multiple_steps_container .tab.active_tab_");
                let nextTab = $(activeTab).next('.tab');
                
                // Validate categories on the first tab
                if ($(activeTab).data("step") === 1) {
                    if ($('input[name="category[]"]:checked').length === 0) {
                        alert("Please select at least one category before proceeding.");
                        return false; // Stop the function execution here if no categories are selected
                    }
                }

                // Validate input fields on third tab
                if ($(activeTab).data("step") === 3) {
                    let isValid = true;
                    var inputs = activeTab.find('input[required], select[required], textarea[required]');

                    inputs.each(function() {
                        console.log(this.name, validateInput(this));
                        if (!validateInput(this)) {
                            isValid = false;
                        } 
                    });

                    if (!isValid) {
                        e.preventDefault(); // Prevent form submission if validation fails
                        return;
                        // alert('Please fill all required fields.');
                    }
                }

                if (nextTab.length != 0) {
                    $(activeTab).removeClass("active_tab_");
                    $(nextTab).addClass("active_tab_");
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });

                    $("#prevStepBtn").css("display", "block");
                }

                // Check if the new active tab is the Portfolio Upload Tab
                setTimeout(()=> {
                    if ($(nextTab).data("step") === 4) {
                    $("#nextStepBtn").html("Submit");
                    $("#nextStepBtn").attr("type", "submit");
                }
                }, 1000)
            });

            $("#prevStepBtn").click(function() {
                let activeTab = $(".multiple_steps_container .tab.active_tab_");
                let prevTab = $(activeTab).prev('.tab');
                let nextTab = $(activeTab).next('.tab');

                if ($(nextTab).data("step") !== 4) {
                    $("#nextStepBtn").html("Next");
                    $("#nextStepBtn").attr("type", "button");
                }

                if (prevTab.length != 0) {
                    $(activeTab).removeClass("active_tab_");
                    $(prevTab).addClass("active_tab_");
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                }

                if ($(prevTab).is(':first-child')) {
                    $(this).css("display", "none");
                }

                // Reset to "Next" when going back unless it's the last tab
                if (!$(prevTab).next().is('[data-step="4"]')) {
                    $("#nextStepBtn").html("Next");
                    $("#nextStepBtn").attr("type", "button");
                }
            });
        });
    </script>
    
    <!-- jQuery CDN -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oPydU5Tj9L5ts9W5vS29nldU6d4XoBvTW3OWUqv9yEo=" crossorigin="anonymous"></script> --}}
    <script>
        function showDisabledAlert(event) {
            event.preventDefault(); // Prevent the default action (e.g., navigation)
            alert('You need an active subscription to access this section.');
        }
    </script>
    
    
    <!-- JavaScript to handle the display logic -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categories = document.querySelectorAll('input[name="category[]"]');
            const subcategorySections = document.querySelectorAll('.subcategory-section');

            categories.forEach(category => {
                category.addEventListener('change', function() {
                    // Hide all subcategory sections
                    subcategorySections.forEach(section => section.style.display = 'none');

                    // Show relevant subcategory section if checked
                    if (this.checked) {
                        const selectedCategory = this.value;
                        const subcategorySection = document.getElementById(`${selectedCategory}_subcategories`);
                        if (subcategorySection) {
                            subcategorySection.style.display = 'block';
                        }
                    }
                });
            });
        });
    </script>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Select all phone input fields
            var phoneInputs = document.querySelectorAll(".phone-input");
            
            // Initialize intl-tel-input for each phone input field
            phoneInputs.forEach(function(input) {
                window.intlTelInput(input, {
                    initialCountry: "ae", // Set the default country if needed
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // Optional
                });
            });
        });


        // -------------------Languages ----------------------
         // Get elements
        const languageDropdownButton = document.getElementById('languageDropdownButton');
        const languageDropdownContent = document.getElementById('languageDropdownContent');

        // Dropdown toggle functionality
        languageDropdownButton.addEventListener('click', function () {
            languageDropdownContent.classList.toggle('language-dropdown-open');
        });

        // Function to move selected checkboxes to the top
        function moveSelectedLanguagesToTop() {
            const labels = languageDropdownContent.querySelectorAll('label');
            const selectedLabels = [];
            const unselectedLabels = [];

            // Separate selected and unselected checkboxes
            labels.forEach(label => {
                const checkbox = label.querySelector('input[type="checkbox"]');
                if (checkbox.checked) {
                    selectedLabels.push(label);
                    label.classList.add('language-selected');  // Add selected class for styling
                } else {
                    unselectedLabels.push(label);
                    label.classList.remove('language-selected');
                }
            });

            // Clear the dropdown content
            languageDropdownContent.innerHTML = '';

            // Append selected labels to the top
            selectedLabels.forEach(label => {
                languageDropdownContent.appendChild(label);
            });

            // Append unselected labels after the selected ones
            unselectedLabels.forEach(label => {
                languageDropdownContent.appendChild(label);
            });
        }

        // Event listener for checkbox changes
        languageDropdownContent.addEventListener('change', function (e) {
            if (e.target.type === 'checkbox') {
                moveSelectedLanguagesToTop();
            }
        });

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('#languageDropdownButton')) {
                const dropdowns = document.getElementsByClassName("language-dropdown-content");
                for (let i = 0; i < dropdowns.length; i++) {
                    const openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('language-dropdown-open')) {
                        openDropdown.classList.remove('language-dropdown-open');
                    }
                }
            }
        }
    
        $(document).ready(function() {
            $('#profileDetails').submit(function(event) {
                event.preventDefault(); // Prevent the default form submit
                
                $("#nextStepBtn").prop('disabled', true).text('Please wait...');
                var formData = new FormData(this);
                const portfolioDropzoneElement = document.querySelector('#portfolioDropzone');
                if (portfolioDropzoneElement.dropzone) {
                    const files = portfolioDropzoneElement.dropzone.files;
                    files.forEach((file) => {
                        formData.append('portfolio[]', file, file.name);
                    });
                }
                const audioDropzoneElement = document.querySelector('#audioDropzone');
                if (audioDropzoneElement.dropzone) {
                    const files = audioDropzoneElement.dropzone.files;
                    files.forEach((file) => {
                        formData.append('audio[]', file, file.name);
                    });
                }

                // Collect all video URLs and add them to formData
                const videoUrls = [];
                document.querySelectorAll('input[name="video_urls[]"]').forEach(input => {
                    videoUrls.push(input.value);
                });
                formData.append('video_urls', JSON.stringify(videoUrls));
                $.ajax({
                    url: '{{ route("model-info.post") }}',
                    type: 'POST',
                    data: formData, // Serializes the form's elements.
                    processData: false,  // Important: don't process data into a query string
                    contentType: false, 
                    dataType: 'json', // Expecting JSON response
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Ensure CSRF token is included if POST
                    },
                    success: function(data) {
                        if(data.success) {
                            toastr.success(data.success); // Display success message using toastr
                            location.reload();
                            // console.log(data.success);
                        } else if(data.error) {
                            // console.log(data.error);
                            toastr.error(data.error);
                        }
                    },
                    error: function(xhr, status, error) {
                        // Use toastr to display the error message
                        toastr.error('Request failed: ' + error);
                    },
                    complete: function() {
                        // Re-enable the button whether the AJAX call was successful or failed
                        $('#nextStepBtn').prop('disabled', false).text('Submit');
                    }
                });
            });
        });
    </script>

@endsection
