@extends('users.layouts.layout')

@section('title', 'Casting Talent | Services')

@section('main-content')


    <style>
   /* General Modal Styles */
.modalbox {
    position: relative;
    height: 100vh; /* Full screen height */
    width: 100%; /* Full screen width */
    overflow: hidden; /* Prevent scrolling if needed */
}

/* Background Image Styles */
.modalimg img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    object-fit: cover; /* Ensures the image covers the background */
    z-index: 1;
}

/* Modal Body Content Styles */
.modalbody {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 20px;
    background: rgba(255, 255, 255, 0.95); /* Semi-transparent white */
    border-radius: 10px;
    text-align: center;
    z-index: 2; /* Above the image */
    box-shadow: 0px -4px 10px rgba(0, 0, 0, 0.2); /* Optional shadow effect */
    opacity: 0.5;
}

/* Title Styling */
.modalbody h4 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}

/* List Styling */
.modalbody ul,
.modallist ul {
    list-style: none;
    padding: 0;
    margin: 0;
    padding-left:2px;
}

.modalbody ul li,
.modallist ul li {
    margin-bottom: 10px;
}

.modalbody ul li a,
.modallist ul li a {
    text-decoration: none;
    color: #007bff;
    font-weight: 500;
    transition: color 0.3s;
}

.modalbody ul li a:hover,
.modallist ul li a:hover {
    color: #0056b3;
    text-decoration: underline;
}

/* Two-Column Layout */
.modallist .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
}

.modallist .col-6 {
    flex: 1;
    min-width: 45%;
}

/* Read More Button */
.read-more {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #007bff; /* Button color */
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s;
}

.read-more:hover {
    background-color: #0056b3;
}

/* Responsive Layout */
@media (max-width: 768px) {
    .modallist .row {
        flex-direction: column;
    }

    .modallist .col-6 {
        min-width: 100%;
    }

    .modalbody h4 {
        font-size: 20px;
    }
}

    </style>

    <section class="innerpages">
        <div class="container">
            
        </div>
    </section>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12  mt-3 ">
                <div class="innertext">
                    <h1>Our <span>Activities</span></h1>
                </div>
            </div>
    <section class="servicessec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="modalbox">
    <!-- Background Image -->
    <div class="modalimg">
        <img src="{{ url('user-assets') }}/images/modeling.png" class="img-fluid" alt="img">
    </div>

    <!-- Content -->
    <div class="modalbody">
        <h4>MODELING AGENCY</h4>
        <div class="modallist">
            <div class="row ">
                <div class="col-6">
                    <ul class>
                        <li class="mt-3"><a href="{{ route('modeling-agency.get', ['section' => 'actors-models']) }}">ACTORS / MODELS</a></li>
                        <li><a href="{{ route('modeling-agency.get', ['section' => 'hair-makeup']) }}">HAIR AND MAKE UP ARTIST</a></li>
                        <li><a href="{{ route('modeling-agency.get', ['section' => 'videography-photography']) }}">VIDEOGRAPHY / PHOTOGRAPHY</a></li>
                    </ul>
                    
                </div>
                <div class="col-6">
                    <ul>
                        <li class="mt-3"><a href="{{ route('modeling-agency.get', ['section' => 'fashion-show']) }}">FASHION SHOW</a></li>
                        <li><a href="{{ route('modeling-agency.get', ['section' => 'locations-permit']) }}">LOCATIONS / PERMIT</a></li>
                        <li><a href="{{ route('modeling-agency.get', ['section' => 'tv-commercials']) }}">TV COMMERCIAL/MUSIC VIDEOS/FILMING</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <a href="{{ route('modeling-agency.get') }}" class="read-more">READ MORE</a>
    </div>
</div>












                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="modalbox">
    <!-- Background Image -->
    <div class="modalimg">
        <img src="{{ url('user-assets') }}/images/Celebmanagement.jpg" class="img-fluid" alt="img">
    </div>

    <!-- Content -->
    <div class="modalbody">
        <h4>CELEBRITY MANAGEMENT</h4>
        <div class="modallist">
            <div class="row">
                <div class="col-6">
                    <ul>
                        <li class="mt-3"><a href="{{ route('celeberity-management.get', ['section' => 'celebrity-management']) }}">CELEBRITY MANAGEMENT SERVICES</a></li>
                        <li><a href="{{ route('celeberity-management.get', ['section' => 'hair-makeup']) }}">HAIR AND MAKE UP ARTIST</a></li>
                        <li><a href="{{ route('celeberity-management.get', ['section' => 'videography-photography']) }}">VIDEOGRAPHY/PHOTOGRAPHY</a></li>
                    </ul>
                </div>
                <div class="col-6 ">
                    <ul>
                        <li class="mt-3"><a href="{{ route('celeberity-management.get', ['section' => 'security-bouncer']) }}">SECURITY / BOUNCER</a></li>
                        <li><a href="{{ route('celeberity-management.get', ['section' => 'locations-permit']) }}">LOCATIONS / PERMIT</a></li>
                        <li><a href="{{ route('celeberity-management.get', ['section' => 'transportation']) }}">TRANSPORTATION</a></li>
  
                    </ul>
                </div>
            </div>
        </div>
        <a href="{{ route('celeberity-management.get') }}" class="read-more">READ MORE</a>
    </div>
