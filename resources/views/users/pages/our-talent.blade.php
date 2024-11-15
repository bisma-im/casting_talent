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

         /* ---------------------------------------------------------------- */

         .my-container7 {
                position: relative; /* Ensures the pseudo-element is positioned relative to this container */
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                height: 120vh;
                width: 100%;
                overflow: hidden; /* Prevents any pseudo-element from overflowing the container */
        }

        .my-container7::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('{{ url('/user-assets/images/Presenters.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* opacity: 0.5;  */
        }

        .my-container7 .actors-section {
        position: relative; 
        z-index: 1; 
        }

        .my-container7 .actors-section::before {
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

           .my-container8 {
                position: relative; /* Ensures the pseudo-element is positioned relative to this container */
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                height: 120vh;
                width: 100%;
                overflow: hidden; /* Prevents any pseudo-element from overflowing the container */
        }

        .my-container8::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('{{ url('/user-assets/images/musician.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* opacity: 0.5;  */
        }

        .my-container8 .actors-section {
        position: relative; 
        z-index: 1; 
        }

        .my-container8 .actors-section::before {
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

    .my-container9 {
                position: relative; /* Ensures the pseudo-element is positioned relative to this container */
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                height: 120vh;
                width: 100%;
                overflow: hidden; /* Prevents any pseudo-element from overflowing the container */
        }

        .my-container9::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('{{ url('/user-assets/images/event.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* opacity: 0.5;  */
        }

        .my-container9 .actors-section {
        position: relative; 
        z-index: 1; 
        }

        .my-container9 .actors-section::before {
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

            .my-container10 {
                position: relative; /* Ensures the pseudo-element is positioned relative to this container */
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                height: 120vh;
                width: 100%;
                overflow: hidden; /* Prevents any pseudo-element from overflowing the container */
        }

        .my-container10::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('{{ url('/user-assets/images/Influencers.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* opacity: 0.5;  */
        }

        .my-container10 .actors-section {
        position: relative; 
        z-index: 1; 
        }

        .my-container10 .actors-section::before {
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

 <!-- ------------------------------ Presenter & Emcee---------------------- -->
 <section class="modalagencysec">
    <div class="my-container7">
        <div class="row actors-section d-flex justify-content-center">
            <div class="modaltext">
                <h2 class="text-center" style="color: rgb(235, 13, 13)">Presenter & Emcee</h2>
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3 ms-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'balloon_decorator']) }}">Balloon Decorator</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'bottle_twister']) }}">Bottle Twister</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'caricature']) }}">Caricature</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'clown']) }}">Clown</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'comedian']) }}">Comedian</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'emcee']) }}">Emcee</a></li>
                        </ul>
                    </div>
                    <!-- Column 2 -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'fire_artist']) }}">Fire Artist</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'hypnotist']) }}">Hypnotist</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'illustrationist']) }}">Illustrationist</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'jugglers']) }}">Jugglers</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'live_statue']) }}">Live Statue</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'magician']) }}">Magician</a></li>
                        </ul>
                    </div>
                    <!-- Column 3 -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3 ms-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'media_reporter']) }}">Media Reporter</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'news_reader']) }}">News Reader</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'others']) }}">Others</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'public_speaker']) }}">Public Speaker</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'radio_jockey']) }}">Radio Jockey (RJ)</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'shadow_performer']) }}">Shadow Performer</a></li>
                        </ul>
                    </div>
                    <!-- Column 4 -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'stand_up_artist']) }}">Stand-Up Artist</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'stilt_walker']) }}">Stilt Walker</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'unicyclist']) }}">Unicyclist</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'video_jockey']) }}">Video Jockey (VJ)</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'virtual_host']) }}">Virtual Host</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'voice_over']) }}">Voice Over</a></li>
                        </ul>
                    </div>
                </div>
                <div class="text-center pb-4">
                    <a href="{{ route('all-models.get', ['role' => 'presenters_emcees']) }}" class="contactbtn">VIEW ALL</a>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- ------------------------------ Presenter & Emcee---------------------- -->
    <section class="modalagencysec">
    <div class="my-container8">
        <div class="row actors-section d-flex justify-content-center">
            <div class="modaltext">
                <h2 class="text-center" style="color: rgb(235, 13, 13)"> Musician </h2>
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3 ms-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'guitarist']) }}">Guitarist</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'hobbyist']) }}">Hobbyist</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'independent_artist']) }}">Independent Artist</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'independent_label_artist']) }}">Independent Label Artist</a></li>
                        </ul>
                    </div>
                    <!-- Column 2 -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'live_performer']) }}">Live Performer</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'music_band']) }}">Music Band</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'musician']) }}">Musician</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'orchestral_musician']) }}">Orchestral Musician</a></li>
                        </ul>
                    </div>
                    <!-- Column 3 -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3 ms-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'producer_composer']) }}">Producer - Composer</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'rapper']) }}">Rapper</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'session_musician']) }}">Session Musician</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'singer']) }}">Singer</a></li>
                        </ul>
                    </div>
                    <!-- Column 4 -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'song_writer']) }}">Song Writer</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'teacher']) }}">Teacher</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'tv_show_performer']) }}">TV Show Performer</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'violinist']) }}">Violinist</a></li>
                        </ul>
                    </div>
                </div>
                <div class="text-center pb-4">
                    <a href="{{ route('all-models.get', ['role' => 'musicians']) }}" class="contactbtn">VIEW ALL</a>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- ------------------------------ EVENT STAFF & USHERS---------------------- -->

