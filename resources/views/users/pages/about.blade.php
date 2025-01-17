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
    <section class="rightsec">
    <div class="">
        <div class="row d-flex justify-content-center">
            <div class="col-12 ">
                
                <div class="talentimg  d-flex justify-content-centerx">
                    <!-- Thumbnail Image -->
                    <img id="imageThumbnailRight"   src="https://img.youtube.com/vi/qmpkCshcRlY/hqdefault.jpg"  class="img-fluid" alt="Talent Banner">
                    <!-- Play button (click to show video) -->
                    <a href="javascript:void(0);" id="playButtonRight">
                        <i class="fa-regular fa-circle-play"></i>
                    </a>
                    <!-- Hidden Video container (will be shown when play button is clicked) -->
                    <div id="videoContainerRight" class="video-container" style="display: none;">
    <iframe
        id="videoIframeRight"
        class="embed-responsive-item"
        src="https://www.youtube.com/embed/qmpkCshcRlY?autoplay=1" 
        frameborder="0"
        allow=" fullscreen"
        allowfullscreen>
    </iframe>
</div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    
    document.getElementById("playButtonRight").addEventListener("click", function() {
        var imageThumbnailRight = document.getElementById("imageThumbnailRight");
        var videoContainerRight = document.getElementById("videoContainerRight");
        var playButtonRight = document.getElementById("playButtonRight");

        // Hide the thumbnail and play button
        imageThumbnailRight.style.display = "none";
        playButtonRight.style.display = "none";

        // Show the video container
    videoContainerRight.style.display = "block";
    });

</script>
<style>

/* Wrapper for consistent thumbnail and video sizing */
.talentimg {
    position: relative;
    display: inline-block;
    width: 680px; /* Set desired width */
    height: 350px; /* Maintain 16:9 aspect ratio */
    margin: 0 auto; /* Center horizontally */

}

/* Thumbnail image */
.talentimg img {
    width: 100%;
    height: 100% !important;

    cursor: pointer;
    transition: opacity 0.3s ease; /* Smooth fade effect */
}

/* Play button styling */
#playButtonRight {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 2rem; /* Adjust size */
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    z-index: 10;
}

#playButtonRight:hover {
    color: rgba(255, 255, 255, 1);
}

/* Video container */
.video-container {
    width: 680px; /* Match thumbnail size */
    height: 350px; /* Match aspect ratio */
    display: none; /* Hidden by default */
    background-color: black; /* Background color for the video container */
}

.video-container iframe {
    width: 100%;
    height: 100%;
    border: none; /* Remove border */
}

@media (max-width: 768px) {
    .casting1{
    margin-top: 2px !important;

    width: 100%;

}
/* Wrapper for consistent thumbnail and video sizing */
.talentimg {
    position: relative;
    display: inline-block;
    width: 320px !important; /* Set desired width */
    height: 330px; /* Maintain 16:9 aspect ratio */
    margin: 0 auto; /* Center horizontally */

}

}

</style>

    <section class="ourmissionsec mt-4">
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

                    <div class="row pt-5 d-flex align-items-stretch">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="teambox teambox-founder">
                                <div class="my-teamimg">
                                    <img  data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" src="{{ url('user-assets') }}/team-images/abeera.jpg" class="img-fluid" alt="img">
                                </div>
                                <div class="teambody">
                                    <h3>Abeera K Sheikh</h3>
                                    <h4>CEO - FOUNDER</h4>
                                    <p>Abeera K Sheikh is a leading casting specialist and head casting director in the UAE, renowned for her expertise and innovative approach to talent casting. As the founder of AKS Castings LLC and Cast Talents LLC, offering services in Modeling Agency, Celebrity Management, Film Production, Events, Location Scouting, and Hospitality, she has built a reputation for excellence, consistently delivering top-tier talent for film, TV, and commercial productions. Her companies provide a comprehensive suite of services, setting new industry standards and elevating casting and production across the region.</p>
                                    <div class="socaillisnk d-flex justify-content-center justify-content-md-start">
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
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 teambox-row">
                                <div class="row d-flex align-items-start justify-content-between">
                                    <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 teambox-col">
                                        <div class="teambox teambox-team">
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
                                    <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 teambox-col">
                                        <div class="teambox teambox-team">
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
                                </div>
                                <div class="row d-flex align-items-start justify-content-between">
                                    <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 teambox-col">
                                        <div class="teambox teambox-team">
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
                                    <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 teambox-col">
                                        <div class="teambox teambox-team">
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
                                </div>
                                <div class="row d-flex align-items-start justify-content-between">
                                    <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 teambox-col">
                                        <div class="teambox teambox-team">
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
                                    <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 teambox-col pb-3">
                                        <div class="teambox teambox-team">
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
