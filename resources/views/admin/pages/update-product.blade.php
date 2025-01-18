@extends('admin.layout.layout')

@section('title', 'Admin | Products')


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
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading d-flex justify-content-between">
                    <h1>Update Products</h1>
                    <div class="d-flex">
                        <div class="examplesearch-form mx-3">
                            <form action="" method="" class="example">
                                @csrf
                                <input type="text" placeholder="Search.." value="" name="search"
                                    class="form-control">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="sec-form bg-dark p-4" style="border-radius:20px;">
                    <form action="{{ route('admin.product.update', $product->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="file" name="image"
                                style="width:100%; padding:8px 0px; color:black; background: rgb(216, 223, 216);">
                            <div style="width:70px; height:70px; border-radius:50%">
                                <img src="{{ url('/uploads/products/' . $product->file) }}" alt=""
                                    style="width:70px; height:70px;">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                                placeholder="Enter product name...">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="price" value="{{ $product->price }}" class="form-control"
                                placeholder="Enter product price...">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="description" value="{{ $product->description }}"
                                class="form-control" placeholder="Enter product descripition...">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
