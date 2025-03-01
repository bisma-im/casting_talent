@extends('admin.layout.layout')

@section('title', 'Admin | Users')


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
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading d-flex justify-content-between">
                    <h1 class="fw-bold" style="color: #003C51;">Users</h1>

                    <div class="d-flex">
                        <div class="examplesearch-form mx-3">
                            <form action="" method="" class="example">
                                @csrf
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
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </thead>
                    <tbody class="border">
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($users as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->fname }}&nbsp;{{ $item->lname }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <a href="javascript:void(0);" class="addCat mx-4" data-id="{{ $item->id }}">
                                        <i class="add fa fa-ban text-danger" style="font-size:22px; cursor: pointer;"
                                            data-bs-toggle="modal" data-bs-target="#addContinent"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="paginate d-flex justify-content-center align-item-center bg-light p-2"
                    style="border-radius:10px;">
                    <div class="text-dark pt-3">
                        {{ $users->links() }}
                        <div hidden>
                            @if ($users->lastPage() > 1)
                                <ul class="pagination justify-content-center">
                                    <li class="page-item {{ $users->currentPage() == 1 ? ' disabled' : '' }}">
                                        <a class="page-link border_none_pagination"
                                            href="{{ $users->url($users->currentPage() - 1) }}">Previous</a>
                                    </li>
                                    @for ($i = $users->currentPage(); $i <= $users->currentPage() + 8; $i++)
                                        <li class="page-item">
                                            <a class="page-link {{ $users->currentPage() == $i ? ' border_active' : 'border_non_active' }} border_none2"
                                                href="{{ $users->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    <li
                                        class="page-item {{ $users->currentPage() == $users->lastPage() ? ' disabled' : '' }}">
                                        <a class="page-link border_none_pagination"
                                            href="{{ $users->url($users->currentPage() + 1) }}">Next</a>
                                    </li>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
