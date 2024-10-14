@extends('users.layouts.layout')

@section('title', 'Casting Talent | Home')

@section('main-content')


    <style>
        .castimg img {
    width: 100%;
    object-fit: cover;
    object-position: top;
    height: 320px;
}
.castbox {
    background-color: #fff;
    padding: 10px;
    border-radius: 20px;
    box-shadow: 4px 2px 9px #ccc;
    height: 550px;
    margin-bottom: 10px;
}
    </style>

    <section class="homebanner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 col-xxl-7">
                    <div class="bannertext" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                        <h5>JOIN CAST TALENTS</h5>
                        <h1>Embark on <span>Your Casting</span> Journey Here, Where <span>Passion Meets</span> Opportunities
                        </h1>
                        <p>Entering Cast Talents launches a transformative casting journey where passion and opportunity
                            drive aspiring talents toward their professional dreams. Our platform offers curated
                            opportunities across film, TV, theatre, and commercials, fostering personal growth and artistic
                            development through dedicated support and collaboration with industry professionals. </p>
                        <p>Join us to showcase your unique skills, build portfolios, and pursue extraordinary opportunities
                            in a vibrant entertainment landscape.</p>
                        <div class="btnlist">
                            <a href="{{ route('register.get') }}">GET STARTED <span class="spanlist"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                            <div class="list">
                                <ul>
                                    <li><img src="{{ url('user-assets') }}/images/icon_1.png" class="img-fluid"
                                            alt="img"></li>
                                    <li><img src="{{ url('user-assets') }}/images/icon_2.png" class="img-fluid"
                                            alt="img"></li>
                                    <li><img src="{{ url('user-assets') }}/images/icon_3.png" class="img-fluid"
                                            alt="img"></li>
                                    <li><img src="{{ url('user-assets') }}/images/icon_4.png" class="img-fluid"
                                            alt="img"></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bannerbottom">
                        <img src="{{ url('user-assets') }}/images/banner_img_4.png" class="img-fluid" alt="img">
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="bannerlistimg1">
                                <img src="{{ url('user-assets') }}/images/banner_img_2.png" class="img-fluid"
                                    alt="img">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                            <div class="rightbanner">
                                <div class="bannerlistimg">
                                    <img src="{{ url('user-assets') }}/images/banner_img_1.png" class="img-fluid"
                                        alt="img">
                                </div>
                                <div class="bannerlistimg">
                                    <img src="{{ url('user-assets') }}/images/banner_img_3.png" class="img-fluid"
                                        alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="casting">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="casting-img" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src="{{ url('user-assets') }}/images/casting.png" alt="Casting Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="casting-text" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="2000">
                        <h5>ABEERA K SHEIKH</h5>
                        <h2>Casting <sapn style="color: rgba(216, 31, 38, 1);">Director</sapn> & <sapn
                                style="color: rgba(216, 31, 38, 1);">Founder</sapn> Of Cast Talents.</h2>
                        <p>Abeera K Sheikh's journey into entertainment began with a profound love for the arts. Relocating
                            to the UAE over a decade ago, she swiftly emerged as a prominent figure in casting, acting, and
                            modeling. Abeera Sheikh is renowned for her warmth, professionalism, and exceptional talent,
                            leaving an enduring impact on the industry. Her career highlights include significant milestones
                            in both acting and casting direction, contributing to the success of numerous films, songs, and
                            brand campaigns. With over a decade of experience, Abeera Sheikh has credits in over 20 movies
                            and 50 songs, including acclaimed works like “Ride On,” “Street Dancer 3D,” and “6 Underground.”
                            As founder of Cast Talents LLC, she continues to shape entertainment with passion and
                            excellence.</p>

                        <a href="{{ route('register.get') }}">WANT TO BECOME A MODEL? <span class="aboutbtn"><i
                                    class="fa-solid fa-angle-right"></i></span></a>
                            <style>
                                .socialLinks {
                                    display: flex;
                                    align-items: center;
                                    justify-content: space-between;
                                    padding: 10px;
                                    margin-top: 30px;
                                }
                                
                                .socialLinks .social-icon {
                                    text-decoration: none;
                                    color: #000; /* Change to desired color */
                                    font-size: 16px; /* Adjust size as needed */
                                    width: 50px;
                                    height: 50px;
                                    border-radius: 50%;
                                }
                                
                                .socialLinks .social-icon:hover {
                                    color: #0073e6;
                                }

                            </style>
                            <div class="socialLinks">
                                <a href="https://www.facebook.com" target="_blank" class="social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.twitter.com" target="_blank" class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.instagram.com" target="_blank" class="social-icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.linkedin.com" target="_blank" class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="https://www.youtube.com" target="_blank" class="social-icon">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<style>
    .featurelist ul li a:hover {
        color: rgb(235, 13, 13) !important;
    }
