@extends('users.layouts.layout')

@section('title', 'Casting Talent | Home')

@section('main-content')


<style>
    .profile-card {
        background: white;
        /* border-radius: 5px; */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        text-align: center;
        height: 60vh;
        margin: 15px;
        overflow: hidden;
        justify-content: center;
        align-items: center;
    }
    .profile-card .img-div{
        height: 87%;
    }
    .cardbody {
        display: flex;
        height: 13%;
    }
    .card-code {
        flex: 1;
        background-color: #f2c67f;
        display: flex; /* Enable flexbox */
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
        font-size: 14px;
        font-weight: 500;
        text-align: center;
        height: 100%; 
    }

    .card-info {
        flex: 1;
        background-color: #4ca1ae;
        display: flex;
        justify-content: center; 
        align-items: center;
        font-size: 14px;
        font-weight: 500;
        text-align: center;
        height: 100%; 
    }
    .profile-card img {
        width: 100%; 
        height: 100%; 
        object-fit: fill;
    }

    .profile-card p {
        margin: 10px 0 5px;
        font-size: 18px;
        color: #333;
        text-align: left;
    }

    .profile-card span {
        display: block;
        font-size: 14px;
        text-align: left;
        color: #666;
    }
    .carousel-container {
        width: 100%;
        padding-top: 20px;
        margin: auto;
        position: relative;
        height: 80vh;
    }

    .carousel-container h2 {
        font-size: 66px;
        line-height: 55px;
        font-weight: 500;
        font-family: "Lateef", serif;
        text-shadow: 0 0 black;
        text-align: center;
        text-transform: capitalize;
        position: relative;
    }

    .carousel-container h2 span{
        color: rgba(216, 31, 38, 1);
    }

    .carousel-container h2:before {
        content: "";
        position: absolute;
        width: 248px;
        bottom: -12px;
    }
    .carousel-heading {
        text-align: center;
        font-size: 24px;
        color: #333;
    }

    .custom-carousel {
        position: relative;
        width: 100%;
        overflow: hidden;
        /* padding-left: 40px;
        padding-right: 40px; */
    }

    .custom-carousel-inner {
        display: flex;
        padding: 0;
        margin: 0;
        justify-content: start;
        transition: transform 0.8s ease;
        will-change: transform;
    }

    .custom-carousel-item {
        flex: 0 0 20%;
        scroll-snap-align: start;
    }

    .padding-left-40 {
        padding-left: 40px;
    }

    .padding-right-40 {
        padding-right: 40px;
    }

    .custom-carousel-control-prev,
    .custom-carousel-control-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        width: 30px;
        height: 30px;
        text-align: center;
        line-height: 30px;
        font-size: 24px;
        border-radius: 50%;
        cursor: pointer;
    }

    .custom-carousel-control-prev {
        left: 10px;
    }

    .custom-carousel-control-next {
        right: 10px;
    }






    /* -------------------------------------------------------- */
    .my-container2 {
                position: relative; /* Ensures the pseudo-element is positioned relative to this container */
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                width: 100%;
                height: 100vh; /* Full viewport height */
                overflow: hidden; /* Prevents any pseudo-element from overflowing the container */
        }
        .casting1{
    margin-top: 250px;
 
    width: 100%;
   
}
@media (max-width: 768px) {
    .casting1{
    margin-top: 0px;
     
    width: 100%;
   
}

}

        .my-container2::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('{{ url('/user-assets/images/casting.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* opacity: 0.5;  */
        }

        .my-container2 .actors-section {
        position: relative; 
        z-index: 1; 
        }

        .my-container2 .actors-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #fff; 
        opacity: 0.1;
       
        z-index: -1000;  
        }
        .actors-section {
    margin: 0;
    padding: 0;
    height:70vh;
}
@media (max-width: 768px) {
  .getstartedbtn {
   
    width: 60% !important;
  }
  .section1images{
    height: 100vh !important;
   
   
  }
  .actors-section {
    margin: 0;
    padding: 0;
    height:100vh;
    
}
.modalagencysec {
        padding: 10px;
    }
    .my-container2 {
        width: 100%;
    }
    .modaltext {
        text-align: center;
    }
    .casting-text h2 {
        font-size: 1.5rem; /* Adjust for smaller screens */
    }
    .casting-text p {
        font-size: 1rem; /* Adjust for readability */
    }
    .socialLinks {
        flex-wrap: wrap;
        justify-content: center;
        padding: 20px;
    }
    .socialLinks .social-icon {
        font-size: 16px;
        width: 40px;
        height: 40px;
        margin: 5px;
    }
    .responsive-menu {
        flex-direction: column; /* Stack items vertically */
        gap: 40px; /* Adjust spacing */
 
    }

    .responsive-menu a {
        font-size: 20px; /* Adjust font size */
        
    }
    .custom-carousel-control-prev {
        left: 0px;
    }

    .custom-carousel-control-next {
        right: 0px;
    }
    .profile-card {
        background: white;
        /* border-radius: 5px; */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
     
        /* padding: 15px; */
        height: 60vh;
         
          width: 100vw;

    }
    .profile-card .img-div{
         
        width: 100vw;

    }
}

