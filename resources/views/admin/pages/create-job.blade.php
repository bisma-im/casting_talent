@extends('admin.layout.layout')

@section('title', 'Admin | Properties')

@section('admin-content')
<style>
    input::placeholder {
        color: #888888;
        /* Light grey color */
        opacity: 1;
        /* Ensure opacity is full */
    }

    /* For form inputs and textareas */
    input::placeholder,
    select::placeholder,
    textarea::placeholder {
        color: #888888;
    }

    /* Optional: Add a slightly darker grey on focus */
    input:focus::placeholder,
    select:focus::placeholder,
    textarea:focus::placeholder {
        color: #666666;
        /* Darker grey for focus */
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="heading d-flex justify-content-between">
            <h1 class="text-danger fw-bold">Create Job</h1>
        </div>
    </div>
</div>
<hr>
<div class="row mb-5">
    <div class="col-lg-12">
        <form method="POST" id="createJobForm">
            @csrf
            <div class="row">
                <!-- Project Field -->
                <div class="col-md-6 mb-3">
                    <label for="project">PROJECT</label>
                    <select name="project" id="project" class="form-control">
                        <option value="">Select Project</option>
                        <option value="shoot">Shoot</option>
                        <option value="event">Event</option>
                    </select>
                </div>

                <!-- Required Field -->
                <div class="col-md-6 mb-3">
                    <label for="required">REQUIRED</label>
                    <select name="required" id="required" class="form-control">
                        <option value="category1">Category 1</option>
                        <option value="category2">Category 2</option>
                        <option value="category3">Category 3</option>
                        <option value="category4">Category 4</option>
                        <option value="category5">Category 5</option>
                        <option value="category6">Category 6</option>
                        <option value="category7">Category 7</option>
                        <option value="category8">Category 8</option>
                        <option value="category9">Category 9</option>
                        <option value="category10">Category 10</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <!-- Date Picker -->
                <div class="col-md-6 mb-3">
                    <label for="date">DATE</label>
                    <input type="date" name="date" id="date" class="form-control">
                </div>

                <!-- Timings Dropdown -->
                <div class="col-md-6 mb-3">
                    <label for="timings">TIMINGS</label>
                    <select name="timings" id="timings" class="form-control">
                        <option value="">Select Timings</option>
                        <option value="half_day">Half Day</option>
                        <option value="full_day">Full Day</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <!-- Days Input -->
                <div class="col-md-6 mb-3">
                    <label for="days">DAYS</label>
                    <input type="number" name="days" id="days" class="form-control" placeholder="No. of Days">
                </div>

                <!-- Payment Input -->
                <div class="col-md-6 mb-3">
                    <label for="payment">PAYMENT</label>
                    <input type="text" name="payment" id="payment" class="form-control" placeholder="Amount or TBD">
                </div>
            </div>

            <div class="row">
                <!-- Country Dropdown -->
                <div class="col-md-6 mb-3">
                    <label for="country">COUNTRY</label>
                    <select name="country" id="country" class="form-control">
                        <option value="">Select Country</option>
                        <option value="uae">UAE</option>
                        <option value="ksa">KSA</option>
                        <option value="oman">Oman</option>
                    </select>
                </div>

                <!-- City Dropdown -->
                <div class="col-md-6 mb-3">
                    <label for="city">CITY</label>
                    <select name="city" id="city" class="form-control">
                        <option value="">Select City</option>
                        <!-- Dynamic city options based on country will be populated here -->
                    </select>
                </div>
            </div>

            <div class="row">
                <!-- Area Dropdown -->
                <div class="col-md-6 mb-3">
                    <label for="area">AREA</label>
                    <select name="area" id="area" class="form-control">
                        <option value="">Select Area</option>
                        <!-- Dynamic area options based on city will be populated here -->
                    </select>
                </div>

                <!-- Transportation Dropdown -->
                <div class="col-md-6 mb-3">
                    <label for="transportation">TRANSPORTATION</label>
                    <select name="transportation" id="transportation" class="form-control">
                        <option value="">Select Transportation</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <!-- Food Dropdown -->
                <div class="col-md-6 mb-3">
                    <label for="food">FOOD</label>
                    <select name="food" id="food" class="form-control">
                        <option value="">Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <!-- Payment Mode Dropdown -->
                <div class="col-md-6 mb-3">
                    <label for="payment_mode">PAYMENT MODE</label>
                    <select name="payment_mode" id="payment_mode" class="form-control">
                        <option value="">Select payment mode</option>
                        <option value="cash">Cash</option>
                        <option value="bank_transfer">Bank Transfer</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <!-- Paid Input -->
                <div class="col-md-12 mb-3">
                    <label for="paid">PAID</label>
                    <input name="paid" id="paid" class="form-control"
                        placeholder="e.g. Cash on the spot, Paid after 10 days, or if Bank Transfer, Same day" />
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Data for cities and areas based on the selected country
        const countryData = {
            uae: {
                cities: {
                    'Dubai': ['Downtown', 'Jumeirah', 'Al Barsha'],
                    'Abu Dhabi': ['Corniche', 'Khalifa City', 'Al Ain'],
                    'Sharjah': ['Al Majaz', 'Al Qasimia', 'Al Wahda'],
                }
            },
            ksa: {
                cities: {
                    'Riyadh': ['Al Olaya', 'Al Malaz', 'Diriyah'],
                    'Jeddah': ['Al Balad', 'Corniche', 'Al Hamra'],
                    'Makkah': ['Al Haram', 'Azzizia', 'Al Taneem'],
                }
            },
            oman: {
                cities: {
                    'Muscat': ['Muttrah', 'Ruwi', 'Qurum'],
                    'Salalah': ['Haffa', 'Dawkah', 'Al Wadi'],
                    'Nizwa': ['Al Aqar', 'Al Manah', 'Al Jabal'],
                }
            }
        };

        // Handle country change
        $('#country').change(function() {
            var country = $(this).val();
            var cities = countryData[country] ? countryData[country].cities : {};

            // Populate City dropdown based on selected country
            $('#city').empty().append('<option value="">Select City</option>');
            $.each(cities, function(city, areas) {
                $('#city').append('<option value="' + city + '">' + city + '</option>');
            });

            // Empty the Area dropdown
            $('#area').empty().append('<option value="">Select Area</option>');
        });

        // Handle city change
        $('#city').change(function() {
            var country = $('#country').val();
            var city = $(this).val();
            var areas = countryData[country] && countryData[country].cities[city] ? countryData[country].cities[city] : [];

            // Populate Area dropdown based on selected city
            $('#area').empty().append('<option value="">Select Area</option>');
            $.each(areas, function(index, area) {
                $('#area').append('<option value="' + area + '">' + area + '</option>');
            });
        });

        // Handle form submission via AJAX
        $('#createJobForm').submit(function (event) {
            event.preventDefault();  // Prevent the default form submission

            // Collect form data
            var formData = $(this).serialize();  // Serialize form data to send as a URL-encoded string

            // Send data to the server via AJAX POST
            $.ajax({
                url: "{{ route('admin.job.store') }}",  // Laravel route for form submission
                type: 'POST',
                data: formData,
                success: function (response) {
                    // Handle success response
                    if (response.success) {
                        alert('Job created successfully!');
                        $('#createJobForm')[0].reset();  // Reset the form after successful submission
                    } else {
                        alert('Error: ' + response.message);
                    }
                },
                error: function (xhr, status, error) {
                    // Handle error response
                    alert('An error occurred while submitting the form. Please try again.');
                }
            });
        });
    });
</script>

@endsection