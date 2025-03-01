@extends('users.layouts.layout')

@section('title', 'Casting Talent | Events')

@section('main-content')


    <style>
        div#readMoreModal1 .more-content {
            height: auto !important;
        }
    </style>
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

  

    <section class="modalagencysec" id="event-management">
        <div class="container">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-5">
                <div class="innertext pt-3">
                    <!-- <h1>Events <span>Services</span></h1> -->

                </div>
            </div>
            <div class="row align-items-center justify-content-center mx-0 text-center">
            <div class="col-12 d-flex justify-content-center">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/event_1.png" class="img-fluid" alt="img">
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="modaltext " >
                        <h2 class="text-center pt-4" >Event <span style="color: rgba(216, 31, 38, 1);">Management</span></h2>
                       <p class=""> <strong>Event Management by Cast Talents</strong></p>
                       <p>
    <strong>Expert Services:</strong> We design, plan, and manage private and corporate events with precision and creativity, delivering unique and memorable experiences tailored to your needs.
</p>
<p>
    <strong>Our Services Include:</strong>
</p>
<p>
    <strong>Design:</strong> Print, graphic, décor, lighting, table, and floral design. Management of invitations, RSVPs, budgets, critical paths, and vendor contracts.
</p>
<p>
    <strong>Production:</strong> Sound, video, and multimedia production.
</p>
<p>
    <strong>Coordination:</strong> Catering, staffing, media relations, sponsorships, talent procurement, hospitality, travel, protocol, and concierge services.
</p>



