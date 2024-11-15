@extends('users.layouts.layout')

@section('title', 'Casting Talent | Talents')

@section('main-content')

    <section class="innerpages">
        <div class="container">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            </div>
        </div>
    </section>

    <style>
        .modaltext ul li a {
            font-size: 16px; 
            font-weight: 500;
        }
        .modaltext ul li a:hover {
            color: rgb(235, 13, 13) !important;
            font-size: 16px; 
            font-weight: 500;
        }
        .my-container {
                position: relative; /* Ensures the pseudo-element is positioned relative to this container */
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                height: 100vh;
                width: 100%;
                overflow: hidden; /* Prevents any pseudo-element from overflowing the container */
        }

        .my-container::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('{{ url('/user-assets/images/actors.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* opacity: 0.8;  */
        height:'900px'
        }

        .my-container .actors-section {
        position: relative; 
        z-index: 1; 
        }

        .my-container .actors-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #DAD7B1; 
        opacity: 0.8; 
        z-index: -1000;  
        }
/* -------------------------------------------------------- */
        .my-container2 {
                position: relative; /* Ensures the pseudo-element is positioned relative to this container */
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                height: 120vh;
                width: 100%;
                overflow: hidden; /* Prevents any pseudo-element from overflowing the container */
        }

        .my-container2::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('{{ url('/user-assets/images/MODELS.jpg') }}');
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
        background-color: #DAD7B1; 
        opacity: 0.8; 
        z-index: -1000;  
        }