</style>

<section class="homebanner " >
    <div class="container mt-5" >
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
                    <div class="btnlist ">
                        <a href="{{ route('register.get') }} " class="getstartedbtn" >GET STARTED <span class="spanlist  "><i
                                    class="fa-solid fa-angle-right "></i></span></a>
                        <div class="list"  data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><img src="{{ url('user-assets') }}/images/icon_1.png" class="img-fluid " alt="img">
                                </li>
                                <li><img src="{{ url('user-assets') }}/images/icon_2.png" class="img-fluid " alt="img">
                                </li>
                                <li><img src="{{ url('user-assets') }}/images/icon_3.png" class="img-fluid " alt="img">
                                </li>
                                <li><img src="{{ url('user-assets') }}/images/icon_4.png" class="img-fluid " alt="img">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bannerbottom "  data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                    <img src="{{ url('user-assets') }}/images/banner_img_4.jpg" class="img-fluid " alt="img">
                </div>

            </div>
            <div class="col-12  col-md-5">
                <div class="row">
                    <div class="col-12  col-md-4">
                        <div class="bannerlistimg1 "> 
                            <!-- <img   data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" src="{{ url('user-assets') }}/images/banner_img_2.jpg " class="img-fluid section1images" alt="img"> -->
                        </div>
                    </div>
                    <div class="col-md-8 col-12 ">
                        <div class="rightbanner">
                            <div class="bannerlistimg">
                                <!-- <img   data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" src="{{ url('user-assets') }}/images/banner_img_1.jpg" class="img-fluid " alt="img"> -->
                            </div>
                            <div class="bannerlistimg">
                                <img   data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" src="{{ url('user-assets') }}/images/banner_img_3.jpg" class="img-fluid " alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="casting1 ">
    <div class="">
    <section id="section-models" class="modalagencysec">
        <div class="my-container2">
                <div class="row actors-section">
                    <div class="modaltext">
                          <div>
                          <div>
                <div class="casting-text" >
                    <h5 class="pt-md-2 pt-3">ABEERA K SHEIKH</h5>
                    <h2>Casting <sapn style="color: rgba(216, 31, 38, 1);">Director</sapn> & <sapn
                            style="color: rgba(216, 31, 38, 1);">Founder</sapn> Of Cast Talents.</h2>
                    <p class="">Abeera K Sheikh's journey into entertainment began with a profound love for the arts. Relocating
                        to the UAE over a decade ago, she swiftly emerged as a prominent figure in casting, acting, and
                        modeling. Abeera Sheikh is renowned for her warmth, professionalism, and exceptional talent,
                        leaving an enduring impact on the industry. Her career highlights include significant milestones
                        in both acting and casting direction, contributing to the success of numerous films, songs, and
                        brand campaigns. With over a decade of experience, Abeera Sheikh has credits in over 20 movies
                        and 50 songs, including acclaimed works like “Ride On,” “Street Dancer 3D,” and “6 Underground.”
                        As founder of Cast Talents LLC, she continues to shape entertainment with passion and
                        excellence.</p>
                    <a href="{{ route('register.get') }}" >WANT TO BECOME A MODEL? <span class="aboutbtn "><i
                                class="fa-solid fa-angle-right"></i></span></a>
                    <style>
                        .socialLinks {
                            display: flex;
                            align-items: center;
                            justify-content: flex-end;
                            padding: 30px;
                              
                            width: 100%;
                        }

                        .socialLinks .social-icon {
                            text-decoration: none;
                            color: #000;
                            margin: 2px;

                            /* Change to desired color */
                            font-size: 20px;
                            /* Adjust size as needed */
                            width: 50px;
                            height: 50px;
                            border-radius: 50%;
                        }

                        .socialLinks .social-icon:hover {
                            color: #0073e6;
                        }
                    </style>
                    <div class="socialLinks ">
                        <a href="https://www.facebook.com/abeera.k.sheikh" target="_blank" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.snapchat.com/add/abeeraksheikh" target="_blank" class="social-icon">
                            <i class="fab fa-snapchat"></i>
                        </a>
                        <a href="https://wa.me/971501234796" target="_blank" class="social-icon">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://www.instagram.com/itsabeeraksheikh/" target="_blank" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/abeera-sheikh-uae-based-casting-specialist-actor-and-founder-of-aks-castings-llc-723063147" target="_blank" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.youtube.com" target="_blank" class="social-icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
                          
                          <div>

                        
                       
                    </div>
                </div>
            </div>
            
    </section>












    <!-- ---------------------------------------------------------------------------------------- -->
        <!-- <div class="row ">
            <div class="col-sm-6 col-md-12 w-100">
                <div  data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img src="{{ url('user-assets') }}/images/casting.jpg" alt="Casting Image" class="img-fluid">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 ">
                <div class="casting-text" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                    data-aos-duration="2000">
                    <h5 class="pt-2">ABEERA K SHEIKH</h5>
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
                            width: 35%;
                        }

                        .socialLinks .social-icon {
                            text-decoration: none;
                            color: #000;
                            /* Change to desired color */
                            font-size: 20px;
                            /* Adjust size as needed */
                            width: 50px;
                            height: 50px;
                            border-radius: 50%;
                        }

                        .socialLinks .social-icon:hover {
                            color: #0073e6;
                        }
                    </style>
                    <div class="socialLinks ">
                        <a href="https://www.facebook.com/abeera.k.sheikh" target="_blank" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.snapchat.com/add/abeeraksheikh" target="_blank" class="social-icon">
                            <i class="fab fa-snapchat"></i>
                        </a>
                        <a href="https://wa.me/971501234796" target="_blank" class="social-icon">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://www.instagram.com/itsabeeraksheikh/" target="_blank" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/abeera-sheikh-uae-based-casting-specialist-actor-and-founder-of-aks-castings-llc-723063147" target="_blank" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.youtube.com" target="_blank" class="social-icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</section>

