@extends('users.layouts.layout')

@section('title', 'Casting Talent | Dashboard')

@section('main-content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>


@php
    $existingSubscription = DB::table('memberships')->where('user_id', Auth::id())->first();
@endphp

    <style>
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
            width: 110%;
            padding: 10px;
            border: 1px solid #ccc;
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
    </style>
    
    <section class="about-sec about-margin">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="side-dash">
                        <div class="dash-flex">
                            <img class="img-fluid dash-img" src="{{ url('user-assets') }}/images/pic-41.png" alt="">
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
                                    $jobs = DB::table('job_details')->get();
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
                                                    <div class="jopbox">
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
                                                                <h5>35 AED <small>/per month</small></h5>
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
                                                                <h5>95 AED <small>/ for 3 months</small></h5>
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
                                                                <h5>175 AED <small>/ for 6 months</small></h5>
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
                                                    $jobData = DB::table('job_details')
                                                        ->where('id', $jobDetail->job_id)
                                                        ->first();

                                                    // Ensure $jobData is not null
                                                    if ($jobData && $modelData) {
                                                        // Parse the profile images string into an array
                                                        $profileImages = json_decode($modelData->profile_images);
                                                        $firstImage = $profileImages[0] ?? 'default.png'; // Default image if no profile image is available

                                                        // Calculate the age from the date of birth
                                                        $birthDate = new DateTime($modelData->date_of_birth);
                                                        $currentDate = new DateTime();
                                                        $age = $currentDate->diff($birthDate)->y;

                                                        // Example conversion for height and weight if needed
                                                        $height = $modelData->height . ' cm';
                                                        $weight = $modelData->weight . ' kg';
                                                    }
                                                @endphp

                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                    <a href="javascript:void(0);" class="text-dark">
                                                        <div class="castbox">
                                                            <div class="castimg">
                                                                @if (!empty($jobData->job_profile))
                                                                    <img src="{{ url('/uploads/job-files/' . $jobData->job_profile) }}"
                                                                        class="img-fluid" alt="Model Image">
                                                                @else
                                                                    <img src="https://st3.depositphotos.com/6672868/13701/v/450/depositphotos_137014128-stock-illustration-user-profile-icon.jpg"
                                                                        class="img-fluid" alt="Model Image">
                                                                @endif
                                                            </div>
                                                            <div class="castbody">
                                                                <h5 class="bodytheading"></strong> {{ $jobData->title }}
                                                                </h5>
                                                                <div class="castbodylist">
                                                                    <h5><strong>Gender:</strong> {{ $jobData->gender }}
                                                                    </h5>
                                                                    <h5><strong>Nationality:</strong>
                                                                        {{ $jobData->nationality }}</h5>
                                                                    <h5><strong>Location:</strong> {{ $jobData->location }}
                                                                    </h5>
                                                                    <h5><strong>Languages Spoken:</strong>
                                                                        {{ json_decode($jobData->languages_spoken, true) ? implode(', ', json_decode($jobData->languages_spoken, true)) : 'N/A' }}
                                                                    </h5>
                                                                    <h5><strong>Category:</strong> {{ $jobData->category }}
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
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
                                            <form method="post" action="{{ route('model-info.post') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="multiple_steps_container">
                                                    <div class="maintab">
                                                        <div class="tab active_tab_" data-step="1">
                                                            <div class="row">
                                                                <div
                                                                    class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <label>First Name</label>
                                                                        <input type="text" class="form-control"
                                                                            name="first_name" placeholder="First name..">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <label>Last Name</label>
                                                                        <input type="text" class="form-control"
                                                                            name="last_name" placeholder="Last name...">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <label>Date Of Birth</label>
                                                                        <input type="date" class="form-control"
                                                                            name="date_of_birth">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <label>Gender</label>
                                                                        <select class="form-select" name="gender"
                                                                            aria-label="Default select example">
                                                                            <option value="female" selected>Female</option>
                                                                            <option value="male">Male</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <label>Nationality</label>
                                                                        <select class="form-select" name="nationality"
                                                                            aria-label="Default select example">
                                                                            <option value="" disabled selected>Select
                                                                                Nationality</option>
                                                                            <option value="Afghanistan">Afghanistan
                                                                            </option>
                                                                            <option value="Albania">Albania</option>
                                                                            <option value="Algeria">Algeria</option>
                                                                            <option value="Andorra">Andorra</option>
                                                                            <option value="Angola">Angola</option>
                                                                            <option value="Antigua and Barbuda">Antigua and
                                                                                Barbuda</option>
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
                                                                            <option value="Bosnia and Herzegovina">Bosnia
                                                                                and Herzegovina</option>
                                                                            <option value="Botswana">Botswana</option>
                                                                            <option value="Brazil">Brazil</option>
                                                                            <option value="Brunei">Brunei</option>
                                                                            <option value="Bulgaria">Bulgaria</option>
                                                                            <option value="Burkina Faso">Burkina Faso
                                                                            </option>
                                                                            <option value="Burundi">Burundi</option>
                                                                            <option value="Cabo Verde">Cabo Verde</option>
                                                                            <option value="Cambodia">Cambodia</option>
                                                                            <option value="Cameroon">Cameroon</option>
                                                                            <option value="Canada">Canada</option>
                                                                            <option value="Central African Republic">
                                                                                Central African Republic</option>
                                                                            <option value="Chad">Chad</option>
                                                                            <option value="Chile">Chile</option>
                                                                            <option value="China">China</option>
                                                                            <option value="Colombia">Colombia</option>
                                                                            <option value="Comoros">Comoros</option>
                                                                            <option value="Congo (Congo-Brazzaville)">Congo
                                                                                (Congo-Brazzaville)</option>
                                                                            <option value="Costa Rica">Costa Rica</option>
                                                                            <option value="Croatia">Croatia</option>
                                                                            <option value="Cuba">Cuba</option>
                                                                            <option value="Cyprus">Cyprus</option>
                                                                            <option value="Czech Republic">Czech Republic
                                                                            </option>
                                                                            <option value="Denmark">Denmark</option>
                                                                            <option value="Djibouti">Djibouti</option>
                                                                            <option value="Dominica">Dominica</option>
                                                                            <option value="Dominican Republic">Dominican
                                                                                Republic</option>
                                                                            <option value="Ecuador">Ecuador</option>
                                                                            <option value="Egypt">Egypt</option>
                                                                            <option value="El Salvador">El Salvador
                                                                            </option>
                                                                            <option value="Equatorial Guinea">Equatorial
                                                                                Guinea</option>
                                                                            <option value="Eritrea">Eritrea</option>
                                                                            <option value="Estonia">Estonia</option>
                                                                            <option value="Eswatini (fmr. "Swaziland")">
                                                                                Eswatini (fmr. "Swaziland")</option>
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
                                                                            <option value="Guinea-Bissau">Guinea-Bissau
                                                                            </option>
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
                                                                            <option value="Liechtenstein">Liechtenstein
                                                                            </option>
                                                                            <option value="Lithuania">Lithuania</option>
                                                                            <option value="Luxembourg">Luxembourg</option>
                                                                            <option value="Madagascar">Madagascar</option>
                                                                            <option value="Malawi">Malawi</option>
                                                                            <option value="Malaysia">Malaysia</option>
                                                                            <option value="Maldives">Maldives</option>
                                                                            <option value="Mali">Mali</option>
                                                                            <option value="Malta">Malta</option>
                                                                            <option value="Marshall Islands">Marshall
                                                                                Islands</option>
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
                                                                            <option value="Myanmar">Myanmar</option>
                                                                            <option value="Namibia">Namibia</option>
                                                                            <option value="Nauru">Nauru</option>
                                                                            <option value="Nepal">Nepal</option>
                                                                            <option value="Netherlands">Netherlands
                                                                            </option>
                                                                            <option value="New Zealand">New Zealand
                                                                            </option>
                                                                            <option value="Nicaragua">Nicaragua</option>
                                                                            <option value="Niger">Niger</option>
                                                                            <option value="Nigeria">Nigeria</option>
                                                                            <option value="North Korea">North Korea
                                                                            </option>
                                                                            <option value="North Macedonia">North Macedonia
                                                                            </option>
                                                                            <option value="Norway">Norway</option>
                                                                            <option value="Oman">Oman</option>
                                                                            <option value="Pakistan">Pakistan</option>
                                                                            <option value="Palau">Palau</option>
                                                                            <option value="Palestine">Palestine</option>
                                                                            <option value="Panama">Panama</option>
                                                                            <option value="Papua New Guinea">Papua New
                                                                                Guinea</option>
                                                                            <option value="Paraguay">Paraguay</option>
                                                                            <option value="Peru">Peru</option>
                                                                            <option value="Philippines">Philippines
                                                                            </option>
                                                                            <option value="Poland">Poland</option>
                                                                            <option value="Portugal">Portugal</option>
                                                                            <option value="Qatar">Qatar</option>
                                                                            <option value="Romania">Romania</option>
                                                                            <option value="Russia">Russia</option>
                                                                            <option value="Rwanda">Rwanda</option>
                                                                            <option value="Saint Kitts and Nevis">Saint
                                                                                Kitts and Nevis</option>
                                                                            <option value="Saint Lucia">Saint Lucia
                                                                            </option>
                                                                            <option
                                                                                value="Saint Vincent and the Grenadines">
                                                                                Saint Vincent and the Grenadines</option>
                                                                            <option value="Samoa">Samoa</option>
                                                                            <option value="San Marino">San Marino</option>
                                                                            <option value="Sao Tome and Principe">Sao Tome
                                                                                and Principe</option>
                                                                            <option value="Saudi Arabia">Saudi Arabia
                                                                            </option>
                                                                            <option value="Senegal">Senegal</option>
                                                                            <option value="Serbia">Serbia</option>
                                                                            <option value="Seychelles">Seychelles</option>
                                                                            <option value="Sierra Leone">Sierra Leone
                                                                            </option>
                                                                            <option value="Singapore">Singapore</option>
                                                                            <option value="Slovakia">Slovakia</option>
                                                                            <option value="Slovenia">Slovenia</option>
                                                                            <option value="Solomon Islands">Solomon Islands
                                                                            </option>
                                                                            <option value="Somalia">Somalia</option>
                                                                            <option value="South Africa">South Africa
                                                                            </option>
                                                                            <option value="South Sudan">South Sudan
                                                                            </option>
                                                                            <option value="Spain">Spain</option>
                                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                                            <option value="Sudan">Sudan</option>
                                                                            <option value="Suriname">Suriname</option>
                                                                            <option value="Sweden">Sweden</option>
                                                                            <option value="Switzerland">Switzerland
                                                                            </option>
                                                                            <option value="Syria">Syria</option>
                                                                            <option value="Taiwan">Taiwan</option>
                                                                            <option value="Tajikistan">Tajikistan</option>
                                                                            <option value="Tanzania">Tanzania</option>
                                                                            <option value="Thailand">Thailand</option>
                                                                            <option value="Timor-Leste">Timor-Leste
                                                                            </option>
                                                                            <option value="Togo">Togo</option>
                                                                            <option value="Tonga">Tonga</option>
                                                                            <option value="Trinidad and Tobago">Trinidad
                                                                                and Tobago</option>
                                                                            <option value="Tunisia">Tunisia</option>
                                                                            <option value="Turkey">Turkey</option>
                                                                            <option value="Turkmenistan">Turkmenistan
                                                                            </option>
                                                                            <option value="Tuvalu">Tuvalu</option>
                                                                            <option value="Uganda">Uganda</option>
                                                                            <option value="Ukraine">Ukraine</option>
                                                                            <option value="United Arab Emirates">United
                                                                                Arab Emirates</option>
                                                                            <option value="United Kingdom">United Kingdom
                                                                            </option>
                                                                            <option value="United States of America">United
                                                                                States of America</option>
                                                                            <option value="Uruguay">Uruguay</option>
                                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                                            <option value="Vanuatu">Vanuatu</option>
                                                                            <option value="Vatican City">Vatican City
                                                                            </option>
                                                                            <option value="Venezuela">Venezuela</option>
                                                                            <option value="Vietnam">Vietnam</option>
                                                                            <option value="Yemen">Yemen</option>
                                                                            <option value="Zambia">Zambia</option>
                                                                            <option value="Zimbabwe">Zimbabwe</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <label>Calling Number</label>
                                                                        <input id="" type="tel" class="form-control phone-input" name="calling_number" placeholder="(000) *** ***">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <label>Whatsapp Number</label>
                                                                        <input id="phoneNumber" type="tel" class="form-control phone-input"
                                                                            name="whatsapp_number"
                                                                            placeholder="(000) *** ***">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <label>Marital Status</label>
                                                                        <label>Marital Status</label>
                                                                        <select class="form-control"
                                                                            name="marital_status">
                                                                            <option value="single" selected>Single</option>
                                                                            <option value="married">Married</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <div class="form-group">
                                                                            <label for="ethnicity">Ethnicity</label>
                                                                            <select name="ethnicity" id="ethnicity"
                                                                                class="form-control">
                                                                                <option value="">Select Ethnicity
                                                                                </option>
                                                                                <option value="african">African</option>
                                                                                <option value="african_american">African
                                                                                    American</option>
                                                                                <option value="asian">Asian</option>
                                                                                <option value="caucasian">Caucasian
                                                                                </option>
                                                                                <option value="hispanic">Hispanic</option>
                                                                                <option value="middle_eastern">Middle
                                                                                    Eastern</option>
                                                                                <option value="native_american">Native
                                                                                    American</option>
                                                                                <option value="pacific_islander">Pacific
                                                                                    Islander</option>
                                                                                <option value="south_asian">South Asian
                                                                                </option>
                                                                                <option value="mixed_race">Mixed Race
                                                                                </option>
                                                                                <option value="other">Other</option>
                                                                            </select>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                <div
                                                                    class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <label>Lives in</label>
                                                                        <select class="form-select" name="lives_in"
                                                                            aria-label="Default select example">
                                                                            <option value="United Arab Emirates" selected>
                                                                                United Arab Emirates</option>
                                                                            <option value="Afghanistan">Afghanistan
                                                                            </option>
                                                                            <option value="Albania">Albania</option>
                                                                            <option value="Algeria">Algeria</option>
                                                                            <option value="Andorra">Andorra</option>
                                                                            <option value="Angola">Angola</option>
                                                                            <option value="Antigua and Barbuda">Antigua and
                                                                                Barbuda</option>
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
                                                                            <option value="Bosnia and Herzegovina">Bosnia
                                                                                and Herzegovina</option>
                                                                            <option value="Botswana">Botswana</option>
                                                                            <option value="Brazil">Brazil</option>
                                                                            <option value="Brunei">Brunei</option>
                                                                            <option value="Bulgaria">Bulgaria</option>
                                                                            <option value="Burkina Faso">Burkina Faso
                                                                            </option>
                                                                            <option value="Burundi">Burundi</option>
                                                                            <option value="Cabo Verde">Cabo Verde</option>
                                                                            <option value="Cambodia">Cambodia</option>
                                                                            <option value="Cameroon">Cameroon</option>
                                                                            <option value="Canada">Canada</option>
                                                                            <option value="Central African Republic">
                                                                                Central African Republic</option>
                                                                            <option value="Chad">Chad</option>
                                                                            <option value="Chile">Chile</option>
                                                                            <option value="China">China</option>
                                                                            <option value="Colombia">Colombia</option>
                                                                            <option value="Comoros">Comoros</option>
                                                                            <option value="Congo (Congo-Brazzaville)">Congo
                                                                                (Congo-Brazzaville)</option>
                                                                            <option value="Costa Rica">Costa Rica</option>
                                                                            <option value="Croatia">Croatia</option>
                                                                            <option value="Cuba">Cuba</option>
                                                                            <option value="Cyprus">Cyprus</option>
                                                                            <option value="Czech Republic">Czech Republic
                                                                            </option>
                                                                            <option value="Denmark">Denmark</option>
                                                                            <option value="Djibouti">Djibouti</option>
                                                                            <option value="Dominica">Dominica</option>
                                                                            <option value="Dominican Republic">Dominican
                                                                                Republic</option>
                                                                            <option value="Ecuador">Ecuador</option>
                                                                            <option value="Egypt">Egypt</option>
                                                                            <option value="El Salvador">El Salvador
                                                                            </option>
                                                                            <option value="Equatorial Guinea">Equatorial
                                                                                Guinea</option>
                                                                            <option value="Eritrea">Eritrea</option>
                                                                            <option value="Estonia">Estonia</option>
                                                                            <option value="Eswatini (fmr. "Swaziland")">
                                                                                Eswatini (fmr. "Swaziland")</option>
                                                                            <option value="Ethiopia">Ethiopia</option>
                                                                            <option value="Fiji">Fiji</option>
                                                                            <option value="Finland">Finland</option>
                                                                            <option value="France">France</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-md-4 col-sm-12">
                                                                    <div class="contactlist">
                                                                        <label>Biography</label>
                                                                        <input type="text" class="form-control"
                                                      name="biography" placeholder="lorem epsum">
                                                </div>
                                                                </div>
                                                                <div class="col-sm-12  col-md-4 mt-3">
    <div class="contact-list-language">
        <label>Languages Spoken</label>
        <div class="language-dropdown" id="languageDropdown">
            <div class="language-dropdown-button" id="languageDropdownButton">-- Select Languages --</div>
            <div class="language-dropdown-content" id="languageDropdownContent">
                <label><input type="checkbox" value="English"> English</label>
                <label><input type="checkbox" value="Hindi"> Hindi</label>
                <label><input type="checkbox" value="Arabic"> Arabic</label>
                <label><input type="checkbox" value="French"> French</label>
                <label><input type="checkbox" value="Spanish"> Spanish</label>
                <label><input type="checkbox" value="Chinese"> Chinese</label>
                <label><input type="checkbox" value="Russian"> Russian</label>
                <label><input type="checkbox" value="Portuguese"> Portuguese</label>
                <label><input type="checkbox" value="German"> German</label>
            </div>
        </div>
    </div>
</div>
                                                   
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="row">
                                                                   <div class="col-sm-12 col-md-4">
                                                                    <div class="contactlist">
                                                                        <div class="form-group">
                                                                            <label>Driving License</label>
                                                                            <select name="driving_license"
                                                                                id="driving_license" class="form-control">
                                                                                <option value="">-- Select --
                                                                                </option>
                                                                                <option value="yes">Yes</option>
                                                                                <option value="no">No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Email</label>
                                                                        <input type="email" class="form-control"
                                                                            name="email"
                                                                            placeholder="Dummy321@gmail.com">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Instagram Username</label>
                                                                        <input type="text" class="form-control"
                                                                            name="instagram_username"
                                                                            placeholder="Instagram handle..">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Height (CM)</label>
                                                                        <input type="text" class="form-control"
                                                                            name="height_cm" placeholder="e.g., 170">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Bust (CM)</label>
                                                                        <input type="text" class="form-control"
                                                                            name="bust_cm" placeholder="e.g., 90">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Waist (CM)</label>
                                                                        <input type="text" class="form-control"
                                                                            name="waist_cm" placeholder="e.g., 60">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Hip (CM)</label>
                                                                        <input type="text" class="form-control"
                                                                            name="hip_cm" placeholder="e.g., 90">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Weight (KG)</label>
                                                                        <input type="text" class="form-control"
                                                                            name="weight_kg" placeholder="e.g., 70">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Eye Color</label>
                                                                        <input type="text" class="form-control"
                                                                            name="eyes_color" placeholder="e.g., Brown">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Hair Color</label>
                                                                        <select class="form-select" name="hair_color"
                                                                            aria-label="Default select example">
                                                                            <option value="brown" selected>Brown</option>
                                                                            <option value="black">Black</option>
                                                                            <option value="blonde">Blonde</option>
                                                                            <option value="red">Red</option>
                                                                            <option value="gray">Gray</option>
                                                                            <option value="white">White</option>
                                                                            <option value="auburn">Auburn</option>
                                                                            <option value="chestnut">Chestnut</option>
                                                                            <option value="platinum_blonde">Platinum Blonde
                                                                            </option>
                                                                            <option value="strawberry_blonde">Strawberry
                                                                                Blonde</option>
                                                                            <option value="blue">Blue</option>
                                                                            <option value="green">Green</option>
                                                                            <option value="pink">Pink</option>
                                                                            <option value="purple">Purple</option>
                                                                            <option value="silver">Silver</option>
                                                                            <option value="other">Other</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Hair Length</label>
                                                                        <select class="form-select" name="hair_length"
                                                                            aria-label="Default select example">
                                                                            <option value="long" selected>Long</option>
                                                                            <option value="medium">Medium</option>
                                                                            <option value="short">Short</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Shoe Size (EURO)</label>
                                                                        <input type="text" class="form-control"
                                                                            name="shoe_size_euro" placeholder="e.g. 12">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Dress Size (EURO)</label>
                                                                        <input type="text" class="form-control"
                                                                            name="dress_size_euro" placeholder="e.g. 12">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Your Hourly/ Session Rate</label>
                                                                        <input type="text" class="form-control"
                                                                            name="hourly_rate" placeholder="e.g. 120">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                                    <div class="contactlist">
                                                                        <label>Do You Have Tattoos?</label>
                                                                        <select class="form-select" name="have_tattoos"
                                                                            id="have_tattoos"
                                                                            aria-label="Default select example"
                                                                            onchange="toggleTattoosInput()">
                                                                            <option value="yes">Yes</option>
                                                                            <option value="no">No</option>
                                                                            <option value="other">Other</option>
                                                                        </select>
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
                                                            </div>
                                                        </div>

                                                        <div class="tab" data-step="2">
                                                            <div class="row">
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                                    <div class="caterlisttext">
                                                                        <h5>Select A Category</h5>
                                                                    </div>
                                                                    <div class="row row-cols-5 row-cols-md-5 row-cols-lg-5 row-cols-xl-5 row-cols-xxl-5">
                                                                        <div class="col">
                                                                            <div class="selectbox">
                                                                                <input type="checkbox" name="category[]" value="actors" id="category_actors">
                                                                                <label class="customselect" for="category_actors">
                                                                                    <div class="catogerybox">
                                                                                        <img src="{{ url('user-assets') }}/images/category_1.png" class="img-fluid" alt="img">
                                                                                        <h5>Actors</h5>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="selectbox">
                                                                                <input type="checkbox" name="category[]" value="models" id="category_models">
                                                                                <label class="customselect" for="category_models">
                                                                                    <div class="catogerybox">
                                                                                        <img src="{{ url('user-assets') }}/images/category_2.png" class="img-fluid" alt="img">
                                                                                        <h5>Models</h5>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="selectbox">
                                                                                <input type="checkbox" name="category[]" value="dancers_performers" id="category_dancers_performers">
                                                                                <label class="customselect" for="category_dancers_performers">
                                                                                    <div class="catogerybox">
                                                                                        <img src="{{ url('user-assets') }}/images/category_3.png" class="img-fluid" alt="img">
                                                                                        <h5>Dancers & Performers</h5>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="selectbox">
                                                                                <input type="checkbox" name="category[]" value="film_crew" id="category_film_crew">
                                                                                <label class="customselect" for="category_film_crew">
                                                                                    <div class="catogerybox">
                                                                                        <img src="{{ url('user-assets') }}/images/category_4.png" class="img-fluid" alt="img">
                                                                                        <h5>Film Crew</h5>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="selectbox">
                                                                                <input type="checkbox" name="category[]" value="musicians" id="category_musicians">
                                                                                <label class="customselect" for="category_musicians">
                                                                                    <div class="catogerybox">
                                                                                        <img src="{{ url('user-assets') }}/images/category_5.png" class="img-fluid" alt="img">
                                                                                        <h5>Musicians</h5>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="selectbox">
                                                                                <input type="checkbox" name="category[]" value="influencers" id="category_influencers">
                                                                                <label class="customselect" for="category_influencers">
                                                                                    <div class="catogerybox">
                                                                                        <img src="{{ url('user-assets') }}/images/category_6.png" class="img-fluid" alt="img">
                                                                                        <h5>Influencers</h5>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="selectbox">
                                                                                <input type="checkbox" name="category[]" value="presenters_emcees" id="category_presenters_emcees">
                                                                                <label class="customselect" for="category_presenters_emcees">
                                                                                    <div class="catogerybox">
                                                                                        <img src="{{ url('user-assets') }}/images/category_7.png" class="img-fluid" alt="img">
                                                                                        <h5>Presenters & Emcees</h5>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="selectbox">
                                                                                <input type="checkbox" name="category[]" value="event_staff_ushers" id="category_event_staff_ushers">
                                                                                <label class="customselect" for="category_event_staff_ushers">
                                                                                    <div class="catogerybox">
                                                                                        <img src="{{ url('user-assets') }}/images/category_8.png" class="img-fluid" alt="img">
                                                                                        <h5>Event Staff & Ushers</h5>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="selectbox">
                                                                                <input type="checkbox" name="category[]" value="photographers_videographers" id="category_photographers_videographers">
                                                                                <label class="customselect" for="category_photographers_videographers">
                                                                                    <div class="catogerybox">
                                                                                        <img src="{{ url('user-assets') }}/images/category_9.png" class="img-fluid" alt="img">
                                                                                        <h5>Photographers / Videographers</h5>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="selectbox">
                                                                                <input type="checkbox" name="category[]" value="makeup_hair_painter_fashion_stylists" id="category_makeup_hair_painter_fashion_stylists">
                                                                                <label class="customselect" for="category_makeup_hair_painter_fashion_stylists">
                                                                                    <div class="catogerybox">
                                                                                        <img src="{{ url('user-assets') }}/images/category_10.png" class="img-fluid" alt="img">
                                                                                        <h5>Makeup, Hair, Painter & Fashion Stylists</h5>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab" data-step="2">
                                                            <!-- Subcategories for Actors -->
                                                            <div id="actors_subcategories" class="subcategory-section" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="caterlisttext">
                                                                            <h5>Category Type - Actors</h5>
                                                                        </div>
                                                                        <div class="musicainlist">
                                                                            <ul>
                                                                                <li><label><input type="checkbox" name="category_type[]" value="main_lead" id="actor_main_lead"><label for="actor_main_lead">Main Lead</label></label></li>
                                                                                <li><label><input type="checkbox" name="category_type[]" value="featured_actors" id="actor_featured_actors"><label for="actor_featured_actors">Featured Actors</label></label></li>
                                                                                <li><label><input type="checkbox" name="category_type[]" value="body_double" id="actor_body_double"><label for="actor_body_double">Body Double</label></label></li>
                                                                                <li><label><input type="checkbox" name="category_type[]" value="mime_artist" id="actor_mime_artist"><label for="actor_mime_artist">Mime Artist</label></label></li>
                                                                                <li><label><input type="checkbox" name="category_type[]" value="stunt_person" id="actor_stunt_person"><label for="actor_stunt_person">Stunt Person</label></label></li>
                                                                                <li><label><input type="checkbox" name="category_type[]" value="extras" id="actor_extras"><label for="actor_extras">EXTRAS</label></label></li>
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
                                                                                <li><label><input type="checkbox" name="category_type[]" value="high_fashion_editorial" id="model_high_fashion_editorial"><label for="model_high_fashion_editorial">High Fashion (Editorial) Models</label></label></li>
                                                                                <li><label><input type="checkbox" name="category_type[]" value="fashion_catalogue" id="model_fashion_catalogue"><label for="model_fashion_catalogue">Fashion (Catalogue) Models</label></label></li>
                                                                                <li><label><input type="checkbox" name="category_type[]" value="commercial_models" id="model_commercial_models"><label for="model_commercial_models">Commercial Models</label></label></li>
                                                                                <li><label><input type="checkbox" name="category_type[]" value="mature_models" id="model_mature_models"><label for="model_mature_models">Mature Models</label></label></li>
                                                                                <li><label><input type="checkbox" name="category_type[]" value="promotional_models" id="model_promotional_models"><label for="model_promotional_models">Promotional Models</label></label></li>
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
                                                                                <li><label><input type="checkbox" name="category_type[]" value="ballet_dancers" id="dancer_ballet_dancers"><label for="dancer_ballet_dancers">Ballet Dancers</label></label></li>
                                                                                <li><label><input type="checkbox" name="category_type[]" value="ballroom_dancers" id="dancer_ballroom_dancers"><label for="dancer_ballroom_dancers">Ballroom Dancers</label></label></li>
                                                                                <li><label><input type="checkbox" name="category_type[]" value="baroque_dancers" id="dancer_baroque_dancers"><label for="dancer_baroque_dancers">Baroque Dancers</label></label></li>
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
                                                                                <li><label><input type="checkbox" name="category_type[]" value="makeup_artists" id="stylist_makeup_artists"><label for="stylist_makeup_artists">Makeup Artists</label></label></li>
                                                                                <li><label><input type="checkbox" name="category_type[]" value="fashion_stylists" id="stylist_fashion_stylists"><label for="stylist_fashion_stylists">Fashion Stylists</label></label></li>
                                                                                <li><label><input type="checkbox" name="category_type[]" value="hair_stylists" id="stylist_hair_stylists"><label for="stylist_hair_stylists">Hair Stylists</label></label></li>
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
                                                                                <li><label><input type="checkbox" name="category_type[]" value="fashion_photographer" id="photographer_fashion_photographer"><label for="photographer_fashion_photographer">Fashion Photographer</label></label></li>
                                                                                <li><label><input type="checkbox" name="category_type[]" value="portrait_photographer" id="photographer_portrait_photographer"><label for="photographer_portrait_photographer">Portrait Photographer</label></label></li>
                                                                                <li><label><input type="checkbox" name="category_type[]" value="landscape_photographer" id="photographer_landscape_photographer"><label for="photographer_landscape_photographer">Landscape Photographer</label></label></li>
                                                                                <li><label><input type="checkbox" name="category_type[]" value="event_videographer" id="videographer_event_videographer"><label for="videographer_event_videographer">Event Videographer</label></label></li>
                                                                                <li><label><input type="checkbox" name="category_type[]" value="wedding_videographer" id="videographer_wedding_videographer"><label for="videographer_wedding_videographer">Wedding Videographer</label></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab" data-step="2">
                                                            <div class="row">
                                                                <!-- Profile Picture Upload -->
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mx-auto">
                                                                    <div class="uploadimg">
                                                                        <h5>Upload Your Profile *</h5>
                                                                        <input type="text" id="profilePictureName"
                                                                            name="profile_picture_name"
                                                                            class="form-control" readonly>
                                                                        <div class="uploadbox">
                                                                            <input type="file" name="profile_pic"
                                                                                id="upload-profile-picture" hidden
                                                                                onchange="updateFileName('upload-profile-picture', 'profilePictureName')" />
                                                                            <label class="uploadmain"
                                                                                for="upload-profile-picture">
                                                                                <img src="{{ url('user-assets') }}/images/upload_img_4.png"
                                                                                    class="img-fluid" alt="img">
                                                                                <h6 style="font-size: 14px;">Drag and Drop your profile</h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Photo Upload -->
                                                                <div
                                                                    class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mx-auto">
                                                                    <div class="uploadimg">
                                                                        <h5>Upload Your Photos *</h5>
                                                                        <input type="text" id="profileValues"
                                                                            name="profile_photo_names"
                                                                            class="form-control" readonly>
                                                                        <div class="uploadbox">
                                                                            <input type="file" name="profiles[]"
                                                                                id="upload-file-1" hidden multiple
                                                                                onchange="updateFileNames('upload-file-1', 'profileValues')" />
                                                                            <label class="uploadmain" for="upload-file-1">
                                                                                <img src="{{ url('user-assets') }}/images/upload_img_4.png"
                                                                                    class="img-fluid" alt="img">
                                                                                <h6 style="font-size: 14px;">Drag and Drop your images</h6>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Audio Upload -->
                                                                <!--<div-->
                                                                <!--    class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mx-auto">-->
                                                                <!--    <div class="uploadimg">-->
                                                                <!--        <h5>Upload Your Voice *</h5>-->
                                                                <!--        <input type="text" id="audioFileName"-->
                                                                <!--            name="audio_file_name" class="form-control"-->
                                                                <!--            readonly>-->
                                                                <!--        <div class="uploadbox">-->
                                                                <!--            <input type="file" name="audio_file"-->
                                                                <!--                id="upload-audio" hidden-->
                                                                <!--                onchange="updateFileName('upload-audio', 'audioFileName')" />-->
                                                                <!--            <label class="uploadmain" for="upload-audio">-->
                                                                <!--                <img src="{{ url('user-assets') }}/images/audio-icn.png"-->
                                                                <!--                    class="img-fluid" alt="img">-->
                                                                <!--                <h6  style="font-size: 14px;">Drag and Drop your audio</h6>-->
                                                                <!--            </label>-->
                                                                <!--        </div>-->
                                                                <!--    </div>-->
                                                                <!--</div>-->

                                                                <!-- Video Upload -->
                                                                <!--<div-->
                                                                <!--    class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mx-auto">-->
                                                                <!--    <div class="uploadimg">-->
                                                                <!--        <h5>Upload Your Video *</h5>-->
                                                                <!--        <input type="text" id="videoFileName"-->
                                                                <!--            name="video_file_name" class="form-control"-->
                                                                <!--            readonly>-->
                                                                <!--        <div class="uploadbox">-->
                                                                <!--            <input type="file" name="video_file"-->
                                                                <!--                id="upload-video" hidden-->
                                                                <!--                onchange="updateFileName('upload-video', 'videoFileName')"-->
                                                                <!--                required />-->
                                                                <!--            <label class="uploadmain" for="upload-video">-->
                                                                <!--                <img src="{{ url('user-assets') }}/images/video-icn.png"-->
                                                                <!--                    class="img-fluid" alt="img">-->
                                                                <!--                <h6 style="font-size: 14px;">Drag and Drop your video</h6>-->
                                                                <!--            </label>-->
                                                                <!--        </div>-->
                                                                <!--    </div>-->
                                                                <!--</div>-->
                                                            </div>

                                                            <script>
                                                                function updateFileName(inputId, textId) {
                                                                    const input = document.getElementById(inputId);
                                                                    const text = document.getElementById(textId);
                                                                    const fileName = input.files.length > 0 ? input.files[0].name : '';
                                                                    text.value = fileName;
                                                                }

                                                                function updateFileNames(inputId, textId) {
                                                                    const input = document.getElementById(inputId);
                                                                    const text = document.getElementById(textId);
                                                                    const fileNames = Array.from(input.files).map(file => file.name).join(', ');
                                                                    text.value = fileNames ? `${input.files.length} file(s) selected: ${fileNames}` : '';
                                                                }
                                                            </script>

                                                        </div>

                                                    </div>
                                                    <hr>
                                                    <div class="contactlist text-center btnlist mt-5">
                                                        <button class="orange previousButtonForm" id="prevStepBtn"
                                                            style="display:none;">Back</button>
                                                        <button type="button" class="nextButtonForm"
                                                            id="nextStepBtn">Next</button>
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

    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
        document.getElementById('uploadTrigger').addEventListener('click', function() {
            document.getElementById('upload-file').click();
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
                console.log(isChecked, serviceId, servicePeriodId);
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
        $("#nextStepBtn").click(function(e) {
            // debugger
            let activeTab = $(".multiple_steps_container .tab.active_tab_")
            let input = Array.from($(activeTab)[0].querySelectorAll("input"))
            input.forEach(elem => {
                if ((elem.checked || (elem.type != "radio" && elem.value != "")) && activeTab.next()
                    .length != 0) {
                    $(activeTab).removeClass("active_tab_")
                    $(activeTab).next().addClass("active_tab_")
                    window.scrollTo({
                        top: 10,
                        behavior: 'smooth'
                    });
                    $("#prevStepBtn").css("display", "block")

                }
            })
            if ($(activeTab).nextAll().length == 1) {
                e.preventDefault()
                $(this).html("Submit")
                this.type = "submit"
            }

        })


        $("#prevStepBtn").click(function() {
            $("#nextStepBtn").html("Next")
            this.type = "button"
            let activeTab = $(".multiple_steps_container .tab.active_tab_")
            if (activeTab.prev().length != 0) {
                $(activeTab).removeClass("active_tab_")
                $(activeTab).prev().addClass("active_tab_")
                // window.scrollTo({ top: 10, behavior: 'smooth' });
                window.scrollTo({
                    top: 10
                });

            }
            if ($(activeTab).prevAll().length == 1) {
                $("#prevStepBtn").css("display", "none")
            }
        })
    </script>
    
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oPydU5Tj9L5ts9W5vS29nldU6d4XoBvTW3OWUqv9yEo=" crossorigin="anonymous"></script>
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
    </script>

@endsection
