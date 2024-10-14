@extends('admin.layout.layout')

@section('title', 'Admin | Provider Services')

@section('admin-content')
    <style>
        .serSlots {
            height: 500px;
            overflow-y: auto;
        }

        .serSlots:hover {
            cursor: pointer;
            background: rgba(218, 215, 215, 0.616);
        }

        .serSlot {
            font-size: 14px;
            width: 80px;
            padding: 5px;
            background: #003C51;
            border-radius: 20px;
        }

        .slotData {
            font-size: 9px;
            width: 100%;
            padding: 5px;
            background: #011429f7;
            border-radius: 12px;
            text-align: center;
            cursor: pointer;
        }

        /* Hide the scrollbar */
        .cstmScroll::-webkit-scrollbar {
            width: 0;
            background: transparent;
        }

        .cstmScroll::-webkit-scrollbar-track {
            background: transparent;
        }

        .cstmScroll::-webkit-scrollbar-thumb {
            background: transparent;
        }

        .home-become {
            width: 100%;
            color: #fff;
            font-size: 12px;
            font-weight: 600;   
        }
        .home-become:hover {
            color: #fff;
              
        }
    </style>


    @php
        $petServicesData = DB::table('pet_services')
            ->where('user_id', $provider->user_id)
            ->get();
        $careGiverAddress = urlencode($provider->home_address);
    @endphp
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10 mx-auto">
                <div class="card left-dash p-3">
                    <div class="row">
                        <h4 class="w-100 p-2 bg-dark text-white">Care Giver</h4>
                    </div>
                    @if ($provider->count() > 0)
                        <div class="row cstmScroll">
                            <div class="col-md-12">
                                <div class="row morn-bg mb-2">
                                    <div class="col-md-4">
                                        <div class="photo w-100">
                                            @if (!empty($provider->profile))
                                                <img src="{{ url('uploads/care-givers/' . $provider->profile) }}"
                                                    class="w-100" style="border-radius: 50%;" />
                                            @else
                                                <img src="{{ url('user-assets') }}/images/original.webp" />
                                            @endif
                                        </div>
                                        <div class="personal">
                                            <div class="my-4">
                                                <h4>{{ $provider->fname }} {{ $provider->lname }}</h4>
                                                <h5>{{ $provider->email }}</h5>
                                                <p>{{ $provider->home_address }}, {{ $provider->zip_code }}</p>
                                                <div class="points">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <p>reviews</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2 d-flex align-items-center justify-content-between"
                                            style="border-radius: 15px; background:#5476a5;">
                                            <div class="phoneIcon" style="font-size: 30px; cursor: pointer;">
                                                <a href="mailto:{{ $provider->email }}"><i
                                                        class="fa fa-envelope text-danger"></i></a>
                                            </div>
                                            <div class="phoneIcon" style="font-size: 30px; cursor: pointer;">
                                                <a href="tel:{{ $provider->phone }}"><i
                                                        class="fa fa-phone text-warning"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-12">
                                        <div class="serSlots cstmScroll p-3">
                                            @if ($petServicesData->count() > 0)
                                                @foreach ($petServicesData as $service)
                                                    @php
                                                        $servBooks = DB::table('booked_services')
                                                            ->where('service_id', $service->id)
                                                            ->get();
                                                        // $slots = json_decode($service->service_slot);
                                                        // $prices = json_decode($service->service_price);
                                                    @endphp
                                                    <div
                                                        class="row my-4 justify-content-between
                                                                    w-100 serSlot p-2 text-white text-capitalize">
                                                        {{-- <h5 class="w-100 serSlot p-2 text-white text-capitalize">
                                                            {{ $service->service_title }}
                                                        </h5> --}}
                                                        <h5 class="" style="text-align: center">
                                                            {{ $service->service_title }}

                                                        </h5>
                                                        <div class="col-md-3">
                                                            <a href="javascript:void(0);"
                                                                class="home-become" data-toggle="modal"
                                                                data-target="#bookService"
                                                                data-val="{{ $service->id }}">
                                                                <div class="">
                                                                    <div class="text-green">
                                                                        <span>${{ $service->service_price }}/
                                                                            @if (strtolower($service->service_title) == 'sitting' || strtolower($service->service_title) == 'boarding')
                                                                                per-night
                                                                            @else
                                                                                per-hour
                                                                            @endif
                                                                        </span>
                                                                    </div>

                                                                </div>
                                                            </a>
                                                        </div>
                                                        {{-- <div class="col-md-12">
                                                            <div class="row p-0">
                                                                @for ($i = 0; $i < count($slots); $i++)
                                                                    @php
                                                                        $matchedSlot = $servBooks->firstWhere(
                                                                            'service_slot',
                                                                            $slots[$i],
                                                                        );
                                                                    @endphp
                                                                    <div class="col-md-3">
                                                                        @if ($matchedSlot && $matchedSlot->is_booked == 1)
                                                                            <div class="w-100 slotData mb-2"
                                                                                style="background: #005c00bf;">
                                                                                <div class="text-white fw-bold">
                                                                                    {{ $slots[$i] }}
                                                                                </div>
                                                                                <br>
                                                                                <div class="text-white fw-bold mt-0">
                                                                                    ${{ $prices[$i] }}
                                                                                </div>
                                                                            </div>
                                                                        @else
                                                                            <a href="javascript:void(0);"
                                                                                class="home-become" data-toggle="modal"
                                                                                data-target="#bookService"
                                                                                data-val="{{ $service->id }}">
                                                                                <div class="slotData mb-2">
                                                                                    <div class="text-white fw-bold">
                                                                                        {{ $slots[$i] }}
                                                                                    </div>
                                                                                    <br>
                                                                                    <div class="text-white fw-bold mt-0">
                                                                                        ${{ $prices[$i] }}
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        @endif
                                                                    </div>
                                                                @endfor
                                                                
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="alert alert-info" role="alert">
                                                    No pet services found.
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                {{-- <iframe src="https://www.google.com/maps/embed?pb={{ $careGiverAddress }}" width="100%" height="650"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
            </div>
        </div>
    </div>


@endsection