<p class=""> <strong>Seamlessly blending innovative design and exceptional service for unforgettable events.</strong></p>
                        <!-- <a href="#" class="contactbtn1" id="readMoreTrigger">READ MORE</a> -->
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
                    <p><strong>Our Services Include:</strong></p>
                    <ul>
                        <li>Print and Graphic Design</li>
                        <li>Décor Design and Fabrication</li>
                        <li>Lighting Design and Production</li>
                        <li>Table Design and Execution</li>
                        <li>Table Design and Execution</li>
                        <li>Sound Design</li>
                        <li>Invitation and RSVP Management</li>
                        <li>Budget Development</li>
                        <li>Critical Path Development</li>
                        <li>Vendor Contract Negotiation</li>
                        <li>Catering Services</li>
                        <li>Event Staffing</li>
                        <li>Media Relations</li>
                        <li>Sponsorship Management</li>
                        <li>Talent Procurement</li>
                        <li>Video Production Management</li>
                        <li>Multimedia Production Management</li>
                        <li>Hospitality and Travel Coordination</li>
                        <li>Protocol and Concierge Services</li>
                        <li>Total Event Logistics</li>
                    </ul>
                    <p>At Cast Talents, our work embodies experiences that seamlessly blend innovative design with
                        exceptional service, ensuring every event is memorable and unique.</p>
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
            margin: 6% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 70%;
            max-height: 80%;
            overflow-y: auto; /* Enable scrolling for overflowing content */
            border-radius: 40px;
        }

        .more-content {
            overflow-y: auto; /* Allow scrolling */
            height: 500px;
            padding: 10px;
            padding-bottom:0px !important
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

    <section class="modalagencysec2 mt-4" id="promotional-events-marketing">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/event_2.png" alt="Casting Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="modaltext1">

                        <h2>Promotional <span style="color: rgba(216, 31, 38, 1);">Events </span> Marketing</h2>
                        <p><b>Professional Marketing Services by Cast Talents</b></p>
                        <p>Cast Talents offers tailored marketing solutions to advertise events effectively, focusing on budget optimization and impactful strategies.
                        </p>
                        <strong>Our Services Include:
                        </strong>
                       <ul>
                       <li><strong>Media Design & Selection:</strong> Customized advertising options for maximum ROI.</li> 
                       <li><strong>Promotional Strategy:</strong> Budget and brand analysis for targeted campaigns.
                       </li> 
                       <li><strong>Media Buying:</strong> Expertly selected locations and localized ads for audience targeting</li> 
                       <li><strong>Campaign Management:</strong> Full-service support, from strategy to ad placement.
                       </li> 
                       <p>Streamline your promotional efforts with our expertise. Contact us for details on services and pricing.
    </p>
                       <ul>
                        
                        <!-- <a href="#" class="contactbtn1" id="readMoreTrigger1">READ MORE</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="readMoreModal1" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close" id="closeModal1">&times;</span>
            <div class="modaltext">
                <!-- Additional Read More Content -->
                <div class="more-content">
                    <p>Selecting a reliable agency is crucial for achieving optimal results. As a professional media agency,
                        we specialize in creating distinctive and impactful promotional strategies. Our team of skilled
                        media buyers will help you identify the ideal locations for your marketing campaigns to maximize
                        effectiveness. For events in specific areas, we can arrange localized ads to target the right
                        audience.</p>
                    <p>We handle all aspects of your advertising campaign, from strategy development to ad placement,
                        allowing you to focus on your core activities. We recommend having a budget in mind and a clear
                        vision of how you want your business to be presented before starting the campaign planning process.
                    </p>
                    <p>Our team is ready to provide more information about our services. Simply fill out the enquiry form to
                        receive additional advice and details on our pricing and offerings.</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("readMoreTrigger1").addEventListener("click", function(e) {
            e.preventDefault();
            var modal = document.getElementById("readMoreModal1");
            modal.style.display = "block";
        });

        document.getElementById("closeModal1").addEventListener("click", function() {
            var modal = document.getElementById("readMoreModal1");
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
    <section class="modalagencysec" id="retail-promotional-staff">
        <div class="container">
            <div class="row align-items-center justify-content-center mx-0 text-center">
            <div class="col-12 ">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/event_3.png" class="img-fluid" alt="img">
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="modaltext ">
                        <h2 class="text-center pt-4">Retail & <span>Promotional</span> Staff</h2>
                        <p  class=""><strong>Specialized Staffing Solutions by Cast Talents</strong></p>
                        <p class="">As a licensed and Ministry-approved staffing agency, Cast Talents provides high-quality temporary staffing for retail, events, and exhibitions.
                        </p>
                        
                        
                        <p><strong>Our Services Include:</strong></p>
<p><strong>Retail Staffing:</strong> Experienced staff with UAE retail expertise, scalable to your needs.</p>
<p><strong>Promoters:</strong> Trained professionals for sampling, launches, events, and activations.</p>
<p><strong>Hospitality Support:</strong> Waitstaff with occupational health cards for seamless events.</p>
<p><strong>Hostesses:</strong> Multilingual, experienced professionals for trade shows, corporate events, and more.</p>
<p><strong>Host:</strong> Skilled male and female hosts with extensive event expertise.</p>
<p class="">We ensure top-tier staffing through rigorous auditing and customization to meet your requirements.</p>

                        <!-- <a href="#" class="contactbtn1" id="readMoreTrigger2">READ MORE</a> -->
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <div id="readMoreModal2" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close" id="closeModal2">&times;</span>
            <div class="modaltext">
                <!-- Additional Read More Content -->
                <div class="more-content">
                    <p><strong>Promoters:</strong> Our professional promoters enhance product visibility, support launches,
                        and drive activations and events. With years of experience in Dubai, we provide promoters for
                        sampling, brand launches, flyer distribution, exhibitions, trade shows, and various promotional
                        activities. Our promoters are thoroughly trained and briefed to meet your specific needs, ensuring
                        they effectively augment your sales team. All our promoters are professional, courteous, and
                        rigorously audited to guarantee top-tier service in Dubai and Abu Dhabi.</p>
                    <p><strong>Hospitality Support:</strong> We offer waiters, waitresses, and other hospitality support
                        staff, all equipped with occupational health cards (OHC), to ensure your event runs smoothly.</p>
                    <p><strong>Hostesses:</strong> We provide a diverse range of experienced hostesses, fluent in multiple
                        languages and representing various nationalities, all based in Dubai. Our hostesses are well-versed
                        in trade shows, roadshows, corporate events, launch events, and more. Regular audits ensure we
                        supply only the most elite hostesses in Dubai.</p>
                    <p><strong>Hosts:</strong> Our highly demanded male and female hosts have served numerous events,
                        roadshows, trade shows, and corporate functions across Dubai and the UAE. With a range of
                        nationalities and multilingual capabilities, our hosts bring years of event expertise to meet your
                        hosting and promotional needs. Rigorous auditing ensures we deliver only the best hosts in Dubai and
                        Abu Dhabi.</p>
                    <p><strong>Cast Talents</strong> is committed to providing exceptional staffing solutions, ensuring your
                        events are staffed by the finest professionals in the industry.</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("readMoreTrigger2").addEventListener("click", function(e) {
            e.preventDefault();
            var modal = document.getElementById("readMoreModal2");
            modal.style.display = "block";
        });

        document.getElementById("closeModal2").addEventListener("click", function() {
            var modal = document.getElementById("readMoreModal2");
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


    <div id="readMoreModal3" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close" id="closeModal3">&times;</span>
            <div class="modaltext">
                <!-- Additional Read More Content -->
                <div class="more-content">
                    <h3>Videos</h3>
                    <p><b>Promotional Videos</b> Engage and captivate your audience with our expert promotional video
                        production. We specialize in creating memorable and effective promotional videos that resonate with
                        your target market.</p>
                    <p><b>Commercial Videos</b> Boost your revenue with compelling online and TV commercials. For decades,
                        we've helped leading companies across the UAE, Saudi Arabia, Kuwait, Bahrain, Oman, and Qatar tell
                        their stories. Let us do the same for you.</p>
                    <p><b>Animation Videos</b> Deliver clear messages while entertaining your audience. Our talented
                        animation team brings ideas to life through 2D, 3D, motion graphics, and stop-motion animation
                        videos.</p>
                    <p><b>Training Videos</b> Enhance information retention with our engaging training videos. Our short
                        video productions are designed to be interesting, concise, and effective, helping you achieve your
                        training objectives.</p>
                    <p><b>Safety Videos</b> Highlight the importance of workplace safety procedures with impactful safety
                        videos. Our productions create a strong visual impression, helping your employees understand and
                        follow safety protocols.</p>
                    <p><b>Documentaries</b> Make a lasting impression with our documentary video production services.
                        Whether it’s about your product, business, initiatives, or CSR activities, our documentaries tell
                        compelling stories in an emotionally engaging tone.</p>
                    <p><b>Explainer Videos</b> Simplify the features and benefits of your products or services with our
                        explainer videos. Our team uses live-action or animation to create clear, engaging, and informative
                        videos.</p>
                    <p><b>Time-lapse Videos</b> Showcase the progress of your construction projects or events with stunning
                        time-lapse videos. We can transform years of footage into captivating videos that capture the
                        essence of your work.</p>
                    <p><b>Branded Videos</b> Connect deeply with your audience through compelling branded videos. Our
                        experts produce engaging stories that highlight how your brand positively impacts lives, making them
                        share-worthy and memorable.</p>
                    <p><b>Aerial Drone Filming</b> Achieve breath-taking 360-degree video and aerial shots of any location
                        or event. Our expertise and cutting-edge drone technology ensure the capture of stunning and
                        captivating aerial footage.</p>
                    <h3>Photography</h3>
                    <p><b>Commercials</b> Create impactful commercials that elevate your brand’s presence. We specialize in
                        producing compelling advertisements that capture attention and drive results.</p>
                    <p><b>Events</b> Turn your events into unforgettable memories with our professional event photography
                        and videography services. We cover everything from corporate gatherings to private celebrations,
                        ensuring every moment is perfectly captured.</p>
                    <p><b>Music Video BTS & Posters</b> Get exclusive behind-the-scenes (BTS) content and striking posters
                        for your music videos. Our team ensures that every detail of your production process is documented
                        and presented artistically.</p>
                    <p><b>Product Shoots</b> Showcase your products in the best light with our high-quality product
                        photography services. We create visually stunning images that highlight the unique features and
                        appeal of your products.</p>
                    <p><b>Business Portraits</b> Enhance your professional image with our expert business portrait services.
                        We provide polished and professional photos that reflect your personal brand and corporate identity.
                    </p>
                    <p><b>Modeling Portfolios</b> Build a standout modeling portfolio with our comprehensive photography
                        services. We capture diverse and striking images that showcase your versatility and talent.</p>
                    <p><b>Events</b> Document your special occasions with our professional event coverage. From intimate
                        gatherings to large-scale events, we ensure every significant moment is captured beautifully.</p>
                    <p><b>Weddings</b> Relive the magic of your wedding day through our exceptional wedding photography and
                        videography. We create timeless memories that you’ll cherish forever.</p>
                    <p><b>Interior & Exterior Photography</b> Highlight the beauty of your spaces with our interior and
                        exterior photography services. We capture the essence and design of your property with stunning
                        visual clarity.</p>
                    <p><b>Engagement</b> Celebrate your love with our engagement photography services. We create romantic
                        and memorable images that mark the beginning of your journey together.</p>
                    <p><b>Family Portraits</b> Preserve precious moments with our family photography services. We create
                        beautiful and heartfelt images that capture the essence of your family’s bond.</p>
                    <p><b>Cake Smash</b> Celebrate your little one’s milestone with a fun and creative cake smash photo
                        session. We capture the joy and excitement of this special occasion.</p>
                    <p><b>Maternity Photography</b> Celebrate the beauty of motherhood with our maternity photography
                        services. We create elegant and intimate images that honour this special time in your life.</p>
                    <p><b>New-born Photography</b> Capture the innocence and sweetness of your new-born with our
                        professional photography services. We create timeless images that you’ll treasure forever.</p>
                    <p><b>Emirati Weddings</b> Honour your cultural heritage with our specialized Emirati wedding
                        photography. We document every significant tradition and moment, creating a beautiful narrative of
                        your special day.</p>

                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("readMoreTrigger3").addEventListener("click", function(e) {
            e.preventDefault();
            var modal = document.getElementById("readMoreModal3");
            modal.style.display = "block";
        });

        document.getElementById("closeModal3").addEventListener("click", function() {
            var modal = document.getElementById("readMoreModal3");
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

    <section class="modalagencysec2" id="security-bouncer">
        <div class="container">
            <div class="row  justify-content-center ">
            <div class="col-6  ">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/event_5.png" class="img-fluid p-5" alt="img">
                    </div>
                </div>
                <div class="col-6">
                    <div class="modaltext1 ">
                        <h2>Security / <span>Bouncer</span></h2>
                        <p class=""><b>Professional Security Services by CAST TALENTS</b></p>
                        <p><strong>VIP and Celebrity Protection:</strong> At CAST TALENTS, ensuring the safety of our
                            clients is paramount. We specialize in providing highly trained bodyguards and security
                            personnel who are dedicated to protecting VIPs and celebrities. Our team is prepared to
                            safeguard clients at all times, employing a strategic approach where some guards remain close
                            while others maintain a discreet presence in the surrounding crowd.</p>
                        
                        <p><strong>Event Security:</strong> CAST TALENTS excels in event security, offering comprehensive
                            services for concerts, film openings, nightclubs, and festivals. Our experienced event security
                            managers oversee guards and personnel, implementing robust security protocols to ensure a safe
                            and enjoyable environment.</p>
                        <p><strong>VIP Security:</strong> Experience peace of mind with CAST TALENTS VIP security services.
                            We offer state-of-the-art onsite security and bodyguard solutions tailored to your specific
                            needs. Our goal is to address any close personal protection security concerns promptly and
                            effectively.</p>
                        <p><strong>Bouncer Services:</strong> Looking for professional bouncer security in Dubai? CAST
                            TALENTS provides expert bouncer services, ensuring our personnel are well-versed in their
                            rights, responsibilities, and duties. Trust us to maintain a secure environment while upholding
                            the highest standards of professionalism.</p>
                        <!--<a href="#" class="contactbtn">READ MORE</a>-->
                    </div>
                </div>
               
            </div>
        </div>
    </section>


    
    <section class="modalagencysec" id="catering">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-12  d-flex justify-content-center">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/event_6.jpeg" class="img-fluid" alt="img">
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="modaltext text-center">
                        <h2 class="pt-4">Catering</h2>
                        <p class=""><b>Food Catering Services by Cast Talents</b></p>
                        <p>At Cast Talents, we boast an experienced and dedicated team proficient in organizing a wide array
                            of events, including parties, corporate functions, seminars, and hotel supplies. With a strong
                            sense of responsibility, we ensure your event is memorable, whether it's a lavish banquet in a
                            park, a palace setting, or an intimate gathering at home.</p>
                        <p><b>Equipment Rental:</b> We offer a comprehensive selection of rental equipment, providing you
                            with a variety of options to suit your event's needs.</p>
                        <p><b>Food Catering Services:</b> Choose from a diverse range of world-class cuisines such as
                            Continental, Italian, Arabic, Chinese, Indian, or opt for live cooking arrangements tailored to
                            your event's theme or preferences.</p>
                        <p><b>Event and Party Management:</b> From reception to service, we handle every aspect of your
                            event to ensure you can relax and enjoy as a guest at your own gathering.</p>
                        <p><strong>Corporate Events:</strong> Utilize our extensive network with five-star hotels to
                            organize your corporate meetings or events at your preferred location.</p>
                        <p><strong>Service Staff Supply:</strong> We provide professional food catering service staff at
                            competitive rates, ensuring seamless service delivery for your event.</p>
                        <p><strong>Seminar Arrangements:</strong> Arrange corporate seminars and conferences at prestigious
                            hotels with competitive pricing, ensuring a conducive environment for productive sessions.</p>
                        <p>Count on Cast Talents to deliver exceptional event management services, tailored to meet your
                            specific requirements and exceed your expectations.</p>
                        <!--<a href="#" class="contactbtn">READ MORE</a>-->
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <section class="modalagencysec2" id="live-streaming">
        <div class="container">
            <div class="row align-items-center"">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/event_7.png" alt="Casting Image" class="img-fluid p-4">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modaltext1">

                        <h2>Live <span style="color: rgba(216, 31, 38, 1);">Streaming</span> </h2>
                        <p><strong>Professional Multi-Camera Streaming Services BY Cast Talents</strong></p>
                        <ul>
                            <li>Up to six high-quality cameras</li>
                            <li>Advanced switcher for seamless transitions</li>
                            <li>Live streaming to social media platforms</li>
                            <li>Broadcast to YouTube or television</li>
                        </ul>

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
                        <img src="{{ url('user-assets') }}/images/manage_4.png" class="img-fluid" alt="img">
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="modaltext text-center">
                        <h2 class="pt-4">Location / <span>Permit</span></h2>
                        <p class=""><b>CAST TALENTS Location Scout: Premier Film Locations and Production Support in the UAE</b></p>
                        <p>At CAST TALENTS Location Scout, we specialize in providing top-tier film locations and
                            comprehensive production support across the UAE. Our experienced team excels in location
                            scouting, permitting, and sourcing local crews, along with a range of other production resources
                            to meet all your needs.</p>
                        <p>With a keen eye for breath-taking locations, we facilitate film permits and location services for
                            both public and private properties. Our offerings include location scouting, location
                            management, and full production services for film, commercials, television, photography, and
                            print advertising.</p>
                        <p>With years of industry experience, CAST TALENTS Location Scout is dedicated to ensuring your
                            production's success from start to finish.</p>
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
                        <img src="{{ url('user-assets') }}/images/eventtransport.jpg" alt="Casting Image" class="img-fluid p-4">
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


@endsection
