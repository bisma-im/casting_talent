@extends('users.layouts.layout')

@section('title', 'Casting Talent | Registeration')

@section('main-content')

    <style>
        section.testtimonailsec {
            display: none;
        }
    </style>
    <section class="innerpages">
        <div class="container">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="innertext">

                    <h1>Client Registration</h1>

                </div>
            </div>
        </div>
    </section>

    <section class="contactussec1">
        <div class="container">
            <form action="javascript:;">
                @csrf
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="contactlist">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="Lorem Ipsum">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="contactlist">
                            <label>Last Name</label>
                            <input type="email" class="form-control" placeholder="Lorem Ipsum">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="contactlist">
                            <label>Whatsapp Number</label>
                            <input type="tel" class="form-control" placeholder="(000) 000 000">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="contactlist">
                            <label>Email</label>
                            <input type="tel" class="form-control" placeholder="Dummy321@gmail.com">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="contactlist">
                            <label>Project</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Shoot</option>


                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="contactlist">
                            <label>Location Of Project</label>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Country</option>


                                    </select>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>City</option>


                                    </select>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Area</option>


                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="contactlist">

                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <label>No Of Days</label>
                                    <input type="number" class="form-control" placeholder="12">
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <label>No Of Hours</label>
                                    <input type="number" class="form-control" placeholder="12">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="contactlist">

                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <label>No Of Talents (Male)</label>
                                    <input type="text" class="form-control" placeholder="Lorem Ipsum">
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <label>No Of Talents (Female)</label>
                                    <input type="text" class="form-control" placeholder="Lorem Ipsum">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="contactlist">

                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <label>Required Talent</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Actor</option>


                                    </select>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <label>Nationalities</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Austrailia / Usa / Canada</option>


                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="contactlist">

                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <label>Start Date</label>
                                    <input type="date" class="form-control" placeholder="Lorem Ipsum">
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <label>End Date</label>
                                    <input type="date" class="form-control" placeholder="Lorem Ipsum">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="contactlist">
                            <label>Budget For Each Talent</label>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">

                                    <input type="text" class="form-control" placeholder="Starting Amount">
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">

                                    <input type="text" class="form-control" placeholder="Maximum Amount">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="contactlist">
                            <label>Detail Of The Project</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="contactlist mt-5">
                            <button>Submit</button>
                        </div>
                    </div>
                </div>
            </form>

    </section>



@endsection
