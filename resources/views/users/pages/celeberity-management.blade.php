@extends('users.layouts.layout')

@section('title', 'Casting Talent | Celebrity')

@section('main-content')






<style>
    .visible-section {
padding-top: 100px !important; /* Adjust as needed */
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
    <section class="modalagencysec" id="celebrity-management">
        <div class="container">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-5 mb-0 pb-0">
                    <div class="innertext pt-md-3 pt-5">
                    <h1>Celebrity <span>Management</span></h1>

            
                    </div>
                </div>
            <div class="row align-items-center">
            <div class="col-12 d-flex justify-content-center">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/manage_1.png" class="img-fluid" alt="img">
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="modaltext pt-5 pt-md-0 text-center ">
                        <h2>Celebrity<span> Management</span> Services</h2>
                        <p><b>Book Celebrities Worldwide with CAST TALENTS</b></p>
                        <p>Elevate your events with CAST TALENTS exclusive celebrity management services. Whether it's for
                            inaugurations, weddings, birthday parties, or any celebration, we offer access to celebrities
                            from around the world. Make your occasion truly memorable by adding a touch of celebrity glamour
                            and sophistication.</p>

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
                        <img src="{{ url('user-assets') }}/images/manage_2.png" alt="Casting Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modaltext1">

                        <h2>Hairs & <sapn style="color: rgba(216, 31, 38, 1);">Makeup </sapn> Artist</h2>
                        <p><b>Premier Hair and Makeup Services at CAST TALENTS</b></p>
                        <p>At CAST TALENTS, we collaborate exclusively with the finest hair and makeup artists in UAE.
                            Whether you're planning a photo shoot, filming, or preparing for a special occasion, look no
                            further. We provide access to top-tier professionals in the industry.</p>
                        <p>With over a decade of experience hosting modeling shoots, we confidently recommend the artists we
                            trust for our own projects. Whether you need services for a full day, half day, or just a few
                            hours, we have the perfect expert to meet your needs.</p>
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

    <section class="modalagencysec" id="security-bouncer">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-12 d-flex justify-content-center ">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/manage_3.png" class="img-fluid" alt="img">
                    </div>
                </div>
                <div class="col-12  text-center ">
                    <div class="modaltext">
                        <h2>Security /<span> Bouncer</span></h2>
                        <p><b>Professional Security Services by CAST TALENTS</b></p>
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
                        <p>
                            <strong>Bouncer Services:</strong> Looking for professional bouncer security in Dubai?
                            <strong>CAST TALENTS</strong> provides expert bouncer services, ensuring our personnel are
                            well-versed in their rights, responsibilities, and duties. Trust us to maintain a secure
                            environment while upholding the highest standards of professionalism.
                        </p>
                        <!--<a href="#" class="contactbtn">READ MORE</a>-->
                    </div>
                </div>
              
            </div>
        </div>
    </section>

    <section class="modalagencysec2" id="locations-permit" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/manage_4.png" alt="Casting Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modaltext1">

                        <h2>Locations / <sapn style="color: rgba(216, 31, 38, 1);">Permit</sapn>
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
                        <p>
                            With years of industry experience,<strong>CAST TALENTS</strong> Location Scout is dedicated to
                            ensuring your production's success from start to finish.
                        </p>

                        <!--<a href="#" class="contactbtn1">READ MORE</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="modalagencysec"  id="transportation">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-12  d-flex justify-content-center">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/manage_5.png" class="img-fluid" alt="img">
                    </div>
                </div>
                <div class="col-12  text-center ">
                    <div class="modaltext">
                        <h2>Transportation</h2>
                        <p><b>Professional Vehicle Rental Services for the Film and Television Industry BY CAST TALENTS</b>
                        </p>
                        <p>Cast Talents specializes in providing a wide array of support vehicles for the film and
                            television sector in the UAE. With our extensive fleet, we are the preferred partner for the
                            industry.</p>
                        <p>We strive to cater to the specific needs of each production or client, ensuring exceptional
                            service and excellent value. Our commitment is to provide a friendly and reliable service that
                            meets the demands of every project.</p>
                        <!--<a href="#" class="contactbtn">READ MORE</a>-->
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <section class="modalagencysec2" id="videography-photography">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/event_4.png" alt="Casting Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="modaltext1">

                        <h2>Videography & <sapn style="color: rgba(216, 31, 38, 1);">Photography</sapn>
                        </h2>
                        <p><b>One of the Premier Professional Photography and Videography Services</b></p>
                        <p><b>Corporate Videos</b> Expand your brand’s reach with our exceptional corporate video production
                            services. Our team of award-winning writers, videographers, directors, and video creators craft
                            innovative corporate videos tailored to your business needs.</p>
                        <p><b>Event Videos</b> Amplify the impact and longevity of your events. From intimate corporate
                            gatherings to large-scale conferences, our team excels at transforming your events into
                            spectacular videos that extend their reach and influence.</p>
                        <p><b>Commercials</b> Create impactful commercials that elevate your brand’s presence. We specialize
                            in producing compelling advertisements that capture attention and drive results.</p>
                        <p><b>Events</b> Turn your events into unforgettable memories with our professional event
                            photography and videography services. We cover everything from corporate gatherings to private
                            celebrations, ensuring every moment is perfectly captured.</p>

                        <a href="#" class="contactbtn1" id="readMoreTrigger3">READ MORE</a>
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
