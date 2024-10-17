@extends('users.layouts.layout')

@section('title', 'Casting Talent | Contact')

@section('main-content')
<div id="pageContent" class="blurred">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <style>
        .blurred {
            filter: blur(8px);
            -webkit-filter: blur(8px);
            /* pointer-events: none; Prevent interaction with blurred elements */
        }

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
            margin: 10px 0;
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
            height: 320px;
            /* Set a fixed height for consistency */
            display: flex;
            /* Flexbox for vertical alignment */
            justify-content: center;
            margin: 10px;
            /* Centers content vertically */
        }

        /* Image Styling - Larger and slightly out of the card */
        .styled-avatar {
            max-width: 180px;
            height: 250px;
            border-radius: 15px;
            object-fit: cover;
            border: 2px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: absolute;
            bottom: -30px;
            left: 20px;
        }

        .stars {
            color: #FFD700;
        }

        p.text-center {
            font-size: 15px;
            /* Adjust font size */
            color: #666;
            /* Softer color for testimonial text */
            margin-bottom: 10px;
            /* Add some space below the text */
        }

        .mobile-frame {
            background-image: url('{{ url('user-assets/images/mobile-mockup.png') }}');
            background-size: cover;
            background-position: center;
            width: 400px;
            height: 750px;
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
            padding: 10px;
            border-radius: 15px;
        }

        .innertext h3 span {
            color: rgba(216, 31, 38, 1);
        }

        #map {
            height: 450px;
            width: 100%;
        }

        .marker-position {
            bottom: 8px;
            margin-left: 110px;;
            position: relative;
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
                                        <input type="text" name="first_name" class="form-control"
                                            placeholder="First Name" required>
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
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="contactlist">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email"
                                            required>
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
                                        <input type="tel" name="calling_number" id="calling_number"
                                            placeholder="calling number" class="form-control phone-input" required>
                                        <input type="hidden" name="calling_country_code" id="calling_country_code"
                                            value="ae">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="contactlist">
                                        <label>Whatsapp Number</label>
                                        <input type="tel" name="whatsapp_number" id="whatsapp_number"
                                            placeholder="whatsapp number" class="form-control phone-input" required>
                                        <input type="hidden" name="whatsapp_country_code" id="whatsapp_country_code"
                                            value="ae">
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
                                <div class="col-12">
                                    <div class="contactlist">
                                        <label>Subject</label>
                                        <input type="text" name="subject" placeholder="subject" class="form-control"
                                            required>
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

                        </div>
                    </form>
                </div>
                <div class="col-lg-1"> </div>

                <div class="col-lg-5 col-md-5 col-lg-5 col-xl-5  p-4 text-center">
                    <h4 class="text-center">Follow us on Instagram</h4>

                    <!-- Mobile Frame Container -->
                    <div class="mobile-frame">
                        <!-- Instagram Feed Iframe -->
                        <iframe src="https://cdn.lightwidget.com/widgets/0aa177f118285cf7b8c7d7abe5d7c349.html"
                            scrolling="no" allowtransparency="true" class="lightwidget-widget instagram-feed">
                        </iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="contactlist">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
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
                                        <span class="fw_400 text_grey"><span class="fw_500 text-dark"> UAE
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span>
                                            Business Bay, Dubai, United Arab Emirates | <a class="fw_400 text_grey"
                                                href="mailto:dxb@casttalents.com">dxb@casttalents.com</a></span><br />
                                        <span class="fw_400 text_grey"><span class="fw_500 text-dark"> KSA
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span>
                                            Al Olaya St, Riyadh, KSA | <a class="fw_400 text_grey"
                                                href="mailto:ksa@casttalents.com">ksa@casttalents.com</a></span><br />
                                        <span class="fw_400 text_grey"><span class="fw_500 text-dark"> OMAN &nbsp;:
                                            </span> 18th November St, Muscat, Oman |
                                            <a class="fw_400 text_grey"
                                                href="mailto:oman@casttalents.com">oman@casttalents.com</a></span><br />

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
                                        href="https://www.instagram.com/casttalents.llc/"><i
                                            class="fa-brands fa-instagram"></i></a>
                                    <a class="text-yellow fs-3" target="_blank"
                                        href="https://www.facebook.com/abeera.k.sheikh"><i
                                            class="fa-brands fa-facebook"></i></a>
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
                <div class="col-lg-4 col-md-4">
                    {{-- <div class="mapimg" style="text-align:end;">
                        <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps?q=25.1837, 55.2666&output=embed" frameborder="0"
                            style="min-height: 450px;width: 70%; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div> --}}
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>

    <!--  Testimonials  -->


    @php
    $testimonials = [
    [
    'image' => 'user-assets/testimonial-images/remo_D_Souza.jpg',
    'stars' => '★★★★★',
    'text' => 'We were here to shoot street dancer movie, CAST TALENTS have done a fabulous job, helped us a lot and
    they are very good and hard working. I wish all the best to ABEERA K SHEIKH May God always bless you and keep up
    the
    work.',
    'author' => 'Remo D’Souza | Indian choreographer, actor, and film director'
    ],
    [
    'image' => 'user-assets/testimonial-images/arvindr-khaira.JPG',
    'stars' => '★★★★★',
    'text' => 'We almost shooted for 4 days which amazingly passed and ABEERA K SEIKH is extremely hard-working
    amazing
    work.',
    'author' => 'Arvindr Khaira | Indian Film and Music video director'
    ],
    [
    'image' => 'user-assets/testimonial-images/b-praak.jpg',
    'stars' => '★★★★★',
    'text' => 'I came here for filming a song and Abeera k sheikh provided Models and dancers. She is great at her
    job..
    God bless.',
    'author' => 'B Praak | Indian singer and music director'
    ],
    [
    'image' => 'user-assets/testimonial-images/janani.jpg',
    'stars' => '★★★★★',
    'text' => 'I came here for filming a song and Abeera k sheikh provided Models and dancers. She is great at her
    job..
    God bless.',
    'author' => 'Janani | Indian Songwriter and Musical Composer'
    ],
    [
    'image' => 'user-assets/testimonial-images/jassie-gill.jpg',
    'stars' => '★★★★★',
    'text' => 'Abeera K Sheikh has helped and supported a lot in our project. All the best God bless.',
    'author' => 'Jassie Gill | Indian Singer and Actor'
    ],
    [
    'image' => 'user-assets/testimonial-images/manju.jpg',
    'stars' => '★★★★★',
    'text' => 'I filmed my movie Ayisha in Ras Al Khaimah, UAE, and it was a truly great experience working with
    Abeera K. Sheikh as the casting director.',
    'author' => 'Manju Warrier | Indian Songwriter and Musical Composer'
    ],
    [
    'image' => 'user-assets/testimonial-images/nora-fatehi.jpg',
    'stars' => '★★★★★',
    'text' => 'Abeera was the casting director for the movie Street Dancer, and I found her to be very energetic,
    professional, and cooperative.',
    'author' => 'Nora Fatehi | Canadian Dancer and Indian Actress'
    ],
    [
    'image' => 'user-assets/testimonial-images/Bohemia.jpg',
    'stars' => '★★★★★',
    'text' => 'Cast Talents managed the casting for our song Tere Bina and did an excellent job with the casting
    process.',
    'author' => 'Bohemia | Pakistani-American Rapper and Singer'
    ],
    [
    'image' => 'user-assets/testimonial-images/suniel-shetty.jpg',
    'stars' => '★★★★★',
    'text' => 'I have had the experience of working with Abeera on several events, including the T10 and Kabaddi
    events, and found her to be highly professional and responsible in her work.',
    'author' => 'Suniel Shetty | Indian Actor and Film Producer'
    ],
    [
    'image' => 'user-assets/testimonial-images/shraddha-kapoor.jpg',
    'stars' => '★★★★★',
    'text' => 'I met Abeera on the set of Street Dancer during our Dubai schedule, where she was handling the
    casting. She was perfect in her work and truly a hardworking lady.',
    'author' => 'Shraddha Kapoor | Indian Actress'
    ],
    [
    'image' => 'user-assets/testimonial-images/prabhu-deva.jpg',
    'stars' => '★★★★★',
    'text' => 'Abeera was the casting director for our UAE schedule of Street Dancer. It was amazing working with
    such a hardworking and professional casting director.',
    'author' => 'Prabhu Deva | Indian Dance Choreographer, Film Director, Producer and Actor'
    ],
    [
    'image' => 'user-assets/testimonial-images/anu-malik.jpg',
    'stars' => '★★★★★',
    'text' => 'I did a promotional event for Indian Idol in the UAE, and Cast Talents handled it. I must say the
    event was fabulously organized.',
    'author' => 'Anu Malik | Indian Music Composer'
    ],
    [
    'image' => 'user-assets/testimonial-images/dharmesh.jpg',
    'stars' => '★★★★★',
    'text' => 'We shot for almost a month for Street Dancer in Dubai, and it felt like home as we all became like a
    family. The movie shoot went perfectly. Abeera, who was head of casting, did her work amazingly. It was fun
    working with her—she’s truly a gem of a person, a true professional, and a hardworking woman.',
    'author' => 'Dharmesh Yelande known as D-sir | Indian dancer, choreographe'
    ],
    [
    'image' => 'user-assets/testimonial-images/zareen-2.JPG',
    'stars' => '★★★★★',
    'text' => 'I met the lovely Abeera while shooting for the General Petroleum commercial, where she was managing
    the casting. It was amazing meeting her there, and we quickly became very good friends. Later, we enjoyed
    watching PSL matches together at the stadium, cheering for our team. Love you, Abeera!',
    'author' => 'Zareen Khan | Bollywood Actress'
    ],
    [
    'image' => 'user-assets/testimonial-images/varun-dhawan.jpg',
    'stars' => '★★★★★',
    'text' => 'During the shooting of Street Dancer, I never saw Abeera sit and relax, no matter how long the day
    was. Even during an 18-hour shoot, she was constantly on her feet, ensuring everything went perfectly. Keep
    rocking, girl!',
    'author' => 'Varun Dhawan | Indian Actor'
    ],
    [
    'image' => 'user-assets/testimonial-images/rahat-fateh.jpg',
    'stars' => '★★★★★',
    'text' => 'Cast Talents has managed my celebrity engagements for several events, and it’s been amazing working
    with them. They are always true to their commitments.',
    'author' => 'Rahat Fateh Ali Khan | Pakistani Sufi Singer'
    ],
    [
    'image' => 'user-assets/testimonial-images/shankar-mahadevan.jpg',
    'stars' => '★★★★★',
    'text' => 'Cast Talents handled my celebrity management for a concert at Sharjah Stadium, and their teamwork was
    truly amazing.',
    'author' => 'Shankar Mahadevan | Indian Singer and Composer'
    ],
    [
    'image' => 'user-assets/testimonial-images/vaani-kapoor.jpg',
    'stars' => '★★★★★',
    'text' => 'Cast Talents managed my celebrity performance for a private event, and I absolutely loved their
    hospitality and the comfort they provided.',
    'author' => 'VAANI KAPOOR | Indian Actress'
    ],
    [
    'image' => 'user-assets/testimonial-images/sidhu-moose-wala.jpg',
    'stars' => '★★★★★',
    'text' => 'Abeera’s company, Cast Talents, has been managing my celebrity appearances, and I must say she is an
    incredibly hardworking, ambitious, and brave girl. Keep shining and stay blessed—sky is the limit!',
    'author' => 'Sidhu Moose Wala | Indian Singer and Rapper'
    ],
    [
    'image' => 'user-assets/testimonial-images/sohail-khan.jpg',
    'stars' => '★★★★★',
    'text' => 'It’s always a great experience working with Abeera, whether it’s for an event or a shoot.',
    'author' => 'Sohail Khan | Indian Actor, Producer, Writer'
    ],
    [
    'image' => 'user-assets/testimonial-images/bipasha.jpg',
    'stars' => '★★★★★',
    'text' => 'Working with ABEERA has always been a pleasure.',
    'author' => 'Bipasha Basu | Indian Actress'
    ],
    [
    'image' => 'user-assets/testimonial-images/gurpeet-singh.jpg',
    'stars' => '★★★★★',
    'text' => 'We did the Apna Punjab event in Dubai, and they made the entire experience seamless from start to
    finish.',
    'author' => 'Gurpreet Singh Waraich | Indian Actor'
    ],
    [
    'image' => 'user-assets/testimonial-images/SANGEETA.jpg',
    'stars' => '★★★★★',
    'text' => 'She handled my celebrity management for a fashion show in Dubai, and her company is truly
    impressive.',
    'author' => 'Sangeeta Bijlani | Indian Actress'
    ],
    [
    'image' => 'user-assets/testimonial-images/jackie-chan.jpg',
    'stars' => '★★★★★',
    'text' => 'Working with Cast Talents was an amazing experience.',
    'author' => 'Jackie Chan | Hong Kong Actor and Stuntman'
    ],
    [
    'image' => 'user-assets/testimonial-images/MS-DHONI.jpg',
    'stars' => '★★★★★',
    'text' => 'Cast Talents organized the private events for the T10 tournament, and they did a great job.',
    'author' => 'M.S. Dhoni | Indian Professional Cricketer'
    ],
    [
    'image' => 'user-assets/testimonial-images/shahid-af.jpg',
    'stars' => '★★★★★',
    'text' => 'Cast Talents was the casting agency for our General Petroleum commercial. The shoot went well, and it
    feels great to see our own people excelling in their respective fields.',
    'author' => 'Shahid Afridi | Pakistani Cricketer'
    ],
    [
    'image' => 'user-assets/testimonial-images/nivin-pauly.jpg',
    'stars' => '★★★★★',
    'text' => 'We shot our movie Ramachandra Boss & Co in the UAE, and Abeera was our casting director. We will
    always prefer to work with her and her company.',
    'author' => 'Nivin Pauly | Indian Film Actor'
    ],
    [
    'image' => 'user-assets/testimonial-images/navv-inder.jpg',
    'stars' => '★★★★★',
    'text' => 'Cast Talents\' celebrity management handled one of my public appearances, and it was a great
    experience working with them.',
    'author' => 'Navv Inder | Indian Singer'
    ],
    [
    'image' => 'user-assets/testimonial-images/atif-aslam.jpeg',
    'stars' => '★★★★★',
    'text' => 'I\'ve done plenty of events and concerts with Abeera and her team, and it now feels like family. They
    are the best team to work with!',
    'author' => 'Atif Aslam | Pakistani Playback Singer'
    ],
    [
    'image' => 'user-assets/testimonial-images/akhil.jpg',
    'stars' => '★★★★★',
    'text' => 'Good company, professional people, and a hardworking team.',
    'author' => 'Akhil | Indian Playback Singer'
    ],
    [
    'image' => 'user-assets/testimonial-images/manish-malhotra.jpg',
    'stars' => '★★★★★',
    'text' => 'I did a shoot in Dubai and must say, what a creative and wonderful team! They were incredibly
    understanding, and I was so impressed with how Abeera handled the entire process. I couldn’t be happier.',
    'author' => 'Manish Malhotra | Indian Fashion Designer'
    ],
    [
    'image' => 'user-assets/testimonial-images/srk.jpg',
    'stars' => '★★★★★',
    'text' => 'We have completed several assignments, including Dubai Tourism, and Abeera is not only professional
    and organized but also brings a personal touch to every project. Her enthusiasm and passion for her work are
    truly unmatched.',
    'author' => 'Shah Rukh Khan | Indian Actor and Producer'
    ],
    [
    'image' => 'user-assets/testimonial-images/saba-qamar.jpg',
    'stars' => '★★★★★',
    'text' => 'I\'ve done many shoots with her, and over time, we became friends as well. She\'s such a professional
    and strong lady. Keep rocking, my girl!',
    'author' => 'Saba Qamar | Pakistani Actress'
    ],
    [
    'image' => 'user-assets/testimonial-images/salman-yusuff.jpg',
    'stars' => '★★★★★',
    'text' => 'Abeera was the casting director for Street Dancer, and her professionalism, reliability, and
    commitment to her work are evident in everything she does.',
    'author' => 'Salman Yusuff Khan | Indian Dancer and Actor'
    ],
    [
    'image' => 'user-assets/testimonial-images/pankaj-tripathi.jpg',
    'stars' => '★★★★★',
    'text' => 'I have worked with her on several projects, and each time she has impressed me with her energy, hard
    work, and innovative thinking.',
    'author' => 'Pankaj Tripathi | Indian Actor'
    ],
    [
    'image' => 'user-assets/testimonial-images/arbaaz-khan.jpg',
    'stars' => '★★★★★',
    'text' => 'She is a true professional and a joy to work with.',
    'author' => 'Arbaaz Khan | Indian Actor and Film Producer'
    ],
    [
    'image' => 'user-assets/testimonial-images/humayun-saeed.jpg',
    'stars' => '★★★★★',
    'text' => 'She handled the casting for Jawani Phir Nahi Ani 2, which was shot in Dubai. I look forward to many
    more successful collaborations with her.',
    'author' => 'Humayun Saeed | Pakistani Actor'
    ],
    [
    'image' => 'user-assets/testimonial-images/waseem-akram.jpg',
    'stars' => '★★★★★',
    'text' => 'I had the experience of working with Cast Talents for T10 and PSL, and they truly go above and beyond
    to ensure that everything is executed to perfection.',
    'author' => 'Wasim Akram | Pakistani Cricketer'
    ],
    [
    'image' => 'user-assets/testimonial-images/murali-sharma.jpg',
    'stars' => '★★★★★',
    'text' => 'I met her on the set of Street Dancer and was amazed by her exceptional casting skills.',
    'author' => 'Murali Sharma | Indian Actor'
    ],
    [
    'image' => 'user-assets/testimonial-images/shishir-sharma.jpg',
    'stars' => '★★★★★',
    'text' => 'We worked together on a Danube commercial where she was the casting director, and it was an excellent
    experience. She is hardworking and professional, and as an actor, I can see she is such a beautiful lady. I
    would suggest that, apart from being a casting director, she should definitely continue her acting career as
    well.',
    'author' => 'Shishir Sharma | Indian Actor'
    ],
    [
    'image' => 'user-assets/testimonial-images/shohaib-akhtar.jpg',
    'stars' => '★★★★★',
    'text' => 'I met her at the T10 event, and she is a very hardworking and talented girl.',
    'author' => 'Shoaib Akhtar | Pakistani Cricketer'
    ],
    [
    'image' => 'user-assets/testimonial-images/abrar-ul-haq.jpg',
    'stars' => '★★★★★',
    'text' => 'An excellent company with a fantastic team.',
    'author' => 'Abrar-ul-Haq | Pakistani Singer-Songwriter'
    ],
    [
    'image' => 'user-assets/testimonial-images/nader-al-atat.jpg',
    'stars' => '★★★★★',
    'text' => 'She was the casting director for my latest song, and it was amazing working with her.',
    'author' => 'Nader Al Atat | Lebanese Singer'
    ],
    [
    'image' => 'user-assets/testimonial-images/arwa.jpg',
    'stars' => '★★★★★',
    'text' => 'Cast Talents handled the filming and casting for my music video. Great work, dear!',
    'author' => 'Arwa | Yemeni Singer'
    ],
    [
    'image' => 'user-assets/testimonial-images/punit-pathak.jpg',
    'stars' => '★★★★★',
    'text' => 'Cast Talents managed the casting for the UAE schedule of the Street Dancer movie. An amazing and
    hardworking team!',
    'author' => 'Punit Pathak | Indian Dancer and Actor'
    ],
    [
    'image' => 'user-assets/testimonial-images/sugandha-mishra.jpg',
    'stars' => '★★★★★',
    'text' => 'I worked with Cast Talents for an event in Dubai, and it was a fabulous experience. It was great
    working with her!',
    'author' => 'Sugandha Mishra | Indian Actress and Comedian'
    ],
    [
    'image' => 'user-assets/testimonial-images/hamada.jpg',
    'stars' => '★★★★★',
    'text' => 'She was the casting director for a few of my songs, and the cast she selected was amazing. Great
    teamwork all around. Love you, Abeer!',
    'author' => 'Hamada Helal | Egyptian Singer and Composer'
    ],
    [
    'image' => 'user-assets/testimonial-images/raghav-juyal.jpg',
    'stars' => '★★★★★',
    'text' => 'Cast Talents served as the casting department and truly are the best casting agency.',
    'author' => 'Raghav Juyal | Indian Dancer'
    ],
    [
    'image' => 'user-assets/testimonial-images/flint-j.jpg',
    'stars' => '★★★★★',
    'text' => 'Abeera was the casting director for my song Tere Bina, and she is the backbone of its success. Thank
    you, Abeera!',
    'author' => 'Flint J | Pakistani Singer'
    ],
    [
    'image' => 'user-assets/testimonial-images/mathira.jpg',
    'stars' => '★★★★★',
    'text' => 'I shot 8 commercials back to back in Dubai with Cast Talents, and I am truly impressed by Abeera and
    her hard work.',
    'author' => 'Mathira | Pakistani Model, Actress'
    ]
    ];
    @endphp
    <div class="row with-divider">

        {{---------------------------- google reviews ----------------------}}
        <section class="contactlist col-lg-6 col-md-6 col-xl-6" style="background-color: #f3fbff !important;">
            <div class="container">
                <div class="row">
                    <div class="innertext text-left">
                        <h3 style="text-align:left; font-weight:bold;">What Our <span>Clients</span> have to say</h3>
                        @php
                        $fullStars = floor($averageRating); // Number of full stars
                        $halfStar = ($averageRating - $fullStars) >= 0.5 ? 1 : 0; // Whether to show a half star
                        $emptyStars = 5 - $fullStars - $halfStar; // Remaining empty stars
                        @endphp

                        <div style="display: flex; align-items: flex-start; gap: 10px;">
                            <!-- Flexbox to create two columns -->
                            <!-- Column 1: Numeric Rating -->
                            <div style="font-size: 3rem; font-weight: bold;">
                                {{ number_format($averageRating, 1) }}
                                <!-- Example: 4.9 -->
                            </div>

                            <!-- Column 2: Stars and Reviews -->
                            <div style="display: flex; flex-direction: column; align-items: flex-start;">
                                <!-- Stars Row -->
                                <div style="font-size: 1.5rem; color: #FFD700;">
                                    <!-- Gold stars -->
                                    @for ($i = 0; $i < $fullStars; $i++) ★ @endfor @if ($halfStar) ☆ @endif <!-- Half
                                        star if needed -->
                                        @for ($i = 0; $i < $emptyStars; $i++) ★ @endfor </div>

                                            <!-- Reviews Count Row (below stars) -->
                                            <div style="color: #666;">
                                                <!-- Reviews count -->
                                                <a href="{{ $businessReviewUrl }}" target="_blank">
                                                    {{ $reviewsCount }} Reviews
                                                </a>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div id="google-reviews" class="owl-carousel">
                                @foreach (collect($reviews)->chunk(2) as $reviewChunk)
                                <!-- Loop through in chunks of 2 -->
                                <div class="item">
                                    @foreach ($reviewChunk as $review)
                                    <div
                                        class="testimonial card-style position-relative d-flex align-items-center justify-content-center">
                                        <!-- Added Flexbox for vertical centering -->
                                        <!-- Layout for image on left and content on right -->
                                        <div class="row ">
                                            <!-- Author's Image on the left -->
                                            {{-- <div class="col-md-3 text-center">
                                                <img src="{{ $review['profile_photo_url'] }}" alt="Avatar"
                                                    class="w-25 styled-avatar">
                                            </div> --}}

                                            <!-- Testimonial Text on the right -->
                                            <div
                                                class="col-md-12 d-flex flex-column justify-content-center align-items-center">
                                                <p class="text-center">
                                                    <i class="fas fa-quote-left fs-5"></i> <!-- Opening Quote Icon -->
                                                    {{ $review['text'] }}
                                                    <i class="fas fa-quote-right fs-5"></i> <!-- Closing Quote Icon -->
                                                </p>
                                                <h5 class="author fs-6 text-center font-weight-bold">— {{
                                                    $review['author_name']
                                                    }}</h5>
                                                <div class="stars text-center fs-3">★★★★★</div>
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

        {{---------------------------- client reviews ----------------------}}
        <section class="contactlist col-lg-6 col-md-6 col-xl-6" style="background-color: #f3fbff !important;">
            <div class="container">
                <div class="row">
                    <div class="innertext text-left" style="margin-bottom: 48px;">
                        <h3 style="text-align:left; font-weight:bold">What <span>Celebrities </span>worked with us have
                            to say</h3><br>
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
                                    <div class="row">
                                        <!-- Author's Image on the left -->
                                        <div class="col-md-4 text-center">
                                            <img src="{{ url($testimonial['image']) }}" alt="Avatar"
                                                class="styled-avatar">
                                        </div>

                                        <!-- Testimonial Text on the right -->
                                        <div
                                            class="col-md-8 d-flex flex-column justify-content-center align-items-center">
                                            <p class="text-center">
                                                <i class="fas fa-quote-left fs-5"></i> <!-- Opening Quote Icon -->
                                                {{ $testimonial['text'] }}
                                                <i class="fas fa-quote-right fs-5"></i> <!-- Closing Quote Icon -->
                                            </p>
                                            <h5 class="author fs-6 text-center font-weight-bold">— {{
                                                $testimonial['author']
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
        var input = document.querySelector("#calling_number");
        var input1 = document.querySelector("#whatsapp_number");
        window.intlTelInput(input, {
            initialCountry: "ae",
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // for formatting/validation
        });

        window.intlTelInput(input1, {
            initialCountry: "ae",
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // for formatting/validation
        });

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
                // autoHeight: true,
                touchDrag: true,
                mouseDrag: true
            });
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
            let progress = 0; // Initialize progress at 0%

            function showStep(step) {
                formSteps.forEach((formStep, index) => {
                    formStep.style.display = index === step ? 'block' : 'none'; // Show/hide steps
                });
            }

            function updateProgressBar() {
                progressBar.style.width = `${progress}%`;
                progressBar.setAttribute('aria-valuenow', progress);
                progressBar.textContent = `${progress}%`; // Update progress bar text
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
                            progress += 25; // Increase progress by 25%
                            showStep(currentStep);
                            updateProgressBar(); // Update the progress bar
                        }
                    }
                });
            });

            document.querySelectorAll('.btn-prev').forEach(button => {
                button.addEventListener('click', () => {
                    if (currentStep > 0) {
                        currentStep--;
                        progress -= 25; // Decrease progress by 25%
                        showStep(currentStep);
                        updateProgressBar(); // Update the progress bar
                    }
                });
            });

            // Initialize the first step and set progress to 0%
            showStep(currentStep);
            updateProgressBar(); // This will set the initial progress bar to 0%
        });
    </script>

    <script>
        function initMap() {
            // Initialize the map with a temporary center point
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 25.1837, lng: 55.2666},
                zoom: 15
            });

            var request = {
                placeId: '{{ config('services.googlemaps.place_id') }}',
                fields: ['name', 'formatted_address', 'geometry']
            };

            var infowindow = new google.maps.InfoWindow();
            var service = new google.maps.places.PlacesService(map);

            service.getDetails(request, function(place, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK) {
                    var marker = new google.maps.Marker({
                        map: map,
                        position: place.geometry.location,
                        label: {
                            text: 'Cast Talents', // The text of the label
                            color: '#EA4335', // Text color
                            fontSize: '14px', // Text size
                            fontWeight: 'bold', // Text weight
                            className: 'marker-position',
                        }
                    });
                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                                              'Address: ' + place.formatted_address + '</div>');
                        infowindow.open(map, this);
                    });
                    // Automatically center the map on the marker
                    map.setCenter(place.geometry.location);
                }
            });
        }

        // $(document).ready(function(){
        //     initMap();
        // })
    </script>

    <style>
        .owl-carousel .testimonial {
            padding: 10px;
            /* background-color: #00798c; */
            background: linear-gradient(135deg, #00798C, #002b27);
            text-align: center;
            margin-bottom: 50px;
            border-radius: 10px;
        }

        .owl-carousel .stars {
            font-size: 18px;
            color: #f39c12;
        }

        .stars span {
            color: #ccc;
            /* light gray for the 'empty' stars */
        }

        .owl-carousel .testimonial h3 {
            font-size: 20px;
            margin-bottom: 5px;
        }

        .owl-carousel .testimonial h5 {
            color: #edae49;
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
            margin-top: 10px;
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
            border-radius: 10px !important;
            color: #ffffff !important;
            background-color: #D35A6A !important;
            border-color: #D35A6A !important;
            padding: 12px 40px !important;
        }

        .is-invalid {
            border-color: red;
            /* Change border color for invalid fields */
        }
    </style>

    @endsection
</div>

@include('users.pages.exit-popup')