@extends('users.layouts.layout')

@section('title', 'Casting Talent | Contact')

@section('main-content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    .button-container {
        display: flex;
        justify-content: space-between;
    }

    .testimonial-slider {
        max-width: 1000px;
        margin: 0 auto;
        text-align: center;
        padding: 20px;
    }

    section.contactlist {
        padding: 50px 0 50px !important;
    }

    .testimonial {
        text-align: left;
        padding: 20px;
        color: #333;
    }

    .testimonial .stars {
        color: #f0c14b;
    }

    .testimonial p {
        font-size: 16px;
        margin: 15px 0;
    }

    .testimonial-author {
        font-weight: bold;
        margin-top: 10px;
    }

    .slick-slide {
        margin: 0 10px;
    }

    .card-style {
        background-color: #ffffff;
        /* White background for the card */
        border-radius: 15px;
        /* Rounded corners for the card */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        /* Soft shadow for elevation effect */
        padding: 20px;
        /* Padding around the content */
        text-align: left;
        /* Align text to the left */
        position: relative;
        /* To allow image positioning */
        overflow: visible;
        /* Allow the image to overflow the card */
        height: 250px;
        /* Set a fixed height for consistency */
        display: flex;
        /* Flexbox for vertical alignment */
        justify-content: center;
        /* Centers content vertically */
    }

    /* Image Styling - Larger and slightly out of the card */
    .styled-avatar {
        width: 150px;
        height: 200px;
        border-radius: 15px;
        object-fit: cover;
        border: 2px solid #ddd;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        position: absolute;
        bottom: -30px;
        left: 20px;
    }

    /* Text Styling */
    .author {
        font-weight: bold;
        color: #D1495B margin-bottom: 5px;
    }

    .stars {
        color: #FFD700;
        /* Gold color for the stars */
    }

    p.text-center {
        font-size: 16px;
        /* Adjust font size */
        color: #666;
        /* Softer color for testimonial text */
        margin-bottom: 10px;
        /* Add some space below the text */
    }
</style>

<style>
    .button-container {
        display: flex;
        justify-content: space-between;
    }

    .testimonial-slider {
        max-width: 1000px;
        margin: 0 auto;
        text-align: center;
        padding: 20px;
    }

    section.contactlist {
        padding: 50px 0 50px !important;
    }

    .testimonial {
        text-align: left;
        padding: 20px;
        color: #333;
    }

    .testimonial .stars {
        color: #f0c14b;
    }

    .testimonial p {
        font-size: 16px;
        margin: 15px 0;
    }

    .testimonial-author {
        font-weight: bold;
        margin-top: 10px;
    }

    .slick-slide {
        margin: 0 10px;
    }
    .mobile-frame {
        background-image: url('{{ url('user-assets/images/mobile-mockup.png') }}');
        background-size: cover;
        background-position: center;
        width: 500px;
        height: 690px;
        position: relative;
        margin: 0 auto;
        border-radius: 30px;
       
    }

    .instagram-feed {
        width: 85%;
        height: 90%;
        position: absolute;
        top: 10%;
        left: 7.5%;
        border: none;
        overflow: hidden;
        border-radius: 15px;
    }
</style>

<section class="innerpages">
    <div class="container">
        <div class="col-12">
            <div class="innertext">
                {{-- <h1>Contact us</h1> --}}
            </div>
        </div>
    </div>
</section>

@include('users.pages.exit-popup')

