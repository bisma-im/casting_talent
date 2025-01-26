@extends('users.layouts.layout')

@section('title', 'Casting Talent | Modeling')

@section('main-content')



  
   
  


    <section class="modalagencysec" id="actors-models">
        
        <div class="container">
            
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-5 mb-0 pb-0">
        <div class="innertext pt-md-3 pt-5">
        <!-- <h1>Modeling <span>Agency</span></h1> -->

        </div>
    </div>
            <div class="row align-items-center justify-content-center mx-0 text-center ">
            <div class="col-12">
                    <div class="modalimg mb-4">
                        <img src="{{ url('user-assets') }}/images/modal_1.png" class="img-fluid" alt="img">
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="modaltext">
                        <h2>Actors / <span>Models</span></h2>
                        <p class=""><strong>CAST TALENTS Your Global Talent Source</strong></p>
                        <p class="">At <strong>CAST TALENTS</strong>, we offer a wide array of talent, including actors and models of
                            all ages and types, for TV commercials, movie roles, print advertisements, music videos, and
                            promotional campaigns. <br> Headquartered in Dubai, CAST TALENTS manages models from across the
                            globe. Our energetic and youthful team is dedicated to a personalized and attentive approach,
                            securing top-tier national and international bookings with the industry's leading clients. </p>
                        <p>Our dedication and innovative management style have established us as a leading agency. Praised
                            as a top-listed agency in the UAE by models.com, CAST TALENTS is distinguished in the fashion
                            industry for its excellence.</p>
                        <p>
                            We are committed to delivering not only the perfect face for your brand but also professional
                            models who embody the ideal attitude and demeanour for your specific needs.
                        </p>

                        <p>
                            At <strong>CAST TALENTS</strong>, we honour the unique beauty and vibrant personalities of our
                            models, embodying our distinct work philosophy. Our agency operates like a close-knit family,
                            where we nurture and support each other.
                        </p>
                        <p>
                            Experience the <strong>CAST TALENTS</strong> difference. Join us in advancing the future of
                            modeling and fashion.

                        </p>


                        <!--<a href="#" class="contactbtn read-more-btn">READ MORE</a>-->
                    </div>
                </div>
               
            </div>
        </div>
    </section>


    <section class="modalagencysec2" id="hair-makeup">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/modal_2.png" alt="Casting Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modaltext1">

                        <h2>Hair & <sapn style="color: rgba(216, 31, 38, 1);">Makeup </sapn> Artist</h2>
                        <p><b>Premier Hair and Makeup Services at CAST TALENTS</b></p>
                        <p>At CAST TALENTS, we collaborate exclusively with the finest hair and makeup artists in UAE.
                            Whether you're planning a photo shoot, filming, or preparing for a special occasion, look no
                            further. We provide access to top-tier professionals in the industry.</p>
                        <p>
                            With over a decade of experience hosting modeling shoots, we confidently recommend the artists
                            we trust for our own projects. Whether you need services for a full day, half day, or just a few
                            hours, we have the perfect expert to meet your needs.
                        </p>
                        <p>
                            Experience the difference with <strong>CAST TALENTS</strong> , where quality and professionalism
                            are our top priorities.

                        </p>


                        <!--<a href="#" class="contactbtn1">READ MORE</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="modalagencysec" id="videography-photography">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-12 d-flex justify-content-center">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/modal_3.png" class="img-fluid" alt="img">
                    </div>
                </div>
                <div class="col-12 ms-3  d-flex justify-content-center ">
                    <div class="modaltext">
                        <h2 >Videography & <span>Photography</span></h2>
                        <div class="flex-col d-flex ms-3 justify-content-center">
                        <div class="row">
    <ul>
    <li><strong>Corporate Videos</strong></li>
  <li><strong>Event Videos</strong></li>
  <li><strong>Promotional Videos</strong></li>
  <li><strong>Commercial Videos</strong></li>
  <li><strong>Animation Videos</strong></li>
  <li><strong>Training & Safety Videos</strong></li>
  <li><strong>Documentaries</strong></li>
  <li><strong>Explainer Videos</strong></li>
  <li><strong>Time-lapse Videos</strong></li>
  <li><strong>Branded Videos</strong></li>
  <li><strong>Aerial Drone Filming</strong></li>
  <li><strong>Photography</strong></li>


    </ul>
</div>
<div class="row ms-5">
    <ul>
    <li><strong>Interviews videography</strong></li>

<li><strong>Events</strong></li>
<li><strong>Music Video BTS & Posters</strong></li>
<li><strong>Product Shoots</strong></li>
<li><strong>Business Portraits</strong></li>
<li><strong>Modeling Portfolios</strong></li>
<li><strong>Weddings & Emirati Weddings</strong></li>
<li><strong>Interior & Exterior</strong></li>
<li><strong>Engagement & Family Portraits</strong></li>
<li><strong>Cake Smash & Maternity</strong></li>
<li><strong>Newborn Photography</strong></li>
<li><strong>Commercials</strong></li>
    </ul>
