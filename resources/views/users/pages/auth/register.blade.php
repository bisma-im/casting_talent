@extends('users.layouts.layout')

@section('title', 'Casting Talent | Register')

@section('main-content')

    <style>
        section.testtimonailsec {
            display: none;
        }
    </style>
    <section class="innerpages">
        <div class="container">
           
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
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="innertext">

                    <h1>Registration</h1>

                </div>
            </div>
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="formSec">
                <form method="post" action="{{ route('register.post') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="contactlist">
                                <label>Profile *</label>
                                <input type="file" name="profile" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="contactlist">
                                <label>First Name *</label>
                                <input type="text" name="fname" class="form-control" placeholder="First Name"  value="{{ $errors->has('fname') ? '' : old('fname') }}"  required>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="contactlist">
                                <label>Last Name *</label>
                                <input type="text" name="lname" class="form-control" placeholder="Last Name"  value="{{ $errors->has('lname') ? '' : old('lname') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="contactlist">
                                <label>Account Type *</label>
                                <select name="account_type" id="" class="form-control">
                                    <option value="">-- Select Type --</option>
                                    <option value="model" {{ old('account_type') == 'model' && !$errors->has('account_type') ? 'selected' : '' }}>Talents</option>
                                    <option value="business" {{ old('account_type') == 'business' && !$errors->has('account_type') ? 'selected' : '' }}>Clients</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="contactlist">
                                <label>Email *</label>
                                <input type="email" name="email"   value="{{ $errors->has('email') ? '' : old('email') }}"  class="form-control" placeholder="example@gmail.com"
                                    required>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="contactlist">
                                <label>Password *</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="contactlist">
                                <label>Confirm Password</label>
                                <input type="password" name="c_password" class="form-control" placeholder="Password"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <a href="{{ route('login.get') }}">Already account!</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="contactlist text-center mt-5">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </section>



@endsection