<section class="contactussec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="card-title innertext">
                    <h1 style="text-align:left;">General <span>Enquiry</span></h1><br>
                </div>
                <div class="progress">
                    <div id="progress-bar" class="progress-bar" style="width: 0%;"></div>
                </div>
                <form id="contact-form" action="{{ route('contact.post') }}" method="post">
                    @csrf
                    <div class="form-step form-step-active">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="contactlist">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name"
                                        required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="contactlist">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="button" class="btn-next">NEXT</button>
                        </div>
                    </div>

                    <div class="form-step">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="contactlist">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                        </div>

                        <div class="button-container">
                            <div class="text-start">
                                <button type="button" class="btn btn-warning btn-prev">BACK</button>
                            </div>
                            <div class="text-end">
                                <button type="button" class="btn-next">NEXT</button>
                            </div>
                        </div>
                    </div>

                    <div class="form-step">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="contactlist">
                                    <label>Calling Number</label>
                                    <input type="tel" name="calling_number" placeholder="calling number"
                                        class="form-control phone-input" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="contactlist">
                                    <label>Whatsapp Number</label>
                                    <input type="tel" name="whatsapp_number" placeholder="whatsapp number"
                                        class="form-control phone-input" required>
                                </div>
                            </div>
                        </div>
                        <div class="button-container">
                            <div class="text-start">
                                <button type="button" class="btn btn-warning btn-prev">BACK</button>
                            </div>
                            <div class="text-end">
                                <button type="button" class="btn-next">NEXT</button>
                            </div>
                        </div>

                    </div>
            </div>

            <div class="form-step">
                <div class="row">
                    <div class="col-12">
                        <div class="contactlist">
                            <label>Subject</label>
                            <input type="text" name="subject" placeholder="subject" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contactlist">
                            <label>Message</label>
                            <textarea name="message" placeholder="message" class="form-control"></textarea>
                        </div>
                    </div>
                    <!--div class="col-12 button-container">
                        <div class="contactlist mt-5 text-start">
                                <button type="submit">SUBMIT</button>
                            </div>
                        <div class="text-end">
                            <button type="button" class="btn-prev">BACK</button>
                         </div>
                        </div-->
                    <div class="button-container">
                        <div class="text-start">
                            <button type="button" class="btn btn-warning btn-prev">BACK</button>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn-next">SUBMIT</button>
                        </div>
                    </div>

                </div>
                </form>
            </div>
            <div class="col-lg-1"> </div>
            <div class="col-lg-5 col-md-5 col-lg-5 col-xl-5  p-4 text-center">
    <h4 class="text-center">Follow us on Instagram</h4>

    <!-- Mobile Frame Container -->
    <div class="mobile-frame">
        <!-- Instagram Feed Iframe -->
        <iframe src="https://cdn.lightwidget.com/widgets/0aa177f118285cf7b8c7d7abe5d7c349.html" scrolling="no"
            allowtransparency="true" class="lightwidget-widget instagram-feed">
        </iframe>
    </div>
</div>

        </div>
    </div>
</section>