</div>

                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="modalbox">
    <!-- Background Image -->
    <div class="modalimg">
        <img src="{{ url('user-assets') }}/images/filmmaking.jpg" class="img-fluid" alt="img">
    </div>

    <!-- Content -->
    <div class="modalbody">
        <h4>FILMING</h4>
        <div class="modallist">
            <div class="row">
                <div class="col-6">
                    <ul>
                        <li class="mt-3"><a href="{{ route('filming-services.get', ['section' => 'filmmaking']) }}">FILMMAKING</a></li>
                        <li><a href="{{ route('filming-services.get', ['section' => 'filmmaking-equipment']) }}">FILMMAKING EQUIPMENT</a></li>
                        <li><a href="{{ route('filming-services.get', ['section' => 'production']) }}">PRODUCTION</a></li>
                        <li><a href="{{ route('filming-services.get', ['section' => 'locations-permit']) }}">LOCATIONS / PERMIT</a></li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul>
                        <li class="mt-3"><a href="{{ route('filming-services.get', ['section' => 'tv-commercial-music-videos']) }}">TV COMMERCIAL / MUSIC VIDEOS</a></li>
                        <li><a href="{{ route('filming-services.get', ['section' => 'videography-photography']) }}">VIDEO / PHOTOGRAPHY</a></li>
                        <li><a href="{{ route('filming-services.get', ['section' => 'transportation']) }}">TRANSPORTATION</a></li>
                        <li><a href="{{ route('filming-services.get', ['section' => 'catering']) }}">CATERING</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <a href="{{ route('filming-services.get') }}" class="read-more">READ MORE</a>
    </div>
</div>

                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="modalbox">
    <!-- Background Image -->
    <div class="modalimg">
        <img src="{{ url('user-assets') }}/images/event.webp" class="img-fluid" alt="img">
    </div>

    <!-- Content -->
    <div class="modalbody">
    <h4>EVENTS</h4>
    <div class="modallist">
        <div class="row">
            <!-- Column 1 -->
            <div class="col-6">
                <ul>
                    <li>
                        <a href="{{ route('event-services.get', ['section' => 'event-management']) }}">
                            EVENT MANAGEMENT
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('event-services.get', ['section' => 'promotional-events-marketing']) }}">
                            PROMOTIONAL EVENTS MARKETING
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('event-services.get', ['section' => 'retail-promotional-staff']) }}">
                            RETAIL AND PROMOTIONAL STAFF
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('event-services.get', ['section' => 'locations-permit']) }}">
                            LOCATIONS / PERMIT
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Column 2 -->
            <div class="col-6">
                <ul>
                    <li>
                        <a href="{{ route('event-services.get', ['section' => 'security-bouncer']) }}">
                            SECURITY / BOUNCER
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('event-services.get', ['section' => 'transportation']) }}">
                            TRANSPORTATION
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('event-services.get', ['section' => 'catering']) }}">
                            CATERING
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('event-services.get', ['section' => 'live-streaming']) }}">
                            LIVE STREAMING
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Read More Button -->
    <a href="{{ route('event-services.get') }}" class="read-more">READ MORE</a>
</div>

</div>

                </div>
               
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="modalbox">
    <!-- Background Image -->
    <div class="modalimg">
        <img src="{{ url('user-assets') }}/images/hospitality.jpg" class="img-fluid" alt="img">
    </div>

    <!-- Content Section -->
    <div class="modalbody">
        <h4>HOSPITALITY</h4>
        <div class="modallist">
            <div class="row">
                <div class="col-6">
                    <ul>
                        <li><a href="{{ route('hospitality.get', ['section' => 'catering']) }}">CATERING</a></li>
                        <li><a href="{{ route('hospitality.get', ['section' => 'transportation']) }}">TRANSPORTATION</a></li>
                        <li><a href="{{ route('hospitality.get', ['section' => 'security-bouncer']) }}">SECURITY / BOUNCER</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <a href="{{ route('hospitality.get') }}" class="read-more">READ MORE</a>
    </div>
</div>

                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="modalbox">
    <!-- Background Image -->
    <div class="modalimg">
        <img src="{{ url('user-assets') }}/images/location.jpg" class="img-fluid" alt="img">
    </div>

    <!-- Modal Content Section -->
    <div class="modalbody">
        <h4>LOCATION SCOUTING</h4>
        <div class="modallist">
            <div class="row">
                <div class="col-12">
                    <ul>
                        <li>
                            <a href="{{ route('location-scounting.get', ['section' => 'locations_permits']) }}">
                                LOCATIONS / PERMIT
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <a href="{{ route('location-scounting.get') }}" class="read-more">READ MORE</a>
    </div>
</div>

                </div>
            </div>
        </div>


    </section>



@endsection
