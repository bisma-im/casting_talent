@extends('users.layouts.layout')

@section('title', 'Casting Talent | Talents')

@section('main-content')

<style>
.category-list {
    list-style: none;
    padding: 0;
}

.category-list li {
    position: relative;
    margin-bottom: 10px; /* Add space between items */
}

.popup {
    display: none;
    position: absolute;
    background: white;
    border: 1px solid #ccc;
    padding: 10px;
    z-index: 100;
    width: 270px;
    right: -35px;
    top: 35px;
}

.popup ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.popup a {
    text-decoration: none;
    color: #000; /* Initial color set to black */
}

.popup a:hover {
    color: #ff0000; /* Change color to red on hover */
}


</style>

<style>
    .sideBar{
        padding: 10px;
        border: 1px solid red;
    }
    .headText h3{
        color: rgba(232, 175, 85, 1) !important;
        font-weight: bold !important;
        padding: 10px !important;
        background: beige !important;
     }
     .featurelist ul li {
        list-style: none !important;
        margin: 0 24px !important;
        display: flex !important;
        line-height: 50px !important;
     }
    </style>

    <section class="innerpages">
        <div class="container">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="innertext">
                    <h1>Featured <span>Talents</span></h1>
                </div>
            </div>
        </div>
    </section>
    <!--<div class="container">-->
    <!--    <div class="row">-->
    <!--        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">-->
    <!--            <div class="featurelist">-->
    <!--                    <ul>-->
    <!--                        <li><a href="{{ route('featured-models.get', ['role' => 'actors']) }}" class="active" data-target="tab1">-->
    <!--                            <i class="fa-solid fa-circle"></i>ACTORS</a>-->
    <!--                        </li>-->
    <!--                        <li><a href="{{ route('featured-models.get', ['role' => 'models']) }}" data-target="tab2">-->
    <!--                            <i class="fa-solid fa-circle"></i>MODELS</a>-->
    <!--                        </li>-->
    <!--                        <li><a href="{{ route('featured-models.get', ['role' => 'dancers_performers']) }}" data-target="tab3">-->
    <!--                            <i class="fa-solid fa-circle"></i>DANCERS & PERFORMERS</a>-->
    <!--                        </li>-->
    <!--                        <li><a href="{{ route('featured-models.get', ['role' => 'film_crew']) }}" data-target="tab4">-->
    <!--                            <i class="fa-solid fa-circle"></i>FILM CREW</a>-->
    <!--                        </li>-->
    <!--                        <li><a href="{{ route('featured-models.get', ['role' => 'musicians']) }}" data-target="tab5">-->
    <!--                            <i class="fa-solid fa-circle"></i>MUSICIANS</a>-->
    <!--                        </li>-->
    <!--                        <li><a href="{{ route('featured-models.get', ['role' => 'influencers']) }}" data-target="tab6">-->
    <!--                            <i class="fa-solid fa-circle"></i>INFLUENCERS</a>-->
    <!--                        </li>-->
    <!--                        <li><a href="{{ route('featured-models.get', ['role' => 'presenters_emcees']) }}" data-target="tab7">-->
    <!--                            <i class="fa-solid fa-circle"></i>PRESENTERS & EMCEES</a>-->
    <!--                        </li>-->
    <!--                        <li><a href="{{ route('featured-models.get', ['role' => 'event_staff_ushers']) }}" data-target="tab8">-->
    <!--                            <i class="fa-solid fa-circle"></i>EVENT STAFF & USHERS</a>-->
    <!--                        </li>-->
    <!--                        <li><a href="{{ route('featured-models.get', ['role' => 'photographers_videographers']) }}" data-target="tab9">-->
    <!--                            <i class="fa-solid fa-circle"></i>PHOTOGRAPHERS / VIDEOGRAPHERS</a>-->
    <!--                        </li>-->
    <!--                        <li><a href="{{ route('featured-models.get', ['role' => 'makeup_hair_stylist']) }}" data-target="tab10">-->
    <!--                            <i class="fa-solid fa-circle"></i>MAKEUP, HAIR, PAINTER & FASHION STYLIST</a>-->
    <!--                        </li>-->
    <!--                    </ul>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <style>
        .featurelist ul li a:hover {
            color: rgb(235, 13, 13) !important;
        }
    </style>

    <section class="featruredmodalsec">
        {{-- <div class="container"> --}}
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="row">
                    @if (!empty($qModels))
                        @if ($qModels->count() > 0)
                            @foreach ($qModels as $modelDetail)
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
                                <div class="col-12 col-md-2 m-2">
                                    <a href="{{ route('model-info.get', $modelDetail->id) }}" class="text-dark">
                                        <div class="castbox mb-3">
                                            <div class="castimg">
                                                <img src="{{ url('/uploads/models/profiles/' . $firstImage) }}" class="img-fluid"
                                                    alt="Model Image">
                                            </div>
                                            <div class="castbody">
                                                <div class="castbox-code fs-6">
                                                        <!-- Insert code related content here -->
                                                        CTF - 0001
                                                    </div>
                                                    <div class="castbox-info fs-6">
                                                        {{ $age . ', ' . $modelDetail->nationality }}
                                                        <!-- Insert age, nationality, etc., here -->
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
                    @else
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
                                {{-- <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <a href="{{ route('model-info.get', $modelDetail->id) }}" class="text-dark">
                                        <div class="castbox">
                                            <div class="castimg">
                                                <img src="{{ url('/uploads/models/' . $firstImage) }}" class="img-fluid"
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
                                </div> --}}
                            @endforeach
                        @else
                            <div class="alert alert-info">
                                <h6>There is no data present yet...</h6>
                            </div>
                        @endif
                    @endif
                </div>
                </div>
                
                {{-- <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="sideBar">
                        <div class="headText"><h3>Categories</h3></div>
                        <div class="featurelist myCstmList">
                             <ul class="category-list">
                                <li>
                                    <a href="#" class="category-link" data-category="actors">
                                        <i class="fa-solid fa-circle"></i>ACTORS</a>
                                    <div class="popup" id="popup-actors">
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
                                </li>
                                <li>
                                        <a href="#" class="category-link" data-category="models">
                                            <i class="fa-solid fa-circle"></i>MODELS</a>
                                        <div class="popup" id="popup-models">
                                            <ul class="mb-5">
                                                <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'high_fashion_editorial_models']) }}">High Fashion (Editorial) Models</a></li>
                                                <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'fashion_catalogue_models']) }}">Fashion (Catalogue) Models</a></li>
                                                <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'commercial_models']) }}">Commercial Models</a></li>
                                                <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'mature_models']) }}">Mature Models</a></li>
                                                <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'promotional_models']) }}">Promotional Models</a></li>
                                                <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'body_parts_models']) }}">Body Parts Models</a></li>
                                                <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'fit_models']) }}">Fit Models</a></li>
                                                <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'fitness_models']) }}">Fitness Models</a></li>
                                                <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'glamour_models']) }}">Glamour Models</a></li>
                                                <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'swimsuit_and_lingerie_models']) }}">Swimsuit And Lingerie Models</a></li>
                                                <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'child_models']) }}">Child Models</a></li>
                                            </ul>
                                        </div>
                                </li>
                                <li>
                                        <a href="#" class="category-link" data-category="dancers_performers">
                                            <i class="fa-solid fa-circle"></i>DANCERS & PERFORMERS</a>
                                        <div class="popup" id="popup-dancers">
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
                                </li>
                                <li>
                                        <a href="#" class="category-link" data-category="film_crew">
                                            <i class="fa-solid fa-circle"></i>FILM CREW</a>
                                        <div class="popup" id="popup-film-crew">
                                                <ul class="mb-5">
                                                        <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'sound_crew']) }}">Sound Crew</a></li>
                                                        <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'lighting_crew']) }}">Lighting Crew</a></li>
                                                        <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'editor_post_production_staff']) }}">Editor & Post Production Staff</a></li>
                                                        <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'art_costume_department_crew']) }}">Art Or Costume Department Crew</a></li>
                                                        <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'writers_directors']) }}">Writers / Directors</a></li>
                                                        <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'runners_assistants']) }}">Runners / Assistants</a></li>
                                                        <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'film_producers_managers']) }}">Film Producers / Managers</a></li>
                                                        <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'camera_crew']) }}">Camera Crew</a></li>
                                                        <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'other_film_stage_crew']) }}">Other Film & Stage Crew</a></li>
                                                        <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'film_maker']) }}">Film Maker</a></li>
                                                        <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'dop']) }}">Dop</a></li>
                                                        <li><a class="text-dark" href="{{ route('featured-models.get', ['role' => 'assistant_director']) }}">Assistant Director</a></li>
                                                </ul>
                                        </div>
        
                                </li>
                                <li>
                                        <a href="#" class="category-link" data-category="musicians">
                                            <i class="fa-solid fa-circle"></i>MUSICIANS</a>
                                        <div class="popup" id="popup-musicians">
                                            <div class="row">
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
                                        </div>
                                </li>
                                <li>
                                        <a href="#" class="category-link" data-category="influencers">
                                            <i class="fa-solid fa-circle"></i>INFLUENCERS</a>
                                        <div class="popup" id="popup-influencers">
                                            <ul class="mb-5">
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'emcee']) }}">Emcee</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'voice_acting']) }}">Voice
                                                    Acting</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'public_speaker']) }}">Public
                                                    Speaker</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'virtual_host']) }}">Virtual
                                                    Host</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'standup_artist']) }}">Standup
                                                    Artist</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'media_reporter']) }}">Media
                                                    Reporter</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'news_reader']) }}">News
                                                    Reader</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'video_jockey_vj']) }}">Video
                                                    Jockey VJ</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'radio_jockey_rj']) }}">Radio
                                                    Jockey RJ</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'comedian_magician']) }}">Comedian,
                                                    Magician</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'illustrationist']) }}">Illustrationist</a>
                                            </li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'shadow_performer']) }}">Shadow
                                                    Performer</a></li>
                                        </ul>
                                        </div>
                                </li>
                                <li>
                                        <a href="#" class="category-link" data-category="presenters_emcees">
                                            <i class="fa-solid fa-circle"></i>PRESENTERS & EMCEES</a>
                                        <div class="popup" id="popup-presenters">
                                            <ul class="mb-5">
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'emce']) }}">Emce</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'voice_acting']) }}">Voice
                                                    Acting</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'public_speaker']) }}">Public
                                                    Speaker</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'virtual_host']) }}">Virtual
                                                    Host</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'standup_artist']) }}">Standup
                                                    Artist</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'media_reporter']) }}">Media
                                                    Reporter</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'news_reader']) }}">News
                                                    Reader</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'video_jockey_vj']) }}">Video
                                                    Jockey (VJ)</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'radio_jockey_rj']) }}">Radio
                                                    Jockey (RJ)</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'comedian_magician']) }}">Comedian,
                                                    Magician</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'illustrationist']) }}">Illustrationist</a>
                                            </li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'shadow_performer']) }}">Shadow
                                                    Performer</a></li>
                                        </ul>
                                        </div>
                                </li>
                                <li>
                                        <a href="#" class="category-link" data-category="event_staff_ushers">
                                            <i class="fa-solid fa-circle"></i>EVENT STAFF & USHERS</a>
                                        <div class="popup" id="popup-event-staff">
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
                                </li>
                                <li>
                                        <a href="#" class="category-link" data-category="photographers_videographers">
                                            <i class="fa-solid fa-circle"></i>PHOTOGRAPHERS / VIDEOGRAPHERS</a>
                                        <div class="popup" id="popup-photographers-videographers">
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
                                </li>
                                <li>
                                        <a href="#" class="category-link" data-category="makeup_hair_stylist">
                                            <i class="fa-solid fa-circle"></i>MAKEUP, HAIR, PAINTER & FASHION STYLIST</a>
                                        <div class="popup" id="popup-makeup-hair-stylist">
                                            <ul class="mb-5">
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'makeup_artists']) }}">Makeup
                                                    Artists</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'fashion_stylists']) }}">Fashion
                                                    Stylists</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'hair_stylists']) }}">Hair
                                                    Stylists</a></li>
                                            <li><a class="text-dark"
                                                    href="{{ route('featured-models.get', ['role' => 'wardrobe_stylists']) }}">Wardrobe
                                                    Stylists</a></li>
                                        </ul>
                                        </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        {{-- </div> --}}
    </section>
    
    {{-- <script>
        document.querySelectorAll('.category-link').forEach(link => {
                link.addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent the default link behavior

                        // Close any open pop-ups
                        document.querySelectorAll('.popup').forEach(popup => {
                        if (popup !== this.nextElementSibling) {
                                popup.style.display = 'none';
                        }
                        });

                        // Toggle the current pop-up
                        const popup = this.nextElementSibling;
                        popup.style.display = (popup.style.display === 'block') ? 'none' : 'block';
                });
        });

        // Close popups when clicking outside
        document.addEventListener('click', function(event) {
        if (!event.target.closest('.category-list')) {
                document.querySelectorAll('.popup').forEach(popup => {
                popup.style.display = 'none';
                });
        }
        });

    </script> --}}



@endsection