<section class="contactlist">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="innertext text-left">
                    <h1 style="text-align:left;">Contact <span>Us</span></h1><br>
                    <div class="row">

                        <div class="col-md-12 mb-3">
                            <div class="text-left">
                                <div class="mb-4">
                                    <h4 class="text-left fw_500 lateef"> <i
                                            class="fa-solid px-2 text-yellow fa-phone"></i> PHONE</h4>
                                    <p class="text-left mx-5">
                                        <a class="fw_400 text_grey" href="tel:971501234796">+971 50 123 4796</a>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h4 class="text-left fw_500 lateef"> <i
                                            class=" fab px-2 text-yellow fa-whatsapp"></i> WHATSAPP</h4>
                                    <p class="text-left mx-5 ">
                                        <a class="text_grey" href="https://wa.me/971501234796" target="_blank">
                                            +971 50 123 4796
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h4 class="text-left fw_500 lateef"> <i
                                        class="fa-solid px-2 text-yellow fa-envelope"></i> EMAIL</h4>
                                <p class="text-left mx-5">
                                    <a class="fw_400 text_grey"
                                        href="mailto:info@casttalents.com">info@casttalents.com</a><br />
                                </p>
                            </div>
                            <div class="mb-4">
                                <h4 class="text-left fw_500 lateef"> <i
                                        class="fa-solid px-2 text-yellow fa-location-dot"></i> ADDRESS</h4>
                                <p class="text-left mx-5">
                                    <a class="fw_400 text_grey" href="mailto:dxb@casttalents.com"><span
                                            class="fw_500 text-dark"> UAE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span>
                                        Business Bay, Dubai, United Arab Emirates | dxb@casttalents.com</a><br />
                                    <a class="fw_400 text_grey" href="mailto:oman@casttalents.com"><span
                                            class="fw_500 text-dark"> OMAN &nbsp;: </span> Muscat, oman |
                                        oman@casttalents.com</a><br />
                                    <a class="fw_400 text_grey" href="mailto:ksa@casttalents.com"><span
                                            class="fw_500 text-dark"> KSA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span>
                                        Riyadh, KSA | ksa@casttalents.com</a><br />
                                </p>
                                <!-- <p class="text-left mx-5">
                                        <a class="fw_400 text_grey" href="mailto:dxb@casttalents.com"><span class="fw_500 text-dark"> DUBAI: </span> dubai address</a><br/>
                                        <a class="fw_400 text_grey" href="mailto:oman@casttalents.com"><span class="fw_500 text-dark"> MUSCAT, OMAN: </span> oman address</a><br/>
                                        <a class="fw_400 text_grey" href="mailto:ksa@casttalents.com"><span class="fw_500 text-dark"> RIYADH, KSA: </span> riyadh address</a><br/>
                                    </p> -->
                            </div>
                            <div class="social-icons mx-5 d-flex gap-4">
                                <a class="text-yellow fs-3" target="_blank" href="https://wa.me/+971501234796"><i
                                        class="fa-brands fa-whatsapp"></i></a>
                                <a class="text-yellow fs-3" target="_blank"
                                    href="https://www.facebook.com/abeera.k.sheikh"><i
                                        class="fa-brands fa-facebook"></i></a>
                                <a class="text-yellow fs-3" target="_blank"
                                    href="https://www.instagram.com/casttalents.llc/"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a class="text-yellow fs-3" target="_blank"
                                    href="https://www.linkedin.com/in/abeera-sheikh-uae-based-casting-specialist-actor-and-founder-of-aks-castings-llc-723063147"><i
                                        class="fa-brands fa-linkedin"></i></a>
                                <a class="text-yellow fs-3" target="_blank"
                                    href="https://www.snapchat.com/add/abeeraksheikh"><i
                                        class="fa-brands fa-snapchat"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="mapimg" style="text-align:end;">
                    <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps?q=25.1837, 55.2666&output=embed" frameborder="0"
                        style="min-height: 450px;width: 70%; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!--  Testimonials  -->

