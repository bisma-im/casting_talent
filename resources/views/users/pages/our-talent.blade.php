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
        body, html {
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
    height: 100%;
    overflow: hidden; /* Disable default scrolling */
}
#scrollable-sections {
    height: 100%;
    overflow: hidden;
}
.scroll-navigation {
    position: fixed;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    z-index: 10;
}

.scroll-navigation a {
    display: block;
    margin: 10px 0;
    width: 10px;
    height: 10px;
    background-color: grey;
    border-radius: 50%;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.scroll-navigation a.active {
    background-color: black;
}
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

        .my-container .actors-section1 {
        position: relative; 
        z-index: 1; 
        }

        .my-container .actors-section1::before {
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
                height: 100vh;
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
        background-image: url('{{ url('/user-assets/images/MODELS.webp') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* opacity: 0.5;  */
        }

        .my-container2 .actors-section2 {
        position: relative; 
        z-index: 1; 
        }

        .my-container2 .actors-section2::before {
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
                height: 100vh;
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

        .my-container3 .actors-section3 {
        position: relative; 
        z-index: 1; 
        }

        .my-container3 .actors-section3::before {
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
                height: 100vh;
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

        .my-container4 .actors-section4 {
        position: relative; 
        z-index: 1; 
        }

        .my-container4 .actors-section4::before {
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
                height: 100vh;
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
        background-image: url('{{ url('/user-assets/images/videophoto.webp') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* opacity: 0.5;  */
        }

        .my-container5 .actors-section5 {
        position: relative; 
        z-index: 1; 
        }

        .my-container5 .actors-section5::before {
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
                height: 100vh;
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

        .my-container6 .actors-section6 {
        position: relative; 
        z-index: 1; 
        }

        .my-container6 .actors-section6::before {
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
                height: 100vh;
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
        background-image: url('{{ url('/user-assets/images/presenter.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* opacity: 0.5;  */
        }

        .my-container7 .actors-section7 {
        position: relative; 
        z-index: 1; 
        }

        .my-container7 .actors-section7::before {
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
                height: 100vh;
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
        background-image: url('{{ url('/user-assets/images/musician.webp') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* opacity: 0.5;  */
        }

        .my-container8 .actors-section8 {
        position: relative; 
        z-index: 1; 
        }

        .my-container8 .actors-section8::before {
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
                height: 100vh;
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
        background-image: url('{{ url('/user-assets/images/USHER.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* opacity: 0.5;  */
        }

        .my-container9 .actors-section9 {
        position: relative; 
        z-index: 1; 
        }

        .my-container9 .actors-section9::before {
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
                height: 100vh;
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
        background-image: url('{{ url('/user-assets/images/Influencers.jpeg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* opacity: 0.5;  */
        }

        .my-container10 .actors-section10 {
        position: relative; 
        z-index: 1; 
        }

        .my-container10 .actors-section10::before {
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

        ul{
            list-style: none; /* Removes bullets */
        }
        
        .modalagencysectalents {
    /* height: 120vh; Full viewport height */
    width: 100%;
    height: 100vh; /* Full viewport height for each section */
    scroll-snap-align: start; /* Snap to each section */
    overflow: hidden; /* Prevent overflow inside the sections */
    position: relative; /* For pseudo-elements and absolute positioning */
    display: flex;
    align-items: center;
    justify-content: center;
    scroll-snap-align: start; /* For better scrolling experience */
}

.modalagencysectalents::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    z-index: -1; /* Ensure it stays behind the content */
}
.presenter{
        font-size: 50px !important; /* Adjust font size for smaller screens */

    }
//* General adjustments for small screens (max-width: 768px) */
@media (max-width: 768px) {
    .actors-section {
       height: 200px; /* Dynamic height adjustment */
       
    }
 
    .modaltext h2 {
        font-size: 20px !important; /* Adjusted font size for small screens */
        line-height: 1.2 !important; /* Balanced line-height */
        font-weight: 400;
        text-shadow: none; /* Remove shadow for better readability */
    }

    .modaltext {
        text-align: center; /* Center text for small screens */
        padding: 10px; /* Adjust padding for better spacing */
    }

    .modaltext ul {
        padding: 0; /* Remove unnecessary padding */
        margin: 0; /* Align list without gaps */
        list-style: none; /* Remove list bullets */
    }

    .modaltext ul li a {
        font-size: 0.44rem; /* Ensure readability on very small screens */


        white-space: nowrap; /* Prevent wrapping */
        overflow: hidden; /* Hide overflowing text */
      
        max-width: 90%; /* Limit width to avoid breaking UI */
        text-align: center; /* Center align the text */
    }

    .modaltext ul li a:hover {
        color: rgb(235, 13, 13) !important;
        font-size: 12px !important; /* Match normal size */
    }

    .contactbtn {
        font-size: 12px !important; /* Adjust button font size */
        padding: 5px 10px !important; /* Compact padding for smaller buttons */
    }

    .filmcrew-text h2 {
        font-size: 18px !important; /* Adjusted font size for small screens */
        line-height: 1.2 !important; /* Balanced line-height */
        font-weight: 400;
        text-shadow: none; /* Remove shadow for better readability */
    }

    .filmcrew-text ul li a {
        font-size: 12px !important; /* Readable font size */
           
        white-space: nowrap; /* Prevent wrapping */
        overflow: hidden; /* Hide overflowing text */

        max-width: 90%; /* Limit width to avoid breaking UI */
        text-align: center; /* Center align the text */
    }
    .actors-section4{
        height: 5px !important; /* Dynamic height adjustment */
        padding: 10px; /* Compact padding for smaller devices */
    }
}

/* Further adjustments for extra-small screens (max-width: 576px) */
@media (max-width: 576px) {
    .actors-section1{
        height: 160px !important; /* Dynamic height adjustment */
        padding: 10px; /* Compact padding for smaller devices */
    }
    .actors-section2{
        height: 230px !important; /* Dynamic height adjustment */
        padding: 10px; /* Compact padding for smaller devices */
    }
    .actors-section3{
        height: 252px !important; /* Dynamic height adjustment */
        padding: 10px; /* Compact padding for smaller devices */
    }
    .actors-section4{
        height: 135px !important; /* Dynamic height adjustment */
        padding: 10px; /* Compact padding for smaller devices */
    }
    .actors-section5{
        height: 230px !important; /* Dynamic height adjustment */
        padding: 10px; /* Compact padding for smaller devices */
    }
    .actors-section6{
        height: 267px !important; /* Dynamic height adjustment */
        padding: 10px; /* Compact padding for smaller devices */
    }
    .actors-section7{
        height: 257px !important; /* Dynamic height adjustment */
        padding: 10px; /* Compact padding for smaller devices */
    }
    .my-container7::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('{{ url('/user-assets/images/presenter2.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* opacity: 0.5;  */
        }
        .my-container4::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('{{ url('/user-assets/images/makeup2.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* opacity: 0.5;  */
        }
    .actors-section8{
        height: 200px !important; /* Dynamic height adjustment */
        padding: 10px; /* Compact padding for smaller devices */
    }
    .actors-section9{
        height: 170px !important; /* Dynamic height adjustment */
        padding: 10px; /* Compact padding for smaller devices */
    }
    .actors-section10{
        height: 170px !important; /* Dynamic height adjustment */
        padding: 10px; /* Compact padding for smaller devices */
    }
    .actors-section {
        min-height: 250px; /* Dynamic height adjustment */
    height: auto;
        padding: 10px; /* Compact padding for smaller devices */
    }
    .modaltext ul li a:hover {
        color: rgb(235, 13, 13) !important;
        font-size: 12px !important; /* Match normal size */
    }
    .modaltext h2 {
        font-size: 20px !important; /* Further reduce font size */
        line-height: 1.2 !important; /* Proportional spacing */
    }

    .modaltext {
        padding: 8px; /* Reduce padding to fit content */
    }

    .modaltext ul {
        padding: 0;
        margin: 0;
    }

    .modaltext ul li a {
        font-size: 0.44rem; /* Ensure readability on very small screens */


        
        white-space: nowrap; /* Prevent wrapping */
        overflow: hidden; /* Hide overflowing text */
      
        max-width: 90%; /* Limit width to avoid breaking UI */
        text-align: center; /* Center align the text */
    }

    .contactbtn {
        font-size: 10px !important; /* Smaller button text */
        padding: 3px 8px !important; /* Compact button padding */
    }

    .filmcrew-text h2 {
        font-size: 24px !important; /* Smaller heading for very small screens */
    }

    .filmcrew-text ul li a {
        font-size: 10px !important; /* Adjust font size for readability */
           
        white-space: nowrap; /* Prevent wrapping */
        overflow: hidden; /* Hide overflowing text */
        text-overflow: ellipsis; /* Add ellipsis for long text */
        max-width: 90%; /* Limit width to avoid breaking UI */
        text-align: center; /* Center align the text */
    }
}


    </style>
<div  id="scrollable-sections">

<section class="modalagencysectalents" id="section-actors">
    <div class="my-container">
            <div class="row actors-section1 d-flex align-items-center justify-content-center">
                <div class="modaltext">
                    <h2 class="text-center m-0 p-0" style="color: black">Actors</h2>
                    <div class="row pb-0">
                        <div class=" col-6  d-flex align-items-center justify-content-center">
                            <ul class="">
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'main-lead']) }}">Main Lead</a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'featured_actors']) }}">Featured </a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'body_double']) }}">Body Double</a></li>
                            </ul>
                        </div>
                        <div class=" col-6  d-flex align-items-center justify-content-center">
                            <ul class="">
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'mime_artist']) }}">Voice-over Artist</a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'stunt_person']) }}">Stunt Person</a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'extras']) }}">Extras</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center mb-4 viewallbtn">
                        <a href="{{ route('all-models.get', ['role' => 'actors']) }}" class="contactbtn">VIEW ALL</a>
                    </div>
                </div>
            </div>
        </div>
        
