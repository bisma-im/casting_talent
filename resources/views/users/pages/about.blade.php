@extends('users.layouts.layout')

@section('title', 'Casting Talent | About')

@section('main-content')


    <section class="innerpages">
        <div class="container">
            
        </div>
    </section>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-3 mb-0 pb-0">
        <div class="innertext">
            <h1>About <span>Us</span></h1>
        </div>
    </div>
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
                        <p>At Cast Talents LLC, our team embodies a blend of creativity, professionalism, and deep expertise, dedicated to transforming visions into captivating realities. Each member of our team brings unique talents and a wealth of experience in the modeling and entertainment industry, ensuring that we deliver exceptional services tailored to each client’s needs.</p>
                    </div>

                    <div class="row pt-5">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="teambox">
                                <div class="my-teamimg">
                                    <img  data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" src="{{ url('user-assets') }}/team-images/abeera.jpg" class="img-fluid" alt="img">
                                </div>
                                <div class="teambody">
                                    <h3>Abeera K Sheikh</h3>
                                    <h4>CEO - FOUNDER</h4>
                                    <p>Abeera K Sheikh is a leading casting specialist and head casting director in the UAE, renowned for her expertise and innovative approach to talent casting. As the founder of AKS Castings LLC and Cast Talents LLC, offering services in Modeling Agency, Celebrity Management, Film Production, Events, Location Scouting, and Hospitality, she has built a reputation for excellence, consistently delivering top-tier talent for film, TV, and commercial productions. Her companies provide a comprehensive suite of services, setting new industry standards and elevating casting and production across the region.</p>
                                    <div class="socaillisnk">
                                        <ul>
                                            <li><a href="https://wa.me/971501234796" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                                            <li><a href="https://www.instagram.com/itsabeeraksheikh/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="https://www.facebook.com/abeera.k.sheikh" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                                            <li><a href="https://www.linkedin.com/in/abeera-sheikh-uae-based-casting-specialist-actor-and-founder-of-aks-castings-llc-723063147" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="https://www.snapchat.com/add/abeeraksheikh" target="_blank"><i class="fa-brands fa-snapchat"></i></a></li>
                                            <li><a href="https://www.snapchat.com/add/abeeraksheikh" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
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
                                            <img src="{{ url('user-assets') }}/team-images/aneela.jpg" class="img-fluid" alt="img">
                                        </div>
                                        <div class="teambody">
                                            <h3>Aneela Iftikhar</h3>
                                            <h4>Principal Accountant</h4>
                                            <p>Leading Financial Integrity with Expertise and Precision.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="teambox">
                                        <div class="teamimg">
                                            <img src="{{ url('user-assets') }}/team-images/fayzan.jpg" class="img-fluid" alt="img">
                                        </div>
                                        <div class="teambody">
                                            <h3>Fayzan Mustak</h3>
                                            <h4>Event Specialist</h4>
                                            <p>Bringing Events to Life with Precision and Passion.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="teambox">
                                        <div class="teamimg">
                                            <img src="{{ url('user-assets') }}/team-images/ira.jpg" class="img-fluid" alt="img">
                                        </div>
                                        <div class="teambody">
                                            <h3>Ira Kovalenko</h3>
                                            <h4>Marketing Manager</h4>
                                            <p>Innovative Strategies for Maximum Impact.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="teambox">
                                        <div class="teamimg">
                                            <img src="{{ url('user-assets') }}/team-images/safder-ali.jpg" class="img-fluid" alt="img">
                                        </div>
                                        <div class="teambody">
                                            <h3>Safder Ali</h3>
                                            <h4>Senior DOP</h4>
                                            <p>From Vision to Video: Perfecting Every Frame.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="teambox">
                                        <div class="teamimg">
                                            <img src="{{ url('user-assets') }}/team-images/reza.jpg" class="img-fluid" alt="img">
                                        </div>
                                        <div class="teambody">
                                            <h3>Reza Kalamdeen</h3>
                                            <h4>Head of Location Scouting / Permits</h4>
                                            <p>Unearthing Hidden Gems for Memorable Productions.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="teambox">
                                        <div class="teamimg">
                                            <img src="{{ url('user-assets') }}/team-images/raziq.jpg" class="img-fluid" alt="img">
                                        </div>
                                        <div class="teambody">
                                            <h3>Raziq Shah</h3>
                                            <h4>Line Producer</h4><br/>
                                            <p>From Planning to Wrap – We’ve Got You Covered.</p>
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