<div class="row with-divider">

    {{---------------------------- google reviews ----------------------}}
    <section class="contactlist col-lg-6 col-md-6 col-xl-6" style="background-color: #f3fbff !important;">
        <div class="container">
            <div class="row">
                <div class="innertext text-left">
                    <h1 style="text-align:left;">What Our <span>Clients</span> have to say</h1><br>
                </div>
                <div class="">
                    <div id="google-reviews" class="owl-carousel">

                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $testimonials = [
        [
        'image' => 'user-assets/testimonial-images/REMO DSOUZA OPTION 2.jpg',
        'stars' => '★★★★★',
        'text' => 'We were here to shoot street dancer movie, AKS CASTINGS have done a fabulous job, helped us a lot and
        they are very good and hard working. I wish all the best to ABEERA K SHEIKH May God always bless you and keep up the
        work.',
        'author' => 'Remo Dsouza | Indian choreographer, actor, and film director'
        ],
        [
        'image' => 'user-assets/testimonial-images/arvindr-khaira.webp',
        'stars' => '★★★★★',
        'text' => 'We almost shooted for 4 days which amazingly passed and ABEERA K SEIKH is extremely hard-working amazing
        work.',
        'author' => 'Arvindr Khaira | Indian Film and Music video director'
        ],
        [
        'image' => 'user-assets/testimonial-images/b-praak.jpeg',
        'stars' => '★★★★★',
        'text' => 'I came here for filming a song and Abeera k sheikh provided Models and dancers. She is great at her job..
        God bless.',
        'author' => 'B Praak | Indian singer and music director'
        ],
        [
        'image' => 'user-assets/testimonial-images/janani.jpg',
        'stars' => '★★★★★',
        'text' => 'I came here for filming a song and Abeera k sheikh provided Models and dancers. She is great at her job..
        God bless.',
        'author' => 'Jaani | Indian Songwriter and Musical Composer'
        ],
        [
        'image' => 'user-assets/testimonial-images/jassie gill.jpeg',
        'stars' => '★★★★★',
        'text' => 'Abeera K Sheikh has helped and supported a lot in our project. All the best God bless.',
        'author' => 'Jassie Gill | Indian Singer and Actor'
        ],
        [
        'image' => 'user-assets/testimonial-images/MANJU.jpg',
        'stars' => '★★★★★',
        'text' => 'I filmed my movie Ayisha in Ras Al Khaimah, UAE, and it was a truly great experience working with Abeera K. Sheikh as the casting director.',
        'author' => 'Manju Warrier | Indian Songwriter and Musical Composer'
        ],
        [
        'image' => 'user-assets/testimonial-images/random.jpg',
        'stars' => '★★★★★',
        'text' => 'Abeera was the casting director for the movie Street Dancer, and I found her to be very energetic, professional, and cooperative.',
        'author' => 'Nora Fatehi | Canadian Dancer and Indian Actress'
        ],
        [
        'image' => 'user-assets/testimonial-images/random.jpg',
        'stars' => '★★★★★',
        'text' => 'Cast Talents managed the casting for our song Tere Bina and did an excellent job with the casting process.',
        'author' => 'Bohemia | Pakistani-American Rapper and Singer'
        ],
        [
        'image' => 'user-assets/testimonial-images/suniel-shetty.jpg',
        'stars' => '★★★★★',
        'text' => 'I have had the experience of working with Abeera on several events, including the T10 and Kabaddi events, and found her to be highly professional and responsible in her work.',
        'author' => 'Suniel Shetty | Indian Actor and Film Producer'
        ],
        [
        'image' => 'user-assets/testimonial-images/shraddha-kapoor.webp',
        'stars' => '★★★★★',
        'text' => 'I met Abeera on the set of Street Dancer during our Dubai schedule, where she was handling the casting. She was perfect in her work and truly a hardworking lady.',
        'author' => 'Shraddha Kapoor | Indian Actress'
        ],
        [
        'image' => 'user-assets/testimonial-images/prabhu-deva.jpeg',
        'stars' => '★★★★★',
        'text' => 'Abeera was the casting director for our UAE schedule of Street Dancer. It was amazing working with such a hardworking and professional casting director.',
        'author' => 'Prabhu Deva | Indian Dance Choreographer, Film Director, Producer and Actor'
        ],
        [
        'image' => 'user-assets/testimonial-images/random.jpg',
        'stars' => '★★★★★',
        'text' => 'I did a promotional event for Indian Idol in the UAE, and Cast Talents handled it. I must say the event was fabulously organized.',
        'author' => 'Anu Malik | Indian Music Composer'
        ],
        [
        'image' => 'user-assets/testimonial-images/random.jpg',
        'stars' => '★★★★★',
        'text' => 'We shot for almost a month for Street Dancer in Dubai, and it felt like home as we all became like a family. The movie shoot went perfectly. Abeera, who was head of casting, did her work amazingly. It was fun working with her—she’s truly a gem of a person, a true professional, and a hardworking woman.',
        'author' => 'Dharmesh Yelande known as D-sir | Indian dancer, choreographe'
        ],
        [
        'image' => 'user-assets/testimonial-images/random.jpg',
        'stars' => '★★★★★',
        'text' => 'I met the lovely Abeera while shooting for the General Petroleum commercial, where she was managing the casting. It was amazing meeting her there, and we quickly became very good friends. Later, we enjoyed watching PSL matches together at the stadium, cheering for our team. Love you, Abeera!',
        'author' => 'Zareen Khan | Bollywood Actress'
        ],
        [
        'image' => 'user-assets/testimonial-images/varun-dhawan1.webp',
        'stars' => '★★★★★',
        'text' => 'During the shooting of Street Dancer, I never saw Abeera sit and relax, no matter how long the day was. Even during an 18-hour shoot, she was constantly on her feet, ensuring everything went perfectly. Keep rocking, girl!',
        'author' => 'Varun Dhawan | Indian Actor'
        ],
        [
        'image' => 'user-assets/testimonial-images/random.jpg',
        'stars' => '★★★★★',
        'text' => 'Cast Talents has managed my celebrity engagements for several events, and it’s been amazing working with them. They are always true to their commitments.',
        'author' => 'Rahat Fateh Ali Khan | Pakistani Sufi Singer'
        ],
        [
        'image' => 'user-assets/testimonial-images/random.jpg',
        'stars' => '★★★★★',
        'text' => 'Cast Talents handled my celebrity management for a concert at Sharjah Stadium, and their teamwork was truly amazing.',
        'author' => 'Shankar Mahadevan | Indian Singer and Composer'
        ],
        [
        'image' => 'user-assets/testimonial-images/random.jpg',
        'stars' => '★★★★★',
        'text' => 'Cast Talents managed my celebrity performance for a private event, and I absolutely loved their hospitality and the comfort they provided.',
        'author' => 'VAANI KAPOOR | Indian Actress'
        ],
        [
        'image' => 'user-assets/testimonial-images/random.jpg',
        'stars' => '★★★★★',
        'text' => 'Abeera’s company, Cast Talents, has been managing my celebrity appearances, and I must say she is an incredibly hardworking, ambitious, and brave girl. Keep shining and stay blessed—sky is the limit!',
        'author' => 'Sidhu Moose Wala | Indian Singer and Rapper'
        ],
        [
        'image' => 'user-assets/testimonial-images/random.jpg',
        'stars' => '★★★★★',
        'text' => 'It’s always a great experience working with Abeera, whether it’s for an event or a shoot.',
        'author' => 'Sohail Khan | Indian Actor, Producer, Writer'
        ]
        ];
    @endphp

    {{---------------------------- client reviews ----------------------}}
    <section class="contactlist col-lg-6 col-md-6 col-xl-6" style="background-color: #f3fbff !important;">
        <div class="container">
            <div class="row">
                <div class="innertext text-left">
                    <h1 style="text-align:left;">What <span>Celebrities </span>worked with us have to say</h1><br>
                </div>
                <div>
                    <div id="client-testimonials" class="owl-carousel">
                        @foreach (collect($testimonials)->chunk(2) as $testimonialChunk)
                        <!-- Loop through in chunks of 2 -->
                        <div class="item">
                            @foreach ($testimonialChunk as $testimonial)
                            <div
                                class="testimonial card-style position-relative d-flex align-items-center justify-content-center">
                                <!-- Added Flexbox for vertical centering -->
                                <!-- Layout for image on left and content on right -->
                                <div class="row w-100">
                                    <!-- Author's Image on the left -->
                                    <div class="col-md-4 text-center">
                                        <img src="{{ url($testimonial['image']) }}" alt="Avatar"
                                            class="w-25 styled-avatar">
                                    </div>

                                    <!-- Testimonial Text on the right -->
                                    <div class="col-md-8 d-flex flex-column justify-content-center align-items-center">
                                        <p class="text-center">
                                            <i class="fas fa-quote-left fs-5"></i> <!-- Opening Quote Icon -->
                                            {{ $testimonial['text'] }}
                                            <i class="fas fa-quote-right fs-5"></i> <!-- Closing Quote Icon -->
                                        </p>
                                        <h5 class="author fs-6 text-center font-weight-bold">— {{ $testimonial['author']
                                            }}</h5>
                                        <div class="stars text-center fs-3">{{ $testimonial['stars'] }}</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<script>
    $(document).ready(function(){
        $("#google-reviews, #client-testimonials").owlCarousel({
            items: 1,
        loop: true,
        margin: 10,
        nav: false, // Navigation arrows can be disabled if you prefer swipe only
        dots: true, // Dots navigation
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        autoHeight: true,
        touchDrag: true,
        mouseDrag: true
        });

        // function fetchGoogleReviews() {
        //     var placeId = 'ChIJ9foObnFpXz4RghjwyLxhQGo';  // Replace PLACE_ID_YOU_OBTAINED with your actual Place ID
        //     var apiKey = 'AIzaSyAGg8dmcZwgUUpOFsaoW6l7GJQvBbZ-jts'; // Replace YOUR_API_KEY with your actual API Key

        //     var url = `https://maps.googleapis.com/maps/api/place/details/json?place_id=${placeId}&fields=review&key=${apiKey}`;

        //     $.ajax({
        //         url: url,
        //         method: 'GET',
        //         success: function (data) {
        //             console.log(data)
        //             displayReviews(data.result.reviews);
        //         },
        //         error: function (error) {
        //             console.error('Error fetching reviews:', error);
        //         }
        //     });
        // }

        // function displayReviews(reviews) {
        //     reviews.forEach(function(review) {
        //         var reviewHtml = `
        //             <div class="review">
        //                 <p>${review.author_name}</p>
        //                 <p>Rating: ${review.rating}</p>
        //                 <p>${review.text}</p>
        //             </div>
        //         `;
        //         $('#google-reviews').append(reviewHtml);
        //     });
        // }
        // fetchGoogleReviews();
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
            // Initialize phone inputs
            var phoneInputs = document.querySelectorAll(".phone-input");
            phoneInputs.forEach(function(input) {
                // window.intlTelInput(input, {
                //     initialCountry: "us",
                //     utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
                // });
            });

            const formSteps = document.querySelectorAll('.form-step');
            const progressBar = document.getElementById('progress-bar');
            let currentStep = 0;

            function showStep(step) {
                formSteps.forEach((formStep, index) => {
                    formStep.style.display = index === step ? 'block' : 'none'; // Show/hide steps
            });
                updateProgressBar();
            }

            function updateProgressBar() {
                const progress = ((currentStep + 1) / formSteps.length) * 100; // Updated to start at 25%
                progressBar.style.width = progress + '%';
                progressBar.innerText = Math.round(progress) + '%'; // Show percentage
            }

            function validateStep(step) {
                const inputs = formSteps[step].querySelectorAll('input, textarea');
                for (const input of inputs) {
                    if (!input.value) {
                        input.classList.add('is-invalid'); // Add invalid class
                        return false;
                    } else {
                        input.classList.remove('is-invalid'); // Remove invalid class if valid
                    }
                }
                return true;
            }

            document.querySelectorAll('.btn-next').forEach(button => {
                button.addEventListener('click', () => {
                if (validateStep(currentStep)) {
                if (currentStep < formSteps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                }
            }
        });
        });

            document.querySelectorAll('.btn-prev').forEach(button => {
                button.addEventListener('click', () => {
                if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        });
        });

            // Initialize the first step and set progress to 25%
            showStep(currentStep);
            updateProgressBar(); // This will set the initial progress bar to 25%
        });