/* ------------------------------------------------------------ */
.my-container3 {
                position: relative; /* Ensures the pseudo-element is positioned relative to this container */
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                height: 120vh;
                width: 100%;
                overflow: hidden; /* Prevents any pseudo-element from overflowing the container */
        }

        .my-container3::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('{{ url('/user-assets/images/dancers.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* opacity: 0.5;  */
        }

        .my-container3 .actors-section {
        position: relative; 
        z-index: 1; 
        }

        .my-container3 .actors-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #DAD7B1; 
        opacity: 0.8; 
        z-index: -1000;  
        }
        /* --------------------------------------------------------- */
        .my-container4 {
                position: relative; /* Ensures the pseudo-element is positioned relative to this container */
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                height: 120vh;
                width: 100%;
                overflow: hidden; /* Prevents any pseudo-element from overflowing the container */
        }

        .my-container4::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('{{ url('/user-assets/images/makeup.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* opacity: 0.5;  */
        }

        .my-container4 .actors-section {
        position: relative; 
        z-index: 1; 
        }

        .my-container4 .actors-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #DAD7B1; 
        opacity: 0.8; 
        z-index: -1000;  
        }
        /* ------------------------------------------------------------- */
        .my-container5 {
                position: relative; /* Ensures the pseudo-element is positioned relative to this container */
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                height: 120vh;
                width: 100%;
                overflow: hidden; /* Prevents any pseudo-element from overflowing the container */
        }

        .my-container5::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('{{ url('/user-assets/images/videophoto.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* opacity: 0.5;  */
        }

        .my-container5 .actors-section {
        position: relative; 
        z-index: 1; 
        }

        .my-container5 .actors-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #DAD7B1; 
        opacity: 0.8; 
        z-index: -1000;  
        }

        /* ---------------------------------------------------------------- */

        .my-container6 {
                position: relative; /* Ensures the pseudo-element is positioned relative to this container */
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                height: 120vh;
                width: 100%;
                overflow: hidden; /* Prevents any pseudo-element from overflowing the container */
        }

        .my-container6::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('{{ url('/user-assets/images/filmcrew.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* opacity: 0.5;  */
        }

        .my-container6 .actors-section {
        position: relative; 
        z-index: 1; 
        }

        .my-container6 .actors-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #DAD7B1; 
        opacity: 0.8; 
        z-index: -1000;  
        }
    </style>

    <section class="modalagencysec">
        <div class="my-container">
                <div class="row actors-section d-flex align-items-center justify-content-center">
                    <div class="modaltext">
                        <h2 class="text-center m-0 p-0" style="color: rgb(235, 13, 13)">Actors</h2>
                        <div class="row pb-0">
                            <div class="col-md-6 d-flex flex-row justify-content-center">
                                <ul class="">
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'main-lead']) }}">Main Lead</a></li>
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'featured_actors']) }}">Featured Actors</a></li>
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'body_double']) }}">Body Double</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 d-flex flex-row  justify-content-center">
                                <ul class="">
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'mime_artist']) }}">Mime Artist</a></li>
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'stunt_person']) }}">Stunt Person</a></li>
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'extras']) }}">Extras</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center mb-4">
                            <a href="{{ route('all-models.get', ['role' => 'actors']) }}" class="contactbtn">VIEW ALL</a>
                        </div>
                    </div>
                </div>
            </div>
            
    </section>
    <!-- ------------------------------models section ---------------------- -->
    <section class="modalagencysec">
        <div class="my-container2">
                <div class="row actors-section d-flex justify-content-center">
                    <div class="modaltext">
                        <h2 class="text-center" style="color: rgb(235, 13, 13)">Models</h2>
                        <div class="row">
                                <div class="row ">
                                <div class=" col-md-3 d-flex align-items-center justify-content-center">
                                        <ul class="mb-3 ms-5">
                                        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'art_models']) }}">Art Models</a></li>
                                        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'body_parts_models']) }}">Body Parts Models</a></li>
                                        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'child_models']) }}">Child Models</a></li>
                                        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'commercial_models']) }}">Commercial Models</a></li>
                                        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'expecting_models']) }}">Pregnant Models</a></li>
                                        
                                        </ul>
                                </div>
                            <div class="col-md-3 d-flex  align-items-center justify-content-center">
                                <ul class="mb-3">
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'erotic_photography_model']) }}">Erotic Photography Model</a></li>
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'fashion_models']) }}">Fashion (Catalogue) Models</a></li>
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'fitness_models']) }}">Fitness Models</a></li>
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'freelance_models']) }}">Freelance Models</a></li>
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'glamour_models']) }}">Glamour Models</a></li>
                                
                                </ul>
                            </div>
                            <div class="col-md-3 d-flex  ps-5 align-items-center justify-content-center">
                                <ul class="mb-3 ms-5">
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'hair_model']) }}">Hair Model</a></li>
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'high_fashion_models']) }}">
                                    Plus-Size Models    
                                    </a></li>
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'party_model']) }}">Image / Party Model</a></li>
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'mature_models']) }}">Mature Models</a></li>
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'petite_models']) }}">Petite Models</a></li>
                                
                                </ul>
                            </div>
                            <div class="col-md-3 d-flex  align-items-center justify-content-center">
                                <ul class="mb-3">
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'plus_size_models']) }}">High Fashion (Editorial) Models</a></li>
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'promotional_models']) }}">Promotional Models</a></li>
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'runway_models']) }}">Runway Models / Catwalk Models</a></li>
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'stock_photography_model']) }}">Stock Photography Model</a></li>
                                    <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'swimsuit_lingerie_models']) }}">Swimsuit & Lingerie Models</a></li>
                                
                                </ul>
                            </div>
                                </div>
                             
                        </div>
                        <div class="text-center pb-4">
                            <a href="{{ route('all-models.get', ['role' => 'models']) }}" class="contactbtn">VIEW ALL</a>
                        </div>
                    </div>
                </div>
            </div>
            
    </section>
    <!-- ------------------------------Dancers & Performers---------------------- -->
    <section class="modalagencysec">
        <div class="my-container3">
                <div class="row actors-section d-flex justify-content-center">
                    <div class="modaltext">
                        <h2 class="text-center" style="color: rgb(235, 13, 13)"> Dancers & Performers                                </h2>
                        <div class="row">
                                <div class="row">
                                        <div class="col-md-3 d-flex align-items-center justify-content-center">
                                        <ul class="mb-3 ms-5">
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'Ayyala_dancers']) }}">AYyala Dancers</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'background_dancers']) }}">Background Dancers</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'ballet_dancers']) }}">Ballet Dancers</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'ballroom_dancers']) }}">Ballroom Dancers</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'belly_dancers']) }}">Belly Dancers</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'b_boy']) }}">B Boy</a></li>
                                        </ul>
                                        </div>
                                        <div class="col-md-3 d-flex align-items-center justify-content-center">
                                        <ul class="mb-3">
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'break_dancers']) }}">Break Dancers</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'cabaret_dancer']) }}">Cabaret Dancer</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'cheerleaders']) }}">Cheerleaders</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'choreographers']) }}">Choreographers</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'contemporary_dancers']) }}">Contemporary Dancers</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'dance_group']) }}">Dance Group</a></li>
                                        </ul>
                                        </div>
                                        <div class="col-md-3 d-flex ps-5 align-items-center justify-content-center">
                                        <ul class="mb-3 ms-5">
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'dancing_couples']) }}">Dancing Couples</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'fictional_dancers']) }}">Fictional Dancers</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'folk_dancer']) }}">Folk Dancer</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'folk_dancers']) }}">Samba Dancer</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'go_go_dancer']) }}">Go Go Dancer</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'hip_hop_dancers']) }}">Hip Hop Dancers</a></li>
                                        </ul>
                                        </div>
                                        <div class="col-md-3 d-flex align-items-center justify-content-center">
                                        <ul class="mb-3">
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'kathak_dancer']) }}">Kathak Dancer</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'parade_away']) }}">Parade Away</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'salsa_dancers']) }}">Salsa Dancers</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'sufi_dancer']) }}">Sufi Dancer</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'swing_dancers']) }}">Swing Dancers</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'tap_dancers']) }}">Tap Dancers</a></li>
                                        </ul>
                                        </div>
                                </div>
                        </div>
                        <div class="text-center pb-4">
                            <a href="{{ route('all-models.get', ['role' => 'dancers_performers']) }}" class="contactbtn">VIEW ALL</a>
                        </div>
                    </div>
                </div>
            </div>
            
    </section>

  
    <!-- ------------------------------Makeup | Hair | Painter | Fashion Stylists---------------------- -->

    <section class="modalagencysec">
        <div class="my-container4">
                <div class="row actors-section d-flex justify-content-center">
                <div class="modaltext">
                        <h2 class="text-center" style="color: rgb(235, 13, 13)"> Makeup|Hair|Painter|Fashion Stylists </h2>
                        <div class="row">
                        <div class="col-md-3 d-flex align-items-center justify-content-center">
                                <ul class="mb-3 ms-5">
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'body_painter']) }}">Body Painter</a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'creative_makeup_artists']) }}">Creative Makeup Artists</a></li>
                                </ul>
                        </div>
                        <div class="col-md-3 d-flex align-items-center justify-content-center">
                                <ul class="mb-3">
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'face_painter']) }}">Face Painter</a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'fashion_stylists']) }}">Fashion Stylists</a></li>
                                </ul>
                        </div>
                        <div class="col-md-3 d-flex align-items-center justify-content-center">
                                <ul class="mb-3 ms-5">
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'hair_stylists']) }}">Hair Stylists</a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'henna_artist']) }}">Henna Artist</a></li>
                                </ul>
                        </div>
                        <div class="col-md-3 d-flex align-items-center justify-content-center">
                                <ul class="mb-3">
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'makeup_artists']) }}">Makeup Artists</a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'wardrobe_stylist']) }}">Wardrobe Stylist</a></li>
                                </ul>
                        </div>
                        </div>
                        <div class="text-center pb-4">
                        <a href="{{ route('all-models.get', ['role' => 'makeup_hair_painter_fashion_stylists']) }}" class="contactbtn">VIEW ALL</a>
                        </div>
                </div>
                </div>
        </div>