</div>
                        </div>
                        <!-- <a href="#" class="contactbtn1" id="readMoreTrigger">READ MORE</a> -->
                    </div>

                    <!-- Modal Structure -->
                    <div id="readMoreModal" class="modal mt-2" style="display: none;">
                        <div class="modal-content">
                            <span class="close" id="closeModal">&times;</span>
                            <div class="modaltext">
                                <!-- Additional Read More Content -->
                                <div class="more-content">
                                    <h3>Videos</h3>
                                    <p><b>Promotional Videos</b> Engage and captivate your audience with our expert
                                        promotional video production. We specialize in creating memorable and effective
                                        promotional videos that resonate with your target market.</p>
                                    <p><b>Commercial Videos</b> Boost your revenue with compelling online and TV
                                        commercials. For decades, we've helped leading companies across the UAE, Saudi
                                        Arabia, Kuwait, Bahrain, Oman, and Qatar tell their stories. Let us do the same for
                                        you.</p>
                                    <p><b>Animation Videos</b> Deliver clear messages while entertaining your audience. Our
                                        talented animation team brings ideas to life through 2D, 3D, motion graphics, and
                                        stop-motion animation videos.</p>
                                    <p><b>Training Videos</b> Enhance information retention with our engaging training
                                        videos. Our short video productions are designed to be interesting, concise, and
                                        effective, helping you achieve your training objectives.</p>
                                    <p><b>Safety Videos</b> Highlight the importance of workplace safety procedures with
                                        impactful safety videos. Our productions create a strong visual impression, helping
                                        your employees understand and follow safety protocols.</p>
                                    <p><b>Documentaries</b> Make a lasting impression with our documentary video production
                                        services. Whether it’s about your product, business, initiatives, or CSR activities,
                                        our documentaries tell compelling stories in an emotionally engaging tone.</p>
                                    <p><b>Explainer Videos</b> Simplify the features and benefits of your products or
                                        services with our explainer videos. Our team uses live-action or animation to create
                                        clear, engaging, and informative videos.</p>
                                    <p><b>Time-lapse Videos</b> Showcase the progress of your construction projects or
                                        events with stunning time-lapse videos. We can transform years of footage into
                                        captivating videos that capture the essence of your work.</p>
                                    <p><b>Branded Videos</b> Connect deeply with your audience through compelling branded
                                        videos. Our experts produce engaging stories that highlight how your brand
                                        positively impacts lives, making them share-worthy and memorable.</p>
                                    <p><b>Aerial Drone Filming</b> Achieve breath-taking 360-degree video and aerial shots
                                        of any location or event. Our expertise and cutting-edge drone technology ensure the
                                        capture of stunning and captivating aerial footage.</p>
                                    <h3>Photography</h3>
                                    <p><b>Commercials</b> Create impactful commercials that elevate your brand’s presence.
                                        We specialize in producing compelling advertisements that capture attention and
                                        drive results.</p>
                                    <p><b>Events</b> Turn your events into unforgettable memories with our professional
                                        event photography and videography services. We cover everything from corporate
                                        gatherings to private celebrations, ensuring every moment is perfectly captured.</p>
                                    <p><b>Music Video BTS & Posters</b> Get exclusive behind-the-scenes (BTS) content and
                                        striking posters for your music videos. Our team ensures that every detail of your
                                        production process is documented and presented artistically.</p>
                                    <p><b>Product Shoots</b> Showcase your products in the best light with our high-quality
                                        product photography services. We create visually stunning images that highlight the
                                        unique features and appeal of your products.</p>
                                    <p><b>Business Portraits</b> Enhance your professional image with our expert business
                                        portrait services. We provide polished and professional photos that reflect your
                                        personal brand and corporate identity.</p>
                                    <p><b>Modeling Portfolios</b> Build a standout modeling portfolio with our comprehensive
                                        photography services. We capture diverse and striking images that showcase your
                                        versatility and talent.</p>
                                    <p><b>Events</b> Document your special occasions with our professional event coverage.
                                        From intimate gatherings to large-scale events, we ensure every significant moment
                                        is captured beautifully.</p>
                                    <p><b>Weddings</b> Relive the magic of your wedding day through our exceptional wedding
                                        photography and videography. We create timeless memories that you’ll cherish
                                        forever.</p>
                                    <p><b>Interior & Exterior Photography</b> Highlight the beauty of your spaces with our
                                        interior and exterior photography services. We capture the essence and design of
                                        your property with stunning visual clarity.</p>
                                    <p><b>Engagement</b> Celebrate your love with our engagement photography services. We
                                        create romantic and memorable images that mark the beginning of your journey
                                        together.</p>
                                    <p><b>Family Portraits</b> Preserve precious moments with our family photography
                                        services. We create beautiful and heartfelt images that capture the essence of your
                                        family’s bond.</p>
                                    <p><b>Cake Smash</b> Celebrate your little one’s milestone with a fun and creative cake
                                        smash photo session. We capture the joy and excitement of this special occasion.</p>
                                    <p><b>Maternity Photography</b> Celebrate the beauty of motherhood with our maternity
                                        photography services. We create elegant and intimate images that honour this special
                                        time in your life.</p>
                                    <p><b>New-born Photography</b> Capture the innocence and sweetness of your new-born with
                                        our professional photography services. We create timeless images that you’ll
                                        treasure forever.</p>
                                    <p><b>Emirati Weddings</b> Honour your cultural heritage with our specialized Emirati
                                        wedding photography. We document every significant tradition and moment, creating a
                                        beautiful narrative of your special day.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
               
            </div>
        </div>
    </section>

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
            document.body.classList.add('modal-open'); // Disable body scroll
        });

        document.getElementById("closeModal").addEventListener("click", function() {
            var modal = document.getElementById("readMoreModal");
            modal.style.display = "none";
            document.body.classList.remove('modal-open'); // Enable body scroll
        });

        // Close the modal if the user clicks outside of it
        window.onclick = function(event) {
            var modal = document.getElementById("readMoreModal");
            if (event.target === modal) {
                modal.style.display = "none";
                document.body.classList.remove('modal-open'); // Enable body scroll
            }
        };
        
    </script>
    <style>
    .visible-section {
padding-top: 120px !important; /* Adjust as needed */
    transition: margin 0.3s ease; /* Smooth margin transition */
    
}

    </style>