</script>

<style>
    .owl-carousel .testimonial {
        padding: 10px;
        background-color: #00798c;
        text-align: center;
        margin-bottom: 20px;
        margin-bottom: 50px;
        border-radius: 10px;
    }

    .owl-carousel .stars {
        font-size: 18px;
        color: #f39c12;
    }

    .owl-carousel .testimonial h3 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .owl-carousel .testimonial h5 {
        color: #D1495B;
    }

    .owl-carousel .testimonial p {
        font-size: 14px;
        color: #fff;
    }

    .owl-carousel .testimonial .avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 10px;
        float: left;
    }

    .owl-carousel .author {
        font-weight: bold;
        margin-top: 15px;
        /* color: #d1495b; */
    }

    .with-divider {
        position: relative;
    }

    .with-divider::before {
        content: "";
        position: absolute;
        left: 50%;
        /* Center the line between the two columns */
        top: 20px;
        bottom: 30px;
        width: 2px;
        /* Line thickness */
        background-color: #ccc;
        /* Line color, can be adjusted as needed */
        transform: translateX(-50%);
        /* Centers the line exactly between the columns */
    }
</style>
<style>
    .progress {
        height: 20px;
        background: #f3f3f3;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .progress-bar {
        height: 100%;
        background: #4caf50;
        text-align: center;
        color: white;
        line-height: 20px;
        /* Center the text vertically */
        border-radius: 5px;
    }

    .btn-next {
        background: rgba(28, 120, 135, 1) !important;
        padding: 12px 40px !important;
        color: #fff !important;
        border-radius: 10px !important;
        font-size: 17px !important;
        transition: 1s all ease !important;
        border: 2px solid rgba(28, 120, 135, 1) !important;
    }

    .btn-prev {
        color: #000 !important;
        background-color: #ffc107 !important;
        border-color: #ffc107 !important;
        padding: 12px 40px !important;
    }

    .is-invalid {
        border-color: red;
        /* Change border color for invalid fields */
    }
</style>

@endsection