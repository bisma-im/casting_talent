@extends('admin.layout.layout')

@section('title', 'Admin | Queries')


@section('admin-content')
<style>
    .table-responsive {
        overflow-x: auto;
        width: 100%;
        margin: 0 auto;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="heading d-flex justify-content-between">
                <h1>Client Inquiries</h1>
            </div>
        </div>
    </div>
    <hr>
    <div class="row my-5">
        <div class="col-lg-12">
            <div class="table-responsive text-center">
                <table class="table table-striped">
                    <thead class="bg-dark text-white text-center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Project</th>
                        <th>Location</th>
                        <th>Categories</th>
                        <th>Budget (AED)</th>
                        <th>Brief File</th>
                        <th>Action</th>
                    </thead>
                    <tbody class="border text-center">
                        @foreach ($contacts as $contact)
                        <tr data-id="{{ $contact->id }}" data-no-of-days="{{ $contact->no_of_days }}"
                            data-no-of-hours="{{ $contact->no_of_hours }}"
                            data-start-date="{{ \Carbon\Carbon::parse($contact->start_date)->format('d-M-Y') }}"
                            data-end-date="{{ \Carbon\Carbon::parse($contact->end_date)->format('d-M-Y') }}"
                            data-no-of-talents-male="{{ $contact->no_of_talents_male }}"
                            data-no-of-talents-female="{{ $contact->no_of_talents_female }}"
                            data-nationalities="{{ $contact->nationalities }}"
                            data-project-detail="{{ $contact->project_detail }}"
                            data-whatsapp-number="{{ $contact->whatsapp_number }}"
                            data-starting-amount="{{ $contact->starting_amount }}"
                            data-max-amount="{{ $contact->maximum_amount }}">
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->first_name . ' ' . $contact->last_name }}</td>
                            <td>{{ $contact->company }}</td>
                            <td>{{ $contact->calling_number }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->project }}</td>
                            <td>{{ $contact->city . ', ' . $contact->state . ', ' . $contact->country }}</td>
                            <td>{{ $contact->categories }}</td>
                            <td>{{ $contact->starting_amount . ' - ' . $contact->maximum_amount }}</td>
                            <td>
                                @if ($contact->brief_file)
                                    <a href="{{ asset($contact->brief_file) }}" download>
                                        <i class="fas fa-file"></i>
                                    </a>
                                @else
                                    {{ 'N/A' }}
                                @endif
                            </td>
                            
                            <td>
                                <i class="fas fa-eye" data-toggle="modal" data-target="#detailsModal"
                                    style="cursor: pointer;"></i>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination Links -->
            <div class="d-flex justify-content-center">
                {{ $contacts->links('vendor.pagination.default') }}
            </div>
            <!-- Modal -->
            <div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-black" id="detailsModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="my-modal-body">
                            <!-- Dynamic content will be loaded here -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="modalClose" class="btn btn-secondary"
                                data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
      document.querySelectorAll('.fa-eye').forEach(function(icon) {
        icon.addEventListener('click', function() {
          const row = icon.closest('tr');
          const modalBody = document.querySelector('#detailsModal .my-modal-body');
          const modalHeader = document.getElementById('detailsModalLabel');
          $('#modalClose').removeClass('disabled');
          modalHeader.innerText = `Job Detail # ${row.dataset.id}`
          modalBody.innerHTML = `
            <div class="card">
              <div class="card-body py-4">
                <p class="text-black"><strong>Name:</strong> ${row.cells[1].textContent}</p>
                <p class="text-black"><strong>Company:</strong> ${row.cells[2].textContent}</p>
                <p class="text-black"><strong>Calling Number:</strong> ${row.cells[3].textContent}</p>
                <p class="text-black"><strong>WhatsApp Number:</strong> ${row.dataset.whatsappNumber}</p>
                <p class="text-black"><strong>Email:</strong> ${row.cells[4].textContent}</p>
                <p class="text-black"><strong>Project:</strong> ${row.cells[5].textContent}</p>
                <p class="text-black"><strong>Location:</strong> ${row.cells[6].textContent}</p>
                <p class="text-black"><strong>Categories:</strong> ${row.cells[7].textContent}</p>
                <p class="text-black"><strong>Starting Amount:</strong> ${row.dataset.startingAmount} AED</p>
                <p class="text-black"><strong>Maximum Amount:</strong> ${row.dataset.maxAmount} AED</p>
                <p class="text-black"><strong>No. of Days:</strong> ${row.dataset.noOfDays}</p>
                <p class="text-black"><strong>No. of Hours:</strong> ${row.dataset.noOfHours}</p>
                <p class="text-black"><strong>Start Date:</strong> ${row.dataset.startDate}</p>
                <p class="text-black"><strong>End Date:</strong> ${row.dataset.endDate}</p>
                <p class="text-black"><strong>No. of Male Talents:</strong> ${row.dataset.noOfTalentsMale}</p>
                <p class="text-black"><strong>No. of Female Talents:</strong> ${row.dataset.noOfTalentsFemale}</p>
                <p class="text-black"><strong>Nationalities:</strong> ${row.dataset.nationalities}</p>
                <p class="text-black"><strong>Project Detail:</strong> ${row.dataset.projectDetail}</p>
              </div>
            </div>
          `;
        });
      });
    });
</script>


@endsection