<style>
    .featurelist ul li a:hover {
        color: rgb(235, 13, 13) !important;
    }
    .featurelist ul {
    border: none !important; /* Remove any borders on the list */
    box-shadow: none !important; /* Remove shadows */
    margin: 0; /* Ensure no unintended spacing */
    padding: 0; /* Reset padding */
}
.hover-text:hover {
    color: #D81F26;

}

</style>

<section class="featuremodalsec mt-5">
    <div class="row">
        <div class="col-12">
            <div class="featuremodal">
                <h3>Featured <span>Talents</span></h3>
            </div>
            <div class="featurelist" style="border-bottom: 0 !important;">
                <ul class="d-flex flex-wrap justify-content-center align-items-center list-unstyled mt-4">
                    <li class="col-md-1 col-12 text-center">
                        <a href="{{ route('all-models-homepage.get', ['role' => 'presenters_emcees']) }}" class="d-flex flex-column align-items-center">
                            <img src="{{ url('user-assets/icons/presenter.png') }}" alt="Presenters Icon" class="icon img-fluid" style="width: 75px; height: 75px;">
                            <p class="hover-text">PRESENTERS & EMCEES</p>
                        </a>
                    </li>
                    <li class="col-md-2  col-12 text-center">
                        <a href="{{ route('all-models-homepage.get', ['role' => 'event_staff_ushers']) }}" class="d-flex flex-column align-items-center">
                            <img src="{{ url('user-assets/icons/eventstaff.png') }}" alt="Event Staff Icon" class="icon img-fluid" style="width: 75px; height: 75px;">
                            <p class="hover-text ">EVENT STAFF & <br/> USHERS</p>
                        </a>
                    </li>
                    <li class="col-md-2 col-12 text-center">
                        <a href="{{ route('all-models-homepage.get', ['role' => 'makeup_hair_painter_fashion_stylists']) }}" class="d-flex flex-column align-items-center">
                            <img src="{{ url('user-assets/icons/makeup.png') }}" alt="Makeup Icon" class="icon img-fluid" style="width: 75px; height: 75px;">
                            <p class="hover-text">MAKEUP, HAIR & <br/> FASHION</p>
                        </a>
                    </li>
                    <li class="col-md-2 col-12 text-center">
                        <a href="{{ route('all-models-homepage.get', ['role' => 'photographers_videographers']) }}" class="d-flex flex-column align-items-center">
                            <img src="{{ url('user-assets/icons/photo.png') }}" alt="Photographers Icon" class="icon img-fluid" style="width: 75px; height: 75px;">
                            <p class="hover-text">PHOTOGRAPHY & VIDEOGRAPHY</p>
                        </a>
                    </li>
                    <li class="col-md-2 col-12 text-center">
                        <a href="{{ route('all-models-homepage.get', ['role' => 'dancers_performers']) }}" class="d-flex flex-column align-items-center">
                            <img src="{{ url('user-assets/icons/dancer.png') }}" alt="Dancers Icon" class="icon img-fluid" style="width: 75px; height: 75px;">
                            <p class="hover-text">DANCERS &  <br/> PERFORMERS</p>
                        </a>
                    </li>
                  
                </ul>
              <!-- Row 1 -->
                <ul class="d-flex flex-wrap justify-content-center align-items-center list-unstyled">
                    <li class="col-md-1  col-12 text-center">
                        <a href="{{ route('all-models-homepage.get', ['role' => 'actors']) }}" class="d-flex flex-column align-items-center">
                            <img src="{{ url('user-assets/icons/actor.png') }}" alt="Actors Icon" class="icon img-fluid" style="width: 75px; height: 75px;">
                            <p class="hover-text">ACTORS</p>
                        </a>
                    </li>
                    <li class="col-md-2 col-12 text-center">
                        <a href="{{ route('all-models-homepage.get', ['role' => 'models']) }}" class="d-flex flex-column align-items-center">
                            <img src="{{ url('user-assets/icons/model.png') }}" alt="Models Icon" class="icon img-fluid" style="width: 75px; height: 75px;">
                            <p class="hover-text">MODELS</p>
                        </a>
                    </li>
                    <li class="col-md-2 col-12 text-center">
                        <a href="{{ route('all-models-homepage.get', ['role' => 'musicians']) }}" class="d-flex flex-column align-items-center">
                            <img src="{{ url('user-assets/icons/musician.png') }}" alt="Musicians Icon" class="icon img-fluid" style="width: 75px; height: 75px;">
                            <p class="hover-text">MUSICIANS</p>
                        </a>
                    </li>
                    <li class="col-md-2  col-12 text-center">
                        <a href="{{ route('all-models-homepage.get', ['role' => 'film_crew']) }}" class="d-flex flex-column align-items-center">
                            <img src="{{ url('user-assets/icons/film.png') }}" alt="Film Crew Icon" class="icon img-fluid" style="width: 75px; height: 75px;">
                            <p class="hover-text">FILM CREW</p>
                        </a>
                    </li>
                    <li class="col-md-2 col-12 text-center">
                        <a href="{{ route('all-models-homepage.get', ['role' => 'influencers']) }}" class="d-flex flex-column align-items-center">
                            <img src="{{ url('user-assets/icons/influencer.png') }}" alt="Influencers Icon" class="icon img-fluid" style="width: 75px; height: 75px;">
                            <p class="hover-text">INFLUENCERS</p>
                        </a>
                    </li>
                </ul>
                <!-- Row 2 -->
            </div>
         <div class="carousel-container w-100">
        <div class="custom-carousel" id="customCarousel">
                <div class="custom-carousel-inner" id="customCarouselInner">
                    @foreach ($profiles as $modelDetail)
                        @php
                            // Parse the profile images string into an array
                            $profileImages = json_decode($modelDetail->profile_images);
                            $firstImage = $profileImages[0] ?? 'default.png'; // Default image if no profile image is available
                            // Calculate the age from the date of birth
                            $birthDate = new DateTime($modelDetail->date_of_birth);
                            $currentDate = new DateTime();
                            $age = $currentDate->diff($birthDate)->y;
                        @endphp

                        <div class="custom-carousel-item {{ $loop->first ? 'active' : '' }}">
                            <a href="{{ route('model-info.get', $modelDetail->id) }}" class="text-dark">
                                <div class="profile-card">
                                    <div class="img-div">
                                        <img src="{{ url('/uploads/models/profiles/' . $firstImage) }}"
                                            class="img-fluid" 
                                            alt="model-image">
                                    </div>
                                    <div class="cardbody text-center">
                                        <div class="card-code">{{ $modelDetail->talent_id }}</div>
                                        <div class="card-info">{{ $age . ', ' . $modelDetail->nationality }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            <a class="custom-carousel-control-prev" id="customCarouselPrev" href="#!" role="button" data-slide="prev">&#10094;</a>
            <a class="custom-carousel-control-next" id="customCarouselNext" href="#!" role="button" data-slide="next">&#10095;</a>
        </div>
    </div>

        {{-- </div>
    </div> --}}
</section>



<div class="startedbtn d-flex justify-content-center">
    <ul class="responsive-menu  d-flex justify-content-center">
        <li><a href="{{ route('register.get') }}">GET STARTED TODAY</a></li>
        <li><a href="{{ route('jobs.get') }}">VIEW MORE JOBS!</a></li>
    </ul>

</div>
<section class="rightsec">
    <div class="">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                <div class="rightsec">
                    <h3>Finding The <span>Right Talent</span> For Your <span>Next Screen</span> Production, <span>Made Easy.</span></h3>
                </div>
                <div class=" d-flex justify-content-center">
                    <!-- Thumbnail Image -->
                    <img id="imageThumbnailRight"  style="width: 100%; height: 80vh"  src="https://img.youtube.com/vi/VXZgS20jvvA/hqdefault.jpg"  class="img-fluid" alt="Talent Banner">
                    <!-- Play button (click to show video) -->
                    <a href="javascript:void(0);" id="playButtonRight">
                        <i class="fa-regular fa-circle-play"></i>
                    </a>
                    <!-- Hidden Video container (will be shown when play button is clicked) -->
                    <div id="videoContainerRight" class="video-container" style="display: none;">
                        <iframe id="videoIframeRight" class="embed-responsive-item" 
                            src="https://www.youtube.com/embed/VXZgS20jvvA?si=v2IYrl9eK_eXPPCh?autoplay=1" 
                            frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
.talentimg {
    position: relative;
    display: inline-block;
    width: 100%;
    max-width: 600px; /* Adjust as needed */
    margin: 0 auto;
}

.talentimg img {
    width: 100%;
    height: auto;
    cursor: pointer;
    transition: opacity 0.3s ease; /* Smooth fade effect */
}

#playButtonRight {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 3rem;
    color: rgba(255, 255, 255, 0.7);
    text-decoration: none;
    z-index: 10;
}

