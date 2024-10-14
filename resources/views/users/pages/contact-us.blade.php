@extends('users.layouts.layout')@section('title', 'Casting Talent | Contact')@section('main-content') <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
</style>
<section class="innerpages">
    <div class="container">
        <div class="col-12">
            <div class="innertext">
                <h1>Contact us</h1>
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
                <form id="contact-form" action="{{ route('contact.post') }}" method="post"> @csrf <div
                        class="form-step form-step-active">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="contactlist"> <label>First Name</label> <input type="text" name="first_name"
                                        class="form-control" placeholder="First Name" required> </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="contactlist"> <label>Last Name</label> <input type="text" name="last_name"
                                        class="form-control" placeholder="Last Name" required> </div>
                            </div>
                        </div>
                        <div class="text-end"> <button type="button" class="btn-next">NEXT</button> </div>
                    </div>
                    <div class="form-step">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="contactlist"> <label>Email</label> <input type="email" name="email"
                                        class="form-control" placeholder="Email" required> </div>
                            </div>
                        </div>
                        <div class="button-container">
                            <div class="text-start"> <button type="button"
                                    class="btn btn-warning btn-prev">BACK</button> </div>
                            <div class="text-end"> <button type="button" class="btn-next">NEXT</button> </div>
                        </div>
                    </div>
                    <div class="form-step">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="contactlist"> <label>Calling Number</label> <input type="tel"
                                        name="calling_number" placeholder="calling number"
                                        class="form-control phone-input" required> </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="contactlist"> <label>Whatsapp Number</label> <input type="tel"
                                        name="whatsapp_number" placeholder="whatsapp number"
                                        class="form-control phone-input" required> </div>
                            </div>
                        </div>
                        <div class="button-container">
                            <div class="text-start"> <button type="button"
                                    class="btn btn-warning btn-prev">BACK</button> </div>
                            <div class="text-end"> <button type="button" class="btn-next">NEXT</button> </div>
                        </div>
                    </div>
            </div>
            <div class="form-step">
                <div class="row">
                    <div class="col-12">
                        <div class="contactlist"> <label>Subject</label> <input type="text" name="subject"
                                placeholder="subject" class="form-control" required> </div>
                    </div>
                    <div class="col-12">
                        <div class="contactlist"> <label>Message</label> <textarea name="message" placeholder="message"
                                class="form-control"></textarea> </div>
                    </div>
                    <!--div class="col-12 button-container">                                <div class="contactlist mt-5 text-start">                                        <button type="submit">SUBMIT</button>                                    </div>                                <div class="text-end">                                    <button type="button" class="btn-prev">BACK</button>                                 </div>                                </div-->
                    <div class="button-container">
                        <div class="text-start"> <button type="button" class="btn btn-warning btn-prev">BACK</button>
                        </div>
                        <div class="text-end"> <button type="submit" class="btn-next">SUBMIT</button> </div>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="mapimg" style="text-align:end;"> <img src="{{ url('user-assets') }}/images/map_img.png"
                        style="width: 70%" class="img-fluid" alt="img"> </div>
            </div>
        </div>
    </div>
