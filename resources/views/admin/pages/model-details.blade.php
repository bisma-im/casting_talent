@extends('admin.layout.layout')

@section('title', 'Admin | Properties')

@section('admin-content')
    <style>
        .infoPre a {
            margin: 10px auto;
            padding: 10px;
            background: #003d70;
            cursor: pointer;
            font-size: 12px;
            line-height: 1.5;
            font-family: "nunito-bold", sans-serif;
            font-weight: 600;
            color: white;
        }

        ul li p {
            color: #314174;
            font-family: monospace;
        }

        .parentClass {
            background-color: #aab3cf;
            padding: 20px;
            border-top-left-radius: 25px;
            }
        .parentClass h3{
            border-bottom: 1px solid black;
            border-bottom-right-radius: 7px;
            padding-bottom: 10px;
        }
        .imgDiv {
            margin-bottom: 10px;
            border-bottom: 1px solid #8996bf;
            border-bottom-left-radius: 25px;
        }
    </style>

    <div class="container-fluid">
        <div class="container-fluid infoPre">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="d-flex">
                        <a href="{{ route('add.properties.get') }}">Go Back</a>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-md-12 d-flex imgDiv">
                    <?php
                    $data = 'http://127.0.0.1:8000/user-assets/wp-content/uploads/2021/03/Shop-1-640x427.webp';
                    ?>
                    @if ($data)
                        @if (!empty($data))
                            <div style="margin: 0 auto;" class="mb-5 ">
                                <img src="{{ $data }}" alt="Property Image"
                                    style="width: 400px; height: 300px;border-radius:5px;" />
                            </div>
                        @else
                            No images available
                        @endif
                    @else
                        No images available
                    @endif
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="row parentClass">
                        <div class="col-6 col-md-6 col-lg-6">
                            <ul>
                                <li style="list-style: none;">
                                    <h3 style="color: black;">Mls Major Type</h3>
                                    <p>{{ $propertiesDetail->Mls_Major_Change_Type ? $propertiesDetail->Mls_Major_Change_Type : '--'}}</p>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <ul>
                                <li style="list-style: none;">
                                    <h3 style="color: black;">MLS</h3>
                                    <p>{{ $propertiesDetail->MLS ? $propertiesDetail->MLS : '--'}}</p>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <ul>
                                <li style="list-style: none;">
                                    <h3 style="color: black;">Type</h3>
                                    <p>{{ $propertiesDetail->Type ? $propertiesDetail->Type : '--'}}</p>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <ul>
                                <li style="list-style: none;">
                                    <h3 style="color: black;">Price</h3>
                                    <p>{{ $propertiesDetail->Price ? $propertiesDetail->Price : '--'}}</p>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <ul>
                                <li style="list-style: none;">
                                    <h3 style="color: black;">Status</h3>
                                    <p>{{ $propertiesDetail->Status ? $propertiesDetail->Status : '--'}}</p>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <ul>
                                <li style="list-style: none;">
                                    <h3 style="color: black;">Address</h3>
                                    <p>{{ $propertiesDetail->Address ? $propertiesDetail->Address : '--'}}</p>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <ul>
                                <li style="list-style: none;">
                                    <h3 style="color: black;">Subdivision Complex</h3>
                                    <p>{{ $propertiesDetail->Subdivision_Complex ? $propertiesDetail->Subdivision_Complex : '--'}}</p>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <ul>
                                <li style="list-style: none;">
                                    <h3 style="color: black;">City</h3>
                                    <p>{{ $propertiesDetail->City ? $propertiesDetail->City : '--'}}</p>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <ul>
                                <li style="list-style: none;">
                                    <h3 style="color: black;">Area</h3>
                                    <p>{{ $propertiesDetail->Area ? $propertiesDetail->Area : '--'}}</p>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <ul>
                                <li style="list-style: none;">
                                    <h3 style="color: black;">Country</h3>
                                    <p>{{ $propertiesDetail->County ? $propertiesDetail->County : '--'}}</p>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <ul>
                                <li style="list-style: none;">
                                    <h3 style="color: black;">Bedrooms</h3>
                                    <p>{{ $propertiesDetail->Total_Bedrooms ? $propertiesDetail->Total_Bedrooms : '--'}}</p>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <ul>
                                <li style="list-style: none;">
                                    <h3 style="color: black;">Full Baths</h3>
                                    <p>{{ $propertiesDetail->Total_Full_Baths ? $propertiesDetail->Total_Full_Baths : '--'}}</p>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <ul>
                                <li style="list-style: none;">
                                    <h3 style="color: black;">Half Baths</h3>
                                    <p>{{ $propertiesDetail->Total_Half_Baths ? $propertiesDetail->Total_Half_Baths : '--'}}</p>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <ul>
                                <li style="list-style: none;">
                                    <h3 style="color: black;">Year Built</h3>
                                    <p>{{ $propertiesDetail->Year_Built ? $propertiesDetail->Year_Built : '--' }}</p>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <ul>
                                <li style="list-style: none;">
                                    <h3 style="color: black;">Contract Date</h3>
                                    <p>{{ $propertiesDetail->Listing_Contract_Date ? $propertiesDetail->Listing_Contract_Date : '--' }}</p>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <ul>
                                <li style="list-style: none;">
                                    <h3 style="color: black;">Expiration Date</h3>
                                    <p>{{ $propertiesDetail->Expiration_Date ? $propertiesDetail->Expiration_Date : '--' }}
                                    </p>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <ul>
                                <li style="list-style: none;">
                                    <h3 style="color: black;">Close Date</h3>
                                    <p>{{ $propertiesDetail->Close_Date ? $propertiesDetail->Close_Date : '--' }}</p>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