</section>
    <!-- ------------------------------models section ---------------------- -->
    <section id="section-models" class="modalagencysectalents">
        <div class="my-container2">
                <div class="row actors-section2 ">
                    <div class="modaltext">
                        <h2 class="text-center" style="color: black">Models</h2>
                        <div class="row  ">
                                <!-- First Column -->
                    <div class="col-md-3 col-3 ">
                        <ul class="list-unstyled ms-md-5">
                            <li><a class="text-dark text-decoration-none" href="{{ route('all-models.subcategory', ['subcategory' => 'art_models']) }}">Art Models</a></li>
                            <li><a class="text-dark text-decoration-none" href="{{ route('all-models.subcategory', ['subcategory' => 'body_parts_models']) }}">Body Parts</a></li>
                            <li><a class="text-dark text-decoration-none" href="{{ route('all-models.subcategory', ['subcategory' => 'child_models']) }}">Child</a></li>
                            <li><a class="text-dark text-decoration-none" href="{{ route('all-models.subcategory', ['subcategory' => 'commercial_models']) }}">Commercial</a></li>
                            <li><a class="text-dark text-decoration-none" href="{{ route('all-models.subcategory', ['subcategory' => 'expecting_models']) }}">Expecting (Pregnant)</a></li>
                        </ul>
                    </div>
                    <!-- Second Column -->
                    <div class="col-md-3 col-3">
                        <ul class="list-unstyled ">
                            <li><a class="text-dark text-decoration-none" href="{{ route('all-models.subcategory', ['subcategory' => 'erotic_photography_model']) }}">Erotic Photography</a></li>
                            <li><a class="text-dark text-decoration-none" href="{{ route('all-models.subcategory', ['subcategory' => 'fashion_models']) }}">Fashion (Catalogue)</a></li>
                            <li><a class="text-dark text-decoration-none" href="{{ route('all-models.subcategory', ['subcategory' => 'high_fashion_editorial']) }}">High Fashion (Editorial)</a></li>

                            <li><a class="text-dark text-decoration-none" href="{{ route('all-models.subcategory', ['subcategory' => 'freelance_models']) }}">Freelance</a></li>
                            <li><a class="text-dark text-decoration-none" href="{{ route('all-models.subcategory', ['subcategory' => 'glamour_models']) }}">Glamour</a></li>
                        </ul>
                    </div>
                    <!-- Third Column -->
                    <div class="col-md-3 col-3">
                        <ul class="list-unstyled ms-md-5 ">
                            <li><a class="text-dark text-decoration-none" href="{{ route('all-models.subcategory', ['subcategory' => 'hair_model']) }}">Hair Model</a></li>
                            <li><a class="text-dark text-decoration-none" href="{{ route('all-models.subcategory', ['subcategory' => 'plus_size_models']) }}">Plus-Size</a></li>
                            <li><a class="text-dark text-decoration-none" href="{{ route('all-models.subcategory', ['subcategory' => 'party_model']) }}">Image / Party</a></li>
                            <li><a class="text-dark text-decoration-none" href="{{ route('all-models.subcategory', ['subcategory' => 'mature_models']) }}">Mature</a></li>
                            <li><a class="text-dark text-decoration-none" href="{{ route('all-models.subcategory', ['subcategory' => 'petite_models']) }}">Petite</a></li>
                        </ul>
                    </div>
                    <!-- Fourth Column -->
                    <div class="col-md-3 col-3">
                        <ul class="list-unstyled ">
                            <li><a class="text-dark text-decoration-none" href="{{ route('all-models.subcategory', ['subcategory' => 'promotional_models']) }}">Promotional</a></li>
                            <li><a class="text-dark text-decoration-none" href="{{ route('all-models.subcategory', ['subcategory' => 'fitness_models']) }}">Fitness</a></li>
                        
                            <li><a class="text-dark text-decoration-none" href="{{ route('all-models.subcategory', ['subcategory' => 'runway_models']) }}">Runway / Catwalk</a></li>
                            <li><a class="text-dark text-decoration-none" href="{{ route('all-models.subcategory', ['subcategory' => 'stock_photography_model']) }}">Stock Photography</a></li>
                        
                            <li><a class="text-dark text-decoration-none" href="{{ route('all-models.subcategory', ['subcategory' => 'swimsuit_lingerie_models']) }}">Swimsuit & Lingerie</a></li>
                        </ul>
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
    <section  id="section-dancers"  class="modalagencysectalents">
        <div class="my-container3">
                <div class="row actors-section3 d-flex justify-content-center">
                    <div class="modaltext">
                        <h2 class="text-center" style="color: black"> Dancers & Performers                                </h2>
                      
                                <div class="row ">
                                        <div class="col-md-3 col-3">
                                        <ul class="list-unstyled ms-md-5">
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'ayyala_dancers']) }}">Ayyala </a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'background_dancers']) }}">Background</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'ballet_dancers']) }}">Ballet </a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'ballroom_dancers']) }}">Ballroom </a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'belly_dancers']) }}">Belly </a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'b_boy']) }}">B Boy</a></li>
                                        </ul>
                                        </div>
                                        <div class="col-md-3 col-3">
                                        <ul class="list-unstyled">
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'break_dancers']) }}">Break </a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'cabaret_dancer']) }}">Cabaret </a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'cheerleaders']) }}">Cheerleaders</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'choreographers']) }}">Choreographers</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'contemporary_dancers']) }}">Contemporary </a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'dance_group']) }}">Dance Group</a></li>
                                        </ul>
                                        </div>
                                        <div class="col-md-3 col-3 ">
                                        <ul class="list-unstyled ms-md-5 ">
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'dancing_couples']) }}">Dancing Couple</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'fictional_dancers']) }}">Fictional </a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'folk_dancer']) }}">Folk </a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'samba_dancers']) }}">Samba </a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'go_go_dancer']) }}">Go Go </a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'hip_hop_dancers']) }}">Hip Hop </a></li>
                                        </ul>
                                        </div>
                                        <div class="col-md-3 col-3">
                                        <ul class="list-unstyled">
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'kathak_dancer']) }}">Kathak </a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'parade_away']) }}">Parade Away</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'salsa_dancers']) }}">Salsa</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'sufi_dancer']) }}">Sufi D</a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'swing_dancers']) }}">Swing </a></li>
                                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'tap_dancers']) }}">Tap </a></li>
                                        </ul>
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

    <section id="section-makeup" class="modalagencysectalents">
    <div class="my-container4">
        <div class="row  actors-section4 d-flex justify-content-center">
            <div class="modaltext">
                <h2 class="text-center text-black"> Makeup | Hair | Painter | Fashion Stylists </h2>
                <div class="row">
                    <div class="col-md-3 col-3 ">
                        <ul class="list-unstyled ms-md-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'body_painter']) }}">Body Painter</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'creative_makeup_artists']) }}">Creative Makeup Artist</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-3 ">
                        <ul class="list-unstyled">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'face_painter']) }}">Face Painter</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'fashion_stylists']) }}">Fashion Stylist</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-3 ">
                        <ul class="list-unstyled ms-md-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'hair_stylists']) }}">Hair Stylist</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'henna_artist']) }}">Henna Artist</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-3 ">
                        <ul class="list-unstyled">
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
    <section id="section-photo-video" class="modalagencysectalents">
        <div class="my-container5">
            <div class="row actors-section5 d-flex justify-content-center">
                <div class="modaltext">
                    <h2 class="text-center" style="color: black">Photo | Video</h2>
                    <div class="row ">
                        <div class="col-md-3 col-3 ">
                            <ul class="list-unstyled ms-md-5">
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'abstract']) }}">Abstract </a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'aerial']) }}">Aerial </a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'architecture']) }}">Architecture </a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'child']) }}">Child </a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'commercial']) }}">Commercial </a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-3 ">
                            <ul class="list-unstyled">
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'digital']) }}">Digital </a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'documentary']) }}">Documentary </a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'event']) }}">Event </a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'fashion']) }}">Fashion </a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'film']) }}">Film </a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-3 ">
                            <ul class="list-unstyled ms-md-5">
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'fine_art']) }}">Fine Art </a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'food']) }}">Food </a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'landscape']) }}">Landscape </a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'lifestyle']) }}">Lifestyle </a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'nature']) }}">Nature </a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-3 ">
                            <ul class="list-unstyled">
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'portrait']) }}">Portrait </a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'sports']) }}">Sports </a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'street']) }}">Street </a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'travel']) }}">Travel </a></li>
                                <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'wedding']) }}">Wedding </a></li>
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
    <section id="section-film-crew" class="modalagencysectalents">
        <div class="my-container6">
            <div class="row actors-section6 d-flex justify-content-center">
                <div class="modaltext ">
                    <h2 class="text-center" style="color: black">Film Crew</h2>
                    <div class="row">
                        <!-- Column 1 -->
                        <div class="col-md-3 col-3 ">
    <ul class="mb-3 ms-md-5">
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'art_director']) }}">Art Director</a></li>
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'runner']) }}">Runner</a></li>
       
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'art_and_costume']) }}">Art & Costume</a></li>
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'assistant_director']) }}">Assistant Director</a></li>
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'copy_writer']) }}">Copy Writer</a></li>
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'camera_crew']) }}">Camera Crew</a></li>
    </ul>
