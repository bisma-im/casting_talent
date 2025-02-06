@extends('admin.layout.layout')

@section('title', 'Admin | Queries')


@section('admin-content')

<style>
    .pagination {
    display: flex;
    justify-content: center; /* Center the pagination controls */
    list-style-type: none; /* Removes default list styling */
    padding: 0;
}

.pagination li {
    margin: 0 5px; /* Spacing between page numbers */
}

.pagination a {
    border: 1px solid #ddd; /* Adds border to the pagination links */
    padding: 5px 10px; /* Padding inside the pagination links */
    text-decoration: none; /* Removes underline from links */
    color: #007bff; /* Bootstrap primary color for links */
}

.pagination a:hover {
    background-color: #eee; /* Adds a background color on hover */
}

</style>
  

    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading d-flex justify-content-between">
                    <h1>Queries</h1>
                </div>
            </div>
        </div>
        <hr>
        <div class="row my-5">
            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead class="bg-dark text-white text-center">
                        <th>#id</th>
                        <th>User name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Query</th>
                        <th>Status</th>
                    </thead>
                    <tbody class="border text-center">
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->whatsappp_number }}</td>
                                <td>{{ Str::limit($contact->message, 150) }}</td>
                                <td>
                                    <form action="" method="">
                                        @csrf
                                        <button type="submit" class="badge badge-success">reply</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div> --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading d-flex justify-content-between">
                    <h1>Queries</h1>
                </div>
            </div>
        </div>
        <hr>
        <div class="row my-5">
            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead class="bg-dark text-white text-center">
                        <th>#id</th>
                        <th>User name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Query</th>
                        <th>Status</th>
                    </thead>
                    <tbody class="border text-center">
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->whatsappp_number }}</td>
                                <td>{{ Str::limit($contact->message, 150) }}</td>
                                <td>
                                    <form action="" method="">
                                        @csrf
                                        <button type="submit" class="badge badge-success">reply</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <!-- Pagination Links -->
                <div class="d-flex justify-content-center">
                    {{ $contacts->links('vendor.pagination.default') }}
                </div>
            </div>
        </div>
    </div>



@endsection
