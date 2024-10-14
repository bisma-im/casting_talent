@extends('users.layouts.layout')

@section('title', 'Casting Talent | Services')

@section('main-content')


    <style>
        .modallist ul li a:hover {
            color: rgb(235, 13, 13) !important;
        }
        
        .modalbox .modallist ul li a {
    color: #000 !important;
    font-size: 13px !important;
    font-weight: 600;
    font-family: "Poppins", sans-serif;
    /* float: left; */
    /* width: 49%; */
    line-height: 30px;
    text-transform: uppercase;
    background-color: transparent;
    border: 0;
    text-align: left;
    padding: 0px 0;
}
    </style>

    <section class="innerpages">
        <div class="container">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="innertext">
                    <h1>Our <span>Activities</span></h1>
                </div>
            </div>
        </div>
    </section>



    <section class="servicessec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalbox">
                        <div class="modalimg">
                            <img src="{{ url('user-assets') }}/images/services_1.png" class="img-fluid" alt="img">
                        </div>
                        <div class="modalbody">
                            <h4>MODELING AGENCY</h4>
                            <div class="modallist">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <ul>
                                            <li><a
                                                    href="{{ route('modeling-agency.get', ['section' => 'actors-models']) }}">ACTORS
                                                    / MODELS</a></li>
                                            <li><a href="{{ route('modeling-agency.get', ['section' => 'hair-makeup']) }}">HAIR
                                                    AND MAKE UP ARTIST</a></li>
                                            <li><a
                                                    href="{{ route('modeling-agency.get', ['section' => 'videography-photography']) }}">VIDEOGRAPHY
                                                    / PHOTOGRAPHY</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <ul>
                                            <li><a href="{{ route('modeling-agency.get', ['section' => 'fashion-show']) }}">FASHION
                                                    SHOW</a></li>
                                            <li><a
                                                    href="{{ route('modeling-agency.get', ['section' => 'locations-permit']) }}">LOCATIONS
                                                    / PERMIT</a></li>
                                            <li><a
                                                    href="{{ route('modeling-agency.get', ['section' => 'tv-commercials']) }}">TV
                                                    COMMERCIAL / MUSIC VIDEOS / FILMING</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="clearfix"></div>

                        </div>
                        <a href="{{ route('modeling-agency.get') }}">READ MORE</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalbox">
                        <div class="modalimg">
                            <img src="{{ url('user-assets') }}/images/services_2.png" class="img-fluid" alt="img">
                        </div>
                        <div class="modalbody">
                            <h4>CELEBRITY MANAGEMENT</h4>
                            <div class="modallist">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <ul>
                                            <li><a
                                                    href="{{ route('celeberity-management.get', ['section' => 'celebrity-management']) }}">CELEBRITY
                                                    MANAGEMENT SERVICES</a></li>
                                            <li><a
                                                    href="{{ route('celeberity-management.get', ['section' => 'hair-makeup']) }}">HAIR
                                                    AND MAKE UP ARTIST</a></li>
                                            <li><a
                                                    href="{{ route('celeberity-management.get', ['section' => 'videography-photography']) }}">VIDEOGRAPHY</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <ul>
                                            <li><a
                                                    href="{{ route('celeberity-management.get', ['section' => 'security-bouncer']) }}">SECURITY
                                                    / BOUNCER</a></li>
                                            <li><a
                                                    href="{{ route('celeberity-management.get', ['section' => 'locations-permit']) }}">LOCATIONS
                                                    / PERMIT</a></li>
                                            <li><a
                                                    href="{{ route('celeberity-management.get', ['section' => 'transportation']) }}">TRANSPORTATION</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('celeberity-management.get', ['section' => 'videography-photography']) }}">PHOTOGRAPHY</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                        </div>
                        <a href="{{ route('celeberity-management.get') }}">READ MORE</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalbox">
                        <div class="modalimg">
                            <img src="{{ url('user-assets') }}/images/services_3.png" class="img-fluid" alt="img">
                        </div>
                        <div class="modalbody">
                            <h4>FILMING</h4>
                            <div class="modallist">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <ul>
                                            <li><a
                                                    href="{{ route('filming-services.get', ['section' => 'filmmaking']) }}">FILMMAKING</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('filming-services.get', ['section' => 'filmmaking-equipment']) }}">FILMMAKING
                                                    EQUIPMENT</a></li>
                                            <li><a
                                                    href="{{ route('filming-services.get', ['section' => 'production']) }}">PRODUCTION</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('filming-services.get', ['section' => 'locations-permit']) }}">LOCATIONS
                                                    / PERMIT</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <ul>
                                            <li><a
                                                    href="{{ route('filming-services.get', ['section' => 'tv-commercial-music-videos']) }}">TV
                                                    COMMERCIAL / MUSIC VIDEOS</a></li>
                                            <li><a
                                                    href="{{ route('filming-services.get', ['section' => 'locations-permit']) }}">VIDEO
                                                    / PHOTOGRAPHY</a></li>
                                            <!--<li><a-->
                                            <!--        href="{{ route('filming-services.get', ['section' => 'filming']) }}">FILMING</a>-->
                                            <!--</li>-->
                                            <li><a
                                                    href="{{ route('filming-services.get', ['section' => 'transportation']) }}">TRANSPORTATION</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('filming-services.get', ['section' => 'catering']) }}">CATERING</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <a href="{{ route('filming-services.get') }}">READ MORE</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalbox">
                        <div class="modalimg">
                            <img src="{{ url('user-assets') }}/images/services_4.png" class="img-fluid" alt="img">
                        </div>
                        <div class="modalbody">
                            <h4>EVENTS</h4>
                            <div class="modallist">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <ul>
                                            <li><a
                                                    href="{{ route('event-services.get', ['section' => 'event-management']) }}">EVENT
                                                    MANAGEMENT</a></li>
                                            <li><a
                                                    href="{{ route('event-services.get', ['section' => 'promotional-events-marketing']) }}">PROMOTIONAL
                                                    EVENTS MARKETING</a></li>
                                            <li><a
                                                    href="{{ route('event-services.get', ['section' => 'retail-promotional-staff']) }}">RETAIL
                                                    AND PROMOTIONAL STAFF</a></li>
                                            <li><a
                                                    href="{{ route('event-services.get', ['section' => 'locations-permit']) }}">LOCATIONS
                                                    / PERMIT</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <ul>
                                            <li><a
                                                    href="{{ route('event-services.get', ['section' => 'security-bouncer']) }}">SECURITY
                                                    / BOUNCER</a></li>
                                            <li><a
                                                    href="{{ route('event-services.get', ['section' => 'transportation']) }}">TRANSPORTATION</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('event-services.get', ['section' => 'catering']) }}">CATERING</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('event-services.get', ['section' => 'live-streaming']) }}">LIVE
                                                    STREAMING</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                        </div>
                        <a href="{{ route('event-services.get') }}">READ MORE</a>
                    </div>
                </div>
                <style>
                    .modalimg {
                        width: 100%;
                        height: 180px;
                    }
                </style>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalbox">
                        <div class="modalimg">
                            <img src="https://i.pinimg.com/736x/7f/5a/ab/7f5aabb22215e472902269f157a2f4a4.jpg" class="img-fluid" alt="img">
                        </div>
                        <div class="modalbody">
                            <h4>HOSPITALITY</h4>
                            <div class="modallist">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <ul style="height: 100px;">
                                            <li><a
                                                    href="{{ route('hospitality.get', ['section' => 'catering']) }}">CATERING</a></li>
                                            <li><a
                                                    href="{{ route('hospitality.get', ['section' => 'transportation']) }}">TRANSPORTATION</a></li>
                                            <li><a
                                                    href="{{ route('hospitality.get', ['section' => 'security_bouncer']) }}">SECURITY / BOUNCER</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <a href="{{ route('hospitality.get') }}">READ MORE</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalbox">
                        <div class="modalimg">
                            <img src="https://avatars.mds.yandex.net/i?id=dd02250fa7f087a0d6e72f0e8b0f7208_l-5511764-images-thumbs&ref=rim&n=13&w=2000&h=1334" class="img-fluid" alt="img">
                        </div>
                        <div class="modalbody">
                            <h4>LOCATION SCOUTING</h4>
                            <div class="modallist">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <ul style="height: 100px;">
                                            <li><a
                                                    href="{{ route('location-scounting.get', ['section' => 'locations_permits']) }}">LOCATIONS / PERMIT</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <a href="{{ route('location-scounting.get') }}">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>


    </section>



@endsection
