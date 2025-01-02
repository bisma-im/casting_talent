@extends('users.layouts.layout')

@section('title', 'Casting Talent | Hospitality')

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



    <section class="modalagencysec" id="security-bouncer">
        <div class="container mt-5">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="innertext pt-3">
                    <h1>Hospitality <span>Services</span></h1>

                </div>
            </div>
            <div class="row align-items-center">
            <div class="col-12 d-flex justify-content-center">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/event_5.png" class="img-fluid" alt="img">
                    </div>
                </div>
                <div class="col-12  pt-5 pt-md-0">
                    <div class="modaltext text-center ">
                        <h2>Security / <span>Bouncer</span></h2>
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

    <section class="modalagencysec" id="catering">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-12 d-flex justify-content-center">
                    <div class="modalimg">
                        <img src="{{ url('user-assets') }}/images/event_6.png" class="img-fluid" alt="img">
                    </div>
                </div>
                <div class="col-12">
                    <div class="modaltext text-center">
                        <h2>Catering</h2>
                        <p><b>Food Catering Services by Cast Talents</b></p>
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
                        <p><strong>Seminar Arrangements:</strong>Arrange corporate seminars and conferences at prestigious
                            hotels with competitive pricing, ensuring a conducive environment for productive sessions.</p>
                        <p>Count on Cast Talents to deliver exceptional event management services, tailored to meet your
                            specific requirements and exceed your expectations.</p>
                        <!--<a href="#" class="contactbtn">READ MORE</a>-->
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
