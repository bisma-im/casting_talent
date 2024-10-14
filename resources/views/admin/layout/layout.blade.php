<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('admin.includes.links')

    <style>
        .sidebar .nav .nav-item.active>.nav-link:before {
            content: "";
            position: absolute;
            left: 0;
            top: .5rem;
            bottom: 0;
            background: #bd0a0a;
            height: 24px;
            width: 4px;
        }

        .sidebar .nav .nav-item.active>.nav-link .menu-title {
            color: #e11d09;
            font-family: "nunito-medium", sans-serif;
        }

        .sidebar .nav .nav-item .nav-link .icon-bg .menu-icon {
            color: #e11d09;
        }
    </style>
</head>

<body>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;

            @if (Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif

            @if (Session::has('info'))
                toastr.info('{{ Session::get('info') }}');
            @endif

            @if (Session::has('warning'))
                toastr.warning('{{ Session::get('warning') }}');
            @endif

            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @endif
        });
    </script>

    <div class="container-scroller">

        @include('admin.includes.top-bar')

        <div class="container-fluid page-body-wrapper">

            @include('admin.includes.side-bar')

            <div class="main-panel">

                <div class="content-wrapper">

                    @yield('admin-content')

                    {{-- @include('sweetalert::alert') --}}

                </div>

            </div>

        </div>

    </div>


    @include('admin.includes.scripts')

</body>

</html>
