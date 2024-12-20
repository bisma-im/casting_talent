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

    .dropdown-btn {
        width: 100%;
        /* Make it stretch to full width */
        padding: 10px;
        /* Add padding to match select dropdowns */
        background-color: white;
        /* Set the background color to white */
        border: 1px solid light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
        /* Match the border style of the select dropdown */
        border-radius: 4px;
        /* Add border-radius to match select box */
        font-size: 1rem;
        /* Font size matching the select dropdown */
        color: #75758B;
        /* Placeholder text color matching the select dropdown */
        cursor: pointer;
        /* Pointer cursor to indicate it's clickable */
    }

    .dropdown {
        position: relative;
        display: inline-block;
        width: 100%;
        /* Adjust to fit your layout */
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
        z-index: 1;
        width: 100%;
        max-height: 300px;
        overflow-y: auto;
        border: 1px solid #ccc;
        padding: 5px;
    }

    .dropdown-content.visible {
        display: block;
        /* Show dropdown */
    }

    .dropdown-btn:focus {
        outline: none;
    }

    /* Show dropdown when button is clicked */
    .show {
        display: block;
    }

    /* Subcategories will be hidden by default */
    .subcategory {
        display: none;
        margin-left: 20px;
    }

    .category-checkbox {
        margin-right: 8px;
        /* Add margin to the right of checkboxes */
    }

    .subcategory.visible {
        display: block;
        /* Show subcategory */
    }

    /* Style the labels */
    label {
        display: block;

    }

    .dropdown-btn {
        width: 100%;
        /* Adjust as needed */
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
        <form method="POST" id="createJobForm" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- Project Field -->
                <div class="col-md-6 mb-3">
                    <label for="project">PROJECT</label>
                    <select name="project" id="project" class="form-control">
                        <option value="">Select Project</option>
                        <option value="Shoot">Shoot</option>
                        <option value="Event">Event</option>
                    </select>
                </div>

                <!-- Required Field -->
                <div class="col-md-6 mb-3">
                    <label for="required">REQUIRED</label>
                    <div class="dropdown">
                        <button onclick="toggleDropdown(event)" class="dropdown-btn text-left" id="categoryButton"
                            type="button">Select
                            Categories</button>
                        <div id="dropdownContent" class="dropdown-content">
                            <!-- Checkboxes will be populated here by JavaScript -->
                        </div>
                    </div>
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
                        <option value="Half Day">Half Day</option>
                        <option value="Full Day">Full Day</option>
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
                        <option value="UAE">UAE</option>
                        <option value="KSA">KSA</option>
                        <option value="Oman">Oman</option>
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
                    <input type="text" name="area" id="area" class="form-control" placeholder="Area/Town">
                </div>

                <!-- Transportation Dropdown -->
                <div class="col-md-6 mb-3">
                    <label for="transportation">TRANSPORTATION</label>
                    <select name="transportation" id="transportation" class="form-control">
                        <option value="">Select Transportation</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <!-- Food Dropdown -->
                <div class="col-md-6 mb-3">
                    <label for="food">FOOD</label>
                    <select name="food" id="food" class="form-control">
                        <option value="">Select</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <!-- Payment Mode Dropdown -->
                <div class="col-md-6 mb-3">
                    <label for="payment_mode">PAYMENT MODE</label>
                    <select name="payment_mode" id="payment_mode" class="form-control">
                        <option value="">Select payment mode</option>
                        <option value="Cash">Cash</option>
                        <option value="Bank Transfer">Bank Transfer</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <!-- Paid Input -->
                <div class="col-md-6 mb-3">
                    <label for="payment_status">PAID</label>
                    <input name="payment_status" id="paid" class="form-control"
                        placeholder="e.g. Cash on the spot, Paid after 10 days, or if Bank Transfer, Same day" />
                </div>
                <div class="col-md-6 mb-3">
                    <label for="image">IMAGE</label>
                    <input type="file" name="image" id="image" class="form-control" />
                </div>
            </div>
            <div class="row">
                <!-- Paid Input -->
                <div class="col-md-12 mb-3">
                    <label for="payment_status">DETAILS</label>
                    <textarea name="details" id="details" class="form-control"
                        placeholder="Description box to write details of shoot" rows="8"></textarea>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Function to toggle dropdown visibility
    function toggleDropdown(event) {
        event.preventDefault();
        event.stopPropagation();  // Stop click event from reaching the window
        dropdownContent.classList.toggle('visible');
    }
    $(document).ready(function() {
        // Data for cities and areas based on the selected country
        const countryData = {
            UAE: {
                cities: [
                    "Dubai",
                    "Abu Dhabi",
                    "Sharjah",
                    "Al ‘Ayn"
                    ,
                    "‘Ajmān"
                    ,
                    "Ra’s al Khaymah"
                    ,
                    "Al Fujayrah"
                    ,
                    "Umm al Qaywayn"
                    ,
                    "Kalbā"
                    ,
                    "Khawr Fakkān"
                    ,
                    "Madīnat Zāyid"
                    ,
                    "Al Jazīrah al Ḩamrā’"
                    ,
                    "Masāfī"
                    ,
                    "Badīyah"
                    ,
                    "Zubārah"
                    ,
                    "Al Faq‘"
                    ,
                    "Ash Sha‘m"
                    ,
                    "Huwaylāt"
                    ,
                    "Naḩwah"
                    ,
                    "Sharīyah"
                    ,
                    "Ḩaşat al Bidīyah"
                    ,
                    "Maşfūţ"
                    ,
                    "Qarayţaysah"
                    ,
                    "Margham"
                    ,
                    "Qimah"
                    ,
                    "‘Ūd al Bayḑā’"
                    ,
                    "Ferij al Muhadham"
                    ,
                    "Hunaywah"
                    ,
                    "Şufayrī"
                    ,
                    "‘Urqūb Juwayza"
                    ,
                    "Ḩattā"
                    ,
                    "Al Lusaylī"
                    ,
                    "Ḩayl"
                    ,
                    "Warīsān"
                    ,
                    "Muḑayfī"
                    ,
                    "Rafā‘"
                    ,
                    "Lūlayyah"
                    ,
                    "Wādī Shī"
                    ,
                    "Ash Shu‘ayb"
                    ,
                    "Ḩiyāwah"
                    ,
                    "Ar Rufayşah"
                    ,
                    "Shīs"
                    ,
                    "Al Jazīrah"
                    ,
                    "Al Ḩamrīyah"
                    ,
                    "Adh Dhayd"
                    ,
                    "Al ‘Awdah"
                    ,
                    "Qidfa"
                    ,
                    "Ţayyibah"
                    ,
                    "Biţnah"
                    ,
                    "Mu‘tariḑah"
                    ,
                    "Theeb"
                    ,
                    "Wa‘bayn"
                    ,
                    "Al Qurayyah"
                    ,
                    "Al Manāmah"
                    ,
                    "‘Abādilah"
                    ,
                    "Ghurfah"
                    ,
                    "Ḩayl"
                    ,
                    "Ghayl"
                    ,
                    "Sā’if"
                    ,
                    "Far‘ah"
                    ,
                    "Mukhtaraqah"
                    ,
                    "Yalah"
                    ,
                    "Rughaylāt"
                    ,
                    "Tawian"
                    ,
                    "Ḩafarah"
                    ,
                    "Ḩārat Zuţūţ"
                    ,
                    "Khawr Kalbā"
                    ,
                    "Al ‘Uyaynah"
                    ,
                    "Rūl Ḑadnā"
                    ,
                    "‘Uqayr"
                    ,
                    "Al Fuqait"
                    ,
                    "Shawīyah"
                    ,
                    "Ḩarrah"
                    ,
                    "Dibā"
                    ,
                    "Sinnah"
                    ,
                    "Dūb"
                    ,
                    "Sram"
                    ,
                    "‘Asamah"
                    ,
                    "Al ‘Ayn al Ghumūr"
                    ,
                    "Şūr"
                    ,
                    "Waḩlah"
                    ,
                    "Thoban"
                    ,
                    "Al Gissemari"
                    ,
                    "Murbaḩ"
                    ,
                    "Ḩayāt"
                    ,
                    "Khulaybīyah"
                    ,
                    "Z̧anḩah"
                    ,
                    "Saqamqam"
                    ,
                    "Ḑāhir"
                    ,
                    "Jareef"
                    ,
                    "Girath"
                    ,
                    "Riyāmah",
                    "Al Kubūs",
                    "‘Ashashah",
                    "Ḑadnā"
                    ,
                    "‘Aqqah"
                    ,
                    "Ras Dibba"
                    ,
                    "Nuhayy"
                    ,
                    "Ḑab‘ah"
                    ,
                    "Murbaḑ"
                    ,
                    "Şafad"
                    ,
                    "Ţarīqat Ja‘d"
                ]
            },
            KSA: {
                cities: [
                    "Riyadh",
                    "Jeddah", 
                    "Mecca", 
                    "Medina",
                    "Ad Dammām",
                    "Tabūk"
                    ,
                    "Al Hufūf"
                    ,
                    "Al Qaţīf"
                    ,
                    "Al Ḩillah"
                    ,
                    "Aţ Ţā’if"
                    ,
                    "Al Jubayl"
                    ,
                    "Buraydah"
                    ,
                    "Ḩafr al Bāţin"
                    ,
                    "Yanbu"
                    ,
                    "Ḩā’il"
                    ,
                    "Abhā"
                    ,
                    "Sakākā"
                    ,
                    "Al Qurayyāt"
                    ,
                    "Jāzān"
                    ,
                    "Najrān"
                    ,
                    "Al Wajh"
                    ,
                    "Arar"
                    ,
                    "Al Bāḩah"
                    ,
                    "Tathlīth"
                ]
            },
            Oman: {
                cities: [
                    "Masqaţ"
                    ,
                    "Muscat"
                    ,
                    "Bawshar"
                    ,
                    "Şalālah"
                    ,
                    "As Sīb"
                    ,
                    "Maţraḩ"
                    ,
                    "As Suwayq"
                    ,
                    "Aş Şuwayḩirah as Sāḩil"
                    ,
                    "Ar Rustāq"
                    ,
                    "Al Muḑaybī"
                    ,
                    "‘Ibrī"
                    ,
                    "Bahlā’"
                    ,
                    "Nizwá"
                    ,
                    "Samā’il"
                    ,
                    "Al ‘Āmirāt"
                    ,
                    "Al Buraymī"
                    ,
                    "Qurayyāt"
                    ,
                    "Al Madrah Samā’il"
                    ,
                    "Shināş"
                    ,
                    "Izkī"
                    ,
                    "Ibrā’"
                    ,
                    "Nakhal"
                    ,
                    "Ḑank"
                    ,
                    "Khaşab"
                    ,
                    "Al Mazyūnah"
                    ,
                    "Şuḩār"
                    ,
                    "Şūr"
                    ,
                    "Haymā’"
                ]
            }

        };

        // Handle country change
        $('#country').change(function() {
            var country = $(this).val();
            var cities = countryData[country] ? countryData[country].cities : {};

            // Populate City dropdown based on selected country
            $('#city').empty().append('<option value="">Select City</option>');
            $.each(cities, function(i, city) {
                $('#city').append('<option value="' + city + '">' + city + '</option>');
            });
        });

        // Handle form submission via AJAX
        $('#createJobForm').submit(function (event) {
            event.preventDefault();  // Prevent the default form submission
            const dropdownButton = document.getElementById('categoryButton');
            const requiredCategories = dropdownButton.textContent;
            
            var formData = new FormData(this);  
            formData.append('requiredCategories', requiredCategories);

            const submitButton = $(this).find('button[type="submit"]');  // Get the submit button
            submitButton.prop('disabled', true);

            // Send data to the server via AJAX POST
            $.ajax({
                url: "{{ route('admin.job.store') }}",  // Laravel route for form submission
                type: 'POST',
                data: formData,
                processData: false,  // Prevent jQuery from processing the data into a string
                contentType: false,  // Prevent jQuery from setting a default content type
                success: function (response) {
                    // Handle success response
                    if (response.success) {
                        Swal.fire({
                            title: 'Success!',
                            text: 'Job created successfully',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        })
                        .then(() => {
                            $('#createJobForm')[0].reset();  // Reset the form after successful submission
                        });
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: `There was an error creating the job: ${response.message}`,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                    submitButton.prop('disabled', false);
                },
                error: function (xhr, status, error) {
                    // Handle error response
                    const response = JSON.parse(xhr.responseText);
                    Swal.fire({
                            title: 'Error!',
                            text: `There was an error creating the job: ${JSON.stringify(response.errors)}`,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    submitButton.prop('disabled', false);
                }
            });
        });


        // Define the talents array
        const talents = [
            {
                name: 'Actor',
                subcategories: ['Lead role', 'Featured', 'Extras', 'Voice-over Artist', 'Body double', 'Stunt person']
            },
            {
                name: 'Model',
                subcategories: []
            },
            {
                name: 'Dancer',
                subcategories: ['Choreographer', 'Belly Dancer', 'Sufi Dancer', 'Gogo Dancer', 'Performer', 'Ayala Dancer', 'B Boy', 'Dance Groups', 'Tabrey Dancer']
            },
            {
                name: 'Film Crew',
                subcategories: ['Filmmaker', 'DOP', 'Assistant Director', 'Script Writer', 'Dialog Writer', 'Art Director', 'Production Manager', 'Production Designer', 'Line Producer', 'Focus Puller', 'Camera Operator', 'Lights & Gaffer', 'Crane Operator', 'Sound Engineer', 'Spot Boy']
            },
            {
                name: 'Influencers',
                subcategories: []
            },
            {
                name: 'Makeup and Hair',
                subcategories: []
            },
            {
                name: 'Musicians',
                subcategories: ['Singers', 'Music Band', 'Guitarist', 'Violinist', 'Drummers', 'Bassist', 'Rapper']
            },
            {
                name: 'Event Staff and Ushers',
                subcategories: ['Hostess', 'Promoter', 'EmCee']
            },
            {
                name: 'Entertainer / Performers',
                subcategories: ['Standup Artist', 'VJ', 'RJ', 'Public Speaker', 'Magician', 'Bottle Twister']
            },
            {
                name: 'Celebrity',
                subcategories: []
            }
        ];

        // Get the container for the dropdown content
        const dropdownContent = document.getElementById('dropdownContent');
        const dropdownButton = document.getElementById('categoryButton');
        // Update dropdown button text function
        function updateCategoryDropdownButtonText() {
            const checkboxes = dropdownContent.querySelectorAll('input[type="checkbox"]:checked');
            const selectedValues = Array.from(checkboxes).map(checkbox => checkbox.value);

            if (selectedValues.length > 0) {
                dropdownButton.textContent = selectedValues.join(', '); // Join selected categories with comma
            } else {
                dropdownButton.textContent = 'Select Categories'; // Default text if no selection
            }
        }

        // Populate the checkboxes for categories and subcategories
        talents.forEach(talent => {
            // Create a div for the main category and its subcategories
            const mainCategoryDiv = document.createElement('div');
            mainCategoryDiv.classList.add('main-category');

            // Create a label and checkbox for the main category
            const categoryLabel = document.createElement('label');
            const categoryCheckbox = document.createElement('input');
            categoryCheckbox.type = 'checkbox';
            categoryCheckbox.value = talent.name;
            categoryCheckbox.classList.add('category-checkbox');
            // categoryCheckbox.addEventListener('change', updateSelectedOptions); 
            categoryLabel.appendChild(categoryCheckbox);
            categoryLabel.appendChild(document.createTextNode(talent.name));

            // Add the main category to the container
            mainCategoryDiv.appendChild(categoryLabel);

            // Add subcategories as checkboxes inside the main category div
            if (talent.subcategories.length > 0) {
                const subcategoryDiv = document.createElement('div');
                subcategoryDiv.classList.add('subcategory'); // Hidden by default

                talent.subcategories.forEach(subcategory => {
                    const subcategoryLabel = document.createElement('label');
                    const subcategoryCheckbox = document.createElement('input');
                    subcategoryCheckbox.type = 'checkbox';
                    subcategoryCheckbox.value = subcategory;
                    subcategoryCheckbox.classList.add('category-checkbox');
                    // subcategoryCheckbox.addEventListener('change', updateSelectedOptions);
                    subcategoryLabel.appendChild(subcategoryCheckbox);
                    subcategoryLabel.appendChild(document.createTextNode(subcategory));

                    // Add subcategory to the subcategory div
                    subcategoryDiv.appendChild(subcategoryLabel);
                });

                // Toggle visibility on main category click
                categoryCheckbox.addEventListener('change', function () {
                    if (categoryCheckbox.checked) {
                        subcategoryDiv.style.display = 'block';
                    } else {
                        subcategoryDiv.style.display = 'none';
                    }
                });

                // Prevent the subcategory div from closing when a subcategory is clicked
                subcategoryDiv.onclick = function (event) {
                    event.stopPropagation();
                };
                mainCategoryDiv.onclick = function (event) {
                    event.stopPropagation();
                };
                // Add the subcategory div to the main category div
                mainCategoryDiv.appendChild(subcategoryDiv);
            }

            // Add the main category div to the dropdown content
            dropdownContent.appendChild(mainCategoryDiv);
        });

        // Listen to checkbox changes and update button text
        dropdownContent.addEventListener('change', function (e) {
            if (e.target.type === 'checkbox') {
                updateCategoryDropdownButtonText();
            }
        });

        
        // Function to close dropdown if clicked outside of it
        function closeDropdown(event) {
            // Check if the click was outside the dropdown
            if (!dropdownContent.contains(event.target) && !dropdownButton.contains(event.target)) {
                dropdownContent.classList.remove('visible');
            }
        }

        // Attach this event listener to the document
        document.addEventListener('click', closeDropdown);

        // Close the dropdown if clicked outside

        window.onclick = function(event) {
            if (!event.target.matches('.dropdown-btn')) {
                dropdownContent.classList.remove('visible');
            }
        }
    });
</script>

@endsection