<script>

document.addEventListener('DOMContentLoaded', function () {
    // Get the section parameter passed from Laravel
    var section = "{{ $section }}";
    console.log("Section to display:", section);

    // Select all sections
    var allSections = document.querySelectorAll('.modalagencysec, .modalagencysec2');

    // Check if a section parameter exists
    if (section) {
        console.log("Displaying specific section:", section);

        // Hide all sections initially
        allSections.forEach(function (sec) {
            sec.style.display = 'none';
        });

        // Show the specific section if the `section` ID matches
        var targetElement = document.getElementById(section);
        if (targetElement) {
            // Add display and margin-top
            targetElement.style.display = 'block';
            targetElement.classList.add('visible-section'); // Add a class for margin-top

            // Scroll to the section
            targetElement.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        } else {
            console.error("No matching section found for ID:", section);
        }
    } else {
        console.log("No section parameter provided, showing all sections.");
        // Show all sections by default
        allSections.forEach(function (sec) {
            sec.style.display = 'block';
            sec.classList.add('default-section'); // Add a class for styling all sections if needed
        });
    }
});


</script>

    <section class="modalagencysec2 mt-4" id="fashion-show">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/modal_4.png" alt="Casting Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modaltext1">

                        <h2>Fashion <sapn style="color: rgba(216, 31, 38, 1);">Show </sapn>
                        </h2>
                        <p><b>Professional Fashion Show Production by CAST TALENTS</b></p>
                        <p>Whether you envision a chic and simple fashion event or a grand, full-scale fashion show, CAST
                            TALENTS is your go-to source for professional guidance. We offer comprehensive production
                            services for all types of fashion show events, ensuring your vision is brought to life
                            seamlessly.</p>
                        <p>From initial concept to on-site event coordination, we manage every detail. Be it a small,
                            intimate fashion show, a bridal fair, a fashion showcase at a trade launch, or a premier
                            designer event, CAST TALENTS delivers it all.</p>
                        <p>
                            We handle every aspect necessary for producing a professional show, including models (male,
                            female, and children), staging, lighting, technical support, and sound engineering. Let CAST
                            TALENTS make your fashion event a resounding success.
                        </p>

                        <!--<a href="#" class="contactbtn1">READ MORE</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="modalagencysec" id="locations-permit">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-12 d-flex justify-content-center">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/modal_5.png" class="img-fluid" alt="img">
                    </div>
                </div>
                <div class="col-12  text-center ">
                    <div class="modaltext">
                        <h2>Locations / <span>Permit</span></h2>
                        <p><b>CAST TALENTS Location Scout: Premier Film Locations and Production Support in the UAE</b></p>
                        <p>At CAST TALENTS Location Scout, we specialize in providing top-tier film locations and
                            comprehensive production support across the UAE. Our experienced team excels in location
                            scouting, permitting, and sourcing local crews, along with a range of other production resources
                            to meet all your needs.</p>
                        <p>With a keen eye for breath-taking locations, we facilitate film permits and location services for
                            both public and private properties. Our offerings include location scouting, location
                            management, and full production services for film, commercials, television, photography, and
                            print advertising.</p>
                        <p>
                            With years of industry experience, <strong> CAST TALENTS</strong> Location Scout is dedicated to
                            ensuring your production's success from start to finish.
                        </p>
                        <!--<a href="#" class="contactbtn">READ MORE</a>-->
                    </div>
                </div>
               
            </div>
        </div>
    </section>


    <section class="modalagencysec2" id="tv-commercials">
        <div class="container">
            <div class="row ">
                <div class="col-6 ">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/modal_6.png" alt="Casting Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="modaltext1">
                        <h2>Tv Commercial, <sapn style="color: rgba(216, 31, 38, 1);">Music Video </sapn> , Filming</h2>
                        <p>CAST TALENTS provides a full suite of vertically integrated services, encompassing concept
                            development, script writing, filming, and post-production. Our storytelling expertise ensures
                            the creation of commercial videos that captivate, impress, and have the potential to go viral.
                        </p>


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
