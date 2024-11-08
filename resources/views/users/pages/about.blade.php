@extends('users.layouts.layout')

@section('title', 'Casting Talent | About')

@section('main-content')


    <section class="innerpages">
        <div class="container">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="innertext">
                    <h1>About <span>Us</span></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="rightsec" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                    <div class="talentimg">
                        <img src="{{ url('user-assets') }}/images/about_img.png" class="img-fluid">
                        <a href="javascript:void(0);"><i class="fa-regular fa-circle-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ourmissionsec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="missionimg" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src="{{ url('user-assets') }}/images/our-mission.jpg" class="img-fluid" alt="img">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="missiontext" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="2000">
                        <h2>Our <span>Mission</span></h2>
                        <p>At Cast Talents LLC, our mission is to lead with excellence in the UAE’s entertainment and modeling world. We focus on nurturing talent, managing celebrity and event experiences, delivering outstanding hospitality, and finding the perfect locations to make creative dreams a reality.</p>
                        <p>Our goal is to create a positive, inspiring space where our talents thrive, unforgettable experiences are made, and the future of film and production is crafted with integrity, professionalism, and passion.</p>
                        <a href="{{ route('contact.get') }}" class="contactbtn">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ourteamsec" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="ourteam">
                        <h2>Our <span>Team</span></h2>
                        <h3><span>Modeling Agency: </span>Scouts and supports diverse talent.</h3>
                        <h3><span>Celebrity Management: </span>Tailors artist support, handling endorsements and media.</h3>
                        <h3><span>Event Management: </span>Designs memorable events with precision.</h3>
                        <h3><span>Hospitality: </span>Ensures a welcoming, professional environment.</h3>
                        <h3><span>Location Scouting: </span>Finds ideal UAE settings for every project.</h3>
                        <h3><span>Film Production: </span>Brings concepts to life on screen.</h3>
                        <h3>Together, we create exceptional experiences.</h3>
                    </div>

                    <div class="row pt-5">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="teambox">
                                <div class="teamimg">
                                    <img src="{{ url('user-assets') }}/images/team_1.png" class="img-fluid" alt="img">
                                </div>
                                <div class="teambody">
                                    <h3>Abeera K Sheikh</h3>
                                    <h4>CEO - FOUNDER</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et. Lorem
                                        ipsum dolor sit amet.</p>
                                    <div class="socaillisnk">
                                        <ul>
                                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-snapchat"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="teambox">
                                        <div class="teamimg">
                                            <img src="{{ url('user-assets') }}/images/team_2.png" class="img-fluid" alt="img">
                                        </div>
                                        <div class="teambody">
                                            <h3>David Johnson</h3>
                                            <h4>Creative head</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="teambox">
                                        <div class="teamimg">
                                            <img src="{{ url('user-assets') }}/images/team_3.png" class="img-fluid" alt="img">
                                        </div>
                                        <div class="teambody">
                                            <h3>David Johnson</h3>
                                            <h4>Creative head</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="teambox">
                                        <div class="teamimg">
                                            <img src="{{ url('user-assets') }}/images/team_4.png" class="img-fluid" alt="img">
                                        </div>
                                        <div class="teambody">
                                            <h3>David Johnson</h3>
                                            <h4>Creative head</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="teambox">
                                        <div class="teamimg">
                                            <img src="{{ url('user-assets') }}/images/team_5.png" class="img-fluid" alt="img">
                                        </div>
                                        <div class="teambody">
                                            <h3>David Johnson</h3>
                                            <h4>Creative head</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="teambox">
                                        <div class="teamimg">
                                            <img src="{{ url('user-assets') }}/images/team_6.png" class="img-fluid" alt="img">
                                        </div>
                                        <div class="teambody">
                                            <h3>David Johnson</h3>
                                            <h4>Creative head</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="teambox">
                                        <div class="teamimg">
                                            <img src="{{ url('user-assets') }}/images/team_7.png" class="img-fluid" alt="img">
                                        </div>
                                        <div class="teambody">
                                            <h3>David Johnson</h3>
                                            <h4>Creative head</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

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



@endsection
