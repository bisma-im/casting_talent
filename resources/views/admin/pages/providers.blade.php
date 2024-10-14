@extends('admin.layout.layout')

@section('title', 'Admin | Service Providers')

@section('admin-content')

    <!-- Include Fancybox CSS from CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    <!-- Include jQuery (required for Fancybox) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Fancybox JS from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


    <style>
        form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 80%;
            background: #f1f1f1;
        }

        form.example button {
            float: left;
            width: 20%;
            padding: 10px;
            background: #0c2a42;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;
        }

        form.example button:hover {
            background: #16181a;
        }

        form.example::after {
            content: "";
            clear: both;
            display: table;
        }

        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .page-item {
            margin: 0 2px;
        }

        .page-link {
            background-color: #003d70;
            border-color: #003d70;
            color: #ffffff;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 4px;
        }

        .page-item.active .page-link {
            background-color: #ff0000;
            border-color: #ff0000;
        }

        .page-link.border_non_active:hover {
            background-color: #721111;
        }

        .sidebar .nav .nav-item .nav-link .icon-bg .menu-icon {
            color: #42a9ff;
        }

        .sidebar .nav .nav-item.active>.nav-link:before {
            background-color: #721111;
        }

        .sidebar .nav .nav-item.active>.nav-link .menu-title {
            color: #ff0000;
        }

        .sidebar .nav .nav-item.active>a.icon-bg .menu-icon {
            color: #ff0000;
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading d-flex justify-content-between">
                    <h1 class="fw-bold" style="color: #003C51;">Service Providers</h1>

                    <div class="d-flex">
                        <div class="examplesearch-form mx-3">
                            <form action="" method="" class="example">
                                <input type="text" placeholder="Search.." value="" name="search"
                                    class="form-control">
                                <button type="submit text-white" style="background: #003C51;"><i
                                        class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row my-5 fullInfo">
            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead class="text-white" style="background: #003C51;">
                        <th>#id</th>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Membership</th>
                        <th>Approval</th>
                        <th></th>
                    </thead>
                    <tbody class="border">
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($providers as $item)
                            @php
                                $paid = DB::table('care_giver_payments')
                                    ->where('care_giver_id', $item->id)
                                    ->first();
                                // dd($paid);
                            @endphp
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>
                                    <a data-fancybox="gallery" href="{{ url('uploads/care-givers/' . $item->profile) }}">
                                        <img src="{{ url('uploads/care-givers/' . $item->profile) }}" alt="">
                                    </a>
                                </td>
                                <td>{{ $item->fname }} {{ $item->lname }}</td>
                                <td><a href="mailto:{{ $item->email }}">{{ $item->email }}</a></td>
                                <td><a href="tel:{{ $item->phone }}">{{ $item->phone }}</a></td>
                                <td>
                                    @if ($paid)
                                        <button type="button" class="badge badge-success badge-sm" data-bs-toggle="tooltip"
                                            title="Paid Amount: {{ $paid->package_amuont }}">
                                            Paid ${{ $paid->package_amuont }}
                                        </button>
                                    @else
                                        <button type="button" class="badge badge-danger badge-sm" data-bs-toggle="tooltip"
                                            title="This provider has not paid yet">
                                            UnPaid
                                        </button>
                                    @endif
                                </td>
                                <td>
                                    @if ($item->is_approved == 1)
                                        <a href="javascript:void(0);" class="addCat mx-4"
                                            data-provider-id="{{ $item->id }}" data-bs-toggle="tooltip"
                                            title="Approved">
                                            <i class="fa fa-check-circle text-success"
                                                style="font-size:22px; cursor: pointer;"></i>
                                        </a>
                                    @else
                                        <a href="javascript:void(0);" class="addCat mx-4"
                                            data-provider-id="{{ $item->id }}" data-bs-toggle="tooltip"
                                            title="Pending">
                                            <i class="fa fa-clock-o text-warning"
                                                style="font-size:22px; cursor: pointer;"></i>
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.provider-services.get', $item->id) }}" class="addCat mx-4"
                                        data-bs-toggle="View Services" title="View Services">
                                        <button class="badge badge-info" style="font-size:12px; cursor: pointer;">view</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="paginate d-flex justify-content-center align-item-center bg-light p-2"
                    style="border-radius:10px;">
                    <div class="text-dark pt-3">
                        {{ $providers->links() }}
                        <div hidden>
                            @if ($providers->lastPage() > 1)
                                <ul class="pagination justify-content-center">
                                    <li class="page-item {{ $providers->currentPage() == 1 ? ' disabled' : '' }}">
                                        <a class="page-link border_none_pagination"
                                            href="{{ $providers->url($providers->currentPage() - 1) }}">Previous</a>
                                    </li>
                                    @for ($i = $providers->currentPage(); $i <= $providers->currentPage() + 8; $i++)
                                        <li class="page-item">
                                            <a class="page-link {{ $providers->currentPage() == $i ? ' border_active' : 'border_non_active' }} border_none2"
                                                href="{{ $providers->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    <li
                                        class="page-item {{ $providers->currentPage() == $providers->lastPage() ? ' disabled' : '' }}">
                                        <a class="page-link border_none_pagination"
                                            href="{{ $providers->url($providers->currentPage() + 1) }}">Next</a>
                                    </li>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('.addCat').click(function() {
                var providerId = $(this).data('provider-id');

                // URL for the AJAX request
                var url = '{{ route('admin.approved-providers.post') }}';

                // Send AJAX request to update is_provider value
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        provider_id: providerId,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        // Find the badge using the data-provider-id attribute
                        var badge = $('.addCat[data-provider-id="' + providerId + '"] i');

                        // Update the badge icon and tooltip based on the response
                        if (response.is_approved == 1) {
                            badge.attr('class', 'fa fa-check-circle text-success');
                            badge.closest('a').attr('title', 'Approved');
                        } else if (response.is_approved == 0) {
                            badge.attr('class', 'fa fa-clock-o text-warning');
                            badge.closest('a').attr('title', 'Pending');
                        } else {
                            badge.attr('class', 'fa fa-ban text-danger');
                            badge.closest('a').attr('title', 'Banned');
                        }

                        // Re-initialize the tooltip to update the title
                        $('[data-bs-toggle="tooltip"]').tooltip('dispose').tooltip();
                    },
                    error: function(xhr, status, error) {
                        console.error('Error toggling provider status: ', error);
                    }
                });
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            $("[data-fancybox]").fancybox({
                // Customize Fancybox options here if needed
                buttons: [
                    "zoom",
                    "slideShow",
                    "fullScreen",
                    "download",
                    "thumbs",
                    "close"
                ]
            });

            $('[data-bs-toggle="tooltip"]').tooltip();
        });
    </script>


@endsection