</div>
<!-- Column 2 -->
<div class="col-md-3 col-3 ">
    <ul class="mb-3">
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'crane_operator']) }}">Crane Operator</a></li>
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'director']) }}">Director</a></li>
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'DOP']) }}">DOP</a></li>
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'sound_crew']) }}">Sound Crew</a></li>
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'lighting_crew']) }}">Lighting Crew</a></li>
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'editor']) }}">Editor</a></li>
    </ul>
</div>
<!-- Column 3 -->
<div class="col-md-3 col-3 ">
    <ul class="mb-3 ms-md-5">
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'film_maker']) }}">Film Maker</a></li>
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'film_producer']) }}">Film Producer</a></li>
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'focus_puller_operator']) }}">Focus Puller Operator</a></li>
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'line_producer']) }}">Line Producer</a></li>
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'other_film_and_stage_crew']) }}">Other Film & Stage Crew</a></li>
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'post_production_staff']) }}">Post Production Staff</a></li>
    </ul>
</div>
<!-- Column 4 -->
<div class="col-md-3 col-3 ">
    <ul class="mb-3">
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'production_manager']) }}">Production Manager</a></li>
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'animation_and_graphic_designer']) }}">Animation & Graphic Designer</a></li>
       
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'photographer']) }}">Photographer</a></li>
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'script_writer']) }}">Script Writer</a></li>
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'sound_engineer']) }}">Sound Engineer</a></li>
        <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'videographer']) }}">Videographer</a></li>
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
 <section  id="section-presenter" class="modalagencysectalents">
    <div class="my-container7">
        <div class="row actors-section7 d-flex justify-content-center">
            <div class="modaltext">
                <h2 class="text-center presenter" style="color: black;">Presenter & Emcee</h2>
                <div class="row ">
                    <!-- Column 1 -->
                    <div class="col-md-3 col-3 ">
                        <ul class="list-unstyled ms-md-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'balloon_decorator']) }}">Balloon Decorator</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'bottle_twister']) }}">Bottle Twister</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'caricature']) }}">Caricature</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'clown']) }}">Clown</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'comedian']) }}">Comedian</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'emcee']) }}">Emcee</a></li>
                        </ul>
                    </div>
                    <!-- Column 2 -->
                    <div class="col-md-3 col-3 ">
                        <ul class="list-unstyled">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'fire_artist']) }}">Fire Artist</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'hypnotist']) }}">Hypnotist</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'illustrationist']) }}">Illustrationist</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'jugglers']) }}">Jugglers</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'live_statue']) }}">Live Statue</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'magician']) }}">Magician</a></li>
                        </ul>
                    </div>
                    <!-- Column 3 -->
                    <div class="col-md-3 col-3 ">
                        <ul class="list-unstyled ms-md-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'media_reporter']) }}">Media Reporter</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'news_reader']) }}">News Reader</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'others']) }}">Others</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'public_speaker']) }}">Public Speaker</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'radio_jockey']) }}">Radio Jockey RJ</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'shadow_performer']) }}">Shadow Performer</a></li>
                        </ul>
                    </div>
                    <!-- Column 4 -->
                    <div class="col-md-3 col-3 ">
                        <ul class="list-unstyled">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'stand_up_artist']) }}">Stand-Up Artist</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'stilt_walker']) }}">Stilt Walker</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'unicyclist']) }}">Unicyclist</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'video_jockey']) }}">Video Jockey VJ</a></li>
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
    <section  id="section-musicians" class="modalagencysectalents">
    <div class="my-container8">
        <div class="row actors-section8 d-flex justify-content-center">
            <div class="modaltext">
                <h2 class="text-center" style="color: black"> Musician </h2>
                <div class="row ">
                    <!-- Column 1 -->
                    <div class="col-md-3  col-3 ">
                        <ul class="list-unstyled ms-md-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'guitarist']) }}">Guitarist</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'hobbyist']) }}">Hobbyist</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'independent_artist']) }}">Independent Artist</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'rapper']) }}">Rapper</a></li>
                        
                        </ul>
                    </div>
                    <!-- Column 2 -->
                    <div class="col-md-3  col-3 ">
                        <ul class="list-unstyled">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'live_performer']) }}">Live Performer</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'music_band']) }}">Music Band</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'musician']) }}">Musician</a></li>
                            <li><a class="text-dark " href="{{ route('all-models.subcategory', ['subcategory' => 'orchestral_musician']) }}">Orchestral Musician</a></li>
                        </ul>
                    </div>
                    <!-- Column 3 -->
                    <div class="col-md-3 col-3 ">
                        <ul class="list-unstyled ms-md-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'producer_composer']) }}">Producer - Composer</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'independent_label_artist']) }}">Independent Label Artist</a></li>

                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'session_musician']) }}">Session Musician</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'singer']) }}">Singer</a></li>
                        </ul>
                    </div>
                    <!-- Column 4 -->
                    <div class="col-md-3 col-3 ">
                        <ul class="list-unstyled">
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

