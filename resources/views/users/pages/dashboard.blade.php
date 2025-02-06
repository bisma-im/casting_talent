@extends('users.layouts.layout')
@section('title', 'Casting Talent | Dashboard')
@section('main-content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>





<style>
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
   .progress {
    height: 30px;
}
.progress-bar {
    font-weight: bold;
    line-height: 30px;
}


/* ----------------------------------------------------- */
.form-group {
            margin-bottom: 20px;
        }

        .form-control, .form-select {
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
            padding-left: 50px; /* Ensure enough padding for the flag inside the input */
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
 .text{
               font-size: 14px;
               

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
    max-height: 350px; /* Increase max height to avoid scrolling too soon */
    overflow-y: auto;
    display: none; /* Hidden until the dropdown button is clicked */
    transition: max-height 0.3s ease-in-out;
    width: 250px; /* Adjusted width for better readability */
}


/* Dropdown Button Styles */
#dropdown-btn {
    width: 100%;
    padding: 10px;
    background-color: #6c757d; /* Button color */
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
    background-color: #888; /* Scrollbar thumb color */
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
    max-height: none; /* Remove max height when a subcategory is open */
}

.my-col {
   flex: 0 0 25%;
    max-width: 25%;
    padding: 0 7px;
}
@media (max-width: 768px) {
   .my-col {
      flex: 0 0 50%;
      max-width: 50%;
   }
}
</style>
@php
@endphp
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
                     <a class="nav-link" id="add-profile-tab" data-bs-toggle="pill" href="#add-profile"
                        role="tab" aria-controls="add-profile" aria-selected="false">Profile Details</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="add-job-tab" data-bs-toggle="pill" href="#add-job" role="tab"
                        aria-controls="add-job" aria-selected="false">Job Details</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="job-apply-tab" data-bs-toggle="pill" href="#job-apply" role="tab"
                        aria-controls="job-apply" aria-selected="false">Job & Requests</a>
                  </li>
                  {{-- 
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="add-pets-tab" data-bs-toggle="pill" href="#add-pets" role="tab"
                        aria-controls="add-pets" aria-selected="false">Model Details</a>
                  </li>
                  --}}
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
                        <h4 class="left-head">Models</h4>
                     </div>
                     <hr>
                     @php
                     $myModels = DB::table('model_details')->get();
                     // dump($myModels);
                     @endphp
                     <div class="serve-pad">
                        @if ($myModels->count() > 0)
                        <div class="row">
                           @foreach ($myModels as $modelDetail)
                           @php
                           // Parse the profile images string into an array
                           $profileImages = json_decode($modelDetail->profile_images);
                           $firstImage = $profileImages[0] ?? 'default.png'; // Default image if no profile image is available
                           // Calculate the age from the date of birth
                           $birthDate = new DateTime($modelDetail->date_of_birth);
                           $currentDate = new DateTime();
                           $age = $currentDate->diff($birthDate)->y;
                           // Example conversion for height and weight if needed
                           $height = $modelDetail->height . ' ' . 'cm';
                           $weight = $modelDetail->weight . ' ' . 'kg';
                           @endphp
                           <div class="col my-col">
                              <a href="{{ route('model-info.get', $modelDetail->id) }}" class="text-dark">
                                  <div class="castbox mb-3">
                                      {{-- <span class="bodytheading">{{ $modelDetail->gender }}</span> --}}
                                      <div class="castimg">
                                          <img src="{{ url('/uploads/models/profile-pics/' . $modelDetail->profile) }}" class="img-fluid"
                                              alt="Model Image">
                                      </div>
                                      <div class="castbody">
                                          <div class="castbox-code text-center">
                                              <!-- Insert code related content here -->
                                              {{ $modelDetail->talent_id }}
                                          </div>
                                          <div class="castbox-info text-center">
                                              {{ $age . ', ' . $modelDetail->nationality }}
                                              <!-- Insert age, nationality, etc., here -->
                                          </div>
                                      </div>
                                  </div>
                              </a>
                          </div>
                           @endforeach
                        </div>
                        @else
                        <div class="alert alert-info">
                           <h6>There is no models data present at this time!</h6>
                        </div>
                        @endif
                     </div>
                  </div>
               </div>
               <!-- Add Profile tab pane -->
               <div class="tab-pane fade" id="add-profile" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="left-dash">
                     <div class="left-main">
                        <h4 class="left-head">Profile Details</h4>
                     </div>
                     <hr>
                     @php
                     $userInfo = DB::table('profile_details')->where('user_id', Auth::id())->first();
                     // dd($userInfo);
                     @endphp
                     <div class="serve-pad">
                        <div class="row">
                           <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                              <form action="{{ route('profile-info.post') }}" method="POST"
                                 enctype="multipart/form-data">
                                 @csrf
                                 <div class="form-group text-center">
                                    <div class="imgProfile">
                                       @if (isset($userInfo->profile_image) && $userInfo->profile_image)
                                       <img src="{{ url('/uploads/profiles/' . $userInfo->profile_image) }}"
                                          alt="Profile Image" id="profile-image-preview"
                                          style="width: 150px; height: 150px; object-fit: cover;">
                                       @else
                                       <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwBLo7116opOkL7J29zHKQmiW-Wpkaf5bNriqFwgJ8SVN6DXXaNw4trSyrWNooitYDzu4&usqp=CAU"
                                          alt="Profile Image" id="profile-image-preview"
                                          style="width: 150px; height: 150px; object-fit: cover;">
                                       @endif
                                    </div>
                                    <div>
                                       <input type="file" name="profile" id="upload-file" hidden
                                          onchange="previewImage(event)" />
                                       <label class="btn-up" for="upload-file">Upload</label>
                                    </div>
                                 </div>
                                 <hr>
                                 @if ($errors->any())
                                 <div class="alert alert-danger">
                                    <ul>
                                       @foreach ($errors->all() as $error)
                                       <li>{{ $error }}</li>
                                       @endforeach
                                    </ul>
                                 </div>
                                 @endif
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="contactlist">
                                          <label>First Name</label>
                                          <input type="text" class="form-control" name="first_name"
                                             placeholder="First Name"
                                             value="{{ old('first_name', $userInfo->first_name ?? '') }}"
                                             required>
                                          @error('first_name')
                                          <div class="text-danger">{{ $message }}</div>
                                          @enderror
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="contactlist">
                                          <label>Last Name</label>
                                          <input type="text" class="form-control" name="last_name"
                                             placeholder="Last Name"
                                             value="{{ old('last_name', $userInfo->last_name ?? '') }}"
                                             required>
                                          @error('last_name')
                                          <div class="text-danger">{{ $message }}</div>
                                          @enderror
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="contactlist">
                                          <label for="whatsapp_number">Whatsapp Number</label>
                                          <br>
                                          <input type="tel" class="form-control phone-input w-100"
                                             name="whatsapp_number"  placeholder="+971 50 123 4567"
                                             value="{{ old('whatsapp_number', $userInfo->whatsapp_number ?? '+971') }}"
                                             required style="width: 389px !important;">
                                          @error('whatsapp_number')
                                          <div class="text-danger">{{ $message }}</div>
                                          @enderror
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="contactlist">
                                          <label>Email</label>
                                          <input type="email" class="form-control" name="email"
                                             placeholder="your.email@example.com"
                                             value="{{ old('email', Auth::user()->email ?? '') }}"
                                             required readonly>
                                          @error('email')
                                          <div class="text-danger">{{ $message }}</div>
                                          @enderror
                                       </div>
                                    </div>
                                 </div>
                                 <!--<div class="row">-->
                                 <!--    <div class="col-md-6">-->
                                 <!--        <div class="contactlist">-->
                                 <!--            <label>No Of Days</label>-->
                                 <!--            <input type="number" class="form-control" name="no_of_days"-->
                                 <!--                placeholder="12"-->
                                 <!--                value="{{ old('no_of_days', $userInfo->no_of_days ?? '') }}"-->
                                 <!--                required>-->
                                 <!--            @error('no_of_days')-->
                                 <!--                <div class="text-danger">{{ $message }}</div>-->
                                 <!--            @enderror-->
                                 <!--        </div>-->
                                 <!--    </div>-->
                                 <!--    <div class="col-md-6">-->
                                 <!--        <div class="contactlist">-->
                                 <!--            <label>No Of Hours</label>-->
                                 <!--            <input type="number" class="form-control" name="no_of_hours"-->
                                 <!--                placeholder="12"-->
                                 <!--                value="{{ old('no_of_hours', $userInfo->no_of_hours ?? '') }}"-->
                                 <!--                required>-->
                                 <!--            @error('no_of_hours')-->
                                 <!--                <div class="text-danger">{{ $message }}</div>-->
                                 <!--            @enderror-->
                                 <!--        </div>-->
                                 <!--    </div>-->
                                 <!--</div>-->
                                 <!--<div class="row">-->
                                 <!--    <div class="col-md-6">-->
                                 <!--        <div class="contactlist">-->
                                 <!--            <label>No Of Talents (Male)</label>-->
                                 <!--            <input type="number" class="form-control"-->
                                 <!--                name="no_of_talents_male"-->
                                 <!--                placeholder="Number of Male Talents"-->
                                 <!--                value="{{ old('no_of_talents_male', $userInfo->no_of_talents_male ?? '') }}"-->
                                 <!--                required>-->
                                 <!--            @error('no_of_talents_male')-->
                                 <!--                <div class="text-danger">{{ $message }}</div>-->
                                 <!--            @enderror-->
                                 <!--        </div>-->
                                 <!--    </div>-->
                                 <!--    <div class="col-md-6">-->
                                 <!--        <div class="contactlist">-->
                                 <!--            <label>No Of Talents (Female)</label>-->
                                 <!--            <input type="number" class="form-control"-->
                                 <!--                name="no_of_talents_female"-->
                                 <!--                placeholder="Number of Female Talents"-->
                                 <!--                value="{{ old('no_of_talents_female', $userInfo->no_of_talents_female ?? '') }}"-->
                                 <!--                required>-->
                                 <!--            @error('no_of_talents_female')-->
                                 <!--                <div class="text-danger">{{ $message }}</div>-->
                                 <!--            @enderror-->
                                 <!--        </div>-->
                                 <!--    </div>-->
                                 <!--</div>-->
                                 <!--<div class="row">-->
                                 <!--    <div class="col-md-6">-->
                                 <!--        <div class="contactlist">-->
                                 <!--            <label>Required Talent</label>-->
                                 <!--            <select class="form-select" name="required_talent" required>-->
                                 <!--                <option value="" disabled>Select Talent Type</option>-->
                                 <!--                <option value="Actor"-->
                                 <!--                    {{ old('required_talent', $userInfo->required_talent ?? '') == 'Actor' ? 'selected' : '' }}>-->
                                 <!--                    Actor</option>-->
                                 <!--                <option value="Model"-->
                                 <!--                    {{ old('required_talent', $userInfo->required_talent ?? '') == 'Model' ? 'selected' : '' }}>-->
                                 <!--                    Model</option>-->
                                 <!-- Add more options as needed -->
                                 <!--            </select>-->
                                 <!--            @error('required_talent')-->
                                 <!--                <div class="text-danger">{{ $message }}</div>-->
                                 <!--            @enderror-->
                                 <!--        </div>-->
                                 <!--    </div>-->
                                 <!--    <div class="col-md-6">-->
                                 <!--        <div class="contactlist">-->
                                 <!--            <label>Nationalities</label>-->
                                 <!--            <select class="form-select" name="nationalities" required>-->
                                 <!--                <option value="" disabled>Select Nationalities-->
                                 <!--                </option>-->
                                 <!--                <option value="Australia"-->
                                 <!--                    {{ old('nationalities', $userInfo->nationalities ?? '') == 'Australia' ? 'selected' : '' }}>-->
                                 <!--                    Australia</option>-->
                                 <!--                <option value="USA"-->
                                 <!--                    {{ old('nationalities', $userInfo->nationalities ?? '') == 'USA' ? 'selected' : '' }}>-->
                                 <!--                    USA</option>-->
                                 <!--                <option value="Canada"-->
                                 <!--                    {{ old('nationalities', $userInfo->nationalities ?? '') == 'Canada' ? 'selected' : '' }}>-->
                                 <!--                    Canada</option>-->
                                 <!-- Add more options as needed -->
                                 <!--            </select>-->
                                 <!--            @error('nationalities')-->
                                 <!--                <div class="text-danger">{{ $message }}</div>-->
                                 <!--            @enderror-->
                                 <!--        </div>-->
                                 <!--    </div>-->
                                 <!--</div>-->
                                 <!--<div class="row">-->
                                 <!--    <div class="col-md-6">-->
                                 <!--        <div class="contactlist">-->
                                 <!--            <label>Budget For Each Talent</label>-->
                                 <!--            <div class="row">-->
                                 <!--                <div class="col-md-6">-->
                                 <!--                    <input type="number" class="form-control"-->
                                 <!--                        name="starting_amount"-->
                                 <!--                        placeholder="Starting Amount"-->
                                 <!--                        value="{{ old('starting_amount', $userInfo->starting_amount ?? '') }}"-->
                                 <!--                        required>-->
                                 <!--                    @error('starting_amount')-->
                                 <!--                        <div class="text-danger">{{ $message }}</div>-->
                                 <!--                    @enderror-->
                                 <!--                </div>-->
                                 <!--                <div class="col-md-6">-->
                                 <!--                    <input type="number" class="form-control"-->
                                 <!--                        name="maximum_amount" placeholder="Maximum Amount"-->
                                 <!--                        value="{{ old('maximum_amount', $userInfo->maximum_amount ?? '') }}"-->
                                 <!--                        required>-->
                                 <!--                    @error('maximum_amount')-->
                                 <!--                        <div class="text-danger">{{ $message }}</div>-->
                                 <!--                    @enderror-->
                                 <!--                </div>-->
                                 <!--            </div>-->
                                 <!--        </div>-->
                                 <!--    </div>-->
                                 <!--</div>-->
                                 <!--<div class="row">-->
                                 <!--    <div class="col-md-12">-->
                                 <!--        <div class="contactlist">-->
                                 <!--            <label>Detail Of The Project</label>-->
                                 <!--            <textarea class="form-control" name="project_detail" rows="5" required>{{ old('project_detail', $userInfo->project_detail ?? '') }}</textarea>-->
                                 <!--            @error('project_detail')-->
                                 <!--                <div class="text-danger">{{ $message }}</div>-->
                                 <!--            @enderror-->
                                 <!--        </div>-->
                                 <!--    </div>-->
                                 <!--</div>-->
                                 <div class="col-md-12 text-center mt-5">
                                    <button type="submit" class="btn"
                                       style="background: #1C7887; color:#f1f1f1;">Submit</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Job applied tab pane -->
               <div class="tab-pane fade" id="job-apply" role="tabpanel" aria-labelledby="job-tab">
                  <div class="left-dash">
                     <div class="left-main">
                        <h4 class="left-head">Job Requests</h4>
                     </div>
                     <hr>
                     @php
                     $jobApplieds = DB::table('job_applieds')->where('job_poster_id', Auth::id())->get();
                     @endphp
                     <div class="serve-pad">
                        @if ($jobApplieds->count() > 0)
                        <div class="row">
                           @foreach ($jobApplieds as $jobDetail)
                           @php
                           // Retrieve model details for the job applier
                           $modelData = DB::table('model_details')->where('user_id', $jobDetail->job_applier_id)->first();
                           $userData = DB::table('users')->where('id', $jobDetail->job_applier_id)->first();
                           // Retrieve job details
                           $jobData = DB::table('job_details')->where('id', $jobDetail->job_id)->first();
                           // Default placeholder image URL
                           $placeholderImage = 'https://static.vecteezy.com/system/resources/thumbnails/036/594/092/small_2x/man-empty-avatar-photo-placeholder-for-social-networks-resumes-forums-and-dating-sites-male-and-female-no-photo-images-for-unfilled-user-profile-free-vector.jpg';
                           $userImg = "{{ url('uploads/users/'. $userData->profile) }}";
                           if ($modelData) {
                           $profileImages = json_decode($modelData->profile_images);
                           $firstImage = !empty($profileImages[0]) ? $profileImages[0] : ''; // Use default image if no profile image is available
                           // dd($modelData,$userData,$profileImages,$firstImage);
                           $birthDate = new DateTime($modelData->date_of_birth);
                           $currentDate = new DateTime();
                           $age = $currentDate->diff($birthDate)->y;
                           $height = $modelData->height . ' cm';
                           $weight = $modelData->weight . ' kg';
                           } else {
                           // Set default values if modelData is not found
                           $firstImage = $placeholderImage;
                           $age = 'Unknown';
                           $height = 'Unknown';
                           $weight = 'Unknown';
                           }
                           @endphp
                           <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                              <a href="{{ route('model-info.get', $modelData->id ?? '#') }}" class="text-dark">
                                 <div class="castbox">
                                    <div class="castimg">
                                       <img src="{{ url('uploads/models/profile-pics/'.$modelData->profile) }}" class="img-fluid" alt="Model Image">
                                    </div>
                                    <div class="castbody">
                                       <h5 class="bodytheading">{{ $modelData->first_name ?? 'Unknown' }} {{ $modelData->last_name ?? '' }}</h5>
                                       <div class="castbodylist firstitem">
                                          <h5><strong>AGE:</strong> {{ $age }}</h5>
                                          <h5><strong>Nationality:</strong> {{ $modelData->nationality ?? 'Unknown' }}</h5>
                                       </div>
                                       <div class="castbodylist">
                                          <h5><strong>Job Info:</strong></h5>
                                       </div>
                                       <div class="castbodylist">
                                          <h5><strong>Title:</strong> {{ $jobData->title ?? 'Unknown' }}</h5>
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
               <div class="tab-pane fade" id="add-job" role="tabpanel" aria-labelledby="job-tab">
    <div class="left-dash">
        <div class="left-main">
            <h4 class="left-head">Job Details</h4>
        </div>
        <hr>
        <div class="serve-pad">
            <div class="row">
                <div class="col-12">
                    <form id="multiStepForm" method="post" action="{{ route('job-info.post') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Progress bar -->
                        <div class="progress mb-4">
                            <div id="progressBar" class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                        </div>

                        <!-- Step 1: Basic Info -->
                        <div class="step" id="step1">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="fw-bold">FIRST NAME</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="fw-bold">LAST NAME</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="fw-bold">COMPANY / AGENCY NAME</label>
                                        <input type="text" class="form-control" name="company" placeholder="Company Name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center d-flex justify-content-end">
                                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                            </div>
                        </div>

                        <!-- Step 2: Contact Info -->
                        <div class="step d-none" id="step2">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="fw-bold">CALLING NUMBER</label>
                                        <input id="callingNumber" type="tel" class="form-control" name="calling_number" placeholder="Calling Number" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="fw-bold">WHATSAPP NUMBER</label>
                                        <input id="whatsappNumber" type="tel" class="form-control" name="whatsapp_number" placeholder="WhatsApp Number" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="fw-bold">EMAIL</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
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
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="fw-bold">PROJECT</label>
                                        <select class="form-select" name="project" required>
                                            <option value="Shoot">Shoot</option>
                                            <option value="Film">Film</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="fw-bold">LOCATION OF PROJECT</label>
                                        <div class="row">
                                        <div class="col-md-4">
        <select id="countryDropdown" class="form-select" name="country" required>
            <option value="" disabled selected>Select a Country</option>
        </select>
    </div>
    <div class="col-md-4">
        <select id="stateDropdown" class="form-select" name="state" required disabled>
            <option value="" disabled selected>Select a State</option>
        </select>
    </div>
    <div class="col-md-4">
        <select id="cityDropdown" class="form-select" name="city" required disabled>
            <option value="" disabled selected>Select a City</option>
        </select>
    </div>
                                        </div>
                                    </div>
                                </div>


                            <!-- No of Days & No of Hours -->
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label  class="fw-bold">NO OF DAYS</label>
                                    <input type="number" class="form-control" name="no_of_days" placeholder="Number of Days" required>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label  class="fw-bold">NO OF HOURS</label>
                                    <input type="number" class="form-control" name="no_of_hours" placeholder="Number of Hours"  required>
                                </div>
                            </div>

                          <!-- male and female   -->
                               
                          <div class="col-md-3">
                                        <div class="form-group">
                                            <label  class="text fw-bold">NO OF TALENTS(MALE)</label>
                                            <input type="number" class="form-control" name="no_of_talents_male" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label  class="text fw-bold" class>NO OF TALENTS(FEMALE)</label>
                                            <input required type="number" class="form-control" name="no_of_talents_female" placeholder="" required>
                                        </div>
                                    </div>
                               


                            <!-- Required Talent -->
 <div class="col-lg-3">
    <div class="form-group">
        <label class="fw-bold">REQUIRED TALENT</label>

        <!-- Main Dropdown Button -->
        <div class="dropdown" id="dropdown-container">
            <button style="background-color: #1C7887" class="btn btn-secondary  dropdown-toggle" id="dropdown-btn" type="button">
                Select a Category
            </button>

            <!-- Menu container with categories and subcategories (initially hidden) -->
            <div class="menu-container" id="main-category-container" style="display: none;"></div>
        </div>

        <!-- Paragraph to show selected categories and subcategories -->
        <p id="selectedCategories" style="margin-top: 10px; font-weight: bold;">
            Selected Talents: None
        </p>
    </div>
</div>




 <div class="col-lg-3">
                            <div class="form-group">
                                <label  class="fw-bold">NATIONALITIES</label>
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
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option>
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
                                    <option value="Eswatini">Eswatini (fmr. "Swaziland")</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                </select>
                            </div>
                        </div>

                        <!-- start and end date  -->

                        <!-- Start Date Input -->
<div class="col-lg-3">
    <div class="form-group">
        <label class="fw-bold">START DATE</label>
        <input type="date" class="form-control" name="start_date" required onchange="validateDates()">
    </div>
</div>

<!-- End Date Input -->
<div class="col-lg-3">
    <div class="form-group">
        <label class="fw-bold">END DATE</label>
        <input type="date" class="form-control" name="end_date" required onchange="validateDates()">
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
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="fw-bold">BUDGET FOR EACH TALENT</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" name="starting_amount" placeholder="Starting Amount" required>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" name="maximum_amount" placeholder="Maximum Amount" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                <div class="form-group">
                                    <label  class="fw-bold">DETAIL OF PROJECT</label>
                                    <textarea required  class="form-control" name="project_detail" rows="5" placeholder="Write your text here..."></textarea>
                                </div>
                            </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="fw-bold">BRIEF (OPTIONAL)</label>
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
        </div>
    </div>
</div>

<!-- intl-tel-input JS for phone inputs with flags -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<script>


   // progress bar js 
   let currentStep = 1;
    let progress = 0; // Start with 0%

    function nextStep() {
        const stepElements = document.querySelectorAll('.step');
        const progressBar = document.getElementById('progressBar');
        
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
        const progressBar = document.getElementById('progressBar');

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
// -----------------------------------------------
//  talent list js 
document.addEventListener("DOMContentLoaded", function () {
    const talents = [
        {
            name: 'Actor',
            subcategories: ['Featured', 'Extras', 'Lead Role', 'Voice-over Artist']
        },
        {
            name: 'Model',
            subcategories: []
        },
        {
            name: 'Dancer',
            subcategories: ['Choreographer', 'Belly Dancer', 'Sufi Dancer', 'Gogo Dancer', 'Performer', 'Ayala Dancer', 'Be Boyz', 'Dance Groups', 'Tabrey Dancer']
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
            subcategories: ['Hostess', 'Promoter', 'EmCee', 'Stunt Person']
        },
        {
            name: 'Entertainer / Performers',
            subcategories: ['Standup Artist', 'VJ', 'RJ', 'Public Speaker', 'Magician', 'Body Double', 'Bottle Twister']
        }
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




function validateDates() {
    const startDate = document.querySelector('input[name="start_date"]').value;
    const endDate = document.querySelector('input[name="end_date"]').value;
    const endDateInput = document.querySelector('input[name="end_date"]');

    if (startDate && endDate) {
        const start = new Date(startDate);
        const end = new Date(endDate);

        if (end < start) {
            endDateInput.setCustomValidity('End date cannot be prior to start date.');
        } else {
            endDateInput.setCustomValidity('');
        }
    }
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
        "Abu Dhabi": ["Abu Dhabi", "Al Ain", "Al Dhafra", "Mussafah", "Khalifa City"],
        "Dubai": ["Dubai", "Deira", "Bur Dubai", "Jumeirah", "Dubai Marina"],
        "Sharjah": ["Sharjah", "Khor Fakkan", "Dibba Al Hisn", "Al Dhaid", "Kalba"],
        "Ajman": ["Ajman", "Al Jurf", "Al Nuaimiya", "Musheirif"],
        "Ras Al Khaimah": ["Ras Al Khaimah", "Al Hamra", "Al Marjan Island", "Dhayah"],
        "Fujairah": ["Fujairah", "Dibba Al Fujairah", "Mirbah", "Masafi"],
        "Umm Al Quwain": ["Umm Al Quwain", "Al Salama", "Al Raas", "Al Haditha"]
    }
};

// Initialize dropdown elements
const countryDropdown = document.getElementById("countryDropdown");
const stateDropdown = document.getElementById("stateDropdown");
const cityDropdown = document.getElementById("cityDropdown");

// Function to populate country dropdown
function populateCountryDropdown() {
    for (let country in gccData) {
        let option = document.createElement("option");
        option.value = country;
        option.textContent = country;
        countryDropdown.appendChild(option);
    }
}

// Function to populate state dropdown based on selected country
function populateStateDropdown(selectedCountry) {
    stateDropdown.innerHTML = '<option value="" disabled selected>Select a State</option>'; // Reset states
    cityDropdown.innerHTML = '<option value="" disabled selected>Select a City</option>'; // Reset cities
    stateDropdown.disabled = false;
    cityDropdown.disabled = true;

    if (!selectedCountry || !gccData[selectedCountry]) return;

    let states = gccData[selectedCountry];
    for (let state in states) {
        let option = document.createElement("option");
        option.value = state;
        option.textContent = state;
        stateDropdown.appendChild(option);
    }
}

// Function to populate city dropdown based on selected state
function populateCityDropdown(selectedCountry, selectedState) {
    cityDropdown.innerHTML = '<option value="" disabled selected>Select a City</option>'; // Reset cities
    cityDropdown.disabled = false;

    if (!selectedState || !gccData[selectedCountry] || !gccData[selectedCountry][selectedState]) return;

    let cities = gccData[selectedCountry][selectedState];
    cities.forEach(city => {
        let option = document.createElement("option");
        option.value = city;
        option.textContent = city;
        cityDropdown.appendChild(option);
    });
}

// Event listener for country dropdown
countryDropdown.addEventListener("change", function () {
    populateStateDropdown(this.value);
});

// Event listener for state dropdown
stateDropdown.addEventListener("change", function () {
    populateCityDropdown(countryDropdown.value, this.value);
});

// Initialize country dropdown on page load
window.addEventListener("DOMContentLoaded", function () {
    populateCountryDropdown();
});



</script>








               <!-- Add model register tab pane -->
               <div class="tab-pane fade" id="add-pets" role="tabpanel" aria-labelledby="pets-tab">
                  <div class="left-dash">
                     <div class="left-main">
                        <h4 class="left-head">Register Model</h4>
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
                                                class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="contactlist">
                                                   <label>First Name</label>
                                                   <input type="text" class="form-control"
                                                      name="first_name" placeholder="First name..">
                                                </div>
                                             </div>
                                             <div
                                                class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="contactlist">
                                                   <label>Last Name</label>
                                                   <input type="text" class="form-control"
                                                      name="last_name" placeholder="Last name...">
                                                </div>
                                             </div>
                                             <div
                                                class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="contactlist">
                                                   <label>Date Of Birth</label>
                                                   <input type="date" class="form-control"
                                                      name="date_of_birth">
                                                </div>
                                             </div>
                                             <div
                                                class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
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
                                                class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="contactlist">
                                                   <label>Nationality</label>
                                                   <select class="form-select" name="nationality" aria-label="Default select example">
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
                                                      <option value="Central African Republic">Central African Republic</option>
                                                      <option value="Chad">Chad</option>
                                                      <option value="Chile">Chile</option>
                                                      <option value="China">China</option>
                                                      <option value="Colombia">Colombia</option>
                                                      <option value="Comoros">Comoros</option>
                                                      <option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option>
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
                                                      <option value="Eswatini (fmr. "Swaziland")">Eswatini (fmr. "Swaziland")</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div
                                                class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="contactlist">
                                                   <label>Calling Number</label>
                                                   <input type="tel" class="form-control phone-input"
                                                      name="calling_number"
                                                      placeholder="(000) 000 000">
                                                </div>
                                             </div>
                                             <div
                                                class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="contactlist">
                                                   <label>Whatsapp Number</label>
                                                   <input type="tel" class="form-control phone-input"
                                                      name="whatsapp_number"
                                                      placeholder="(000) 000 000">
                                                </div>
                                             </div>
                                             <div
                                                class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="contactlist">
                                                   <label>Marital Status</label>
                                                   <select class="form-control" name="marital_status">
                                                      <option value="single" selected>Single</option>
                                                      <option value="married">Married</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div
                                                class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="contactlist">
                                                   <div class="form-group">
                                                      <label for="ethnicity">Ethnicity</label>
                                                      <select name="ethnicity" id="ethnicity"
                                                         class="form-control">
                                                         <option value="">Select Ethnicity
                                                         </option>
                                                         <option value="african">African</option>
                                                         <option value="african_american">African
                                                            American
                                                         </option>
                                                         <option value="asian">Asian</option>
                                                         <option value="caucasian">Caucasian
                                                         </option>
                                                         <option value="hispanic">Hispanic</option>
                                                         <option value="middle_eastern">Middle
                                                            Eastern
                                                         </option>
                                                         <option value="native_american">Native
                                                            American
                                                         </option>
                                                         <option value="pacific_islander">Pacific
                                                            Islander
                                                         </option>
                                                         <option value="south_asian">South Asian
                                                         </option>
                                                         <option value="mixed_race">Mixed Race
                                                         </option>
                                                         <option value="other">Other</option>
                                                      </select>
                                                   </div>
                                                </div>
                                             </div>
                                             <div
                                                class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="contactlist">
                                                   <label>Lives in</label>
                                                   <select class="form-select" name="lives_in"
                                                      aria-label="Default select example">
                                                      <option value="United Arab Emirates" selected>United Arab Emirates</option>
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
                                                      <option value="Central African Republic">Central African Republic</option>
                                                      <option value="Chad">Chad</option>
                                                      <option value="Chile">Chile</option>
                                                      <option value="China">China</option>
                                                      <option value="Colombia">Colombia</option>
                                                      <option value="Comoros">Comoros</option>
                                                      <option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option>
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
                                                      <option value="Eswatini (fmr. "Swaziland")">Eswatini (fmr. "Swaziland")</option>
                                                      <option value="Ethiopia">Ethiopia</option>
                                                      <option value="Fiji">Fiji</option>
                                                      <option value="Finland">Finland</option>
                                                      <option value="France">France</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div
                                                class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="contactlist">
                                                   <label>Languages Spoken</label>
                                                   <select class="form-select" name="languages_spoken[]" multiple required>
                                                      <option value="English">English</option>
                                                      <option value="Hindi">Hindi</option>
                                                      <option value="Arabic">Arabic</option>
                                                      <option value="French">French</option>
                                                      <option value="Spanish">Spanish</option>
                                                      <option value="Chinese">Chinese</option>
                                                      <option value="Russian">Russian</option>
                                                      <option value="Portuguese">Portuguese</option>
                                                      <option value="German">German</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div
                                                class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <div class="contactlist">
                                                   <label>Description</label>
                                                   <textarea type="text" rows="10" class="form-control"
                                                      name="biography" placeholder="Enter your description.."></textarea>
                                                </div>
                                             </div>
                                             
                                             <div
                                                class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
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
                                                      placeholder="Instagram handle...">
                                                </div>
                                             </div>
                                             <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="contactlist">
                                                   <label>Height (CM)</label>
                                                   <input type="text" class="form-control" name="height_cm" placeholder="e.g., 170">
                                                </div>
                                             </div>
                                             <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="contactlist">
                                                   <label>Bust (CM)</label>
                                                   <input type="text" class="form-control" name="bust_cm" placeholder="e.g., 90">
                                                </div>
                                             </div>
                                             <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="contactlist">
                                                   <label>Waist (CM)</label>
                                                   <input type="text" class="form-control" name="waist_cm" placeholder="e.g., 60">
                                                </div>
                                             </div>
                                             <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="contactlist">
                                                   <label>Hip (CM)</label>
                                                   <input type="text" class="form-control" name="hip_cm" placeholder="e.g., 90">
                                                </div>
                                             </div>
                                             <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="contactlist">
                                                   <label>Weight (KG)</label>
                                                   <input type="text" class="form-control" name="weight_kg" placeholder="e.g., 70">
                                                </div>
                                             </div>
                                             <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="contactlist">
                                                   <label>Eye Color</label>
                                                   <input type="text" class="form-control" name="eyes_color" placeholder="e.g., Brown">
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
                                                         Blonde
                                                      </option>
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
                                                      name="shoe_size_euro"
                                                      placeholder="e.g 10">
                                                </div>
                                             </div>
                                             <div
                                                class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="contactlist">
                                                   <label>Dress Size (EURO)</label>
                                                   <input type="text" class="form-control"
                                                      name="dress_size_euro"
                                                      placeholder="e.g. 32">
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
                                                <div
                                                   class="row row-cols-5 row-cols-md-5 row-cols-lg-5 row-cols-xl-5 row-cols-xxl-5">
                                                   <div class="col">
                                                      <div class="selectbox">
                                                         <input type="checkbox" name="category[]"
                                                            value="actors" id="category_actors">
                                                         <label class="customselect"
                                                            for="category_actors">
                                                            <div class="catogerybox">
                                                               <img src="{{ url('user-assets') }}/images/category_1.png"
                                                                  class="img-fluid"
                                                                  alt="img">
                                                               <h5>Actors</h5>
                                                            </div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="selectbox">
                                                         <input type="checkbox" name="category[]"
                                                            value="models" id="category_models">
                                                         <label class="customselect"
                                                            for="category_models">
                                                            <div class="catogerybox">
                                                               <img src="{{ url('user-assets') }}/images/category_2.png"
                                                                  class="img-fluid"
                                                                  alt="img">
                                                               <h5>Models</h5>
                                                            </div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="selectbox">
                                                         <input type="checkbox" name="category[]"
                                                            value="dancers_performers"
                                                            id="category_dancers_performers">
                                                         <label class="customselect"
                                                            for="category_dancers_performers">
                                                            <div class="catogerybox">
                                                               <img src="{{ url('user-assets') }}/images/category_3.png"
                                                                  class="img-fluid"
                                                                  alt="img">
                                                               <h5>Dancers & Performers</h5>
                                                            </div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="selectbox">
                                                         <input type="checkbox" name="category[]"
                                                            value="film_crew"
                                                            id="category_film_crew">
                                                         <label class="customselect"
                                                            for="category_film_crew">
                                                            <div class="catogerybox">
                                                               <img src="{{ url('user-assets') }}/images/category_4.png"
                                                                  class="img-fluid"
                                                                  alt="img">
                                                               <h5>Film Crew</h5>
                                                            </div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="selectbox">
                                                         <input type="checkbox" name="category[]"
                                                            value="musicians"
                                                            id="category_musicians">
                                                         <label class="customselect"
                                                            for="category_musicians">
                                                            <div class="catogerybox">
                                                               <img src="{{ url('user-assets') }}/images/category_5.png"
                                                                  class="img-fluid"
                                                                  alt="img">
                                                               <h5>Musicians</h5>
                                                            </div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="selectbox">
                                                         <input type="checkbox" name="category[]"
                                                            value="influencers"
                                                            id="category_influencers">
                                                         <label class="customselect"
                                                            for="category_influencers">
                                                            <div class="catogerybox">
                                                               <img src="{{ url('user-assets') }}/images/category_6.png"
                                                                  class="img-fluid"
                                                                  alt="img">
                                                               <h5>Influencers</h5>
                                                            </div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="selectbox">
                                                         <input type="checkbox" name="category[]"
                                                            value="presenters_emcees"
                                                            id="category_presenters_emcees">
                                                         <label class="customselect"
                                                            for="category_presenters_emcees">
                                                            <div class="catogerybox">
                                                               <img src="{{ url('user-assets') }}/images/category_7.png"
                                                                  class="img-fluid"
                                                                  alt="img">
                                                               <h5>Presenters & Emcees</h5>
                                                            </div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="selectbox">
                                                         <input type="checkbox" name="category[]"
                                                            value="event_staff_ushers"
                                                            id="category_event_staff_ushers">
                                                         <label class="customselect"
                                                            for="category_event_staff_ushers">
                                                            <div class="catogerybox">
                                                               <img src="{{ url('user-assets') }}/images/category_8.png"
                                                                  class="img-fluid"
                                                                  alt="img">
                                                               <h5>Event Staff & Ushers</h5>
                                                            </div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="selectbox">
                                                         <input type="checkbox" name="category[]"
                                                            value="photographers_videographers"
                                                            id="category_photographers_videographers">
                                                         <label class="customselect"
                                                            for="category_photographers_videographers">
                                                            <div class="catogerybox">
                                                               <img src="{{ url('user-assets') }}/images/category_9.png"
                                                                  class="img-fluid"
                                                                  alt="img">
                                                               <h5>Photographers / Videographers
                                                               </h5>
                                                            </div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="selectbox">
                                                         <input type="checkbox" name="category[]"
                                                            value="makeup_hair_painter_fashion_stylists"
                                                            id="category_makeup_hair_painter_fashion_stylists">
                                                         <label class="customselect"
                                                            for="category_makeup_hair_painter_fashion_stylists">
                                                            <div class="catogerybox">
                                                               <img src="{{ url('user-assets') }}/images/category_10.png"
                                                                  class="img-fluid"
                                                                  alt="img">
                                                               <h5>Makeup, Hair, Painter & Fashion
                                                                  Stylists
                                                               </h5>
                                                            </div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tab" data-step="2">
                                          <!-- Actors -->
                                          <div class="row">
                                             <div class="col-12">
                                                <div class="caterlisttext">
                                                   <h5>Category Type - Actors</h5>
                                                </div>
                                                <div class="musicainlist">
                                                   <ul>
                                                      <li>
                                                         <label>
                                                         <input type="checkbox"
                                                            name="category_type[]"
                                                            value="main_lead"
                                                            id="actor_main_lead">
                                                         <label for="actor_main_lead">Main
                                                         Lead</label>
                                                         </label>
                                                      </li>
                                                      <li>
                                                         <label>
                                                         <input type="checkbox"
                                                            name="category_type[]"
                                                            value="featured_actors"
                                                            id="actor_featured_actors">
                                                         <label
                                                            for="actor_featured_actors">Featured
                                                         Actors</label>
                                                         </label>
                                                      </li>
                                                      <li>
                                                         <label>
                                                         <input type="checkbox"
                                                            name="category_type[]"
                                                            value="body_double"
                                                            id="actor_body_double">
                                                         <label for="actor_body_double">Body
                                                         Double</label>
                                                         </label>
                                                      </li>
                                                      <li>
                                                         <label>
                                                         <input type="checkbox"
                                                            name="category_type[]"
                                                            value="mime_artist"
                                                            id="actor_mime_artist">
                                                         <label for="actor_mime_artist">Mime
                                                         Artist</label>
                                                         </label>
                                                      </li>
                                                      <li>
                                                         <label>
                                                         <input type="checkbox"
                                                            name="category_type[]"
                                                            value="stunt_person"
                                                            id="actor_stunt_person">
                                                         <label for="actor_stunt_person">Stunt
                                                         Person</label>
                                                         </label>
                                                      </li>
                                                      <li>
                                                         <label>
                                                         <input type="checkbox"
                                                            name="category_type[]"
                                                            value="extras" id="actor_extras">
                                                         <label
                                                            for="actor_extras">EXTRAS</label>
                                                         </label>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Models -->
                                          <div class="row">
                                             <div class="col-12">
                                                <div class="caterlisttext">
                                                   <h5>Category Type - Models</h5>
                                                </div>
                                                <div class="musicainlist">
                                                   <ul>
                                                      <li>
                                                         <label>
                                                         <input type="checkbox"
                                                            name="category_type[]"
                                                            value="high_fashion_editorial"
                                                            id="model_high_fashion_editorial">
                                                         <label
                                                            for="model_high_fashion_editorial">High
                                                         Fashion (Editorial) Models</label>
                                                         </label>
                                                      </li>
                                                      <li>
                                                         <label>
                                                         <input type="checkbox"
                                                            name="category_type[]"
                                                            value="fashion_catalogue"
                                                            id="model_fashion_catalogue">
                                                         <label
                                                            for="model_fashion_catalogue">Fashion
                                                         (Catalogue) Models</label>
                                                         </label>
                                                      </li>
                                                      <li>
                                                         <label>
                                                         <input type="checkbox"
                                                            name="category_type[]"
                                                            value="commercial_models"
                                                            id="model_commercial_models">
                                                         <label
                                                            for="model_commercial_models">Commercial
                                                         Models</label>
                                                         </label>
                                                      </li>
                                                      <li>
                                                         <label>
                                                         <input type="checkbox"
                                                            name="category_type[]"
                                                            value="mature_models"
                                                            id="model_mature_models">
                                                         <label for="model_mature_models">Mature
                                                         Models</label>
                                                         </label>
                                                      </li>
                                                      <li>
                                                         <label>
                                                         <input type="checkbox"
                                                            name="category_type[]"
                                                            value="promotional_models"
                                                            id="model_promotional_models">
                                                         <label
                                                            for="model_promotional_models">Promotional
                                                         Models</label>
                                                         </label>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Dancers & Performers -->
                                          <div class="row">
                                             <div class="col-12">
                                                <div class="caterlisttext">
                                                   <h5>Category Type - Dancers & Performers</h5>
                                                </div>
                                                <div class="musicainlist">
                                                   <ul>
                                                      <li>
                                                         <label>
                                                         <input type="checkbox"
                                                            name="category_type[]"
                                                            value="ballet_dancers"
                                                            id="dancer_ballet_dancers">
                                                         <label
                                                            for="dancer_ballet_dancers">Ballet
                                                         Dancers</label>
                                                         </label>
                                                      </li>
                                                      <li>
                                                         <label>
                                                         <input type="checkbox"
                                                            name="category_type[]"
                                                            value="ballroom_dancers"
                                                            id="dancer_ballroom_dancers">
                                                         <label
                                                            for="dancer_ballroom_dancers">Ballroom
                                                         Dancers</label>
                                                         </label>
                                                      </li>
                                                      <li>
                                                         <label>
                                                         <input type="checkbox"
                                                            name="category_type[]"
                                                            value="baroque_dancers"
                                                            id="dancer_baroque_dancers">
                                                         <label
                                                            for="dancer_baroque_dancers">Baroque
                                                         Dancers</label>
                                                         </label>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Makeup, Hair, Painter & Fashion Stylists -->
                                          <div class="row">
                                             <div class="col-12">
                                                <div class="caterlisttext">
                                                   <h5>Category Type - Makeup, Hair, Painter & Fashion
                                                      Stylists
                                                   </h5>
                                                </div>
                                                <div class="musicainlist">
                                                   <ul>
                                                      <li>
                                                         <label>
                                                         <input type="checkbox"
                                                            name="category_type[]"
                                                            value="makeup_artists"
                                                            id="stylist_makeup_artists">
                                                         <label
                                                            for="stylist_makeup_artists">Makeup
                                                         Artists</label>
                                                         </label>
                                                      </li>
                                                      <li>
                                                         <label>
                                                         <input type="checkbox"
                                                            name="category_type[]"
                                                            value="fashion_stylists"
                                                            id="stylist_fashion_stylists">
                                                         <label
                                                            for="stylist_fashion_stylists">Fashion
                                                         Stylists</label>
                                                         </label>
                                                      </li>
                                                      <li>
                                                         <label>
                                                         <input type="checkbox"
                                                            name="category_type[]"
                                                            value="hair_stylists"
                                                            id="stylist_hair_stylists">
                                                         <label for="stylist_hair_stylists">Hair
                                                         Stylists</label>
                                                         </label>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Photographers / Videographers -->
                                          <div class="row">
                                             <div class="col-12">
                                                <div class="caterlisttext">
                                                   <h5>Category Type - Photographers / Videographers
                                                   </h5>
                                                </div>
                                                <div class="musicainlist">
                                                   <ul>
                                                      <li>
                                                         <label>
                                                         <input type="checkbox"
                                                            name="category_type[]"
                                                            value="fashion_photographer"
                                                            id="photographer_fashion_photographer">
                                                         <label
                                                            for="photographer_fashion_photographer">Fashion
                                                         Photographer</label>
                                                         </label>
                                                      </li>
                                                      <li>
                                                         <label>
                                                         <input type="checkbox"
                                                            name="category_type[]"
                                                            value="portrait_photographer"
                                                            id="photographer_portrait_photographer">
                                                         <label
                                                            for="photographer_portrait_photographer">Portrait
                                                         Photographer</label>
                                                         </label>
                                                      </li>
                                                      <li>
                                                         <label>
                                                         <input type="checkbox"
                                                            name="category_type[]"
                                                            value="landscape_photographer"
                                                            id="photographer_landscape_photographer">
                                                         <label
                                                            for="photographer_landscape_photographer">Landscape
                                                         Photographer</label>
                                                         </label>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tab" data-step="2">
                                          <div class="row">
                                             <!-- Upload Box 1 -->
                                             <div
                                                class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mx-auto">
                                                <div class="uploadimg">
                                                   <h5>Upload Your Photos</h5>
                                                   <input type="text" id="profileValues"
                                                      class="form-control" readonly>
                                                   <div class="uploadbox">
                                                      <input type="file" name="profiles[]"
                                                         id="upload-file-1" hidden multiple
                                                         onchange="updateFileNames()" />
                                                      <label class="uploadmain" for="upload-file-1">
                                                         <img src="{{ url('user-assets') }}/images/upload_img_4.png"
                                                            class="img-fluid" alt="img">
                                                         <h6>Drag and Drop your images here</h6>
                                                      </label>
                                                   </div>
                                                </div>
                                             </div>
                                             <script>
                                                function updateFileNames() {
                                                    const input = document.getElementById('upload-file-1');
                                                    const fileNames = Array.from(input.files).map(file => file.name).join(', ');
                                                    document.getElementById('profileValues').value = fileNames ?
                                                        `${input.files.length} file(s) selected: ${fileNames}` : '';
                                                }
                                             </script>
                                          </div>
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
<!--<script src="https://code.jquery.com/jquery-3.7.1.min.js"-->
   <!--integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>-->
<script>
   function previewImage(event) {
       const reader = new FileReader();
       reader.onload = function() {
           const output = document.getElementById('profile-image-preview');
           output.src = reader.result;
       }
       reader.readAsDataURL(event.target.files[0]);
   }
</script>
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
<script>
   document.addEventListener("DOMContentLoaded", function() {
       // Select all phone input fields
       var phoneInputs = document.querySelectorAll(".phone-input");
       
       // Initialize intl-tel-input for each phone input field
       phoneInputs.forEach(function(input) {
           window.intlTelInput(input, {
               initialCountry: "us", // Set the default country if needed
               utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // Optional
           });
       });
   });
</script>



<!-- Include jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Include Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- Include Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Include Bootstrap CSS (optional for styling) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta2/css/bootstrap.min.css" rel="stylesheet" />
<!-- Custom Style for checkboxes -->
<style>
    .select2-container--default .select2-selection--multiple {
        background-color: white;
        border: 1px solid #aaa;
        border-radius: 4px;
        cursor: text;
        padding-bottom: 5px;
        padding-right: 5px;
        position: relative;
        width: 100%;
        height: auto; /* Change height to auto to accommodate content */
        min-height: 40px; /* Set a minimum height */
    }

    .select2-container--default .select2-results__option {
        padding-left: 30px;
        position: relative;
    }

    .select2-container--default .select2-results__option:before {
        content: "\2610";  /* Unicode checkbox */
        position: absolute;
        left: 10px;
        font-size: 18px;
        color: #aaa;
    }

    .select2-container--default .select2-results__option[aria-selected="true"]:before {
        content: "\2611";  /* Unicode checkbox checked */
        color: #28a745;
    }

    textarea.select2-search__field {
        height: 30px !important;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: #e4e4e4;
        border: 1px solid #aaa;
        border-radius: 4px;
        box-sizing: border-box;
        display: inline-block;
        margin-left: 5px;
        margin-top: 5px;
        padding: 0;
        padding-left: 20px;
        position: relative;
        max-width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        vertical-align: bottom;
        white-space: nowrap;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: space-between; /* Space between text and remove button */
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice .remove {
        margin-left: 8px;
        cursor: pointer;
        color: #ff0000; /* Red color for remove icon */
    }
</style>

<!-- Initialize Select2 with custom checkbox template -->
<script>
$(document).ready(function() {
    $('.languages-select').select2({
        placeholder: 'Select languages',
        closeOnSelect: false,  // Prevent the dropdown from closing on select
        templateResult: formatState,  // Custom format for displaying checkboxes
        templateSelection: formatSelection,  // Custom format for displaying selected items
        width: '100%'
    });

    // Function to render checkboxes inside Select2 options
    function formatState(state) {
        if (!state.id) {
            return state.text; // Return text for the placeholder or non-selected options
        }
        var $state = $(
            `<span>
                <input type="checkbox" style="margin-right: 8px;" ${state.selected ? 'checked' : ''}/> 
                ${state.text}
            </span>`
        );
        return $state;
    }

    // Function to render selected items with remove button
    function formatSelection(state) {
        return $(`<span>${state.text} <span class="remove">×</span></span>`);
    }

    // Event to handle removing selected items
    $('.languages-select').on('select2:select', function (e) {
        var data = e.params.data;
        $(this).find('.select2-selection__choice').filter(function() {
            return $(this).text().trim() === data.text;
        }).addClass('selected'); // Add a class to selected items
    });

    // Event to handle the click on the remove button
    $('.languages-select').on('click', '.remove', function () {
        var text = $(this).parent().text().trim(); // Get the text of the option to remove
        var option = $('.languages-select option').filter(function() {
            return $(this).text() === text;
        });
        option.prop("selected", false).trigger('change'); // Deselect the option
    });
});
</script>


@endsection