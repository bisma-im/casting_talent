<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="icon" href="{{ url('user-assets') }}/images/favicon.png" type="image/png" sizes="">
    <link href="{{ url('user-assets') }}/css/custom.css" rel="stylesheet" type="text/css">

    <!-- FontAwesome -->
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">

    <!-- Include Dropzone CSS -->
    <link href="https://cdn.jsdelivr.net/npm/dropzone@5.7.1/dist/dropzone.css" rel="stylesheet">
    <!-- Include Dropzone JS -->
    <script src="https://cdn.jsdelivr.net/npm/dropzone@5.7.1/dist/dropzone.js"></script>

    <!-- Animation and Carousel Libraries -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
</head>

<body>

    <style>
        header .navbar-light .navbar-nav .nav-link {
            font-size: 14px;
            color: #000;
            font-weight: 600;
            margin: 0 5px;
        }
        @media (max-width: 768px) {
            .my-navbar-logo {
                display: none;
            }
        }

        .contactbtn {
            display: inline-block; /* Makes the element only as wide as its content */
            padding: 5px 15px; /* Adjust padding as needed */
            white-space: nowrap; /* Prevents the content from wrapping */
        }
        
        .small-navbar-logo {
            margin-top: 5px;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            z-index: -10; 
            display: none;
            width: 170px;
            height: 80px;
        }
        @media (max-width: 768px) {
            .small-navbar-logo {
                display: block;
            }
            .navbar-bg {
                background-color: rgba(179, 206, 227, 0.4);
            }
        }
        .navbar-toggler {
            z-index: 1050; /* Ensures the toggle button is above the logo */
        }

    </style>


    <div id="smooth-wrapper">
        <div id="smooth-content">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light home-nav">
                    <!-- Logo centered on mobile, remains visible and centered when navbar is toggled -->
                <div class="small-navbar-logo">
                    <a href="{{ route('index.get') }}">
                        <img src="{{ url('user-assets') }}/images/Logo.png" class="img-fluid" alt="Logo">
                    </a>
                </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="row w-100 align-items-center collapse navbar-collapse navbar-bg" id="navbarSupportedContent">
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
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 text-center my-navbar-logo">
                            <div class="navbarlogo">
                                <a href="{{ route('index.get') }}">
                                    <img src="{{ url('user-assets') }}/images/Logo.png" class="img-fluid" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 to-edit">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('featured-models.get') }}">FEATURED
                                            TALENTS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('jobs.get') }}">JOBS</a>
                                    </li>
                                    <li class="nav-item">
                                        @if (Auth::check() && Auth::user()->role == 'business')
                                        <a class="nav-link" href="{{ route('dashboard.get') }}"><i
                                                class="fa fa-dashboard" style="color: #062646;"></i></a>
                                        <a class="nav-link" href="{{ route('logout.get') }}"><i class="fa fa-sign-out"
                                                style="color: #062646;"></i></a>
                                        @elseif(Auth::check() && Auth::user()->role == 'model')
                                        <a class="nav-link" href="{{ route('model-dashboard.get') }}"><i
                                                class="fa fa-dashboard" style="color: #062646;"></i></a>
                                        <a class="nav-link" href="{{ route('logout.get') }}"><i class="fa fa-sign-out"
                                                style="color: #062646;"></i></a>
                                        @else
                                        <a class="nav-link" href="{{ route('login.get') }}"><i class="fa fa-user"
                                                style="color: #062646;"></i></a>
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
                </nav>
            </header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navElement = document.querySelector('.to-edit');

        function adjustNavbar() {
            if (window.innerWidth <= 768) { // Adjust 768 to your mobile breakpoint
                navElement.classList.remove('ms-auto');
                navElement.classList.add('me-auto');
            } else {
                navElement.classList.remove('me-auto');
                navElement.classList.add('ms-auto');
            }
        }

        // Adjust on resize and on load
        window.addEventListener('resize', adjustNavbar);
        adjustNavbar();
    });
</script>