</section>
<section class="contactlist">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-lg-8">
                <div class="innertext text-left">
                    <h1 style="text-align:left;">Contact <span>Us</span></h1><br>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="text-left">
                                <div class="mb-4">
                                    <h4 class="text-left fw_500 lateef"> <i
                                            class="fa-solid px-2 text-yellow fa-phone"></i> PHONE</h4>
                                    <p class="text-left mx-5"> <a class="fw_400 text_grey" href="tel:971501234796">+971
                                            50 123 4796</a> </p>
                                </div>
                                <div class="mb-4">
                                    <h4 class="text-left fw_500 lateef"> <i
                                            class=" fab px-2 text-yellow fa-whatsapp"></i> WHATSAPP</h4>
                                    <p class="text-left mx-5 "> <a class="text_grey" href="https://wa.me/971501234796"
                                            target="_blank"> +971 50 123 4796 </a> </p>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h4 class="text-left fw_500 lateef"> <i
                                        class="fa-solid px-2 text-yellow fa-envelope"></i> EMAIL</h4>
                                <p class="text-left mx-5"> <a class="fw_400 text_grey"
                                        href="mailto:info@casttalents.com">info@casttalents.com</a><br /> </p>
                            </div>
                            <div class="mb-4">
                                <h4 class="text-left fw_500 lateef"> <i
                                        class="fa-solid px-2 text-yellow fa-location-dot"></i> ADDRESS</h4>
                                <p class="text-left mx-5"> <a class="fw_400 text_grey"
                                        href="mailto:dxb@casttalents.com"><span class="fw_500 text-dark"> UAE : </span>
                                        Business Bay, Dubai, United Arab Emirates | dxb@casttalents.com</a><br /> <a
                                        class="fw_400 text_grey" href="mailto:oman@casttalents.com"><span
                                            class="fw_500 text-dark"> OMAN: </span> Muscat, oman |
                                        oman@casttalents.com</a><br /> <a class="fw_400 text_grey"
                                        href="mailto:ksa@casttalents.com"><span class="fw_500 text-dark"> KSA </span>
                                        Riyadh, KSA | ksa@casttalents.com</a><br /> </p>
                                <!-- <p class="text-left mx-5">                                        <a class="fw_400 text_grey" href="mailto:dxb@casttalents.com"><span class="fw_500 text-dark"> DUBAI: </span> dubai address</a><br/>                                        <a class="fw_400 text_grey" href="mailto:oman@casttalents.com"><span class="fw_500 text-dark"> MUSCAT, OMAN: </span> oman address</a><br/>                                        <a class="fw_400 text_grey" href="mailto:ksa@casttalents.com"><span class="fw_500 text-dark"> RIYADH, KSA: </span> riyadh address</a><br/>                                    </p> -->
                            </div>
                            <div class="social-icons mx-5 d-flex gap-4"> <a class="text-yellow fs-3" target="_blank"
                                    href="https://www.facebook.com/abeera.k.sheikh"><i
                                        class="fa-brands fa-facebook"></i></a> <a class="text-yellow fs-3"
                                    target="_blank" href="https://www.instagram.com/casttalents.llc/"><i
                                        class="fa-brands fa-instagram"></i></a> <a class="text-yellow fs-3"
                                    target="_blank"
                                    href="https://www.linkedin.com/in/abeera-sheikh-uae-based-casting-specialist-actor-and-founder-of-aks-castings-llc-723063147"><i
                                        class="fa-brands fa-linkedin"></i></a> <a class="text-yellow fs-3"
                                    target="_blank" href="https://www.snapchat.com/add/abeeraksheikh"><i
                                        class="fa-brands fa-snapchat"></i></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-lg-4 col-xl-4 ">
                <div class="innertext"> <iframe width="100%" height="440"
                        src="https://www.instagram.com/casttalents.llc/" frameborder="0"></iframe> </div>
            </div>
        </div>
    </div>
