@extends('users.layouts.layout')

@section('title', 'Casting Talent | Talents')

@section('main-content')

<style>
    .category-list {
        list-style: none;
        padding: 0;
    }

    .category-list li {
        position: relative;
        margin-bottom: 10px;
        /* Add space between items */
    }

    .popup {
        display: none;
        position: absolute;
        background: white;
        border: 1px solid #ccc;
        padding: 10px;
        z-index: 100;
        width: 270px;
        right: -35px;
        top: 35px;
    }

    .popup ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .popup a {
        text-decoration: none;
        color: #000;
        /* Initial color set to black */
    }

    .popup a:hover {
        color: #ff0000;
        /* Change color to red on hover */
    }
</style>

<style>
    .sideBar {
        padding: 10px;
        border: 1px solid red;
    }

    .headText h3 {
        color: rgba(232, 175, 85, 1) !important;
        font-weight: bold !important;
        padding: 10px !important;
        background: beige !important;
    }

    .featurelist ul li {
        list-style: none !important;
        margin: 0 24px !important;
        display: flex !important;
        line-height: 50px !important;
    }

    .gender-filter {
        padding: 8px 16px;
        background-color: transparent;
        color: #ccc;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 17px;
        margin-right: 10px;
        margin-top: 10px;
        display: flex;
        /* Use flexbox to place elements on the same line */
        gap: 15px;
    }

    .gender-filter a:not(:last-child)::after {
        content: '';
        /* Empty content to create the divider */
        position: absolute;
        right: -8px;
        /* Position the divider slightly to the right */
        top: 0;
        height: 100%;
        /* Full height of the anchor tag */
        width: 1px;
        /* Thin vertical line */
        background-color: #afacac;
        /* Divider color */
        color: black;
    }

    .gender-filter a {
        text-decoration: none;
        /* Remove underline */
        color: #ccc;
        /* Set link color */
        padding: 5px 10px;
        position: relative;
        /* For positioning the divider */
    }

    .gender-filter a.active {
        font-weight: bold;
        border-bottom: 2px solid black;
        color: black;
    }

    .filter-button {
        padding: 8px 16px;
        background-color: transparent;
        color: black;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        margin-right: 10px;
        margin-top: 10px;
    }

    .filter-button.active {
        background-color: #f7f1f1;
        /* Background color when form is open */
    }

    .container-for-dropdown {
        display: flex;
        justify-content: space-between;
        /* Aligns heading to the left and button to the right */
        align-items: center;
        /* Vertically centers the heading and button */
        position: relative;
        width: 100%;
        padding-right: 10px;
        padding-left: 10px;
        position: relative;
        /* Keeps relative positioning for the dropdown */
        width: 100%;
        /* Ensures the container spans the full width of its parent */
        padding-right: 10px;
        /* Adds some padding on the right if needed */
    }

    /* Adjust the .filter-form class for absolute positioning */
    .filter-form {
    position: absolute; /* Keeps dropdown on top of content */
    top: 40px; 
    left: 0;
    right: 0;
    z-index: 1000;
    background-color: #f7f1f1;
    border-radius: 4px;
    padding: 20px;
    width: 97%;
    display: none; /* Hidden by default */
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease; /* Smooth transition */
}