#playButtonRight:hover {
    color: rgba(255, 255, 255, 1);
}

.video-container {
    width: 100%;
    height: 0;
    padding-bottom: 56.25%; /* 16:9 aspect ratio */
    position: relative;
    display: block;
    overflow: hidden;
    background-color: black; /* Background color for the video container */
}

.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}


</style>


<section class="casttelentsec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="castingimgright">
                            <img src="{{ url('user-assets') }}/images/castingleft.jpg" class="img-fluid" alt="img">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                        <div class="castingport">
                            <h3>Cast <span>Talents</span> Portfolio</h3>
                            <p>Our portfolio highlights the diverse projects and talents that define who we are,
                                demonstrating our expertise in modeling, celebrity management, event production, and
                                film-making</p>
                            <div class="btnlist">
                                <a href="{{ route('register.get') }}">WANT TO BECOME A MODEL?<span class="spanlist"><i
                                            class="fa-solid fa-angle-right"></i></span></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 col-xxl-7">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
                        <div class="castingtype1 firstcast" data-speed="1.2" data-lag="0">
                            <img src="{{ url('user-assets') }}/images/casting_1.jpg" class="img-fluid" alt="img">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
                        <div class="castingtype1 secondcast" data-speed="1.1" data-lag="0">
                            <img src="{{ url('user-assets') }}/images/casting_2.jpg" class="img-fluid" alt="img">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                        <div class="castingtype1 thirdcast" data-speed="1.2" data-lag="0">
                            <img src="{{ url('user-assets') }}/images/casting_3.jpg" class="img-fluid" alt="img">
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carouselInner = document.getElementById('customCarouselInner');
        const prevButton = document.getElementById('customCarouselPrev');
        const nextButton = document.getElementById('customCarouselNext');
            
        // Default item and gap widths in percentage
        let itemWidth = 18; // The width percentage of each item in the carousel for larger screens
        const gapWidth = 2; // The percentage of gap based on CSS
        let visibleProfiles = 5;
            
        // Update item width for smaller screens
        function updateItemWidth() {
            const screenWidth = window.innerWidth;
            if (screenWidth <= 768) { // Assuming 768px is the breakpoint for mobile screens
                itemWidth = 100; // Set the item width to 100% for mobile screens
                visibleProfiles = 1;
            } else {
                itemWidth = 18; // Set back to original width for screens wider than 768px
            }
        }
            
        updateItemWidth(); // Call once on load
        window.addEventListener('resize', updateItemWidth); // Update on window resize

        const totalMoveWidth = itemWidth + gapWidth; // Total shift per click

        let currentIndex = 0; // Tracks the current index position
        carouselInner.style.transform = `translateX(0%)`; // Ensure initial position is set correctly

        const totalProfiles = carouselInner.children.length;
        const maxIndex = totalProfiles - visibleProfiles;

        // Event listener for the "next" button
        nextButton.addEventListener('click', function() {
            if (currentIndex < maxIndex) {
                currentIndex++;
            } else {
                currentIndex = 0; // Loop back to the start
            }
            carouselInner.style.transform = `translateX(-${currentIndex * totalMoveWidth}%)`;
        });

        // Event listener for the "previous" button
        prevButton.addEventListener('click', function() {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = maxIndex; // Loop back to the end
            }
            carouselInner.style.transform = `translateX(-${currentIndex * totalMoveWidth}%)`;
        });

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
    });
</script>
@endsection