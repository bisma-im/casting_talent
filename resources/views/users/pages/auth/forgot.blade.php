@extends('users.layouts.layout')

@section('title', 'Casting Talent | Password')

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

                    <h1>Forgot Password</h1>

                </div>
            </div>
        </div>
    </section>

    <style>
        .formSec {
            padding: 25px;
            background: #5f9ea052;
            border-radius: 10px;
        }
    </style>

    <section class="contactussec1">
        <div class="container">
            <div class="formSec">
                <form method="post" action="{{ route('forgot.post') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="contactlist">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <a href="{{route('login.get')}}">Already Account!</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="contactlist text-center mt-5">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </section>



@endsection