.featruredmodalsec {
    transition: margin-top 0.3s ease; /* Smooth margin shift */
}


        /* Unique Dropdown styling */
    .hair-dropdown {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .hair-dropdown-button {
        width: 100%;
        padding: 8px;
        border: 1px solid light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
        background-color: white;
        cursor: pointer;
        border-radius: 4px;
        color: #75758B;
    }

    .hair-dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 100%;
        border: 1px solid #ccc;
        max-height: 200px;
        overflow-y: scroll;
        z-index: 1;
    }

    /* Styling for options */
    .hair-dropdown-content label {
        display: block;
        padding: 10px;
        cursor: pointer;
    }

    .hair-dropdown-content label:hover {
        background-color: #f1f1f1;
    }

    /* Show dropdown on open */
    .hair-dropdown-open {
        display: block;
    }

    /* Selected option styling */
    .hair-selected {
        background-color: #ffe0e0;
    }


    /* Unique Dropdown styling */
    .eye-dropdown {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .eye-dropdown-button {
        width: 100%;
        padding: 8px;
        border: 1px solid light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
        background-color: white;
        cursor: pointer;
        border-radius: 4px;
        color: #75758B;
    }

    .eye-dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 100%;
        border: 1px solid #ccc;
        max-height: 200px;
        overflow-y: scroll;
        z-index: 1;
    }

    /* Styling for options */
    .eye-dropdown-content label {
        display: block;
        padding: 10px;
        cursor: pointer;
    }

    .eye-dropdown-content label:hover {
        background-color: #f1f1f1;
    }

    /* Show dropdown on open */
    .eye-dropdown-open {
        display: block;
    }

    /* Selected option styling */
    .eye-selected {
        background-color: #e0f7ff;
    }

    /* Unique Dropdown styling */
    .custom-language-dropdown {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .custom-language-dropdown-button {
        width: 100%;
        padding: 8px;
        border: 1px solid light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
        background-color: white;
        cursor: pointer;
        border-radius: 4px;
        color: #75758B;
    }

    .custom-language-dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 100%;
        border: 1px solid #ccc;
        max-height: 200px;
        overflow-y: scroll;
        z-index: 1;
    }

    /* Styling for options */
    .custom-language-dropdown-content label {
        display: block;
        padding: 10px;
        cursor: pointer;
    }

    .custom-language-dropdown-content label:hover {
        background-color: #f1f1f1;
    }

    /* Show dropdown on open */
    .custom-language-dropdown-open {
        display: block;
    }

    /* Selected option styling */
    .language-selected {
        background-color: #e0ffe0;
    }

    

    button[type="submit"] {
        padding: 8px 16px;
        background-color: #00798c;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    select {
        color: #75758B;
        /* Default color for all options */
    }

    select option {
        color: black;
        /* Normal color for options */
    }

    select:hover {
        border: 2px solid #00798C;
        /* Changes border on hover */
    }

    /* Styling for focus state */
    select:focus {
        border: 2px solid #00798C;
        /* Changes border when the select is active or focused */
        outline: none;
        /* Optional: Removes the default focus outline */
    }

    select option[value=""] {
        color: #75758B;
        /* Grey color for placeholder options */
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
        display: block;     /* Show dropdown */
    }

    .dropdown-btn:focus {
        outline: none;
        /* Remove focus outline */
        border: 2px solid #00798C;
        /* Add focus border to match select dropdown behavior */
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
        margin-right: 8px; /* Add margin to the right of checkboxes */
    }

    .subcategory.visible {
        display: block;     /* Show subcategory */
    }
    /* Style the labels */
    label {
        display: block;

    }

    .dropdown-btn {
        width: 100%;
        /* Adjust as needed */
    }

    .inputs-row .multi-select {
        display: flex;
        box-sizing: border-box;
        flex-direction: column;
        position: relative;
        max-width: 100%;
        user-select: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;

    }
  /* Unique Dropdown styling */
  .dress-dropdown {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .dress-dropdown-button {
        width: 100%;
        padding: 10px;
        border: 1px solid light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
        background-color: white;
        cursor: pointer;
        border-radius: 4px;
        color: #75758B;
    }

    .dress-dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 100%;
        border: 1px solid #ccc;
        max-height: 200px;
        overflow-y: scroll;
        z-index: 1;
    }

    /* Styling for options */
    .dress-dropdown-content label {
        display: block;
        padding: 10px;
        cursor: pointer;
    }

    .dress-dropdown-content label:hover {
        background-color: #f1f1f1;
    }

    /* Show dropdown on open */
    .dress-dropdown-open {
        display: block;
    }

    /* Selected option styling */
    .dress-selected {
        background-color: #e0e0ff;
    }