<section  id="section-event-staff" class="modalagencysectalents">
    <div class="my-container9">
        <div class="row actors-section9 d-flex justify-content-center">
            <div class="modaltext">
                <h2 class="text-center" style="color: black">EVENT STAFF & USHERS</h2>
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-md-3 col-3 ">
                        <ul class="list-unstyled ms-md-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'bartender']) }}">Bartender</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'brand_ambassador']) }}">Brand Ambassador</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'caterer']) }}">Caterer</a></li>
                        </ul>
                    </div>
                    <!-- Column 2 -->
                    <div class="col-md-3 col-3 ">
                        <ul class="list-unstyled">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'chef']) }}">Chef</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'concierge']) }}">Concierge</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'decorators']) }}">Decorators</a></li>
                        </ul>
                    </div>
                    <!-- Column 3 -->
                    <div class="col-md-3  col-3 ">
                        <ul class="list-unstyled ms-md-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'event_supervisor']) }}">Event Supervisor</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'host_or_hostess']) }}">Host / Hostess</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'marketing_coordinator']) }}">Marketing Coordinator</a></li>
                        </ul>
                    </div>
                    <!-- Column 4 -->
                    <div class="col-md-3 col-3 ">
                        <ul class="list-unstyled">
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
    <section  id="section-influencers" class="modalagencysectalents">
    <div class="my-container10">
        <div class="row actors-section10 d-flex justify-content-center">
            <div class="modaltext ">
                <h2 class="text-center" style="color: black">Influencers</h2>
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-md-3 col-3 ">
                        <ul class="list-unstyled ms-md-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'beauty_influencers']) }}">Beauty </a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'bloggers']) }}">Bloggers</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'celebrity']) }}">Celebrity</a></li>
                        </ul>
                    </div>
                    <!-- Column 2 -->
                    <div class="col-md-3 col-3 ">
                        <ul class="list-unstyled">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'fashion_influencers']) }}">Fashion </a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'fitness_wellness_influencers']) }}">Fitness & Wellness</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'food_influencers']) }}">Food </a></li>
                        </ul>
                    </div>
                    <!-- Column 3 -->
                    <div class="col-md-3 col-3 ">
                        <ul class="list-unstyled ms-md-5">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'gaming_tech_influencers']) }}">Gaming & Tech </a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'event_influencers']) }}">Influencers to Attend Events</a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'lifestyle_influencers']) }}">Lifestyle </a></li>
                        </ul>
                    </div>
                    <!-- Column 4 -->
                    <div class="col-md-3 col-3 ">
                        <ul class="list-unstyled">
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'mens_products_influencers']) }}">Men’s Products</a></li>
                            <li><a class="text-dark " href="{{ route('all-models.subcategory', ['subcategory' => 'travel_influencers']) }}">Travel </a></li>
                            <li><a class="text-dark" href="{{ route('all-models.subcategory', ['subcategory' => 'womens_products_influencers']) }}">Women’s Products</a></li>
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
</div>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll(".modalagencysectalents");
    const navigation = document.createElement("div");
    navigation.className = "scroll-navigation";

    let currentSectionIndex = 0;
    let isScrolling = false;

    // Create navigation dots
    sections.forEach((section, index) => {
        const dot = document.createElement("a");
        dot.addEventListener("click", () => {
            currentSectionIndex = index;
            scrollToSection(currentSectionIndex);
        });
        navigation.appendChild(dot);
    });

    document.body.appendChild(navigation);

    const updateActiveDot = () => {
        const dots = navigation.querySelectorAll("a");
        dots.forEach((dot, index) => {
            if (index === currentSectionIndex) {
                dot.classList.add("active");
            } else {
                dot.classList.remove("active");
            }
        });
    };

    const scrollToSection = (index) => {
        sections[index].scrollIntoView({
            behavior: "smooth",
            block: "start",
        });
        updateActiveDot();
    };

    const handleScroll = (direction) => {
        if (isScrolling) return;
        isScrolling = true;

        if (direction > 0 && currentSectionIndex < sections.length - 1) {
            currentSectionIndex++;
        } else if (direction < 0 && currentSectionIndex > 0) {
            currentSectionIndex--;
        }

        scrollToSection(currentSectionIndex);

        setTimeout(() => {
            isScrolling = false;
        }, 800);
    };

    // Mouse Wheel Event
    window.addEventListener("wheel", (event) => {
        handleScroll(event.deltaY);
    });

    // Keyboard Navigation
    window.addEventListener("keydown", (event) => {
        if (event.key === "ArrowDown") {
            handleScroll(1);
        } else if (event.key === "ArrowUp") {
            handleScroll(-1);
        }
    });

    // Touch Swipe for Mobile
    let touchStartY = 0;
    window.addEventListener("touchstart", (event) => {
        touchStartY = event.touches[0].clientY;
    });

    window.addEventListener("touchend", (event) => {
        const touchEndY = event.changedTouches[0].clientY;
        const delta = touchStartY - touchEndY;

        if (Math.abs(delta) > 50) {
            handleScroll(delta);
        }
    });

    // Initial setup
    scrollToSection(currentSectionIndex);
    updateActiveDot();
});
</script>







@endsection