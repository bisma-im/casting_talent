@extends('admin.layout.layout')

@section('title', 'Admin | Models')

@section('admin-content')

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

        .fullInfo {
            overflow-y: auto;
        }

        td {
            cursor: pointer;
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading d-flex justify-content-between">
                    <h1 class="text-danger fw-bold">Models</h1>
                    <div class="d-flex">
                        <div class="examplesearch-form mx-3">
                            <form action="" method="" class="example">
                                <input type="text" placeholder="Search.." value="" name="search"
                                    class="form-control">
                                <button type="submit" class="text-white" style="background:#003d70;"><i
                                        class="fa fa-search"></i></button>
                            </form>
                        </div>
                        {{-- <button class="btn text-white" style="background:#003d70;" id="preInfo">Add Info</button> --}}
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row my-5 fullInfo">
            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead class="text-white text-center" style="background:#003d70;">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Nationality</th>
                            <th scope="col">Calling Number</th>
                            <th scope="col">WhatsApp Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Location</th>
                            <th scope="col">Category</th>
                            <th scope="col">Profile</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($models as $index => $model)
                            @php
                                $images = json_decode($model->profile_images);
                                $firstImage = $images[0] ?? 'default-image.jpg'; // Fallback to a default image if none exists
                            @endphp
                            <tr class="text-center">
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $model->first_name }}</td>
                                <td>{{ $model->last_name }}</td>
                                <td>{{ $model->date_of_birth }}</td>
                                <td>{{ ucfirst($model->gender) }}</td>
                                <td>{{ $model->nationality }}</td>
                                <td>{{ $model->calling_number }}</td>
                                <td>{{ $model->whatsapp_number }}</td>
                                <td>{{ $model->email }}</td>
                                <td>{{ $model->location }}</td>
                                <td>{{ ucfirst(str_replace('_', ' ', $model->category)) }}</td>
                                <td><img src="{{ url('/uploads/models/' . $firstImage) }}" alt="Profile Image"
                                        style="width: 50px; height: 50px;"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="paginate d-flex justify-content-center align-item-center bg-light p-2"
                    style="border-radius:10px;">
                    <div class="text-dark pt-3">
                        {{ $models->links() }}
                        <!-- paginator -->
                        <div hidden>
                            @if ($models->lastPage() > 1)
                                <ul class="pagination justify-content-center">
                                    <li class="page-item {{ $models->currentPage() == 1 ? ' disabled' : '' }}">
                                        <a class="page-link border_none_pagination"
                                            href="{{ $models->url($models->currentPage() - 1) }}">Previous</a>
                                    </li>
                                    @for ($i = $models->currentPage(); $i <= $models->currentPage() + 8; $i++)
                                        <li class="page-item">
                                            <a style="background-color:#003d70; border-color: #003d70;"
                                                class="page-link {{ $models->currentPage() == $i ? ' border_active' : 'border_non_active' }} border_none2"
                                                href="{{ $models->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    <li
                                        class="page-item {{ $models->currentPage() == $models->lastPage() ? ' disabled' : '' }}">
                                        <a class="page-link border_none_pagination"
                                            href="{{ $models->url($models->currentPage() + 1) }}">Next</a>
                                    </li>
                                </ul>
                            @endif
                        </div>
                        <!-- End paginator -->
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>



    <script type="text/javascript">
        $(document).ready(function() {

            $('.infoPre').show();
        });
    </script>

@endsection