</style>

    <section class="featuremodalsec">

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="featuremodal">
                    <h3>Featured <span>Talents</span></h3>
                </div>
                <div class="featurelist" style="border-bottom: 0px !important;">
                    <ul>
                        <li><a href="{{ route('modeling-agency.get', ['section' => 'actors']) }}" class="active" data-target="tab1">
                            <i class="fa-solid fa-circle"></i>ACTORS</a>
                        </li>
                        <li><a href="{{ route('modeling-agency.get', ['section' => 'models']) }}" data-target="tab2">
                            <i class="fa-solid fa-circle"></i>MODELS</a>
                        </li>
                        <li><a href="{{ route('modeling-agency.get', ['section' => 'dancers_performers']) }}" data-target="tab3">
                            <i class="fa-solid fa-circle"></i>DANCERS & PERFORMERS</a>
                        </li>
                        <li><a href="{{ route('modeling-agency.get', ['section' => 'film_crew']) }}" data-target="tab4">
                            <i class="fa-solid fa-circle"></i>FILM CREW</a>
                        </li>
                        <li><a href="{{ route('modeling-agency.get', ['section' => 'photographers_videographers']) }}" data-target="tab9">
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
                        <li><a href="{{ route('modeling-agency.get', ['section' => 'influencers']) }}" data-target="tab6">
                            <i class="fa-solid fa-circle"></i>INFLUENCERS</a>
                        </li>
                        <li><a href="{{ route('modeling-agency.get', ['section' => 'presenters_emcees']) }}" data-target="tab7">
                            <i class="fa-solid fa-circle"></i>PRESENTERS & EMCEES</a>
                        </li>
                        <li><a href="{{ route('modeling-agency.get', ['section' => 'event_staff_ushers']) }}" data-target="tab8">
                            <i class="fa-solid fa-circle"></i>EVENT STAFF & USHERS</a>
                        </li>
                        <li><a href="{{ route('modeling-agency.get', ['section' => 'musicians']) }}" data-target="tab5">
                            <i class="fa-solid fa-circle"></i>MUSICIANS</a>
                        </li>
                        <li><a href="{{ route('modeling-agency.get', ['section' => 'makeup_hair_stylist']) }}" data-target="tab10">
                            <i class="fa-solid fa-circle"></i>MAKEUP, HAIR, PAINTER & FASHION STYLIST</a>
                        </li>
                    </ul>
                </div>
                @php
                    $models = DB::table('model_details')
                        ->orderBy('created_at', 'desc') // Replace 'created_at' with the appropriate column if needed
                        ->limit(9)
                        ->get();
                @endphp
                <div class="container">
                    <div class="row">
                        @if ($models->count() > 0)
                            @foreach ($models as $modelDetail)
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
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 mb-3">
                                    <a href="{{ route('model-info.get', $modelDetail->id) }}" class="text-dark">
                                        <div class="castbox">
                                            <div class="castimg">
                                                <img src="{{ url('/uploads/models/profiles/' . $firstImage) }}" class="img-fluid"
                                                    alt="Model Image">
                                            </div>
                                            <div class="castbody">
                                                <h5 class="bodytheading">{{ $modelDetail->first_name }}
                                                    {{ $modelDetail->last_name }}</h5>
                                                <div class="castbodylist firstitem">
                                                    <h5><strong>AGE:</strong> {{ $age }}</h5>
                                                    <h5><strong>Nationality:</strong>
                                                        {{ $modelDetail->nationality }}
                                                    </h5>
                                                </div>
                                                <div class="castbodylist">
                                                    <h5><strong>HEIGHT:</strong> {{ $height }}</h5>
                                                </div>
                                                <div class="castbodylist">
                                                    <h5><strong>WEIGHT:</strong> {{ $weight }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="alert alert-info">
                                <h6>There is no data present yet...</h6>
                            </div>
                        @endif
                    </div>
        </div>
            </div>
        </div>
    </section>

    <div class="startedbtn">
        <ul>
            <li><a href="{{ route('register.get') }}">GET STARTED TODAY</a></li>
            <li><a href="{{ route('jobs.get') }}">VIEW MORE JOBS!</a></li>
        </ul>
    </div>
    <section class="rightsec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                    <div class="rightsec">
                        <h3>Finding The <span>Right Talent</span> For Your <span>Next Screen</span> Production, <span>Made
                                Easy.</span></h3>
                    </div>
                    <div class="talentimg">
                        <img src="{{ url('user-assets') }}/images/talentbanner.png" class="img-fluid">
                        <a href="#"><i class="fa-regular fa-circle-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="casttelentsec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="castingimgright">
                                <img src="{{ url('user-assets') }}/images/castingleft.png" class="img-fluid"
                                    alt="img">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                            <div class="castingport">
                                <h3>Cast <span>Talents</span> Portfolio</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <div class="btnlist">
                                    <a href="{{ route('register.get') }}">WANT TO BECOME A MODEL?<span
                                            class="spanlist"><i class="fa-solid fa-angle-right"></i></span></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 col-xxl-7">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
                            <div class="castingtype1 firstcast" data-speed="1.2" data-lag="0">
                                <img src="{{ url('user-assets') }}/images/casting_1.png" class="img-fluid"
                                    alt="img">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
                            <div class="castingtype1 secondcast" data-speed="1.1" data-lag="0">
                                <img src="{{ url('user-assets') }}/images/casting_2.png" class="img-fluid"
                                    alt="img">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                            <div class="castingtype1 thirdcast" data-speed="1.2" data-lag="0">
                                <img src="{{ url('user-assets') }}/images/casting_3.png" class="img-fluid"
                                    alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="membershipsec">
        <div class="container">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="membershiptext">
                    <h3>Membership</h3>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl,-4 col-xxl-4">
                        <div class="membershipbox member1" data-aos="fade-down" data-aos-easing="linear"
                            data-aos-duration="1500">
                            <div class="membertime">
                                <h4>ONE MONTH</h4>
                                <h3>Standard</h3>
                            </div>
                            <div class="memberbody">
                                <ul>
                                    <li>UNLIMITED PHOTOS UPLOAD</li>
                                    <li>UNLIMITED VIDEOS UPLOAD</li>
                                    <li>UNLIMITED AUDIO CLIPS</li>
                                    <li>POFILE LISTED IN FEATURED MODELS</li>
                                    <li>GET MORE EXPOSURE SEEING BY BIG BRANDS</li>
                                    <li>MORE PREFERENCE FOR OUR INHOUSE PROJECTS</li>
                                </ul>
                            </div>
                            <div class="membershipfooter">
                                <h5>35 AED <small>/per month</small></h5>
                                <a href="{{ route('login.get') }}">Get it now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl,-4 col-xxl-4">
                        <div class="membershipbox member2" data-aos="fade-up" data-aos-easing="linear"
                            data-aos-duration="1500">
                            <div class="membertime">
                                <h4>3 MONTHS</h4>
                                <h3>GOLD</h3>
                            </div>
                            <div class="memberbody">
                                <ul>
                                    <li>UNLIMITED PHOTOS UPLOAD</li>
                                    <li>UNLIMITED VIDEOS UPLOAD</li>
                                    <li>UNLIMITED AUDIO CLIPS</li>
                                    <li>POFILE LISTED IN FEATURED MODELS</li>
                                    <li>GET MORE EXPOSURE SEEING BY BIG BRANDS</li>
                                    <li>MORE PREFERENCE FOR OUR INHOUSE PROJECTS</li>
                                </ul>
                            </div>
                            <div class="membershipfooter">
                                <h5>95 AED <small>/ for 3 months</small></h5>
                                <a href="{{ route('login.get') }}">Get it now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl,-4 col-xxl-4">
                        <div class="membershipbox member3" data-aos="fade-down" data-aos-easing="linear"
                            data-aos-duration="1500">
                            <div class="membertime">
                                <h4>6 MONTHS</h4>
                                <h3>PLATINUM</h3>
                            </div>
                            <div class="memberbody">
                                <ul>
                                    <li>UNLIMITED PHOTOS UPLOAD</li>
                                    <li>UNLIMITED VIDEOS UPLOAD</li>
                                    <li>UNLIMITED AUDIO CLIPS</li>
                                    <li>POFILE LISTED IN FEATURED MODELS</li>
                                    <li>GET MORE EXPOSURE SEEING BY BIG BRANDS</li>
                                    <li>MORE PREFERENCE FOR OUR INHOUSE PROJECTS</li>
                                </ul>
                            </div>
                            <div class="membershipfooter">
                                <h5>175 AED <small>/ for 6 months</small></h5>
                                <a href="{{ route('login.get') }}">Get it now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
