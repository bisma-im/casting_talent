@extends('users.layouts.layout')
@section('title', 'Casting Talent | Dashboard')
@section('main-content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>





<style>
   @media (max-width: 768px) {
      .custom-dropdown-content {
         max-height: 100px;
         /* Adjust max height for small screens */
      }
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

   .dropdown-open {
      display: block;
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
                     <a class="nav-link" id="add-pets-tab" data-bs-toggle="pill" href="#selected-models" role="tab"
                        aria-controls="add-pets" aria-selected="false">Selected Models</a>
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
               <!-- Featured models -->
               <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                  <div class="left-dash">
                     <div class="left-main">
                        <h4 class="left-head">Featured Models</h4>
                     </div>
                     <hr>
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
                              <form id="client-form" method="post" action="{{ route('client-inquiry.post') }}"
                                 enctype="multipart/form-data">
                                 @csrf
               
                                 <!-- Progress bar -->
                                 <div class="progress mb-4">
                                    <div id="progressBar" class="progress-bar bg-success" role="progressbar" style="width: 0%;"
                                       aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                 </div>
               
                                 <!-- Step 1: Basic Info -->
                                 <div class="step" id="step1">
                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label class="fw-bold">FIRST NAME</label>
                                             <input type="text" class="form-control" name="first_name" placeholder="First Name"
                                                required>
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
                                             <input type="text" class="form-control" name="company" placeholder="Company Name"
                                                required>
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
                                             <input id="callingNumber" type="tel" class="form-control" inputmode="numeric"
                                                oninput="this.value = this.value.replace(/\D/g, '')" name="calling_number"
                                                placeholder="Calling Number" required>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label class="fw-bold">WHATSAPP NUMBER</label>
                                             <input id="whatsappNumber" type="tel" class="form-control" name="whatsapp_number"
                                                inputmode="numeric" oninput="this.value = this.value.replace(/\D/g, '')"
                                                placeholder="WhatsApp Number" required>
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
                                                <option value="Event">Event</option>
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
                                             <label class="fw-bold">NO OF DAYS</label>
                                             <input type="number" min="1" class="form-control" name="no_of_days"
                                                placeholder="Number of Days" required>
                                          </div>
                                       </div>
               
                                       <div class="col-lg-3">
                                          <div class="form-group">
                                             <label class="fw-bold">NO OF HOURS</label>
                                             <input type="number" max="24" min="1" class="form-control" name="no_of_hours"
                                                placeholder="Number of Hours" required>
                                          </div>
                                       </div>
               
                                       <!-- male and female   -->
               
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="text fw-bold">NO OF TALENTS(MALE)</label>
                                             <input type="number" min="1" class="form-control" name="no_of_talents_male" placeholder=""
                                                required>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="text fw-bold" class>NO OF TALENTS(FEMALE)</label>
                                             <input required type="number" min="1" class="form-control" name="no_of_talents_female"
                                                placeholder="" required>
                                          </div>
                                       </div>
               
               
               
                                       <!-- Required Talent -->
                                       <div class="col-lg-3">
                                          <div class="form-group">
                                             <label class="fw-bold">REQUIRED TALENT</label>
               
                                             <!-- Main Dropdown Button -->
                                             <div class="dropdown" id="dropdown-container">
                                                <button style="background-color: #1C7887" class="btn btn-secondary  dropdown-toggle"
                                                   id="dropdown-btn" type="button">
                                                   Select a Category
                                                </button>
               
                                                <!-- Menu container with categories and subcategories (initially hidden) -->
                                                <div class="menu-container" id="main-category-container" style="display: none;"></div>
                                             </div>
                                             <input type="hidden" name="categories" id="categories" value="" />
                                             <!-- Paragraph to show selected categories and subcategories -->
                                             <p id="selectedCategories" style="margin-top: 10px; font-weight: bold;">
                                                Selected Talents: None
                                             </p>
                                          </div>
                                       </div>
               
               
               
               
                                       <div class="col-lg-3">
                                          <div class="form-group">
                                             <label class="fw-bold">NATIONALITIES</label>
                                             <div class="custom-dropdown" id="nationalityDropdown">
                                                <div class=" form-control" id="dropdownButton">Select Nationalities</div>
                                                <div class="custom-dropdown-content" id="dropdownContent">
                                                   <label><input type="checkbox" value="Afghanistan"> Afghanistan</label>
                                                   <label><input type="checkbox" value="Albania"> Albania</label>
                                                   <label><input type="checkbox" value="Algeria"> Algeria</label>
                                                   <label><input type="checkbox" value="Andorra"> Andorra</label>
                                                   <label><input type="checkbox" value="Angola"> Angola</label>
                                                   <label><input type="checkbox" value="Antigua and Barbuda"> Antigua and
                                                      Barbuda</label>
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
                                                   <label><input type="checkbox" value="Bosnia and Herzegovina"> Bosnia and
                                                      Herzegovina</label>
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
                                                   <label><input type="checkbox" value="Central African Republic"> Central African
                                                      Republic</label>
                                                   <label><input type="checkbox" value="Chad"> Chad</label>
                                                   <label><input type="checkbox" value="Chile"> Chile</label>
                                                   <label><input type="checkbox" value="China"> China</label>
                                                   <label><input type="checkbox" value="Colombia"> Colombia</label>
                                                   <label><input type="checkbox" value="Comoros"> Comoros</label>
                                                   <label><input type="checkbox" value="Congo (Congo-Brazzaville)"> Congo
                                                      (Congo-Brazzaville)</label>
                                                   <label><input type="checkbox" value="Congo (Congo-Kinshasa)"> Congo
                                                      (Congo-Kinshasa)</label>
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
                                                   <label><input type="checkbox" value="Eswatini"> Eswatini (formerly
                                                      Swaziland)</label>
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
                                                   <label><input type="checkbox" value="Saint Kitts and Nevis"> Saint Kitts and
                                                      Nevis</label>
                                                   <label><input type="checkbox" value="Saint Lucia"> Saint Lucia</label>
                                                   <label><input type="checkbox" value="Saint Vincent and the Grenadines"> Saint
                                                      Vincent and the
                                                      Grenadines</label>
                                                   <label><input type="checkbox" value="Samoa"> Samoa</label>
                                                   <label><input type="checkbox" value="San Marino"> San Marino</label>
                                                   <label><input type="checkbox" value="Sao Tome and Principe"> Sao Tome and
                                                      Principe</label>
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
                                                   <label><input type="checkbox" value="Trinidad and Tobago"> Trinidad and
                                                      Tobago</label>
                                                   <label><input type="checkbox" value="Tunisia"> Tunisia</label>
                                                   <label><input type="checkbox" value="Turkey"> Turkey</label>
                                                   <label><input type="checkbox" value="Turkmenistan"> Turkmenistan</label>
                                                   <label><input type="checkbox" value="Tuvalu"> Tuvalu</label>
                                                   <label><input type="checkbox" value="Uganda"> Uganda</label>
                                                   <label><input type="checkbox" value="Ukraine"> Ukraine</label>
                                                   <label><input type="checkbox" value="United Arab Emirates"> United Arab
                                                      Emirates</label>
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
                                             <input type="hidden" name="nationalities" id="nationalities" value="" />
                                          </div>
                                       </div>
               
                                       <!-- start and end date  -->
               
                                       <!-- Start Date Input -->
                                       <div class="col-lg-3">
                                          <div class="form-group">
                                             <label class="fw-bold">START DATE</label>
                                             <input type="date" class="form-control" name="start_date" required
                                                onchange="validateDates()">
                                          </div>
                                       </div>
               
                                       <!-- End Date Input -->
                                       <div class="col-lg-3">
                                          <div class="form-group">
                                             <label class="fw-bold">END DATE</label>
                                             <input type="date" class="form-control" name="end_date" required
                                                onchange="validateDates()">
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
                                                   <input type="number" class="form-control" id="starting_amount"
                                                      name="starting_amount" required oninput="validateBudget()"
                                                      placeholder="Starting Amount" required>
                                                </div>
                                                <div class="col-md-6">
                                                   <input type="number" class="form-control" id="maximum_amount" name="maximum_amount"
                                                      required oninput="validateBudget()" placeholder="Maximum Amount" required>
                                                </div>
                                             </div>
                                             <span id="budget-error" style="color: red; display: none;">Maximum budget cannot be less
                                                than the minimum amount.</span>
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="form-group">
                                             <label class="fw-bold">DETAIL OF PROJECT</label>
                                             <textarea required class="form-control" name="project_detail" rows="5"
                                                placeholder="Write your text here..."></textarea>
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="form-group">
                                             <label class="fw-bold">BRIEF (OPTIONAL)</label>
                                             <input type="file" class="form-control" name="brief_file">
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
               <!-- Add Profile tab pane -->
               <div class="tab-pane fade" id="selected-models" role="tabpanel" aria-labelledby="selected-models-tab">
                  <div class="left-dash">
                     <div class="left-main">
                        <h4 class="left-head">Selected Models</h4>
                     </div>
                     <hr>
                     @php
                        $userCategories = DB::table('client_inquiry')
                           ->where('user_id', Auth::id())
                           ->select('categories')
                           ->get()
                           ->pluck('categories')
                           ->toArray();

                        // Assuming categories are comma-separated, we will split them into individual category names
                        $categories = [];
                        foreach ($userCategories as $categoryList) {
                           $categories = array_merge($categories, explode(',', $categoryList));
                        }
                        $categories = array_unique($categories);  // Remove duplicates
                        $myModels = DB::table('model_details')
                           ->where(function ($query) use ($categories) {
                              foreach ($categories as $category) {
                                    $query->orWhere('category', 'like', '%"'.$category.'"%');
                                    $query->orWhere('musician_categories', 'like', '%"'.$category.'"%');
                              }
                           })
                           ->get();
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
            </div>
         </div>
      </div>
   </div>
</section>
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
            name: 'actors',
            subcategories: ['main_lead', 'featured_actors', 'body_double', 'mime_artist', 'stunt_person', 'extras']
        },
        {
            name: 'models',
            subcategories: ['high_fashion_editorial', 'fashion_catalogue', 'commercial_models', 'mature_models', 'erotic_photography_model',
            'promotional_models', 'art_models', 'body_parts_models', 'child_models', 'expecting_models', 'fitness_models',
            'freelance_models', 'glamour_models', 'hair_model', 'plus_size_models', 'party_model', 'petite_models', 'runway_models',
            'stock_photography_model', 'swimsuit_lingerie_models']
        },
        {
            name: 'dancers_performers',
            subcategories: ['ballet_dancers', 'ballroom_dancers', 'ayyala_dancers', 'background_dancers', 'belly_dancers', 'b_boy',
            'break_dancers', 'cabaret_dancer', 'cheerleaders', 'choreographers', 'contemporary_dancers', 'dance_group',
            'dancing_couples', 'fictional_dancers', 'folk_dancer', 'samba_dancers', 'go_go_dancer', 'hip_hop_dancers',
            'kathak_dancer', 'parade_away', 'salsa_dancers', 'sufi_dancer', 'swing_dancers', 'tap_dancers']
        },
        {
            name: 'film_crew',
            subcategories: [
               'art_director', 'art_and_costume', 'assistant_director', 'animation_and_graphic_designer', 'copy_writer', 
               'camera_crew', 'crane_operator', 'director', 'DOP', 'sound_crew', 'lighting_crew', 'editor', 'film_maker',
               'film_producer', 'focus_puller_operator', 'line_producer', 'other_film_and_stage_crew', 'post_production_staff',
               'production_manager', 'photographer','runner', 'script_writer', 'sound_engineer', 'videographer'
            ]
        },
        {
            name: 'influencers',
            subcategories: [
               'beauty_influencers', 'bloggers', 'celebrity', 'fashion_influencers', 'fitness_wellness_influencers', 'food_influencers',
               'gaming_tech_influencers', 'event_influencers', 'lifestyle_influencers', 'mens_products_influencers',
               'travel_influencers', 'womens_products_influencers'
            ]
        },
        {
            name: 'presenters_emcees',
            subcategories: [
               'balloon_decorator', 'bottle_twister', 'caricature', 'clown', 'comedian', 'emcee', 'fire_artist', 'hypnotist',
               'illustrationist', 'jugglers', 'live_statue', 'magician', 'media_reporter', 'news_reader', 'others', 'public_speaker',
               'radio_jockey', 'shadow_performer', 'stand_up_artist', 'stilt_walker', 'unicyclist', 'video_jockey', 'virtual_host', 'voice_over'
            ]
        },
        {
            name: 'makeup_hair_painter_fashion_stylists',
            subcategories: [
               'makeup_artists', 'fashion_stylists', 'hair_stylists', 'body_painters', 'creative_makeup_artists',
               'face_painter', 'henna_artist', 'wardrobe_stylist'
            ]
        },
        {
            name: 'musicians',
            subcategories: [
               'guitarist', 'hobbyist', 'independent_artist', 'independent_label_artist', 'live_performer', 'music_band',
               'musician', 'orchestral_musician', 'producer_composer', 'rapper', 'session_musician', 'singer', 'song_writer', 
               'teacher', 'tv_show_performer', 'violinist'
            ]
        },
        {
            name: 'event_staff_ushers',
            subcategories: [
               'bartender', 'brand_ambassador', 'caterer', 'chef', 'concierge', 'decorators', 'event_supervisor', 
               'host_or_hostess', 'marketing_coordinator', 'promotional_staff', 'ushers', 'waitress'
            ]
        },
        {
            name: 'photographers_videographers',
            subcategories: [
               'fashion', 'portrait', 'landscape', 'event', 'wedding', 'abstract', 'aerial', 'architecture', 'child',
               'commercial', 'digital', 'documentary', 'film', 'fine_art', 'food', 'lifestyle', 'nature', 'sports', 'street',
               'travel'
            ]
        },
        {
            name: 'celebrity',
            subcategories: []
        }
    ];

    const dropdownBtn = document.getElementById("dropdown-btn");
    const mainCategoryContainer = document.getElementById("main-category-container");
    const selectedCategoriesParagraph = document.getElementById("selectedCategories");

    function formatTalentName(name) {
      // Replace underscores with spaces
      let formattedName = name.replace(/_/g, ' ');

      // Capitalize the first letter of each word
      formattedName = formattedName.replace(/\b\w/g, letter => letter.toUpperCase());

      return formattedName;
   }

    // Function to create and populate categories and subcategories
    function generateCategories() {
        let html = '<ul class="main-category">';
        talents.forEach(talent => {
            const formattedName = formatTalentName(talent.name);
            html += `
                <li class="main-category-item">
                    <label>
                        <input  type="checkbox" class="category-checkbox" value="${talent.name}">
                        ${formattedName}
                    </label>`;
            if (talent.subcategories.length > 0) {
                html += `<ul class="sub-category">`;
                talent.subcategories.forEach(sub => {
                  const formattedSub = formatTalentName(sub);
                    html += `
                        <li>
                            <label>
                                <input type="checkbox" class="subcategory-checkbox" value="${sub}">
                                ${formattedSub}
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
            document.getElementById('categories').value = selectedOptions.join(', ');
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
    const today = new Date();
    today.setHours(0, 0, 0, 0); // Set time to midnight to compare only dates

    const startDateInput = document.querySelector('input[name="start_date"]');
    const endDateInput = document.querySelector('input[name="end_date"]');

    const startDate = startDateInput.value;
    const endDate = endDateInput.value;

    if (startDate) {
        const start = new Date(startDate);
        
        if (start < today) {
            startDateInput.setCustomValidity('Start date cannot be in the past.');
        } else {
            startDateInput.setCustomValidity('');
        }
    }

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
   document.addEventListener('DOMContentLoaded', function() {
        // Select all nationality checkboxes
        const nationalityCheckboxes = document.querySelectorAll('.custom-dropdown-content input[type="checkbox"]');

        // Function to update the hidden input based on selected checkboxes
        function updateNationalities() {
            const selectedNationalities = Array.from(nationalityCheckboxes) // Convert NodeList to Array
                .filter(checkbox => checkbox.checked) // Filter only checked checkboxes
                .map(checkbox => checkbox.value); // Map to their values

            // Update the hidden input's value
            document.getElementById('nationalities').value = selectedNationalities.join(', ');

            // Optional: Update UI or other elements to show selected nationalities
            // For example, updating a paragraph or label
            // document.getElementById('displaySelectedNationalities').textContent = selectedNationalities.join(', ');
        }

        // Attach event listeners to all checkboxes
        nationalityCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', updateNationalities); // Update whenever a checkbox is checked or unchecked
        });
    });

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
  
   function validateBudget() {
      const minAmount = document.getElementById("starting_amount");
      const maxAmount = document.getElementById("maximum_amount");
      const errorMessage = document.getElementById("budget-error");

      if (minAmount.value && maxAmount.value) {
         if (parseFloat(maxAmount.value) < parseFloat(minAmount.value)) {
               errorMessage.style.display = "inline"; // Show error message
               maxAmount.setCustomValidity("Maximum budget cannot be less than the minimum amount.");
         } else {
               errorMessage.style.display = "none"; // Hide error message
               maxAmount.setCustomValidity(""); // Remove validation error
         }
      }
   }

   $(document).ready(function() {
        $('#client-form').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            var submitButton = $(this).find('button[type="submit"]'); // Assuming there's a button of type submit

            // Disable the button and change its text
            submitButton.prop('disabled', true).text('Submitting...');

            $.ajax({
                url: "/client-inquiry", // Adjust the URL to match your route
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                    toastr.success('Client Inquiry submitted successfully!');
                    // Reset the form
                    resetFormUI();
                },
                error: function(xhr, status, error) {
                    console.error("AJAX error response:", xhr);  // Log the entire response object to see its structure

                    // if (xhr.responseJSON && xhr.responseJSON.errors) {
                    //     console.error('Validation Errors:', xhr.responseJSON.errors);
                    //     alert('Validation Errors: ' + JSON.stringify(xhr.responseJSON.errors));
                    // } else if (xhr.responseJSON && xhr.responseJSON.error) {
                    //     console.error('Error:', xhr.responseJSON.error);
                    //     alert('Error: ' + xhr.responseJSON.error);
                    // } else {
                        console.error('Unexpected Error:', xhr.statusText);
                        toastr.error('An unexpected error occurred.');
                    // }
                },
                complete: function() {
                    // Enable the button and restore its original text regardless of success or error
                    submitButton.prop('disabled', false).text('Submit');
                }

            });
        });

         function resetFormUI() {
               // Reset the form
               $('#client-form')[0].reset();
               // Reset progress bar and step visibility
               currentStep = 1;
               progress = 0;
               const progressBar = document.getElementById('clientProgressBar');
               progressBar.style.width = `${progress}%`;
               progressBar.setAttribute('aria-valuenow', progress);
               progressBar.textContent = `${progress}%`;

               const stepElements = document.querySelectorAll('.step');
               stepElements.forEach(step => {
                  step.classList.add('d-none');
               });
               document.getElementById('step1').classList.remove('d-none');  // Assuming the first step has ID 'step1'
         }
    });

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
</script>


@endsection