</style>

<section class="innerpages">
    <div class="container">

    </div>
</section>
<div class="col-12 col-sm-12 mt-3 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    <div class="innertext">
        <h1>Featured <span>Talents</span></h1>
    </div>
</div>
<div class="container-for-dropdown">
    <div class="gender-filter">
        <a href="{{ route('featured-models.get', ['role' => request()->route('role'), 'gender' => 'female']) }}"
            class="{{ request('gender') == 'female' ? 'active' : '' }}">Female</a>
        <a href="{{ route('featured-models.get', ['role' => request()->route('role'), 'gender' => 'male']) }}"
            class="{{ request('gender') == 'male' ? 'active' : '' }}">Male</a>
        <a href="{{ route('featured-models.get', ['role' => request()->route('role'), 'gender' => 'girl']) }}"
            class="{{ request('gender') == 'girl' ? 'active' : '' }}">Girl</a>
        <a href="{{ route('featured-models.get', ['role' => request()->route('role'), 'gender' => 'boy']) }}"
            class="{{ request('gender') == 'boy' ? 'active' : '' }}">Boy</a>

    </div>
    <button id="filterBtn" class="filter-button"><i class="fas fa-sliders-v m-1"></i> Filter</button>
    <div id="filterForm" class="filter-form mt-4" style="display:none;">
        {{-- <form action="{{ route('your.route') }}" method="GET"> --}}
            <form method="GET">
                <div class="row mb-3 ">
                    <div class="col-md-4 mb-2">
                        <select name="ethnicity" class="h-100 w-100">
                            <option value="" disabled selected>Select Ethnicity</option>
                            <option value="Arab">Arab</option>
                            <option value="Asian">Asian</option>
                            <option value="Black">Black</option>
                            <option value="Mediterranean">Mediterranean</option>
                            <option value="Multi-ethnic">Multi-ethnic</option>
                            <option value="Other">Other</option>
                            <option value="White">White</option>
                            <!-- Add ethnicity options here -->
                        </select>
                    </div>
                    <div class="col-md-4 mb-2">
                        <select name="nationality" class="h-100 w-100">
                            <option value="" disabled selected>Select Nationality</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cabo Verde">Cabo Verde</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Central African Republic">Central African Republic
                            </option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)
                            </option>
                            <option value="Congo (Congo-Kinshasa)">Congo (Congo-Kinshasa)</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Eswatini (formerly Swaziland)">Eswatini (formerly
                                Swaziland)</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Greece">Greece</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia">Micronesia</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar (formerly Burma)">Myanmar (formerly Burma)
                            </option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="North Korea">North Korea</option>
                            <option value="North Macedonia">North Macedonia</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russia</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the
                                Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Korea">South Korea</option>
                            <option value="South Sudan">South Sudan</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-Leste">Timor-Leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Vatican City">Vatican City</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-2" class="h-100 w-100">
                        <div class="dropdown">
                            <button onclick="toggleDropdown(event)" class="dropdown-btn text-left" id="categoryButton">Select
                                Categories</button>
                            <div id="dropdownContent" class="dropdown-content">
                                <!-- Checkboxes will be populated here by JavaScript -->
                            </div>
                        </div>
                    </div>
                    <p id="selectedCategories" style="margin-top: 10px; font-weight: bold; display: none;">
                        Selected Categories: None
                    </p>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 mb-2">
                        <select name="age " class="h-100 w-100">
                            <option value="" disabled selected>Select Age</option>
                            <option value="newborn">New Born</option>
                            <option value="1-3">1-3</option>
                            <option value="4-6">4-6</option>
                            <option value="7-10">7-10</option>
                            <option value="11-15">11-15</option>
                            <option value="16-19">16-19</option>
                            <option value="20-25">20-25</option>
                            <option value="26-30">26-30</option>
                            <option value="31-35">31-35</option>
                            <option value="36-40">36-40</option>
                            <option value="41-46">41-46</option>
                            <option value="47-50">47-50</option>
                            <option value="50+">50+</option>
                            <!-- Add age options here -->
                        </select>
                    </div>
                    <div class="col-md-4 mb-2" >
                        <select name="height " class="h-100 w-100">
                            <option value="" disabled selected>Select Height (cm)</option>
                            <option value="30-39">30 - 39</option>
                            <option value="40-49">40 - 49</option>
                            <option value="50-59">50 - 59</option>
                            <option value="60-69">60 - 69</option>
                            <option value="70-79">70 - 79</option>
                            <option value="80-89">80 - 89</option>
                            <option value="90-99">90 - 99</option>
                            <option value="100-109">100 - 109</option>
                            <option value="110-119">110 - 119</option>
                            <option value="120-129">120 - 129</option>
                            <option value="130-139">130 - 139</option>
                            <option value="140-149">140 - 149</option>
                            <option value="150-159">150 - 159</option>
                            <option value="160-169">160 - 169</option>
                            <option value="170-179">170 - 179</option>
                            <option value="180-189">180 - 189</option>
                            <option value="190-199">190 - 199</option>
                            <option value="200+">200 and above</option>
                            <!-- Add height options here -->
                        </select>
                    </div>
                    <div class="col-md-4 mb-2" >
                        <div class="contact-list-dress-size">
                            <div class="dress-dropdown" id="dressDropdown">
                                <div class="dress-dropdown-button" id="dressDropdownButton">-- Select Dress Sizes --</div>
                                    <div class="dress-dropdown-content" id="dressDropdownContent">
                                        <label><input type="checkbox" value="XXS"> XXS</label>
                                        <label><input type="checkbox" value="XS"> XS</label>
                                        <label><input type="checkbox" value="S"> S</label>
                                        <label><input type="checkbox" value="M"> M</label>
                                        <label><input type="checkbox" value="L"> L</label>
                                        <label><input type="checkbox" value="XL"> XL</label>
                                        <label><input type="checkbox" value="XXL"> XXL</label>
                                        <label><input type="checkbox" value="3XL"> 3XL</label>
                                        <label><input type="checkbox" value="4XL"> 4XL</label>
                                        <label><input type="checkbox" value="5XL"> 5XL</label>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                <div class="row">
                    <!-- Hair Colors Dropdown -->
                    <div class="col-md-4 mb-2">
                        <div class="contact-list-hair h-100 w-100">
                            <div class="hair-dropdown" id="hairDropdown">
                                <div class="hair-dropdown-button" id="hairDropdownButton">-- Select Hair Colors --</div>
                                <div class="hair-dropdown-content" id="hairDropdownContent">
                                    <label><input type="checkbox" value="Auburn"> Auburn</label>
                                    <label><input type="checkbox" value="Black"> Black</label>
                                    <label><input type="checkbox" value="Blonde"> Blonde</label>
                                    <label><input type="checkbox" value="Brown"> Brown</label>
                                    <label><input type="checkbox" value="Brown with Blonde Streaks"> Brown with Blonde Streaks</label>
                                    <label><input type="checkbox" value="Dark Blonde"> Dark Blonde</label>
                                    <label><input type="checkbox" value="Dark Brown"> Dark Brown</label>
                                    <label><input type="checkbox" value="Light Brown"> Light Brown</label>
                                    <label><input type="checkbox" value="Red"> Red</label>
                                    <label><input type="checkbox" value="Red/Orange/Brown"> Red/Orange/Brown</label>
                                    <label><input type="checkbox" value="Silver"> Silver</label>
                                    <label><input type="checkbox" value="Green"> Green</label>
                                    <label><input type="checkbox" value="Strawberry Blonde"> Strawberry Blonde</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eye Colors Dropdown -->
                    <div class="col-md-4 mb-2">
                        <div class="contact-list-eye h-100 w-100">
                            <div class="eye-dropdown" id="eyeDropdown">
                                <div class="eye-dropdown-button" id="eyeDropdownButton">-- Select Eye Colors --</div>
                                <div class="eye-dropdown-content" id="eyeDropdownContent">
                                    <label><input type="checkbox" value="Blue/Grey"> Blue/Grey</label>
                                    <label><input type="checkbox" value="Brown"> Brown</label>
                                    <label><input type="checkbox" value="Dark Brown"> Dark Brown</label>
                                    <label><input type="checkbox" value="Green"> Green</label>
                                    <label><input type="checkbox" value="Green/Grey"> Green/Grey</label>
                                    <label><input type="checkbox" value="Green/Hazel"> Green/Hazel</label>
                                    <label><input type="checkbox" value="Hazel"> Hazel</label>
                                    <label><input type="checkbox" value="Blue"> Blue</label>
                                    <label><input type="checkbox" value="Black"> Black</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Languages Dropdown -->
                    <div class="col-md-4 mb-2">
                        <div class="h-100 w-100">
                            <div class="custom-language-dropdown" id="customLanguageDropdown">
                                <div class="custom-language-dropdown-button" id="customLanguageDropdownButton">-- Select Languages --</div>
                                <div class="custom-language-dropdown-content" id="customLanguageDropdownContent">
                                    <!-- Dynamically generate language options -->
                                    @foreach ($languages as $language)
                                        <label><input type="checkbox" value="{{ $language['value'] }}"> {{ $language['label'] }}</label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button type="submit">Filter</button>
                </div>
            </form>
    </div>
