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
           
            </div>
        </div>
    </section>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3 col-xxl-12">
                <div class="innertext">
                    <h1>OUR <span> JOBS</span></h1>

                </div>
<style>
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
</style>

    <section class="featuremodalsec1 pt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="featurelist">
                    <div class="container-fluid jobList">
                        <div class="featurelist" style="border-bottom: 0px !important;">
                
                </div>
                <style>
                     .featurelist ul {
    border: none !important; /* Remove any borders on the list */
    box-shadow: none !important; /* Remove shadows */
    margin: 0; /* Ensure no unintended spacing */
    padding: 0; /* Reset padding */
}
                </style>
               <div class="featurelist" style="border-bottom: 0 !important;">
            <ul class="d-flex flex-wrap justify-content-center align-items-center list-unstyled mt-4">
                    <li class="col-md-1 col-sm-2 text-center">
                        <a href="{{ route('modeling-agency.get', ['section' => 'presenters_emcees']) }}"  data-target="tab7" class="d-flex flex-column align-items-center">
                            <img src="{{ url('user-assets/icons/presenter.png') }}" alt="Presenters Icon" class="icon img-fluid" style="width: 75px; height: 75px;">
                            <p class="hover-text">PRESENTERS & EMCEES</p>
                        </a>
                    </li>
                    <li class="col-md-2  col-sm-1 text-center">
                        <a href="{{ route('modeling-agency.get', ['section' => 'event_staff_ushers']) }}" data-target="tab8" class="d-flex flex-column align-items-center">
                            <img src="{{ url('user-assets/icons/eventstaff.png') }}" alt="Event Staff Icon" class="icon img-fluid" style="width: 75px; height: 75px;">
                            <p class="hover-text ">EVENT STAFF & <br/> USHERS</p>
                        </a>
                    </li>
                    <li class="col-md-2  col-sm-1 text-center">
                        <a href="{{ route('modeling-agency.get', ['section' => 'makeup_hair_stylist']) }}" data-target="tab10" class="d-flex flex-column align-items-center">
                            <img src="{{ url('user-assets/icons/makeup.png') }}" alt="Makeup Icon" class="icon img-fluid" style="width: 75px; height: 75px;">
                            <p class="hover-text">MAKEUP, HAIR & <br/> FASHION</p>
                        </a>
                    </li>
                    <li class="col-md-2 col-sm-1 text-center">
                        <a href="{{ route('modeling-agency.get', ['section' => 'photographers_videographers']) }}" data-target="tab9" class="d-flex flex-column align-items-center">
                            <img src="{{ url('user-assets/icons/photo.png') }}" alt="Photographers Icon" class="icon img-fluid" style="width: 75px; height: 75px;">
                            <p class="hover-text">PHOTOGRAPHY & VIDEOGRAPHY</p>
                        </a>
                    </li>
                    <li class="col-md-2 col-sm-1 text-center">
                        <a href="{{ route('modeling-agency.get', ['section' => 'dancers_performers']) }}" data-target="tab3" class="d-flex flex-column align-items-center">
                            <img src="{{ url('user-assets/icons/dancer.png') }}" alt="Dancers Icon" class="icon img-fluid" style="width: 75px; height: 75px;">
                            <p class="hover-text">DANCERS &  <br/> PERFORMERS</p>
                        </a>
                    </li>
                  
                </ul>
              <!-- Row 1 -->
              <ul class="d-flex flex-wrap justify-content-center align-items-center list-unstyled">
                    <li class="col-md-1 col-sm-1 text-center">
                        <a href="{{ route('modeling-agency.get', ['section' => 'actors']) }}" class="active" data-target="tab1" class="d-flex flex-column align-items-center">
                            <img src="{{ url('user-assets/icons/actor.png') }}" alt="Actors Icon" class="icon img-fluid" style="width: 75px; height: 75px;">
                            <p class="hover-text">ACTORS</p>
                        </a>
                    </li>
                    <li class="col-md-2  col-sm-1 text-center">
                        <a href="{{ route('modeling-agency.get', ['section' => 'models']) }}" data-target="tab2" class="d-flex flex-column align-items-center">
                            <img src="{{ url('user-assets/icons/model.png') }}" alt="Models Icon" class="icon img-fluid" style="width: 75px; height: 75px;">
                            <p class="hover-text">MODELS</p>
                        </a>
                    </li>
                    <li class="col-md-2 col-sm-1 text-center">
                        <a href="{{ route('modeling-agency.get', ['section' => 'musicians']) }}" data-target="tab5" class="d-flex flex-column align-items-center">
                            <img src="{{ url('user-assets/icons/musician.png') }}" alt="Musicians Icon" class="icon img-fluid" style="width: 75px; height: 75px;">
                            <p class="hover-text">MUSICIANS</p>
                        </a>
                    </li>
                    <li class="col-md-2 col-sm-1 text-center">
                        <a href="{{ route('modeling-agency.get', ['section' => 'film_crew']) }}" data-target="tab4" class="d-flex flex-column align-items-center">
                            <img src="{{ url('user-assets/icons/film.png') }}" alt="Film Crew Icon" class="icon img-fluid" style="width: 75px; height: 75px;">
                            <p class="hover-text">FILM CREW</p>
                        </a>
                    </li>
                    <li class="col-md-2 col-sm-1 text-center">
                        <a href="{{ route('modeling-agency.get', ['section' => 'influencers']) }}" class="d-flex flex-column align-items-center">
                            <img src="{{ url('user-assets/icons/influencer.png') }}" alt="Influencers Icon" class="icon img-fluid" style="width: 75px; height: 75px;">
                            <p class="hover-text">INFLUENCERS</p>
                        </a>
                    </li>
                </ul>
                <!-- Row 2 -->
               
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