<section class="modalagencysec">
    <div class="my-container9">
        <div class="row actors-section d-flex justify-content-center">
            <div class="modaltext">
                <h2 class="text-center" style="color: rgb(235, 13, 13)">EVENT STAFF & USHERS</h2>
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3 ms-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'bartender']) }}">Bartender</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'brand_ambassador']) }}">Brand Ambassador</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'caterer']) }}">Caterer</a></li>
                        </ul>
                    </div>
                    <!-- Column 2 -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'chef']) }}">Chef</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'concierge']) }}">Concierge</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'decorators']) }}">Decorators</a></li>
                        </ul>
                    </div>
                    <!-- Column 3 -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3 ms-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'event_supervisor']) }}">Event Supervisor</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'host_hostess']) }}">Host / Hostess</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'marketing_coordinator']) }}">Marketing Coordinator</a></li>
                        </ul>
                    </div>
                    <!-- Column 4 -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'promotional_staff']) }}">Promotional Staff</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'ushers']) }}">Ushers</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'waitress']) }}">Waitress</a></li>
                        </ul>
                    </div>
                </div>
                <div class="text-center pb-4">
                    <a href="{{ route('all-models.get', ['role' => 'event_staff_ushers']) }}" class="contactbtn">VIEW ALL</a>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- ------------------------------ influencers--------------------- -->
    <section class="modalagencysec">
    <div class="my-container10">
        <div class="row actors-section d-flex justify-content-center">
            <div class="modaltext">
                <h2 class="text-center" style="color: rgb(235, 13, 13)">Influencers</h2>
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3 ms-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'beauty_influencers']) }}">Beauty Influencers</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'bloggers']) }}">Bloggers</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'celebrity']) }}">Celebrity</a></li>
                        </ul>
                    </div>
                    <!-- Column 2 -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'fashion_influencers']) }}">Fashion Influencers</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'fitness_wellness_influencers']) }}">Fitness & Wellness Influencers</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'food_influencers']) }}">Food Influencers</a></li>
                        </ul>
                    </div>
                    <!-- Column 3 -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3 ms-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'gaming_tech_influencers']) }}">Gaming & Tech Influencers</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'event_influencers']) }}">Influencers to Attend Events</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'lifestyle_influencers']) }}">Lifestyle Influencers</a></li>
                        </ul>
                    </div>
                    <!-- Column 4 -->
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <ul class="mb-3">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'mens_products_influencers']) }}">Men’s Products Influencers</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'travel_influencers']) }}">Travel Influencers</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'womens_products_influencers']) }}">Women’s Products Influencers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="text-center pb-4">
                    <a href="{{ route('all-models.get', ['role' => 'influencers']) }}" class="contactbtn">VIEW ALL</a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
