@extends('users.layouts.layout')

@section('title', 'Casting Talent | Jobs')

@section('main-content')


<style>
    .jobList ul li>a{
        cursor: default;
    }
</style>

    <section class="innerpages">
        <div class="container">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="innertext">
                    <h1>OUR <span> JOBS</span></h1>

                </div>
            </div>
        </div>
    </section>

<style>
    .featurelist ul li a:hover {
        color: rgb(235, 13, 13) !important;
        cursor: pointer;
    }
    .jopbody ul li {
        float: left;
        width: 50%;
        line-height: 22px;
        font-size: 12px;
        font-weight: 500;
        font-family: "Poppins", sans-serif;
    }
</style>

    <section class="featuremodalsec1 pt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="featurelist">
                    <div class="container-fluid jobList">
                        <div class="featurelist" style="border-bottom: 0px !important;">
                    <ul>
                        <li><a href="{{ route('featured-models.get', ['section' => 'actors']) }}" class="active" data-target="tab1">
                            <i class="fa-solid fa-circle"></i>ACTORS</a>
                        </li>
                        <li><a href="{{ route('featured-models.get', ['section' => 'models']) }}" data-target="tab2">
                            <i class="fa-solid fa-circle"></i>MODELS</a>
                        </li>
                        <li><a href="{{ route('featured-models.get', ['section' => 'dancers_performers']) }}" data-target="tab3">
                            <i class="fa-solid fa-circle"></i>DANCERS & PERFORMERS</a>
                        </li>
                        <li><a href="{{ route('featured-models.get', ['section' => 'film_crew']) }}" data-target="tab4">
                            <i class="fa-solid fa-circle"></i>FILM CREW</a>
                        </li>
                        <li><a href="{{ route('featured-models.get', ['section' => 'photographers_videographers']) }}" data-target="tab9">
                            <i class="fa-solid fa-circle"></i>PHOTOGRAPHERS / VIDEOGRAPHERS</a>
                        </li>
                    </ul>
                </div>
                <style>
                    .featurelist ul {
                        margin: 0px 0 30px;
                        text-align: center; 
                        border-bottom: 1px solid #00000061; 
                        padding-bottom: 40px;
                    }
                </style>
                <div class="featurelist">
                    <ul>
                        <li><a href="{{ route('featured-models.get', ['section' => 'influencers']) }}" data-target="tab6">
                            <i class="fa-solid fa-circle"></i>INFLUENCERS</a>
                        </li>
                        <li><a href="{{ route('featured-models.get', ['section' => 'presenters_emcees']) }}" data-target="tab7">
                            <i class="fa-solid fa-circle"></i>PRESENTERS & EMCEES</a>
                        </li>
                        <li><a href="{{ route('featured-models.get', ['section' => 'event_staff_ushers']) }}" data-target="tab8">
                            <i class="fa-solid fa-circle"></i>EVENT STAFF & USHERS</a>
                        </li>
                        <li><a href="{{ route('featured-models.get', ['section' => 'musicians']) }}" data-target="tab5">
                            <i class="fa-solid fa-circle"></i>MUSICIANS</a>
                        </li>
                        <li><a href="{{ route('featured-models.get', ['section' => 'makeup_hair_stylist']) }}" data-target="tab10">
                            <i class="fa-solid fa-circle"></i>MAKEUP, HAIR, PAINTER & FASHION STYLIST</a>
                        </li>
                    </ul>
                </div>
                    </div>
                </div>
                @php
                    $jobs = DB::table('job_details')->get();
                    // dump($jobs);
                @endphp
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
                                            $categories = json_decode($job->category_type, true);
                                            $isApplied = false;
                                            if ($userId) {
                                                $appliedJob = DB::table('job_applieds')
                                                                ->where('job_applier_id', $userId)
                                                                ->where('job_id', $job->id)
                                                                ->first();
                                                $isApplied = $appliedJob !== null;
                                            }
                                        @endphp
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-4">
                                            <div class="jopbox">
                                                <div class="jobToppet">
                                                    <div class="jopimg castimg">
                                                        <img src="{{ $job->job_profile ? url('uploads/job-files/' . $job->job_profile) : url('https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png') }}"
                                                            class="img-fluid" alt="img">
                                                    </div>
                                                    <div class="jopbody">
                                                        <h4>{{ $job->title }}</h4>
                                                        <p>{{ $job->biography }}</p>
                                                        <h5>ROLES HIRING FOR:</h5>
                                                        <ul>
                                                            @foreach ($categories as $category)
                                                                <?php 
                                                                    $words = explode(' ', strtoupper(str_replace('_', ' ', $category)));
                                                                    $displayWords = implode(' ', array_slice($words, 0, 2)); 
                                                                ?>
                                                                <li>{{ $displayWords }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
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



@endsection
