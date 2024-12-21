@extends('users.layouts.layout')

@section('title', 'Casting Talent | Filming')

@section('main-content')




<script>
window.onload = function() { // This waits for the entire window to load, including images.
    setTimeout(function() { // Additional delay to ensure all scripts and content are fully loaded
        var section = "{{ $section }}";
        console.log("Section to scroll to:", section);
        var element = document.getElementById(section);
        if (element) {
            console.log("Element details:", element);
            element.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        } else {
            console.error("Failed to find element with ID:", section);
        }
    }, 1000); // Delay might need adjusting based on page load performance
};
</script>

    <section class="modalagencysec" id="filmmaking">
        <div class="container">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-5">
                <div class="innertext pt-3">
                    <h1>Filming <span>Services</span></h1>

                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modaltext pt-5 pt-md-3 ">
                        <h2>Film <span>Making</span></h2>

                        <p>Visuals speak louder than words, and filming makes your content more engaging and impactful. At
                            Cast Talents, we specialize in a variety of video production services to meet your needs:</p>

                        <ul>
                            <li>Films</li>
                            <li>Short Films</li>
                            <li>Music Videos</li>
                            <li>Showreels</li>
                            <li>Commercial and Corporate Videos</li>
                            <li>Event Coverage</li>
                            <li>Wedding Highlights</li>
                            <li>Emirati Wedding Highlights</li>
                        </ul>

                        <!--<a href="#" class="contactbtn">READ MORE</a>-->
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/film_1.png" class="img-fluid" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="modalagencysec2" id="filmmaking-equipment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/filim_2.png" alt="Casting Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modaltext1">

                        <h2>Film Making <sapn style="color: rgba(216, 31, 38, 1);">Equipment </sapn>
                        </h2>
                        <p><b>Comprehensive Production Equipment Services by Cast Talents</b></p>
                        <p>At Cast Talents, we bring your vision to life from start to finish. With our expertise and
                            reliability, we ensure seamless execution, paying meticulous attention to every detail.</p>
                        <p>Explore our extensive range of high-quality equipment:</p>
                        <ul>
                            <li>Cameras</li>
                            <li>Lenses</li>
                            <li>Tripods</li>
                            <li>Sound and Audio Equipment</li>
                            <li>Lighting Equipment</li>
                            <li>Aerial Drone Filming</li>
                        </ul>
                        <p>Count on Cast Talents to provide the tools you need for a successful production, enhancing every
                            aspect of your project with precision and professionalism.</p>

                        <!--<a href="#" class="contactbtn1">READ MORE</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="modalagencysec" id="production">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modaltext">
                        <h2>Production</h2>
                        <p>Professional Services Offered by Cast Talents</p>
                        <ul class="mb-5 ">
                            <li>Filming Services</li>
                            <li>Content Creation</li>
                            <li>TV Commercials (TVC)</li>
                            <li>Film Production</li>
                            <li>Corporate Video Production</li>
                            <li>Social Media Content Creation</li>
                            <li>Interview Filming</li>
                            <li>Animation Services</li>
                            <li>Public Service Announcements (PSA)</li>
                        </ul>
                        <p>Cast Talents provides a diverse range of professional services to meet your filming and content
                            creation needs, ensuring high-quality results tailored to your requirements.</p>
                        <a href="#" class="contactbtn" id="readMoreTrigger">READ MORE</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-4" >
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/filim_3.png" class="img-fluid" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="readMoreModal" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <div class="modaltext">
                <!-- Additional Read More Content -->
                <div class="more-content">
                    <h3>PRODUCTION DESIGN</h3>
                    <p><b>Creative Services Offered by Cast Talents</b></p>
                    <ul>
                        <li>Art Direction</li>
                        <li>Wardrobe Styling</li>
                        <li>Set Design</li>
                        <li>Post-Production Artistic Supervision</li>
                    </ul>
                    <p>Cast Talents provides a comprehensive suite of creative services to enhance your production. From
                        guiding the artistic vision to meticulous attention to detail in wardrobe styling, set design, and
                        post-production supervision, we ensure your project achieves its fullest potential</p>
                    <h3>PRE-PRODUCTION</h3>
                    <p><b>Creative and Production Services Offered by Cast Talents</b></p>
                    <ul>
                        <li>Concept Development</li>
                        <li>Treatment Creation</li>
                        <li>Scriptwriting and Development</li>
                        <li>Research and Consultation</li>
                        <li>Copywriting Services</li>
                        <li>Creative Direction</li>
                        <li>Storyboarding</li>
                        <li>Location Scouting</li>
                        <li>Casting Services</li>
                    </ul>
                    <p>Cast Talents provides a comprehensive array of creative and production services tailored to elevate
                        your project. From initial concept and script development to meticulous research, consultation, and
                        creative direction, we ensure every detail is meticulously crafted to bring your vision to life.</p>
                    <h3>POST PRODUCTION</h3>
                    <p><b>Post-Production Services Offered by Cast Talents</b></p>
                    <ul>
                        <li>Editing</li>
                        <li>Sound Design</li>
                        <li>Music Composition</li>
                        <li>Color Grading</li>
                        <li>Voice-over (VO) Recording</li>
                        <li>Visual Effects (VFX), Infographics</li>
                        <li>Translation and Subtitling</li>

                    </ul>
                    <p>Cast Talents provides comprehensive post-production services to elevate the quality and impact of
                        your content. From precise editing and immersive sound design to custom music composition and
                        seamless color grading, we ensure your project meets the highest standards of creativity and
                        professionalism. Additionally, our expertise in VO recording, VFX, infographics, and
                        translation/subtitling services ensures your content reaches global audiences effectively.</p>
                    <h3>LINE PRODUCTION</h3>
                    <p><b>Comprehensive Line Production Services by Cast Talents</b></p>

                    <p>At Cast Talents, we offer full line production services tailored for film, television, and media
                        projects. Line production involves the meticulous oversight and coordination of daily operations to
                        ensure seamless execution. Our team manages budgets, schedules, logistics, and personnel,
                        maintaining focus on efficiency and budgetary constraints. From crew hiring and location securing to
                        equipment management and timeline supervision spanning from pre-production to post-production, our
                        dedicated line producers play a pivotal role in upholding production excellence. Trust Cast Talents
                        to deliver high-quality outcomes while adhering to rigorous financial and scheduling standards.</p>
                </div>
            </div>
        </div>
    </div>
    <style>
        .modal {
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color: rgb(0, 0, 0);
            background-color: rgb(0 0 0 / 82%);
            display: none;
        }

        .modal-content {
            color: white;
            background: linear-gradient(45deg, #dfc81a, #BE3B46);
            margin: 2% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 70%;
            /* max-height: 80%; */
            /* overflow-y: auto; */
            /* overflow-x: hidden; */
            border-radius: 40px;
        }

        .more-content {
            overflow-y: scroll;
            height: 600px;
            padding: 20px;
        }

        .more-content::-webkit-scrollbar {
            width: 1px;
            height: 2px;
        }

        .more-content::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        .more-content::-webkit-scrollbar-thumb {
            background-color: #114851;
            outline: 1px solid #114851;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            position: absolute;
            right: -1px;
            top: -1px;
            background-color: #114851;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            color: #fff;
            border-radius: 50px;
        }


        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-open {
            overflow: hidden;
            height: 100%;
            width: 100%;
        }
    </style>
    <script>
        document.getElementById("readMoreTrigger").addEventListener("click", function(e) {
            e.preventDefault();
            var modal = document.getElementById("readMoreModal");
            modal.style.display = "block";
        });

        document.getElementById("closeModal").addEventListener("click", function() {
            var modal = document.getElementById("readMoreModal");
            modal.style.display = "none";
        });

        // Close the modal if the user clicks outside of it
        window.onclick = function(event) {
            var modal = document.getElementById("readMoreModal");
            if (event.target === modal) {
                modal.style.display = "none";
            }
        };
    </script>

    <section class="modalagencysec2" id="locations-permit">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/filim_4.png" alt="Casting Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modaltext1">

                        <h2>Locations / <sapn style="color: rgba(216, 31, 38, 1);">permit</sapn>
                        </h2>
                        <p><b>CAST TALENTS Location Scout: Premier Film Locations and Production Support in the UAE</b></p>
                        <p>At CAST TALENTS Location Scout, we specialize in providing top-tier film locations and
                            comprehensive production support across the UAE. Our experienced team excels in location
                            scouting, permitting, and sourcing local crews, along with a range of other production resources
                            to meet all your needs.</p>
                        <p>With a keen eye for breathtaking locations, we facilitate film permits and location services for
                            both public and private properties. Our offerings include location scouting, location
                            management, and full production services for film, commercials, television, photography, and
                            print advertising.</p>
                        <p>With years of industry experience, CAST TALENTS Location Scout is dedicated to ensuring your
                            production's success from start to finish.</p>
                        <!--<a href="#" class="contactbtn1">READ MORE</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="modalagencysec" id="tv-commercial-music-videos">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modaltext">
                        <h2>Tv Commercial, <span>Music Video ,</span> Filming</h2>
                        <p><b>Comprehensive Production Services by CAST TALENTS</b></p>
                        <p>CAST TALENTS provides a full suite of vertically integrated services, encompassing concept
                            development, script writing, filming, and post-production. Our storytelling expertise ensures
                            the creation of commercial videos that captivate, impress, and have the potential to go viral.
                        </p>
                        <!--<a href="#" class="contactbtn">READ MORE</a>-->
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/filim_5.png" class="img-fluid" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="modalagencysec2" id="transportation">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/manage_5.png" alt="Casting Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modaltext1">

                        <h2>Transportation </h2>
                        <p><strong>Professional Vehicle Rental Services for the Film and Television Industry BY CAST
                                TALENTS</strong></p>
                        <p>Cast Talents specializes in providing a wide array of support vehicles for the film and
                            television sector in the UAE. With our extensive fleet, we are the preferred partner for the
                            industry.</p>
                        <p>We strive to cater to the specific needs of each production or client, ensuring exceptional
                            service and excellent value. Our commitment is to provide a friendly and reliable service that
                            meets the demands of every project.</p>

                        <!--<a href="#" class="contactbtn1">READ MORE</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var section = "{{ $section }}";
            if (section) {
                var element = document.getElementById(section);
                if (element) {
                    element.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        });
    </script>

@endsection
