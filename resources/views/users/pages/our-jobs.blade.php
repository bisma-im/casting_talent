@extends('users.layouts.layout')

@section('title', 'Casting Talent | Jobs')

@section('main-content')


<style>
    .jobList ul li>a {
        cursor: default;
    }

    .hover-text:hover {
        color: #D81F26;

    }

    .jopbody ul li {
        float: left;
        width: 50%;
        line-height: 22px;
        font-size: 12px;
        font-weight: 500;
        font-family: "Poppins", sans-serif;
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

    .btn-primary {
        background-color: #0056b3;
        border-color: #004085;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
    }

    .row div {
        margin-bottom: 5px;
    }
</style>

<section class="innerpages">
    <div class="container">

    </div>
</section>
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3 col-xxl-12">
    <div class="innertext">
        <h1>OUR <span> JOBS</span></h1>

    </div>

    <section class="featuremodalsec1 pt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="featurelist">
                    <div class="container-fluid jobList">
                        <div class="featurelist" style="border-bottom: 0px !important;">

                        </div>
                        <style>
                            .featurelist ul {
                                border: none !important;
                                /* Remove any borders on the list */
                                box-shadow: none !important;
                                /* Remove shadows */
                                margin: 0;
                                /* Ensure no unintended spacing */
                                padding: 0;
                                /* Reset padding */
                            }
                        </style>
                        <div class="featurelist " style="border-bottom: 0 !important;">
                            <ul class="d-flex flex-wrap  justify-content-center align-items-center list-unstyled mt-4">
                                <li class="col-md-1 col-12  text-center">
                                    <a href="{{ route('jobs.get', ['category' => 'Presenter & Emcees']) }}"
                                        data-target="tab7" class="d-flex flex-column align-items-center">
                                        <img src="{{ url('user-assets/icons/presenter.png') }}" alt="Presenters Icon"
                                            class="icon img-fluid" style="width: 75px; height: 75px;">
                                        <p class="hover-text">PRESENTERS & EMCEES</p>
                                    </a>
                                </li>
                                <li class="col-md-2 col-12  text-center">
                                    <a href="{{ route('jobs.get', ['category' => 'Event Staff and Ushers']) }}"
                                        data-target="tab8" class="d-flex flex-column align-items-center">
                                        <img src="{{ url('user-assets/icons/eventstaff.png') }}" alt="Event Staff Icon"
                                            class="icon img-fluid" style="width: 75px; height: 75px;">
                                        <p class="hover-text ">EVENT STAFF & <br /> USHERS</p>
                                    </a>
                                </li>
                                <li class="col-md-2  col-12  text-center">
                                    <a href="{{ route('jobs.get', ['category' => 'Makeup and Hair']) }}"
                                        data-target="tab10" class="d-flex flex-column align-items-center">
                                        <img src="{{ url('user-assets/icons/makeup.png') }}" alt="Makeup Icon"
                                            class="icon img-fluid" style="width: 75px; height: 75px;">
                                        <p class="hover-text">MAKEUP, HAIR & <br /> FASHION</p>
                                    </a>
                                </li>
                                <li class="col-md-2 col-12  text-center">
                                    <a href="{{ route('jobs.get', ['category' => 'Photographers & Videographers']) }}"
                                        data-target="tab9" class="d-flex flex-column align-items-center">
                                        <img src="{{ url('user-assets/icons/photo.png') }}" alt="Photographers Icon"
                                            class="icon img-fluid" style="width: 75px; height: 75px;">
                                        <p class="hover-text">PHOTOGRAPHY & VIDEOGRAPHY</p>
                                    </a>
                                </li>
                                <li class="col-md-2 col-12  text-center">
                                    <a href="{{ route('jobs.get', ['category' => 'Dancers & Performers']) }}"
                                        data-target="tab3" class="d-flex flex-column align-items-center">
                                        <img src="{{ url('user-assets/icons/dancer.png') }}" alt="Dancers Icon"
                                            class="icon img-fluid" style="width: 75px; height: 75px;">
                                        <p class="hover-text">DANCERS & <br /> PERFORMERS</p>
                                    </a>
                                </li>

                            </ul>
                            <!-- Row 1 -->
                            <ul class="d-flex flex-wrap justify-content-center align-items-center list-unstyled">
                                <li class="col-md-1 col-12  text-center">
                                    <a href="{{ route('jobs.get', ['category' => 'Actor']) }}" class="active"
                                        data-target="tab1" class="d-flex flex-column align-items-center">
                                        <img src="{{ url('user-assets/icons/actor.png') }}" alt="Actors Icon"
                                            class="icon img-fluid" style="width: 75px; height: 75px;">
                                        <p class="hover-text">ACTORS</p>
                                    </a>
                                </li>
                                <li class="col-md-2  col-12  text-center">
                                    <a href="{{ route('jobs.get', ['category' => 'Model']) }}"
                                        data-target="tab2" class="d-flex flex-column align-items-center">
                                        <img src="{{ url('user-assets/icons/model.png') }}" alt="Models Icon"
                                            class="icon img-fluid" style="width: 75px; height: 75px;">
                                        <p class="hover-text">MODELS</p>
                                    </a>
                                </li>
                                <li class="col-md-2 col-12 text-center">
                                    <a href="{{ route('jobs.get', ['category' => 'Musicians']) }}"
                                        data-target="tab5" class="d-flex flex-column align-items-center">
                                        <img src="{{ url('user-assets/icons/musician.png') }}" alt="Musicians Icon"
                                            class="icon img-fluid" style="width: 75px; height: 75px;">
                                        <p class="hover-text">MUSICIANS</p>
                                    </a>
                                </li>
                                <li class="col-md-2 col-12  text-center">
                                    <a href="{{ route('jobs.get', ['category' => 'Film Crew']) }}"
                                        data-target="tab4" class="d-flex flex-column align-items-center">
                                        <img src="{{ url('user-assets/icons/film.png') }}" alt="Film Crew Icon"
                                            class="icon img-fluid" style="width: 75px; height: 75px;">
                                        <p class="hover-text">FILM CREW</p>
                                    </a>
                                </li>
                                <li class="col-md-2 col-12  text-center">
                                    <a href="{{ route('jobs.get', ['category' => 'Influencers']) }}"
                                        class="d-flex flex-column align-items-center">
                                        <img src="{{ url('user-assets/icons/influencer.png') }}" alt="Influencers Icon"
                                            class="icon img-fluid" style="width: 75px; height: 75px;">
                                        <p class="hover-text">INFLUENCERS</p>
                                    </a>
                                </li>
                            </ul>
                            <!-- Row 2 -->

                        </div>
                    </div>
                </div>
                <div class="tabcontent">
                    <div class="tabbox" id="tab1" style="display: block;">
                        <div class="container">
                            <div class="row pt-3">
                                @if ($jobs->count() > 0)
                                    @php
                                        $userId = Auth::check() ? Auth::id() : null; // Get user ID if authenticated
                                    @endphp
                                    @foreach ($jobs as $job)
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
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-4">
                                            <div class="job-box shadow-sm border">
                                                <!-- Grey Image Section -->
                                                <div class="job-image"
                                                    style="background-image: url('{{ $job->image ? url('uploads/job-files/' . $job->image) : url('https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png') }}');">
                                                </div>

                                                <!-- Job Content -->
                                                <div class="job-details p-2">
                                                    <!-- Project and Required -->
                                                    <div class="row mb-2">
                                                        <div class="col-6 fw-bold text-start">PROJECT: <span
                                                                class="fw-normal">{{ $job->project }}</span></div>
                                                        <div class="col-6 fw-bold text-end">REQUIRED: <span class="fw-normal">{{
                                                                $job->required }}</span></div>
                                                    </div>

                                                    <!-- Date, Timings, Days, Payment -->
                                                    <div class="row mb-2">
                                                        <div class="col-6 fw-bold text-start">DATE: <span class="fw-normal">{{
                                                                $job->date }}</span></div>
                                                        <div class="col-6 fw-bold text-end">TIMINGS: <span class="fw-normal">{{
                                                                $job->timings }}</span></div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-6 fw-bold text-start">DAYS: <span class="fw-normal">{{
                                                                $job->days }}</span></div>
                                                        <div class="col-6 fw-bold text-end">PAYMENT: <span class="fw-normal">{{
                                                                $job->payment ?? 'TBD' }}</span></div>
                                                    </div>

                                                    <!-- Location -->
                                                    <div class="fw-bold mb-2 text-center">LOCATION:</div>
                                                    <div class="row mb-2">
                                                        <div class="col-4 fw-bold text-start">COUNTRY: <span
                                                                class="fw-normal">{{ $job->country }}</span></div>
                                                        <div class="col-4 fw-bold text-center">CITY: <span class="fw-normal">{{
                                                                $job->city }}</span></div>
                                                        <div class="col-4 fw-bold text-end">AREA: <span class="fw-normal">{{
                                                                $job->area }}</span></div>
                                                    </div>

                                                    <!-- Transportation, Food, Payment Mode, Paid -->
                                                    <div class="row mb-2">
                                                        <div class="col-6 fw-bold text-start">TRANSPORTATION: <span
                                                                class="fw-normal">{{ $job->transportation }}</span></div>
                                                        <div class="col-6 fw-bold text-end">FOOD: <span class="fw-normal">{{
                                                                $job->food }}</span></div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-6 fw-bold text-start">PAYMENT MODE: <span
                                                                class="fw-normal">{{ $job->payment_mode }}</span></div>
                                                        <div class="col-6 fw-bold text-end">PAID: <span class="fw-normal">{{
                                                                $job->payment_status }}</span></div>
                                                    </div>

                                                    <!-- Details Textarea -->
                                                    <div class="details-box p-1 text-white mb-2"
                                                        style="text-align: center; background-color: rgba(28, 120, 135, 1);">
                                                        {{-- {{ $job->details }} --}}
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                        since the 1500s, when an unknown printer took a galley of type and
                                                        scrambled it to make a type specimen book. It has survived not only five
                                                        centuries, but also the leap into electronic typesetting, remaining
                                                        essentially unchanged.
                                                    </div>

                                                    <!-- Apply Button -->
                                                    <div class="text-center">
                                                        @if (Auth::check())
                                                            <a href="{{ route('job-apply.post', $job->id) }}" style="background-color: rgba(28, 120, 135, 1);"
                                                                class="btn btn-primary" >APPLY NOW</a>
                                                        @else
                                                            <a href="{{ route('login.get') }}" class="btn btn-secondary" style="background-color: rgba(28, 120, 135, 1);">
                                                                LOGIN TO APPLY</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="alert alert-info">
                                        <h6>There are no jobs present yet!</h6>
                                    </div>
                                @endif
                            </div>

                        </div>

                    </div>
                </div>
            </div>

    </section>

</div>


@endsection