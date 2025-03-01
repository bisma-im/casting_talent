<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="{{ url('user-assets') }}/images/favicon.png" type="image/png" sizes="">
    <link href="{{ url('user-assets') }}/css/custom.css" rel="stylesheet" type="text/css">
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
</head>

<body>


            <header>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container topheader">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="row w-100 align-items-center">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                <div class="">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page"
                                                    href="{{ route('index.get') }}">HOME</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('about.get') }}">ABOUT US</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('services.get') }}">SERVICES</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('talents.get') }}">TALENTS</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center">
                                <div class="navbarlogo">
                                    <a href="{{ route('index.get') }}">
                                        <img src="{{ url('user-assets') }}/images/Logo.png" class="img-fluid"
                                            alt="Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5 text-end">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('featured-models.get') }}">FEATURED TALENTS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('jobs.get') }}">JOBS</a>
                                        </li>
                                        <li class="nav-item">
                                            @if (Auth::check() && Auth::user()->role == 'business')
                                                <a class="nav-link" href="{{ route('dashboard.get') }}"><i
                                                        class="fa fa-dashboard" style="color: #062646;"></i></a>
                                            @elseif(Auth::check() && Auth::user()->role == 'model')
                                                <a class="nav-link" href="{{ route('model-dashboard.get') }}"><i
                                                        class="fa fa-dashboard" style="color: #062646;"></i></a>
                                            @else
                                                <a class="nav-link" href="{{ route('login.get') }}"><i
                                                        class="fa fa-user" style="color: #062646;"></i></a>
                                            @endif
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link contactbtn" href="{{ route('contact.get') }}">CONTACT
                                                US</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