</div>
<style>
    .featurelist ul li a:hover {
        color: rgb(235, 13, 13) !important;
    }
</style>

<section class="featruredmodalsec">
    {{-- <div class="container"> --}}
        <div class="row p-3">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="row">

                    @if (!empty($qModels))
                    @if ($qModels->count() > 0)
                    @foreach ($qModels as $modelDetail)
                    @php
                    // Parse the profile images string into an array
                    $profileImages = json_decode($modelDetail->profile_images);
                    $firstImage = $profileImages[0] ?? 'default.png'; // Default image if no profile image is available
                    // Calculate the age from the date of birth
                    $birthDate = new DateTime($modelDetail->date_of_birth);
                    $currentDate = new DateTime();
                    $age = $currentDate->diff($birthDate)->y;
                    // Example conversion for height and weight if needed
                    $height = $modelDetail->height . ' ' . 'cm';
                    $weight = $modelDetail->weight . ' ' . 'kg';
                    @endphp
                    <div class="col custom-col">
                        <a href="{{ route('model-info.get', $modelDetail->id) }}" class="text-dark">
                            <div class="castbox mb-3">
                                {{-- <span class="bodytheading">{{ $modelDetail->gender }}</span> --}}
                                <div class="castimg">
                                    <img src="{{ url('/uploads/models/profiles/' . $firstImage) }}" class="img-fluid"
                                        alt="Model Image">
                                </div>
                                <div class="castbody">
                                    <div class="castbox-code text-center">
                                        <!-- Insert code related content here -->
                                        {{ $modelDetail->talent_id }}
                                    </div>
                                    <div class="castbox-info text-center">
                                        {{ $age . ', ' . $modelDetail->nationality }}
                                        <!-- Insert age, nationality, etc., here -->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    @else
                    <div class="alert alert-info">
                        <h6>There is no data present yet...</h6>
                    </div>
                    @endif
                    @else
                    @if ($models->count() > 0)
                    @foreach ($models as $modelDetail)
                    @php
                    // Parse the profile images string into an array
                    $profileImages = json_decode($modelDetail->profile_images);
                    $firstImage = $profileImages[0] ?? 'default.png'; // Default image if no profile image is available
                    // Calculate the age from the date of birth
                    $birthDate = new DateTime($modelDetail->date_of_birth);
                    $currentDate = new DateTime();
                    $age = $currentDate->diff($birthDate)->y;
                    // Example conversion for height and weight if needed
                    $height = $modelDetail->height . ' ' . 'cm';
                    $weight = $modelDetail->weight . ' ' . 'kg';
                    @endphp
                    @endforeach
                    @else
                    <div class="alert alert-info">
                        <h6>There is no data present yet...</h6>
                    </div>
                    @endif
                    @endif

                </div>
            </div>
        </div>
        {{--
    </div> --}}