</section>
    <!-- ------------------------------ Photographers | Videographers---------------------- -->
    <section class="modalagencysec">
    <div class="my-container5">
        <div class="row actors-section d-flex justify-content-center">
            <div class="modaltext">
                <h2 class="text-center" style="color: rgb(235, 13, 13)">Photographers | Videographers</h2>
                <div class="row">
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3 ms-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'abstract_photo_video']) }}">Abstract Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'aerial_photo_video']) }}">Aerial Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'architecture_photo_video']) }}">Architecture Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'child_photo_video']) }}">Child Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'commercial_photo_video']) }}">Commercial Photo/Video</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'digital_photo_video']) }}">Digital Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'documentary_photo_video']) }}">Documentary Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'event_photo_video']) }}">Event Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'fashion_photo_video']) }}">Fashion Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'film_photo_video']) }}">Film Photo/Video</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3 ms-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'fine_art_photo_video']) }}">Fine Art Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'food_photo_video']) }}">Food Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'landscape_photo_video']) }}">Landscape Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'lifestyle_photo_video']) }}">Lifestyle Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'nature_photo_video']) }}">Nature Photo/Video</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'portrait_photo_video']) }}">Portrait Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'sports_photo_video']) }}">Sports Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'street_photo_video']) }}">Street Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'travel_photo_video']) }}">Travel Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'wedding_photo_video']) }}">Wedding Photo/Video</a></li>
                        </ul>
                    </div>
                </div>
                <div class="text-center pb-4">
                    <a href="{{ route('all-models.get', ['role' => 'photographers_videographers']) }}" class="contactbtn">VIEW ALL</a>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- ------------------------------ Film Crew---------------------- -->
    <section class="modalagencysec">
    <div class="my-container6">
        <div class="row actors-section d-flex justify-content-center">
            <div class="modaltext">
                <h2 class="text-center" style="color: rgb(235, 13, 13)">Film Crew</h2>
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3 ms-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'abstract_photo_video']) }}">Abstract Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'aerial_photo_video']) }}">Aerial Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'architecture_photo_video']) }}">Architecture Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'child_photo_video']) }}">Child Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'commercial_photo_video']) }}">Commercial Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'digital_photo_video']) }}">Digital Photo/Video</a></li>
                        </ul>
                    </div>
                    <!-- Column 2 -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'documentary_photo_video']) }}">Documentary Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'event_photo_video']) }}">Event Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'fashion_photo_video']) }}">Fashion Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'film_photo_video']) }}">Film Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'fine_art_photo_video']) }}">Fine Art Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'food_photo_video']) }}">Food Photo/Video</a></li>
                        </ul>
                    </div>
                    <!-- Column 3 -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3 ms-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'landscape_photo_video']) }}">Landscape Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'lifestyle_photo_video']) }}">Lifestyle Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'nature_photo_video']) }}">Nature Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'portrait_photo_video']) }}">Portrait Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'sports_photo_video']) }}">Sports Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'street_photo_video']) }}">Street Photo/Video</a></li>
                        </ul>
                    </div>
                    <!-- Column 4 -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'travel_photo_video']) }}">Travel Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'wedding_photo_video']) }}">Wedding Photo/Video</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'animation_graphic_designer']) }}">Animation & Graphic Designer</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'art_costume_department_crew']) }}">Art & Costume Department Crew</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'art_director']) }}">Art Director</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'assistant_director']) }}">Assistant Director</a></li>
                        </ul>
                    </div>
                </div>
                <div class="text-center pb-4">
                    <a href="{{ route('all-models.get', ['role' => 'film_crew']) }}" class="contactbtn">VIEW ALL</a>
                </div>
            </div>
        </div>
    </div>
