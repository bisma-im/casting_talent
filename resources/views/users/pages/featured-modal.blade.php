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
    margin-bottom: 10px; /* Add space between items */
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
    color: #000; /* Initial color set to black */
}

.popup a:hover {
    color: #ff0000; /* Change color to red on hover */
}


</style>

<style>
    .sideBar{
        padding: 10px;
        border: 1px solid red;
    }
    .headText h3{
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
     .gender-filter{
        padding: 8px 16px;
        background-color: transparent;
        color: #ccc;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 17px;
        margin-right: 10px;
        margin-top: 10px;
        display: flex;       /* Use flexbox to place elements on the same line */
        gap: 15px;
     }
     .gender-filter a:not(:last-child)::after {
    content: '';              /* Empty content to create the divider */
    position: absolute;
    right: -8px;              /* Position the divider slightly to the right */
    top: 0;
    height: 100%;             /* Full height of the anchor tag */
    width: 1px;               /* Thin vertical line */
    background-color: #afacac;    /* Divider color */
    color: black;
}
.gender-filter a {
    text-decoration: none; /* Remove underline */
    color: #ccc;          /* Set link color */
    padding: 5px 10px;
    position: relative;    /* For positioning the divider */
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
    background-color: #f7f1f1; /* Background color when form is open */
}
    .container-for-dropdown {
        display: flex;
        justify-content: space-between;  /* Aligns heading to the left and button to the right */
        align-items: center;  /* Vertically centers the heading and button */
        position: relative;  
        width: 100%;
        padding-right: 10px;  
        padding-left: 10px;
        position: relative;  /* Keeps relative positioning for the dropdown */
        width: 100%;  /* Ensures the container spans the full width of its parent */
        padding-right: 10px;  /* Adds some padding on the right if needed */
     }

/* Adjust the .filter-form class for absolute positioning */
.filter-form {
    position: absolute;
    top: 40px; /* Adjust based on your needs, such as the height of your filter button */
    /* left: 0; */
    z-index: 1000; /* Ensures it floats above other content */
    background-color: #f7f1f1;
    /* border: 1px solid #ccc; */
    border-radius: 4px;
    padding: 20px;
    width: 97%; 
    /* box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15); */
    display: none; /* Keeps it hidden until triggered */
    margin-right: 10px;
    margin-left: 10px;
}

.inputs-row {
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
    width: 100%;
}

.inputs-row select, .inputs-row input, .inputs-row .dropdown {
    /* padding: 8px; */
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 33.33%;
}
.inputs-row select, .inputs-row input {
    padding: 8px;
}

.inputs-row button {
    width: 100%; /* Ensures the button stretches to fill its container */
}

     .dropdown {
        position: relative;
        display: inline-block;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        /* min-width: 200px; */
        max-height: 250px;
        overflow-y: auto;
        box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
        /* padding: 12px; */
        z-index: 1;
        border: 1px solid #ccc;
    }
    .dropdown-content label {
        display: block;
        /* margin-bottom: 5px; */
    }
    .dropdown-btn {
        background-color: #fff;
        color: #75758B;
        padding: 10px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }
    .dropdown-btn:focus {
        outline: none;
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
    color: #75758B; /* Default color for all options */
}

select option {
    color: black; /* Normal color for options */
}
select:hover {
    border: 2px solid #00798C; /* Changes border on hover */
}

/* Styling for focus state */
select:focus {
    border: 2px solid #00798C; /* Changes border when the select is active or focused */
    outline: none; /* Optional: Removes the default focus outline */
}

select option[value=""] {
    color: #75758B; /* Grey color for placeholder options */
}



    </style>

    <section class="innerpages">
        <div class="container">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="innertext">
                    <h1>Featured <span>Talents</span></h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container-for-dropdown">
        <div class="gender-filter">
                <a href="{{ route('featured-models.get', ['role' => request()->route('role'), 'gender' => 'female']) }}" class="{{ request('gender') == 'female' ? 'active' : '' }}">Female</a>
                <a href="{{ route('featured-models.get', ['role' => request()->route('role'), 'gender' => 'male']) }}" class="{{ request('gender') == 'male' ? 'active' : '' }}">Male</a>
                <a href="{{ route('featured-models.get', ['role' => request()->route('role'), 'gender' => 'girl']) }}" class="{{ request('gender') == 'girl' ? 'active' : '' }}">Girl</a>
                <a href="{{ route('featured-models.get', ['role' => request()->route('role'), 'gender' => 'boy']) }}" class="{{ request('gender') == 'boy' ? 'active' : '' }}">Boy</a>
                
        </div>
        <button id="filterBtn" class="filter-button"><i class="fas fa-sliders-v m-1"></i> Filter</button>
        <div id="filterForm" class="filter-form" style="display:none;">
                {{-- <form action="{{ route('your.route') }}" method="GET"> --}}
                <form method="GET">
                        <div class="inputs-row">
                                <select name="ethnicity">
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
                                <select name="nationality">
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
                                <div class="dropdown">
                                        <button onclick="toggleDropdown(event)" class="dropdown-btn text-left">Select Categories</button>
                                        <div id="dropdownContent" class="dropdown-content">
                                            <!-- Checkboxes will be populated here -->
                                        </div>
                                </div>
                        </div>
                        <div class="inputs-row">
                                <select name="age">
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
                                <select name="height">
                                        <option value="" disabled selected>Select Height (cm)</option>
                                        <option value="140-149">140 - 149</option>
                                        <option value="150-159">150 - 159</option>
                                        <option value="160-169">160 - 169</option>
                                        <option value="170-179">170 - 179</option>
                                        <option value="180-189">180 - 189</option>
                                        <option value="190-199">190 - 199</option>
                                        <option value="200+">200 and above</option>
                                        <!-- Add height options here -->
                                </select>
                                <select name="dress_size">
                                        <option value="" disabled selected>Select Dress Size</option>
                                        <option value="XXS">XXS</option>
                                        <option value="XS">XS</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="XXL">XXL</option>
                                        <option value="3XL">3XL</option>
                                        <option value="4XL">4XL</option>
                                        <option value="5XL">5XL</option>
                                </select>
                        </div>
                        <div class="inputs-row">
                                <select name="hair_color">
                                        <option value="" disabled selected>Select Hair Color</option>
                                        <option value="Auburn">Auburn</option>
                                        <option value="Black">Black</option>
                                        <option value="Blonde">Blonde</option>
                                        <option value="Brown">Brown</option>
                                        <option value="Brown with Blonde Streaks">Brown with Blonde Streaks</option>
                                        <option value="Dark Blonde">Dark Blonde</option>
                                        <option value="Dark Brown">Dark Brown</option>
                                        <option value="Light Brown">Light Brown</option>
                                        <option value="Red">Red</option>
                                        <option value="Red/Orange/Brown">Red/Orange/Brown</option>
                                        <option value="Silver">Silver</option>
                                        <option value="Green">Green</option>
                                        <option value="Strawberry Blonde">Strawberry Blonde</option>
                                        <!-- Add hair color options here -->
                                </select>
                                <select name="eye_color">
                                        <option value="" disabled selected>Select Eye Color</option>
                                        <option value="Blue/Grey">Blue/Grey</option>
                                        <option value="Brown">Brown</option>
                                        <option value="Dark Brown">Dark Brown</option>
                                        <option value="Green">Green</option>
                                        <option value="Green/Grey">Green/Grey</option>
                                        <option value="Green/Hazel">Green/Hazel</option>
                                        <option value="Hazel">Hazel</option>
                                        <option value="Blue">Blue</option>
                                        <!-- Add eye color options here -->
                                </select>
                                <select name="language">
                                        <option value="" disabled selected>Select Language</option>
                                        @foreach ($languages as $language)
                                                <option value="{{ $language['value'] }}">{{ $language['label'] }}</option>
                                        @endforeach
                                        <!-- Add eye color options here -->
                                </select>
                        </div>
                        <div class="inputs-row">
                                <button type="submit">Filter</button>
                        </div>
                </form>
        </div>
     </div>

      
    <!--<div class="container">-->
    <!--    <div class="row">-->
    <!--        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">-->
    <!--            <div class="featurelist">-->
    <!--                    <ul>-->
    <!--                        <li><a href="{{ route('featured-models.get', ['role' => 'actors']) }}" class="active" data-target="tab1">-->
    <!--                            <i class="fa-solid fa-circle"></i>ACTORS</a>-->
    <!--                        </li>-->
    <!--                        <li><a href="{{ route('featured-models.get', ['role' => 'models']) }}" data-target="tab2">-->
    <!--                            <i class="fa-solid fa-circle"></i>MODELS</a>-->
    <!--                        </li>-->
    <!--                        <li><a href="{{ route('featured-models.get', ['role' => 'dancers_performers']) }}" data-target="tab3">-->
    <!--                            <i class="fa-solid fa-circle"></i>DANCERS & PERFORMERS</a>-->
    <!--                        </li>-->
    <!--                        <li><a href="{{ route('featured-models.get', ['role' => 'film_crew']) }}" data-target="tab4">-->
    <!--                            <i class="fa-solid fa-circle"></i>FILM CREW</a>-->
    <!--                        </li>-->
    <!--                        <li><a href="{{ route('featured-models.get', ['role' => 'musicians']) }}" data-target="tab5">-->
    <!--                            <i class="fa-solid fa-circle"></i>MUSICIANS</a>-->
    <!--                        </li>-->
    <!--                        <li><a href="{{ route('featured-models.get', ['role' => 'influencers']) }}" data-target="tab6">-->
    <!--                            <i class="fa-solid fa-circle"></i>INFLUENCERS</a>-->
    <!--                        </li>-->
    <!--                        <li><a href="{{ route('featured-models.get', ['role' => 'presenters_emcees']) }}" data-target="tab7">-->
    <!--                            <i class="fa-solid fa-circle"></i>PRESENTERS & EMCEES</a>-->
    <!--                        </li>-->
    <!--                        <li><a href="{{ route('featured-models.get', ['role' => 'event_staff_ushers']) }}" data-target="tab8">-->
    <!--                            <i class="fa-solid fa-circle"></i>EVENT STAFF & USHERS</a>-->
    <!--                        </li>-->
    <!--                        <li><a href="{{ route('featured-models.get', ['role' => 'photographers_videographers']) }}" data-target="tab9">-->
    <!--                            <i class="fa-solid fa-circle"></i>PHOTOGRAPHERS / VIDEOGRAPHERS</a>-->
    <!--                        </li>-->
    <!--                        <li><a href="{{ route('featured-models.get', ['role' => 'makeup_hair_stylist']) }}" data-target="tab10">-->
    <!--                            <i class="fa-solid fa-circle"></i>MAKEUP, HAIR, PAINTER & FASHION STYLIST</a>-->
    <!--                        </li>-->
    <!--                    </ul>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
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
                                                        CTF - 00001
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
                                {{-- <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <a href="{{ route('model-info.get', $modelDetail->id) }}" class="text-dark">
                                        <div class="castbox">
                                            <div class="castimg">
                                                <img src="{{ url('/uploads/models/' . $firstImage) }}" class="img-fluid"
                                                    alt="Model Image">
                                            </div>
                                            <div class="castbody">
                                                <h5 class="bodytheading">{{ $modelDetail->first_name }}
                                                    {{ $modelDetail->last_name }}</h5>
                                                <div class="castbodylist firstitem">
                                                    <h5><strong>AGE:</strong> {{ $age }}</h5>
                                                    <h5><strong>Nationality:</strong>
                                                        {{ $modelDetail->nationality }}
                                                    </h5>
                                                </div>
                                                <div class="castbodylist">
                                                    <h5><strong>HEIGHT:</strong> {{ $height }}</h5>
                                                </div>
                                                <div class="castbodylist">
                                                    <h5><strong>WEIGHT:</strong> {{ $weight }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div> --}}
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
        {{-- </div> --}}
    </section>
    
    {{-- <script>
        document.querySelectorAll('.category-link').forEach(link => {
                link.addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent the default link behavior

                        // Close any open pop-ups
                        document.querySelectorAll('.popup').forEach(popup => {
                        if (popup !== this.nextElementSibling) {
                                popup.style.display = 'none';
                        }
                        });

                        // Toggle the current pop-up
                        const popup = this.nextElementSibling;
                        popup.style.display = (popup.style.display === 'block') ? 'none' : 'block';
                });
        });

        // Close popups when clicking outside
        document.addEventListener('click', function(event) {
        if (!event.target.closest('.category-list')) {
                document.querySelectorAll('.popup').forEach(popup => {
                popup.style.display = 'none';
                });
        }
        });

    </script> --}}
