@extends('users.layouts.layout')

@section('title', 'Casting Talent | Contact')

@section('main-content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>


    <section class="innerpages">
        <div class="container">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="innertext">
                    <h1>Contact us</h1>

                </div>
            </div>
        </div>
    </section>

    <section class="contactussec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <form action="{{ route('contact.post') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="contactlist">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="contactlist">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="contactlist">
                                    <label>Calling Number</label>
                                    <input type="tel" name="calling_number" class="form-control phone-input">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="contactlist">
                                    <label>Whatsapp Number</label>
                                    <input type="tel" name="whatsapp_number" class="form-control phone-input">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="contactlist">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="contactlist">
                                    <label>Message</label>
                                    <textarea name="message" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="contactlist mt-5">
                                    <button>Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="mapimg">
                        <img src="{{ url('user-assets') }}/images/map_img.png" class="img-fluid" alt="img">
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="contactlist">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-10 col-xl-10 col-xxl-10 col-lg-10">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 border-right">
                            <div class="contactlisting">
                                <h5>UAE</h5>
                                <p>45 Park Avenue, Apt. 303New York, NY 10016USA</p>
                                <a href="" class="number">+1 800 111 000</a>
                                <a href="#" class="emailcta">newyork@casttalent.com</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 border-right">
                            <div class="contactlisting">
                                <h5>KSA</h5>
                                <p>151, Boulevard Hausmann75008 ParisFrance</p>
                                <a href="" class="number">+1 800 111 000</a>
                                <a href="#" class="emailcta">paris@casttalent.com</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="contactlisting">
                                <h5>Oman</h5>
                                <p>Behrenstrasse 1210117 BerlinGermany</p>
                                <a href="" class="number">+1 800 111 000</a>
                                <a href="#" class="emailcta">berlin@casttalent.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script>
        document.addEventListener("DOMContentLoaded", function() {
            // Select all phone input fields
            var phoneInputs = document.querySelectorAll(".phone-input");
            
            // Initialize intl-tel-input for each phone input field
            phoneInputs.forEach(function(input) {
                window.intlTelInput(input, {
                    initialCountry: "us", // Set the default country if needed
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // Optional
                });
            });
        });
    </script>

@endsection