</section>



    <section class="modalagencysec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modaltext">
                        <h2>Musicians</h2>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul class="mb-5">
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'tv_channels_game_shows']) }}">TV
                                            Channels, Game Shows</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'tv_shows']) }}">TV
                                            Shows</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'reality_tv']) }}">Reality
                                            TV</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'documentaries_factual']) }}">Documentaries
                                            & Factual</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'hobbyist']) }}">Hobbyist</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'independent_artist']) }}">Independent
                                            Artist</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'independent_label_artist']) }}">Independent
                                            Label Artist</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'major_label_artist']) }}">Major
                                            Label Artist</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'post_label_musician']) }}">Post
                                            Label Musician</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'film_maker']) }}">Film
                                            Maker</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'dop']) }}">Dop</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'assistant_director']) }}">Assistant
                                            Director</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'session_musician']) }}">Session
                                            Musician</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'producer_composer']) }}">Producer-
                                            Composer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'orchestral_musician']) }}">Orchestral
                                            Musician</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'teacher_retired_artist']) }}">Teacher,
                                            Retired Artist</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'entrepreneurial_artist']) }}">Entrepreneurial
                                            Artist</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'singer']) }}">Singer</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'musician']) }}">Musician</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'band_guitarist']) }}">Band
                                            Guitarist</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'violinist']) }}">Violinist</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'rapper']) }}">Rapper</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <a href="{{ route('all-models.get', ['role' => 'musicians']) }}" class="contactbtn">VIEW ALL</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/modal_11.png" class="img-fluid" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="modalagencysec2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/modal_12.png" alt="Casting Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modaltext1">

                        <h2>Presenters & <span Style="Color: Rgba(216, 31, 38, 1);">Emcees</span> </h2>

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul class="mb-5">
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'emce']) }}">Emce</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'voice_acting']) }}">Voice
                                            Acting</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'public_speaker']) }}">Public
                                            Speaker</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'virtual_host']) }}">Virtual
                                            Host</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'standup_artist']) }}">Standup
                                            Artist</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'media_reporter']) }}">Media
                                            Reporter</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'news_reader']) }}">News
                                            Reader</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'video_jockey_vj']) }}">Video
                                            Jockey (VJ)</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'radio_jockey_rj']) }}">Radio
                                            Jockey (RJ)</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'comedian_magician']) }}">Comedian,
                                            Magician</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'illustrationist']) }}">Illustrationist</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'shadow_performer']) }}">Shadow
                                            Performer</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'hypnotist']) }}">Hypnotist</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'caricature']) }}">Caricature</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'fire_artist']) }}">Fire
                                            Artist</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'stilt_walker']) }}">Stilt
                                            Walker</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'jugglers']) }}">Jugglers</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'balloon_decorator']) }}">Balloon
                                            Decorator</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'puppet_show']) }}">Puppet
                                            Show</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'unicyclist']) }}">Unicyclist</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'clown']) }}">Clown</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'live_statue']) }}">Live
                                            Statue</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'others']) }}">Others</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="{{ route('all-models.get', ['role' => 'presenters_emcees']) }}" class="contactbtn1">VIEW ALL</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="modalagencysec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modaltext">
                        <h2>Event Staff & <span>Ushers</span></h2>

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul class="mb-5">
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'brand_ambassador']) }}">Brand
                                            Ambassador</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'events_indoor']) }}">Events
                                            Indoor</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'events_outdoor']) }}">Events
                                            Outdoor</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'host_hostess']) }}">Host /
                                            Hostess</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'promotional_staff']) }}">Promotional
                                            Staff</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'ushers']) }}">Ushers</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'promoter']) }}">Promoter</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'event_supervisor']) }}">Event
                                            Supervisor</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'event_crew_member']) }}">Event
                                            Crew Member</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'chef']) }}">Chef</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'event_planner']) }}">Event
                                            Planner</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'server']) }}">Server</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'caterer']) }}">Caterer</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'bartender']) }}">Bartender</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'catering_manager']) }}">Catering
                                            Manager</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'event_coordinator']) }}">Event
                                            Coordinator</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'special_events_manager']) }}">Special
                                            Events Manager</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'head_chef']) }}">Head
                                            Chef</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'event_manager']) }}">Event
                                            Manager</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'communication_specialist']) }}">Communication
                                            Specialist</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'marketing_manager']) }}">Marketing
                                            Manager</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'director_of_events']) }}">Director
                                            Of Events</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'marketing_coordinator']) }}">Marketing
                                            Coordinator</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'program_coordinator']) }}">Program
                                            Coordinator</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'communications_assistant']) }}">Communications
                                            Assistant</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'training_manager']) }}">Training
                                            Manager</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'meeting_planner']) }}">Meeting
                                            Planner</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'wedding_planner']) }}">Wedding
                                            Planner</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'administrative_assistant']) }}">Administrative
                                            Assistant</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'project_manager']) }}">Project
                                            Manager</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'concierge']) }}">Concierge</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'operations_management']) }}">Operations
                                            Management</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'venue_manager']) }}">Venue
                                            Manager</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'sponsorship_manager']) }}">Sponsorship
                                            Manager</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'development_director']) }}">Development
                                            Director</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'social_media_specialist']) }}">Social
                                            Media Specialist</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'volunteer_coordinator']) }}">Volunteer
                                            Coordinator</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'other_promotion_jobs']) }}">Other
                                            Promotion Jobs</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'waitress']) }}">Waitress</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <a href="{{ route('all-models.get', ['role' => 'event_staff_ushers']) }}" class="contactbtn">VIEW ALL</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/modal_13.png" class="img-fluid" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="modalagencysec2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/modal_14.png" alt="Casting Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modaltext1">

                        <h2>Influencers </h2>

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul class="mb-5">
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'emcee']) }}">Emcee</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'voice_acting']) }}">Voice
                                            Acting</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'public_speaker']) }}">Public
                                            Speaker</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'virtual_host']) }}">Virtual
                                            Host</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'standup_artist']) }}">Standup
                                            Artist</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'media_reporter']) }}">Media
                                            Reporter</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'news_reader']) }}">News
                                            Reader</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'video_jockey_vj']) }}">Video
                                            Jockey VJ</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'radio_jockey_rj']) }}">Radio
                                            Jockey RJ</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'comedian_magician']) }}">Comedian,
                                            Magician</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'illustrationist']) }}">Illustrationist</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'shadow_performer']) }}">Shadow
                                            Performer</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'hypnotist']) }}">Hypnotist</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'caricature']) }}">Caricature</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'fire_artist']) }}">Fire
                                            Artist</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'stilt_walker']) }}">Stilt
                                            Walker</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'jugglers']) }}">Jugglers</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'balloon_decorator']) }}">Balloon
                                            Decorator</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'puppet_show']) }}">Puppet
                                            Show</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'unicyclist']) }}">Unicyclist</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'clown']) }}">Clown</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'live_statue']) }}">Live
                                            Statue</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('all-models.subcategory', ['subcategory' => 'others']) }}">Others</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <a href="{{ route('all-models.get', ['role' => 'influencers']) }}" class="contactbtn1">VIEW ALL</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