</section>

<script>
 document.getElementById('filterBtn').addEventListener('click', function () {
    var filterForm = document.getElementById('filterForm');
    var featuredSection = document.querySelector('.featruredmodalsec');
    var button = document.querySelector('.filter-button');

    if (filterForm.style.display === 'none' || filterForm.style.display === '') {
        filterForm.style.display = 'block';
        featuredSection.style.marginTop = filterForm.offsetHeight + 'px'; // Push cards down
        button.classList.add('active');
    } else {
        filterForm.style.display = 'none';
        featuredSection.style.marginTop = '0'; // Reset margin
        button.classList.remove('active');
    }
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
        subcategories: ['Choreographer', 'Belly Dancer', 'Sufi Dancer', 'Gogo Dancer', 'Performer', 'Ayyala Dancer', 'B Boy', 'Dance Groups', 'Tabrey Dancer']
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

// Function to toggle dropdown visibility
function toggleDropdown(event) {
    event.preventDefault();
    event.stopPropagation();  // Stop click event from reaching the window
    dropdownContent.classList.toggle('visible');
}
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
// $(document).ready(function(){
//     $(".js-select2").select2({
//         closeOnSelect : false,
//         placeholder : "Placeholder",
//         allowHtml: true,
//         allowClear: true,
//         tags: true // создает новые опции на лету
//     });
//     $('.icons_select2').select2({
//         width: "100%",
//         templateSelection: iformat,
//         templateResult: iformat,
//         allowHtml: true,
//         placeholder: "Placeholder",
//         dropdownParent: $('.select-icon' ),//обавили класс
//         allowClear: true,
//         multiple: false
//     });
        

//     function iformat(icon, badge,) {
//         var originalOption = icon.element;
//         var originalOptionBadge = $(originalOption).data('badge');
                    
//         return $('<span><i class="fa ' + $(originalOption).data('icon') + '"></i> ' + icon.text + '<span class="badge">' + originalOptionBadge + '</span></span>');
//     }
// });

</script>
<script>
    // Get elements for hair color dropdown
    const hairDropdownButton = document.getElementById('hairDropdownButton');
    const hairDropdownContent = document.getElementById('hairDropdownContent');

    // Toggle dropdown open/close
    hairDropdownButton.addEventListener('click', function () {
        hairDropdownContent.classList.toggle('hair-dropdown-open');
    });

    // Function to update the dropdown button text with selected hair colors
    function updateHairDropdownButtonText() {
        const checkboxes = hairDropdownContent.querySelectorAll('input[type="checkbox"]:checked');
        const selectedHairColors = Array.from(checkboxes).map(checkbox => checkbox.nextSibling.textContent.trim());

        if (selectedHairColors.length > 0) {
            hairDropdownButton.textContent = selectedHairColors.join(', '); // Join selected hair colors with comma
        } else {
            hairDropdownButton.textContent = 'Select Hair Colors'; // Default text if no selection
        }
    }

    // Move selected hair colors to top
    function moveSelectedHairColorsToTop() {
        const labels = hairDropdownContent.querySelectorAll('label');
        const selectedLabels = [];
        const unselectedLabels = [];

        labels.forEach(label => {
            const checkbox = label.querySelector('input[type="checkbox"]');
            if (checkbox.checked) {
                selectedLabels.push(label);
                label.classList.add('hair-selected');  // Add selected styling class
            } else {
                unselectedLabels.push(label);
                label.classList.remove('hair-selected');
            }
        });

        hairDropdownContent.innerHTML = '';
        selectedLabels.forEach(label => hairDropdownContent.appendChild(label));
        unselectedLabels.forEach(label => hairDropdownContent.appendChild(label));
        updateHairDropdownButtonText();
    }

    // Update dropdown on checkbox change
    hairDropdownContent.addEventListener('change', function (e) {
        if (e.target.type === 'checkbox') {
            moveSelectedHairColorsToTop();
        }
    });

    // Close dropdown if clicked outside
    window.onclick = function (event) {
        if (!event.target.matches('#hairDropdownButton')) {
            const dropdowns = document.getElementsByClassName("hair-dropdown-content");
            for (let i = 0; i < dropdowns.length; i++) {
                const openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('hair-dropdown-open')) {
                    openDropdown.classList.remove('hair-dropdown-open');
                }
            }
        }
    }


      // Get elements for eye color dropdown
      const eyeDropdownButton = document.getElementById('eyeDropdownButton');
    const eyeDropdownContent = document.getElementById('eyeDropdownContent');

    // Toggle dropdown open/close
    eyeDropdownButton.addEventListener('click', function () {
        eyeDropdownContent.classList.toggle('eye-dropdown-open');
    });

    // Function to update the dropdown button text with selected eye colors
    function updateEyeDropdownButtonText() {
        const checkboxes = eyeDropdownContent.querySelectorAll('input[type="checkbox"]:checked');
        const selectedEyeColors = Array.from(checkboxes).map(checkbox => checkbox.nextSibling.textContent.trim());

        if (selectedEyeColors.length > 0) {
            eyeDropdownButton.textContent = selectedEyeColors.join(', '); // Join selected eye colors with comma
        } else {
            eyeDropdownButton.textContent = 'Select Eye Colors'; // Default text if no selection
        }
    }

    // Move selected eye colors to top
    function moveSelectedEyeColorsToTop() {
        const labels = eyeDropdownContent.querySelectorAll('label');
        const selectedLabels = [];
        const unselectedLabels = [];

        labels.forEach(label => {
            const checkbox = label.querySelector('input[type="checkbox"]');
            if (checkbox.checked) {
                selectedLabels.push(label);
                label.classList.add('eye-selected');  // Add selected styling class
            } else {
                unselectedLabels.push(label);
                label.classList.remove('eye-selected');
            }
        });

        eyeDropdownContent.innerHTML = '';
        selectedLabels.forEach(label => eyeDropdownContent.appendChild(label));
        unselectedLabels.forEach(label => eyeDropdownContent.appendChild(label));
        updateEyeDropdownButtonText();
    }

    // Update dropdown on checkbox change
    eyeDropdownContent.addEventListener('change', function (e) {
        if (e.target.type === 'checkbox') {
            moveSelectedEyeColorsToTop();
        }
    });

    // Close dropdown if clicked outside
    window.onclick = function (event) {
        if (!event.target.matches('#eyeDropdownButton')) {
            const dropdowns = document.getElementsByClassName("eye-dropdown-content");
            for (let i = 0; i < dropdowns.length; i++) {
                const openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('eye-dropdown-open')) {
                    openDropdown.classList.remove('eye-dropdown-open');
                }
            }
        }
    }


     // Get elements for language dropdown
     const customLanguageDropdownButton = document.getElementById('customLanguageDropdownButton');
    const customLanguageDropdownContent = document.getElementById('customLanguageDropdownContent');

    // Toggle dropdown open/close
    customLanguageDropdownButton.addEventListener('click', function () {
        customLanguageDropdownContent.classList.toggle('custom-language-dropdown-open');
    });

    function updateLangDropdownButtonText() {
        const checkboxes = customLanguageDropdownContent.querySelectorAll('input[type="checkbox"]:checked');
        const selectedLanguages = Array.from(checkboxes).map(checkbox => checkbox.nextSibling.textContent.trim()); // Assuming label text is the next sibling

        if (selectedLanguages.length > 0) {
            customLanguageDropdownButton.textContent = selectedLanguages.join(', '); // Join selected languages with comma
        } else {
            customLanguageDropdownButton.textContent = 'Select Languages'; // Default text if no selection
        }
    }

    // Move selected languages to top
    function moveSelectedLanguagesToTop() {
        const labels = customLanguageDropdownContent.querySelectorAll('label');
        const selectedLabels = [];
        const unselectedLabels = [];

        labels.forEach(label => {
            const checkbox = label.querySelector('input[type="checkbox"]');
            if (checkbox.checked) {
                selectedLabels.push(label);
                label.classList.add('language-selected');  // Add selected styling class
            } else {
                unselectedLabels.push(label);
                label.classList.remove('language-selected');
            }
        });

        customLanguageDropdownContent.innerHTML = '';
        selectedLabels.forEach(label => customLanguageDropdownContent.appendChild(label));
        unselectedLabels.forEach(label => customLanguageDropdownContent.appendChild(label));
        updateLangDropdownButtonText();
    }

    // Update dropdown on checkbox change
    customLanguageDropdownContent.addEventListener('change', function (e) {
        if (e.target.type === 'checkbox') {
            moveSelectedLanguagesToTop();
        }
    });

    // Close dropdown if clicked outside
    window.onclick = function (event) {
        if (!event.target.matches('#customLanguageDropdownButton')) {
            const dropdowns = document.getElementsByClassName("custom-language-dropdown-content");
            for (let i = 0; i < dropdowns.length; i++) {
                const openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('custom-language-dropdown-open')) {
                    openDropdown.classList.remove('custom-language-dropdown-open');
                }
            }
        }
    }


    // Get elements for dress size dropdown
    const dressDropdownButton = document.getElementById('dressDropdownButton');
    const dressDropdownContent = document.getElementById('dressDropdownContent');

    // Toggle dropdown open/close
    dressDropdownButton.addEventListener('click', function () {
        dressDropdownContent.classList.toggle('dress-dropdown-open');
    });

    // Function to update the dropdown button text with selected sizes
    function updateDropdownButtonText() {
        const checkboxes = dressDropdownContent.querySelectorAll('input[type="checkbox"]:checked');
        const selectedSizes = Array.from(checkboxes).map(checkbox => checkbox.value);

        if (selectedSizes.length > 0) {
            dressDropdownButton.textContent = selectedSizes.join(', '); // Join selected sizes with comma
        } else {
            dressDropdownButton.textContent = '-- Select Dress Sizes --'; // Default text if no selection
        }
    }

    // Move selected dress sizes to top
    function moveSelectedDressSizesToTop() {
        const labels = dressDropdownContent.querySelectorAll('label');
        const selectedLabels = [];
        const unselectedLabels = [];

        labels.forEach(label => {
            const checkbox = label.querySelector('input[type="checkbox"]');
            if (checkbox.checked) {
                selectedLabels.push(label);
                label.classList.add('dress-selected');  // Add selected styling class
            } else {
                unselectedLabels.push(label);
                label.classList.remove('dress-selected');
            }
        });

        dressDropdownContent.innerHTML = '';
        selectedLabels.forEach(label => dressDropdownContent.appendChild(label));
        unselectedLabels.forEach(label => dressDropdownContent.appendChild(label));
        updateDropdownButtonText();
    }

    // Update dropdown on checkbox change
    dressDropdownContent.addEventListener('change', function (e) {
        if (e.target.type === 'checkbox') {
            moveSelectedDressSizesToTop();
        }
    });

    // Close dropdown if clicked outside
    window.onclick = function (event) {
        if (!event.target.matches('#dressDropdownButton')) {
            const dropdowns = document.getElementsByClassName("dress-dropdown-content");
            for (let i = 0; i < dropdowns.length; i++) {
                const openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('dress-dropdown-open')) {
                    openDropdown.classList.remove('dress-dropdown-open');
                }
            }
        }
    }
</script>
<script src="{{ asset('user-assets/js/multi-select.js') }}"></script>
@endsection