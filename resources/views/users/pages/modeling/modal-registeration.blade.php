@extends('users.layouts.layout')

@section('title', 'Casting Talent | Model Register')

@section('main-content')


    <style>
        section.testtimonailsec {
            display: none;
        }

        .btnlist {
            display: flex;
            justify-content: end;
        }
    </style>

    <section class="innerpages">
        <div class="container">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="innertext">
                    <h1>Models Registration</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="contactussec1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <form action="javascript:;">
                        @csrf
                        <div class="multiple_steps_container">
                            <div class="maintab">
                                <div class="tab active_tab_" data-step="1">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Date Of Birth</label>
                                                <input type="date" class="form-control" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Gender</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option value="1" selected>Female</option>
                                                    <option value="2">Male</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Nationality</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Single</option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Calling Number</label>
                                                <input type="tel" class="form-control" placeholder="(000) 000 000">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Whatsapp Number</label>
                                                <input type="tel" class="form-control" placeholder="(000) 000 000">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Marital Status</label>
                                                <input type="text" class="form-control" placeholder="Single">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Ethnicity</label>
                                                <input type="text" class="form-control" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Lives in</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>United Arab Emirates</option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Biography</label>
                                                <input type="text" class="form-control" placeholder="Single">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Languages Spoken</label>
                                                <input type="text" class="form-control"
                                                    placeholder="English, Hindi, Arabic, French">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Driving License</label>
                                                <input type="text" class="form-control" placeholder="Yes">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Email</label>
                                                <input type="email" class="form-control" placeholder="Dummy321@gmail.com">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Instagram Username</label>
                                                <input type="text" class="form-control" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Height (CM)</label>
                                                <input type="text" class="form-control" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Bust (cm)</label>
                                                <input type="text" class="form-control" placeholder="lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Waist (CM)</label>
                                                <input type="text" class="form-control" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Hip (CM)</label>
                                                <input type="text" class="form-control" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Weight (KG)</label>
                                                <input type="text" class="form-control" placeholder="lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Eyes color</label>
                                                <input type="text" class="form-control" placeholder="Brown">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Hair Color</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Brown</option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Hair Length</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Long / Short</option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Shoe Size (EURO)</label>
                                                <input type="text" class="form-control" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Dress Size (EURO)</label>
                                                <input type="text" class="form-control" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <div class="contactlist">
                                                <label>Your Hourly/ Session Rate</label>
                                                <input type="text" class="form-control" placeholder="Lorem Ipsum">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="tab" data-step="2">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="caterlisttext">
                                                <h3>Select A Category</h3>
                                            </div>
                                            <div
                                                class="row row-cols-5 row-cols-md-5 row-cols-lg-5 row-cols-xl-5 row-cols-xxl-5">
                                                <div class="col">
                                                    <div class="selectbox">
                                                        <input type="radio">
                                                        <label class="customselect">
                                                            <div class="catogerybox">
                                                                <img src="images/category_1.png" class="img-fluid"
                                                                    alt="img">
                                                                <h5>Actors</h5>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="selectbox">
                                                        <input type="radio">
                                                        <label class="customselect">
                                                            <div class="catogerybox">
                                                                <img src="images/category_2.png" class="img-fluid"
                                                                    alt="img">
                                                                <h5>Models</h5>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="selectbox">
                                                        <input type="radio">
                                                        <label class="customselect">
                                                            <div class="catogerybox">
                                                                <img src="images/category_3.png" class="img-fluid"
                                                                    alt="img">
                                                                <h5>Dancers & Proformers</h5>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="selectbox">
                                                        <input type="radio">
                                                        <label class="customselect">
                                                            <div class="catogerybox">
                                                                <img src="images/category_4.png" class="img-fluid"
                                                                    alt="img">
                                                                <h5>Film Crew</h5>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="selectbox">
                                                        <input type="radio">
                                                        <label class="customselect">
                                                            <div class="catogerybox">
                                                                <img src="images/category_5.png" class="img-fluid"
                                                                    alt="img">
                                                                <h5>Musicians</h5>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="selectbox">
                                                        <input type="radio">
                                                        <label class="customselect">
                                                            <div class="catogerybox">
                                                                <img src="images/category_6.png" class="img-fluid"
                                                                    alt="img">
                                                                <h5>Influencers</h5>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="selectbox">
                                                        <input type="radio">
                                                        <label class="customselect">
                                                            <div class="catogerybox">
                                                                <img src="images/category_7.png" class="img-fluid"
                                                                    alt="img">
                                                                <h5>Presenters & Emcees</h5>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="selectbox">
                                                        <input type="radio">
                                                        <label class="customselect">
                                                            <div class="catogerybox">
                                                                <img src="images/category_8.png" class="img-fluid"
                                                                    alt="img">
                                                                <h5>Event Staff & Ushers</h5>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="selectbox">
                                                        <input type="radio">
                                                        <label class="customselect">
                                                            <div class="catogerybox">
                                                                <img src="images/category_9.png" class="img-fluid"
                                                                    alt="img">
                                                                <h5>Photographers / Videographers</h5>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="selectbox">
                                                        <input type="radio">
                                                        <label class="customselect">
                                                            <div class="catogerybox">
                                                                <img src="images/category_10.png" class="img-fluid"
                                                                    alt="img">
                                                                <h5>Makeup, Hair, Painter & Fashion Stylis</h5>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="tab" data-step="2">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="caterlisttext">
                                                <h3>Musicians</h3>
                                            </div>

                                            <div class="musicainlist">
                                                <ul>
                                                    <li>
                                                        <label>
                                                            <input type ="checkbox">
                                                            <label>Tv Channels, Game Shows</label>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type ="checkbox">
                                                            <label>Tv Shows</label>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type ="checkbox">
                                                            <label>Reality Tv</label>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type ="checkbox">
                                                            <label>Documentaries & Factual</label>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type ="checkbox">
                                                            <label>Hobbyist</label>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type ="checkbox">
                                                            <label>Independent Artist</label>
                                                        </label>
                                                    </li>

                                                    <li>
                                                        <label>
                                                            <input type ="checkbox">
                                                            <label>Independent Label Artist</label>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type ="checkbox">
                                                            <label>Major Label Artist</label>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type ="checkbox">
                                                            <label>Post Label Musician</label>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type ="checkbox">
                                                            <label>Song Writer</label>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type ="checkbox">
                                                            <label>Session Musician</label>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type ="checkbox">
                                                            <label>Producer- Composer</label>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type ="checkbox">
                                                            <label>Orchestral Musician</label>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type ="checkbox">
                                                            <label>Teacher, Retired Artist</label>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type ="checkbox">
                                                            <label>Entrepreneurial Artist</label>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type ="checkbox">
                                                            <label>Singer</label>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type ="checkbox">
                                                            <label>Musicianmusic</label>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type ="checkbox">
                                                            <label>Band Guitarist</label>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type ="checkbox">
                                                            <label>Violinist</label>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label>
                                                            <input type ="checkbox">
                                                            <label>Rapper</label>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="tab" data-step="2">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                            <div class="uploadimg">
                                                <h5>Upload Your Photos</h5>
                                                <div class="uploadbox">
                                                    <div class="uploadmain">
                                                        <img src="images/upload_img_4.png" class="img-fluid"
                                                            alt="img">
                                                        <h6>Drag and Drop your images here</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                            <div class="uploadimg">
                                                <h5>Upload Your Photos</h5>
                                                <div class="uploadbox">
                                                    <div class="uploadmain">
                                                        <img src="images/upload_img_2.png" class="img-fluid"
                                                            alt="img">
                                                        <h6>Drag and Drop your images here</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                            <div class="uploadimg">
                                                <h5>Upload Your Photos</h5>
                                                <div class="uploadbox">
                                                    <div class="uploadmain">
                                                        <img src="images/upload_img_3.png" class="img-fluid"
                                                            alt="img">
                                                        <h6>Drag and Drop your images here</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                            <div class="uploadimg">
                                                <h5>Upload Your Photos</h5>
                                                <div class="uploadbox">
                                                    <div class="uploadmain">
                                                        <img src="images/upload_img_4.png" class="img-fluid"
                                                            alt="img">
                                                        <h6>Drag and Drop your images here</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="contactlist btnlist mt-5">
                                        <button class="orange previousButtonForm" id="prevStepBtn"
                                            style="display:none;">Back</button>
                                        <button class="nextButtonForm" id="nextStepBtn">Next</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </section>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $("#nextStepBtn").click(function(e) {
        debugger
            let activeTab = $(".multiple_steps_container .tab.active_tab_")
            let input = Array.from($(activeTab)[0].querySelectorAll("input"))
            input.forEach(elem => {
                if ((elem.checked || (elem.type != "radio" && elem.value != "")) && activeTab.next()
                    .length != 0) {
                    $(activeTab).removeClass("active_tab_")
                    $(activeTab).next().addClass("active_tab_")
                    window.scrollTo({
                        top: 10,
                        behavior: 'smooth'
                    });
                    $("#prevStepBtn").css("display", "block")

                }
            })
            if ($(activeTab).nextAll().length == 1) {
                e.preventDefault()
                $(this).html("Submit")
                this.type = "submit"
            }

        })


        $("#prevStepBtn").click(function() {
            $("#nextStepBtn").html("Next")
            this.type = "button"
            let activeTab = $(".multiple_steps_container .tab.active_tab_")
            if (activeTab.prev().length != 0) {
                $(activeTab).removeClass("active_tab_")
                $(activeTab).prev().addClass("active_tab_")
                // window.scrollTo({ top: 10, behavior: 'smooth' });
                window.scrollTo({
                    top: 10
                });

            }
            if ($(activeTab).prevAll().length == 1) {
                $("#prevStepBtn").css("display", "none")
            }
        })
    </script>

@endsection