</section> <!--  Testimonials  -->
<section class="contactlist" style="background-color: #f3fbff !important;">
    <div class="container">
        <div class="row">
            <div class="innertext text-left">
                <h1 style="text-align:left;">What Our <span>Clients</span> Have to Say</h1><br>
            </div>
            <div class="col-lg-12 col-md-12 col-xl-12">
                <div id="client-testimonials" class="owl-carousel">
                    <div class="testimonial">
                        <div class="stars text-left fs-3">★★★★★</div>
                        <!-- <h2 style="line-height: 0.75;" class="lateef text-left">Indian choreographer, actor, and film director</h2> -->
                        <p class="text-left">"We were here to shoot street dancer movie, AKS CASTINGS have done a
                            fabulous job, helped us a lot and they are very good and hard working. I wish all the best
                            to ABEERA K SHEIKH May God always bless you and keep up the work."</p>
                        <p class="author text-left">— Remo Dsouza | Indian choreographer, actor, and film director</p>
                    </div>
                    <div class="testimonial">
                        <div class="stars text-left fs-3">★★★★★</div>
                        <!-- <h2 style="line-height: 0.75;" class="lateef text-left">VERY LOVELY AND PROFESSIONAL</h2> -->
                        <p class="text-left">"We almost shooted for 4 days which amazingly passed and ABEERA K SEIKH is
                            extremely hard-working amazing work" </p>
                        <p class="author text-left">— Arvindr Khaira | Indian Film and Music video director</p> <br />
                        <br /> <br /> <br />
                    </div>
                    <div class="testimonial">
                        <div class="stars text-left fs-3">★★★★★</div>
                        <!-- <h2 style="line-height: 0.75;" class="lateef text-left">VERY THANKFUL, PROFESSIONAL CORPORATIONS</h2> -->
                        <p class="text-left">"I came here for filming a song and Abeera k sheikh provided Models and
                            dancers. She is great at her job.. God bless "</p>
                        <p class="author text-left">— B Praak— Indian singer and music director</p> <br /> <br /> <br />
                        <br />
                    </div>
                    <div class="testimonial">
                        <div class="stars text-left fs-3">★★★★★</div>
                        <!-- <h2 style="line-height: 0.75;" class="lateef text-left">HUMAN, VERY AVAILABLE AND RESPONSIVE</h2> -->
                        <p class="text-left">"Abeera K Sheikh has helped and supported a lot in our project. All the
                            best God bless."</p>
                        <p class="author text-left">— Jassie Gill— Indian Singer and Actor</p> <br /> <br /> <br />
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){            $('#client-testimonials').owlCarousel({                loop: true,                margin: 10,                nav: true,                responsive: {                    0: {                        items: 1                    },                    600: {                        items: 2                    },                    1000: {                        items: 4                    }                }            });        });    
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {            // Initialize phone inputs            var phoneInputs = document.querySelectorAll(".phone-input");            phoneInputs.forEach(function(input) {                // window.intlTelInput(input, {                //     initialCountry: "us",                //     utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"                // });            });            const formSteps = document.querySelectorAll('.form-step');            const progressBar = document.getElementById('progress-bar');            let currentStep = 0;            function showStep(step) {                formSteps.forEach((formStep, index) => {                    formStep.style.display = index === step ? 'block' : 'none'; // Show/hide steps                });                updateProgressBar();            }            function updateProgressBar() {                const progress = ((currentStep + 1) / formSteps.length) * 100; // Updated to start at 25%                progressBar.style.width = progress + '%';                progressBar.innerText = Math.round(progress) + '%'; // Show percentage            }            function validateStep(step) {                const inputs = formSteps[step].querySelectorAll('input, textarea');                for (const input of inputs) {                    if (!input.value) {                        input.classList.add('is-invalid'); // Add invalid class                        return false;                    } else {                        input.classList.remove('is-invalid'); // Remove invalid class if valid                    }                }                return true;            }            document.querySelectorAll('.btn-next').forEach(button => {                button.addEventListener('click', () => {                    if (validateStep(currentStep)) {                        if (currentStep < formSteps.length - 1) {                            currentStep++;                            showStep(currentStep);                        }                    }                });            });            document.querySelectorAll('.btn-prev').forEach(button => {                button.addEventListener('click', () => {                    if (currentStep > 0) {                        currentStep--;                        showStep(currentStep);                    }                });            });            // Initialize the first step and set progress to 25%            showStep(currentStep);            updateProgressBar(); // This will set the initial progress bar to 25%        });    
</script>
<style>
    .owl-carousel .testimonial {
        padding: 20px;
        background-color: #fff;
        text-align: center;
    }

    .owl-carousel .stars {
        font-size: 18px;
        color: #f39c12;
    }

    .owl-carousel .testimonial h3 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .owl-carousel .testimonial p {
        font-size: 14px;
        color: #555;
    }

    .owl-carousel .author {
        font-weight: bold;
        margin-top: 15px;
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
</style>@endsection