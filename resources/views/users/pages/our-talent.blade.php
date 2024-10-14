@extends('users.layouts.layout-1')

@section('title', 'Casting Talent | Talents')

@section('main-content')

    <section class="innerpages">
        <div class="container">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="innertext">
                    <h1>Our <span>Talents</span></h1>

                </div>
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
    </style>

    <section class="modalagencysec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modaltext">
                        <h2>Actors</h2>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <ul class="mb-5">
                                <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'main-lead']) }}">Main
                                        Lead</a></li>
                                <li><a class="text-dark"
                                        href="{{ route('featured-models.get', ['role' => 'featured_actors']) }}">Featured
                                        Actors</a>
                                </li>
                                <li><a class="text-dark"
                                        href="{{ route('featured-models.get', ['role' => 'body_double']) }}">Body
                                        Double</a></li>
                               
                            </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <ul class="mb-5">
                                <li><a class="text-dark"
                                        href="{{ route('featured-models.get', ['role' => 'mime_artist']) }}">Mime
                                        Artist</a></li>
                                <li><a class="text-dark"
                                        href="{{ route('featured-models.get', ['role' => 'stunt_person']) }}">Stunt Person</a>
                                </li>
                                <li><a class="text-dark"
                                        href="{{ route('featured-models.get', ['role' => 'extras']) }}">Extras</a>
                                </li>
                            </ul>
                            </div>
                        </div>
                        <a href="{{ route('featured-models.get') }}" class="contactbtn">VIEW ALL</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalimg">
                        <img src="https://i.pinimg.com/originals/72/f5/83/72f583989ba8c78ad3fada74d1abf8fd.jpg" class="img-fluid" alt="img">
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
                        <img src="{{ url('user-assets') }}/images/modal_7.png" alt="Casting Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modaltext1">

                        <h2>Models</h2>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul class="mb-5">
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'high_fashion_editorial_models']) }}">High
                                            Fashion (Editorial) Models</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'fashion_catalogue_models']) }}">Fashion
                                            (Catalogue) Models</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'commercial_models']) }}">Commercial
                                            Models</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'mature_models']) }}">Mature
                                            Models</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'promotional_models']) }}">Promotional
                                            Models</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'body_parts_models']) }}">Body
                                            Parts Models</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'fit_models']) }}">Fit
                                            Models</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'fitness_models']) }}">Fitness
                                            Models</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'glamour_models']) }}">Glamour
                                            Models</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'swimsuit_and_lingerie_models']) }}">Swimsuit
                                            And Lingerie Models</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'child_models']) }}">Child
                                            Models</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'petite_models']) }}">Petite
                                            Models</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'plus_size_models']) }}">Plus-size
                                            Models</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'runway_models_catwalk_models']) }}">Runway
                                            Models / Catwalk Models</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'freelance_models']) }}">Freelance
                                            Models</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'expecting_models_pregnant_models']) }}">Expecting
                                            Models (Pregnant Models)</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'stock_photography_model']) }}">Stock
                                            Photography Model</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'image_party_model']) }}">Image
                                            / Party Model</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'hair_model']) }}">Hair
                                            Model</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'art_models']) }}">Art
                                            Models</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'erotic_photography_model']) }}">Erotic
                                            Photography Model</a></li>
                                </ul>
                            </div>
                        </div>
                        <a href="{{ route('featured-models.get') }}" class="contactbtn1">VIEW ALL</a>
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
                        <h2>Dancers & <span>Performers</span></h2>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul class="mb-5">
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'ballet_dancers']) }}">Ballet
                                            Dancers</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'ballroom_dancers']) }}">Ballroom
                                            Dancers</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'baroque_dancers']) }}">Baroque
                                            Dancers</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'belly_dancers']) }}">Belly
                                            Dancers</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'break_dancers']) }}">Break
                                            Dancers</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'contemporary_dancers']) }}">Contemporary
                                            Dancers</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'erotic_dancer']) }}">Erotic
                                            Dancer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'flamenco_dancers']) }}">Flamenco
                                            Dancers</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'folk_dancers']) }}">Folk
                                            Dancers</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'hip_hop_dancer']) }}">Hip
                                            Hop
                                            Dancer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'hula_dancers']) }}">Hula
                                            Dancers</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'masked_dancers']) }}">Masked
                                            Dancers</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'bharatnatyam_dancers']) }}">Bharatnatyam
                                            Dancers</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'lion_dancer']) }}">Lion
                                            Dancer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'kabuki_dancer']) }}">Kabuki
                                            Dancer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'viennese_waltz_dancers']) }}">Viennese
                                            Waltz Dancers</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'aerial_dancer']) }}">Aerial
                                            Dancer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'tango_dancer']) }}">Tango
                                            Dancer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'fandango_dancers']) }}">Fandango
                                            Dancers</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'cancan_dancers']) }}">Cancan
                                            Dancers</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'latin_dancer']) }}">Latin
                                            Dancer</a></li>
                                </ul>
                            </div>
                        </div>

                        <a href="{{ route('featured-models.get') }}" class="contactbtn">VIEW ALL</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/modal_8.png" class="img-fluid" alt="img">
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
                        <img src="{{ url('user-assets') }}/images/modal_9.png" alt="Casting Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modaltext1">

                        <h2>Makeup, Hair, Painter Fashion Stylists </h2>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul class="mb-5">
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'makeup_artists']) }}">Makeup
                                            Artists</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'fashion_stylists']) }}">Fashion
                                            Stylists</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'hair_stylists']) }}">Hair
                                            Stylists</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'wardrobe_stylists']) }}">Wardrobe
                                            Stylists</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'henna_artist']) }}">Henna
                                            Artist</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'face_painter']) }}">Face
                                            Painter</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'body_painter']) }}">Body
                                            Painter</a></li>
                                </ul>
                            </div>
                        </div>
                        <a href="{{ route('featured-models.get') }}" class="contactbtn1">VIEW ALL</a>
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
                        <h2>Photographers / <span>videographers</span></h2>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul class="mb-5">
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'fashion_photographer']) }}">Fashion
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'portrait_photographer']) }}">Portrait
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'landscape_photographer']) }}">Landscape
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'architecture_photographer']) }}">Architecture
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'sports_photographer']) }}">Sports
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'nature_photographer']) }}">Nature
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'aerial_photographer']) }}">Aerial
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'astro_photographer']) }}">Astro
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'documentary_photographer']) }}">Documentary
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'macro_photographer']) }}">Macro
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'pet_photographer']) }}">Pet
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'travel_photographer']) }}">Travel
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'wedding_photographer']) }}">Wedding
                                            Photographer</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'storm_photographer']) }}">Storm
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'commercial_photographer']) }}">Commercial
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'fine_art_photographer']) }}">Fine
                                            Art Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'street_photographer']) }}">Street
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'child_photographer']) }}">Child
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'digital_photographer']) }}">Digital
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'food_photographer']) }}">Food
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'color_photographer']) }}">Color
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'film_photographer']) }}">Film
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'abstract_photographer']) }}">Abstract
                                            Photographer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'event_photographer']) }}">Event
                                            Photographer</a></li>
                                </ul>
                            </div>
                        </div>

                        <a href="{{ route('featured-models.get') }}" class="contactbtn">VIEW ALL</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/modal_7.png" class="img-fluid" alt="img">
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
                        <img src="{{ url('user-assets') }}/images/modal_10.png" alt="Casting Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modaltext1">

                        <h2>Film Crew </h2>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul class="mb-5">
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'sound_crew']) }}">Sound
                                            Crew</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'lighting_crew']) }}">Lighting
                                            Crew</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'editor_post_production_staff']) }}">Editor
                                            & Post Production Staff</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'art_costume_department_crew']) }}">Art
                                            Or Costume Department Crew</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'writers_directors']) }}">Writers
                                            / Directors</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'runners_assistants']) }}">Runners
                                            / Assistants</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'film_producers_managers']) }}">Film
                                            Producers / Managers</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'camera_crew']) }}">Camera
                                            Crew</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'other_film_stage_crew']) }}">Other
                                            Film & Stage Crew</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'film_maker']) }}">Film
                                            Maker</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'dop']) }}">Dop</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'assistant_director']) }}">Assistant
                                            Director</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'art_director']) }}">Art
                                            Director</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'animation_graphic_designer']) }}">Animation
                                            And Graphic Designer</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'script_writer']) }}">Script
                                            Writer</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'copy_writer_spot_person']) }}">Copy
                                            Writer Spot Person</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'crew']) }}">Crew</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'production_manager']) }}">Production
                                            Manager</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'focus_puller_operator']) }}">Focus
                                            Puller Operator</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'crane_operator']) }}">Crane
                                            Operator</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'sound_engineer']) }}">Sound
                                            Engineer</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'videographer']) }}">Videographer</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'photographer']) }}">Photographer</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="{{ route('featured-models.get') }}" class="contactbtn1">VIEW ALL</a>
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
                                            href="{{ route('featured-models.get', ['role' => 'tv_channels_game_shows']) }}">TV
                                            Channels, Game Shows</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'tv_shows']) }}">TV
                                            Shows</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'reality_tv']) }}">Reality
                                            TV</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'documentaries_factual']) }}">Documentaries
                                            & Factual</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'hobbyist']) }}">Hobbyist</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'independent_artist']) }}">Independent
                                            Artist</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'independent_label_artist']) }}">Independent
                                            Label Artist</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'major_label_artist']) }}">Major
                                            Label Artist</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'post_label_musician']) }}">Post
                                            Label Musician</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'film_maker']) }}">Film
                                            Maker</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'dop']) }}">Dop</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'assistant_director']) }}">Assistant
                                            Director</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'session_musician']) }}">Session
                                            Musician</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'producer_composer']) }}">Producer-
                                            Composer</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'orchestral_musician']) }}">Orchestral
                                            Musician</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'teacher_retired_artist']) }}">Teacher,
                                            Retired Artist</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'entrepreneurial_artist']) }}">Entrepreneurial
                                            Artist</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'singer']) }}">Singer</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'musician']) }}">Musician</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'band_guitarist']) }}">Band
                                            Guitarist</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'violinist']) }}">Violinist</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'rapper']) }}">Rapper</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <a href="{{ route('featured-models.get') }}" class="contactbtn">VIEW ALL</a>
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
                                            href="{{ route('featured-models.get', ['role' => 'emce']) }}">Emce</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'voice_acting']) }}">Voice
                                            Acting</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'public_speaker']) }}">Public
                                            Speaker</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'virtual_host']) }}">Virtual
                                            Host</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'standup_artist']) }}">Standup
                                            Artist</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'media_reporter']) }}">Media
                                            Reporter</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'news_reader']) }}">News
                                            Reader</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'video_jockey_vj']) }}">Video
                                            Jockey (VJ)</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'radio_jockey_rj']) }}">Radio
                                            Jockey (RJ)</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'comedian_magician']) }}">Comedian,
                                            Magician</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'illustrationist']) }}">Illustrationist</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'shadow_performer']) }}">Shadow
                                            Performer</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'hypnotist']) }}">Hypnotist</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'caricature']) }}">Caricature</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'fire_artist']) }}">Fire
                                            Artist</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'stilt_walker']) }}">Stilt
                                            Walker</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'jugglers']) }}">Jugglers</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'balloon_decorator']) }}">Balloon
                                            Decorator</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'puppet_show']) }}">Puppet
                                            Show</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'unicyclist']) }}">Unicyclist</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'clown']) }}">Clown</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'live_statue']) }}">Live
                                            Statue</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'others']) }}">Others</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="{{ route('featured-models.get') }}" class="contactbtn1">VIEW ALL</a>
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
                                            href="{{ route('featured-models.get', ['role' => 'brand_ambassador']) }}">Brand
                                            Ambassador</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'events_indoor']) }}">Events
                                            Indoor</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'events_outdoor']) }}">Events
                                            Outdoor</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'host_hostess']) }}">Host /
                                            Hostess</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'promotional_staff']) }}">Promotional
                                            Staff</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'ushers']) }}">Ushers</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'promoter']) }}">Promoter</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'event_supervisor']) }}">Event
                                            Supervisor</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'event_crew_member']) }}">Event
                                            Crew Member</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'chef']) }}">Chef</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'event_planner']) }}">Event
                                            Planner</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'server']) }}">Server</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'caterer']) }}">Caterer</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'bartender']) }}">Bartender</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'catering_manager']) }}">Catering
                                            Manager</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'event_coordinator']) }}">Event
                                            Coordinator</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'special_events_manager']) }}">Special
                                            Events Manager</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'head_chef']) }}">Head
                                            Chef</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'event_manager']) }}">Event
                                            Manager</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'communication_specialist']) }}">Communication
                                            Specialist</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'marketing_manager']) }}">Marketing
                                            Manager</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'director_of_events']) }}">Director
                                            Of Events</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'marketing_coordinator']) }}">Marketing
                                            Coordinator</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'program_coordinator']) }}">Program
                                            Coordinator</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'communications_assistant']) }}">Communications
                                            Assistant</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'training_manager']) }}">Training
                                            Manager</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'meeting_planner']) }}">Meeting
                                            Planner</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'wedding_planner']) }}">Wedding
                                            Planner</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'administrative_assistant']) }}">Administrative
                                            Assistant</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'project_manager']) }}">Project
                                            Manager</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'concierge']) }}">Concierge</a>
                                    </li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'operations_management']) }}">Operations
                                            Management</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'venue_manager']) }}">Venue
                                            Manager</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'sponsorship_manager']) }}">Sponsorship
                                            Manager</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'development_director']) }}">Development
                                            Director</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'social_media_specialist']) }}">Social
                                            Media Specialist</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'volunteer_coordinator']) }}">Volunteer
                                            Coordinator</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'other_promotion_jobs']) }}">Other
                                            Promotion Jobs</a></li>
                                    <li><a class="text-dark"
                                            href="{{ route('featured-models.get', ['role' => 'waitress']) }}">Waitress</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <a href="{{ route('featured-models.get') }}" class="contactbtn">VIEW ALL</a>
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
                                            href="{{ route('featured-models.get', ['role' => 'emcee']) }}">Emcee</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'voice_acting']) }}">Voice
                                            Acting</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'public_speaker']) }}">Public
                                            Speaker</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'virtual_host']) }}">Virtual
                                            Host</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'standup_artist']) }}">Standup
                                            Artist</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'media_reporter']) }}">Media
                                            Reporter</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'news_reader']) }}">News
                                            Reader</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'video_jockey_vj']) }}">Video
                                            Jockey VJ</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'radio_jockey_rj']) }}">Radio
                                            Jockey RJ</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'comedian_magician']) }}">Comedian,
                                            Magician</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'illustrationist']) }}">Illustrationist</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'shadow_performer']) }}">Shadow
                                            Performer</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <ul>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'hypnotist']) }}">Hypnotist</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'caricature']) }}">Caricature</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'fire_artist']) }}">Fire
                                            Artist</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'stilt_walker']) }}">Stilt
                                            Walker</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'jugglers']) }}">Jugglers</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'balloon_decorator']) }}">Balloon
                                            Decorator</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'puppet_show']) }}">Puppet
                                            Show</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'unicyclist']) }}">Unicyclist</a>
                                    </li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'clown']) }}">Clown</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'live_statue']) }}">Live
                                            Statue</a></li>
                                    <li><a class="text-white"
                                            href="{{ route('featured-models.get', ['role' => 'others']) }}">Others</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <a href="{{ route('featured-models.get') }}" class="contactbtn1">VIEW ALL</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