<script>
        document.getElementById('filterBtn').addEventListener('click', function() {
    var form = document.getElementById('filterForm');
    var button = document.querySelector(".filter-button");
    if (form.style.display === 'none') {
        form.style.display = 'block';
        button.classList.add("active");
    } else {
        form.style.display = 'none';
        button.classList.remove("active");
    }
});
/// Define the talents array
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
        subcategories: ['Choreographer', 'Belly Dancer', 'Sufi Dancer', 'Gogo Dancer', 'Performer', 'Ayala Dancer', 'B Boyz', 'Dance Groups', 'Tabrey Dancer']
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

// Populate the checkboxes for categories and subcategories
talents.forEach(talent => {
    // Create a label and checkbox for the main category
    const categoryLabel = document.createElement('label');
    const categoryCheckbox = document.createElement('input');
    categoryCheckbox.type = 'checkbox';
    categoryCheckbox.value = talent.name;
    categoryCheckbox.addEventListener('change', updateSelectedOptions); // Listen for changes
    categoryLabel.appendChild(categoryCheckbox);
    categoryLabel.appendChild(document.createTextNode(talent.name));
    
    // Add the category checkbox to the container
    dropdownContent.appendChild(categoryLabel);

    // Add subcategories as checkboxes
    if (talent.subcategories.length > 0) {
        talent.subcategories.forEach(subcategory => {
            const subcategoryLabel = document.createElement('label');
            const subcategoryCheckbox = document.createElement('input');
            subcategoryCheckbox.type = 'checkbox';
            subcategoryCheckbox.value = subcategory;
            subcategoryCheckbox.addEventListener('change', updateSelectedOptions); // Listen for changes
            subcategoryLabel.appendChild(subcategoryCheckbox);
            subcategoryLabel.appendChild(document.createTextNode(subcategory));
            
            // Indent subcategories
            subcategoryLabel.style.marginLeft = '20px';
            dropdownContent.appendChild(subcategoryLabel);
        });
    }

    dropdownContent.appendChild(document.createElement('br')); // Line break between categories
});

// Function to update the paragraph with selected categories and subcategories
function updateSelectedOptions() {
    const selectedCheckboxes = Array.from(document.querySelectorAll('#dropdownContent input[type="checkbox"]:checked'));
    const selectedValues = selectedCheckboxes.map(checkbox => checkbox.value);
    document.getElementById('selectedOptions').textContent = "You have selected: " + selectedValues.join(', ');
}

// Function to toggle dropdown visibility
function toggleDropdown(event) {
    event.preventDefault(); // Prevent the page from reloading
    const dropdown = document.getElementById('dropdownContent');
    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
}

// Close the dropdown if clicked outside
window.onclick = function(event) {
    if (!event.target.matches('.dropdown-btn')) {
        const dropdown = document.getElementById('dropdownContent');
        if (dropdown.style.display === 'block') {
            dropdown.style.display = 'none';
        }
    }
}
</script>
@endsection
