<!-- Modal -->
<style>
    .modal-content {
        background: linear-gradient(135deg, #00798C, #002b27); /* Gradient from #00798C to a lighter shade */
        color: white; /* Set the text color to white for contrast */
        border-radius: 10px;
        padding: 20px;
    }

    .modal-header, .modal-footer {
        border: none; /* Remove default borders */
    }

    .modal-title {
        font-weight: bold;
        text-align: center;
    }

    .modal-body {
        font-size: 16px;
        text-align: center; /* Center content */
    }

    /* Customize the buttons in the modal */
    .modal-body button {
        border-radius: 30px;
        padding: 10px 20px;
        margin: 5px;
        font-weight: bold;
        background-color: #ffffff; /* White buttons */
        color: #00798C; /* Button text color to match the theme */
        border: 1px solid #00798C; /* Border for button */
    }

    /* Add hover effect on buttons */
    .modal-body button:hover {
        background-color: #edae49;
    }

    /* Customize the close button */
    .btn-close {
        color: white;
        background-color: transparent;
        border: none;
    }
</style>


<div class="modal fade show" id="inquiryModal" role="dialog" tabindex="-1" aria-modal="true">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-center" id="modalLabel">Let's Start Now!</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <button id="generalInquiryBtn" class="btn btn-primary">General Inquiry</button>
                <button id="clientInquiryBtn" class="btn btn-secondary">Client Inquiry</button>

                <div id="clientInquiryForm" style="display:none;">
                    <form method="post" action="{{ route('job-info.post') }}"
                                 enctype="multipart/form-data">
                                 @csrf
                                 <div class="row">
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                       <div class="contactlist">
                                          <label>Files</label>
                                          <input type="file" name="job_file" class="form-control"
                                             multiple>
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                       <div class="contactlist">
                                          <label>Title</label>
                                          <input type="text" class="form-control" name="title"
                                             placeholder="Enter title..">
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                       <div class="contactlist">
                                          <label>Gender</label>
                                          <select class="form-select" name="gender"
                                             aria-label="Default select example">
                                             <option value="female" selected>Female</option>
                                             <option value="male">Male</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                       <div class="contactlist">
                                          <label>Nationality</label>
                                          <select class="form-select" name="nationality" aria-label="Default select example">
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
                                             <option value="Central African Republic">Central African Republic</option>
                                             <option value="Chad">Chad</option>
                                             <option value="Chile">Chile</option>
                                             <option value="China">China</option>
                                             <option value="Colombia">Colombia</option>
                                             <option value="Comoros">Comoros</option>
                                             <option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option>
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
                                             <option value="Eswatini (fmr. "Swaziland")">Eswatini (fmr. "Swaziland")</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                       <div class="contactlist">
                                          <label>Lives in</label>
                                          <select class="form-select" name="lives_in"
                                             aria-label="Default select example">
                                             <option value="United Arab Emirates" selected>United Arab Emirates</option>
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
                                             <option value="Central African Republic">Central African Republic</option>
                                             <option value="Chad">Chad</option>
                                             <option value="Chile">Chile</option>
                                             <option value="China">China</option>
                                             <option value="Colombia">Colombia</option>
                                             <option value="Comoros">Comoros</option>
                                             <option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option>
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
                                             <option value="Eswatini (fmr. "Swaziland")">Eswatini (fmr. "Swaziland")</option>
                                             <option value="Ethiopia">Ethiopia</option>
                                             <option value="Fiji">Fiji</option>
                                             <option value="Finland">Finland</option>
                                             <option value="France">France</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <div class="contactlist">
                                            <label for="languagesSpoken">Languages Spoken</label>
                                            <select class="form-select languages-select" id="languagesSpoken" name="languages_spoken[]" multiple="multiple" required>
                                                <option value="English">English</option>
                                                <option value="Hindi">Hindi</option>
                                                <option value="Arabic">Arabic</option>
                                                <option value="French">French</option>
                                                <option value="Spanish">Spanish</option>
                                                <option value="Chinese">Chinese</option>
                                                <option value="Russian">Russian</option>
                                                <option value="Portuguese">Portuguese</option>
                                                <option value="German">German</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                       <div class="contactlist">
                                          <label>Description</label>
                                          <textarea rows="10" type="text" class="form-control" name="biography"
                                             placeholder="Enter your description.."></textarea>
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                       <div class="contactlist">
                                          <label>Email</label>
                                          <input type="email" class="form-control" name="email"
                                             placeholder="Dummy321@gmail.com">
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                       <div class="contactlist">
                                          <label>Height (CM)</label>
                                          <input type="text" class="form-control" name="height_cm" placeholder="e.g., 170">
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                       <div class="contactlist">
                                          <label>Bust (CM)</label>
                                          <input type="text" class="form-control" name="bust_cm" placeholder="e.g., 90">
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                       <div class="contactlist">
                                          <label>Waist (CM)</label>
                                          <input type="text" class="form-control" name="waist_cm" placeholder="e.g., 60">
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                       <div class="contactlist">
                                          <label>Hip (CM)</label>
                                          <input type="text" class="form-control" name="hip_cm" placeholder="e.g., 90">
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                       <div class="contactlist">
                                          <label>Weight (KG)</label>
                                          <input type="text" class="form-control" name="weight_kg" placeholder="e.g., 70">
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                       <div class="contactlist">
                                          <label>Eye Color</label>
                                          <input type="text" class="form-control" name="eyes_color" placeholder="e.g., Brown">
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                       <div class="contactlist">
                                          <label>Hair Color</label>
                                          <select class="form-select" name="hair_color"
                                             aria-label="Default select example">
                                             <option value="brown" selected>Brown</option>
                                             <option value="black">Black</option>
                                             <option value="blonde">Blonde</option>
                                             <option value="red">Red</option>
                                             <option value="gray">Gray</option>
                                             <option value="white">White</option>
                                             <option value="auburn">Auburn</option>
                                             <option value="chestnut">Chestnut</option>
                                             <option value="platinum_blonde">Platinum Blonde
                                             </option>
                                             <option value="strawberry_blonde">Strawberry
                                                Blonde
                                             </option>
                                             <option value="blue">Blue</option>
                                             <option value="green">Green</option>
                                             <option value="pink">Pink</option>
                                             <option value="purple">Purple</option>
                                             <option value="silver">Silver</option>
                                             <option value="other">Other</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                       <div class="contactlist">
                                          <label>Hair Length</label>
                                          <select class="form-select" name="hair_length"
                                             aria-label="Default select example">
                                             <option value="long" selected>Long</option>
                                             <option value="medium">Medium</option>
                                             <option value="short">Short</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                       <div class="contactlist">
                                          <label>Shoe Size (EURO)</label>
                                          <input type="text" class="form-control"
                                             name="shoe_size_euro" placeholder="e.g. 12">
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                       <div class="contactlist">
                                          <label>Dress Size (EURO)</label>
                                          <input type="text" class="form-control"
                                             name="dress_size_euro" placeholder="e.g. 12">
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                       <div class="contactlist">
                                          <label>Your Hourly/ Session Rate</label>
                                          <input type="text" class="form-control" name="hourly_rate"
                                             placeholder="e.g. 125">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                        <div class="contactlist">
                                            <label>No Of Days</label>
                                            <input type="number" class="form-control" name="no_of_days" placeholder="12" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contactlist">
                                            <label>No Of Hours</label>
                                            <input type="number" class="form-control" name="no_of_hours" placeholder="12" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="contactlist">
                                            <label>No Of Talents (Male)</label>
                                            <input type="number" class="form-control" name="no_of_talents_male" placeholder="Number of Male Talents" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contactlist">
                                            <label>No Of Talents (Female)</label>
                                            <input type="number" class="form-control" name="no_of_talents_female" placeholder="Number of Female Talents" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contactlist">
                                            <label>Required Talent</label>
                                            <select class="form-select" name="required_talent" required>
                                                <option value="" disabled selected>Select Talent Type</option>
                                                <option value="Actor">Actor</option>
                                                <option value="Model">Model</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contactlist">
                                            <label>Budget For Each Talent</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="starting_amount" placeholder="Starting Amount" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="maximum_amount" placeholder="Maximum Amount" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="row">-->
                                <!--    <div class="col-md-12">-->
                                <!--        <div class="contactlist">-->
                                <!--            <label>Detail Of The Project</label>-->
                                <!--            <textarea class="form-control" name="project_detail" rows="5" required></textarea>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                 <hr>
                                 <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                       <div class="caterlisttext">
                                          <h5>Category Type</h5>
                                       </div>
                                       <div class="musicainlist">
                                          <ul>
                                             <li>
                                                <label>
                                                <input type="checkbox" name="category_type[]"
                                                   value="tv_channels_game_shows"
                                                   id="musician_tv_channels_game_shows">
                                                <label for="musician_tv_channels_game_shows">Tv
                                                Channels, Game Shows</label>
                                                </label>
                                             </li>
                                             <li>
                                                <label>
                                                <input type="checkbox" name="category_type[]"
                                                   value="tv_shows" id="musician_tv_shows">
                                                <label for="musician_tv_shows">Tv
                                                Shows</label>
                                                </label>
                                             </li>
                                             <li>
                                                <label>
                                                <input type="checkbox" name="category_type[]"
                                                   value="reality_tv" id="musician_reality_tv">
                                                <label for="musician_reality_tv">Reality
                                                Tv</label>
                                                </label>
                                             </li>
                                             <li>
                                                <label>
                                                <input type="checkbox" name="category_type[]"
                                                   value="documentaries_factual"
                                                   id="musician_documentaries_factual">
                                                <label
                                                   for="musician_documentaries_factual">Documentaries
                                                & Factual</label>
                                                </label>
                                             </li>
                                             <li>
                                                <label>
                                                <input type="checkbox" name="category_type[]"
                                                   value="hobbyist" id="musician_hobbyist">
                                                <label for="musician_hobbyist">Hobbyist</label>
                                                </label>
                                             </li>
                                             <li>
                                                <label>
                                                <input type="checkbox" name="category_type[]"
                                                   value="independent_artist"
                                                   id="musician_independent_artist">
                                                <label
                                                   for="musician_independent_artist">Independent
                                                Artist</label>
                                                </label>
                                             </li>
                                             <li>
                                                <label>
                                                <input type="checkbox" name="category_type[]"
                                                   value="independent_label_artist"
                                                   id="musician_independent_label_artist">
                                                <label
                                                   for="musician_independent_label_artist">Independent
                                                Label Artist</label>
                                                </label>
                                             </li>
                                             <li>
                                                <label>
                                                <input type="checkbox" name="category_type[]"
                                                   value="major_label_artist"
                                                   id="musician_major_label_artist">
                                                <label for="musician_major_label_artist">Major
                                                Label Artist</label>
                                                </label>
                                             </li>
                                             <li>
                                                <label>
                                                <input type="checkbox" name="category_type[]"
                                                   value="post_label_musician"
                                                   id="musician_post_label_musician">
                                                <label for="musician_post_label_musician">Post
                                                Label Musician</label>
                                                </label>
                                             </li>
                                             <li>
                                                <label>
                                                <input type="checkbox" name="category_type[]"
                                                   value="song_writer" id="musician_song_writer">
                                                <label for="musician_song_writer">Song
                                                Writer</label>
                                                </label>
                                             </li>
                                             <li>
                                                <label>
                                                <input type="checkbox" name="category_type[]"
                                                   value="session_musician"
                                                   id="musician_session_musician">
                                                <label for="musician_session_musician">Session
                                                Musician</label>
                                                </label>
                                             </li>
                                             <li>
                                                <label>
                                                <input type="checkbox" name="category_type[]"
                                                   value="producer_composer"
                                                   id="musician_producer_composer">
                                                <label for="musician_producer_composer">Producer-
                                                Composer</label>
                                                </label>
                                             </li>
                                             <li>
                                                <label>
                                                <input type="checkbox" name="category_type[]"
                                                   value="orchestral_musician"
                                                   id="musician_orchestral_musician">
                                                <label
                                                   for="musician_orchestral_musician">Orchestral
                                                Musician</label>
                                                </label>
                                             </li>
                                             <li>
                                                <label>
                                                <input type="checkbox" name="category_type[]"
                                                   value="teacher_retired_artist"
                                                   id="musician_teacher_retired_artist">
                                                <label
                                                   for="musician_teacher_retired_artist">Teacher,
                                                Retired Artist</label>
                                                </label>
                                             </li>
                                             <li>
                                                <label>
                                                <input type="checkbox" name="category_type[]"
                                                   value="entrepreneurial_artist"
                                                   id="musician_entrepreneurial_artist">
                                                <label
                                                   for="musician_entrepreneurial_artist">Entrepreneurial
                                                Artist</label>
                                                </label>
                                             </li>
                                             <li>
                                                <label>
                                                <input type="checkbox" name="category_type[]"
                                                   value="singer" id="musician_singer">
                                                <label for="musician_singer">Singer</label>
                                                </label>
                                             </li>
                                             <li>
                                                <label>
                                                <input type="checkbox" name="category_type[]"
                                                   value="musician_music"
                                                   id="musician_musician_music">
                                                <label
                                                   for="musician_musician_music">Musicianmusic</label>
                                                </label>
                                             </li>
                                             <li>
                                                <label>
                                                <input type="checkbox" name="category_type[]"
                                                   value="band_guitarist"
                                                   id="musician_band_guitarist">
                                                <label for="musician_band_guitarist">Band
                                                Guitarist</label>
                                                </label>
                                             </li>
                                             <li>
                                                <label>
                                                <input type="checkbox" name="category_type[]"
                                                   value="violinist" id="musician_violinist">
                                                <label for="musician_violinist">Violinist</label>
                                                </label>
                                             </li>
                                             <li>
                                                <label>
                                                <input type="checkbox" name="category_type[]"
                                                   value="rapper" id="musician_rapper">
                                                <label for="musician_rapper">Rapper</label>
                                                </label>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="contactlist text-center btnlist mt-5">
                                    <button type="submit" class="nextButtonForm">Submit</button>
                                 </div>
                              </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        console.log('DOM fully loaded and parsed');
        var myModal = new bootstrap.Modal(document.getElementById('inquiryModal'), {
            keyboard: false
        });
        $("#inquiryModal").appendTo("body");
        myModal.show();
    }, 3000); // Show modal after 3 seconds
    document.getElementById('generalInquiryBtn').addEventListener('click', function() {
        window.location.href = "{{ route('contact.get') }}";
    });
    document.getElementById('clientInquiryBtn').addEventListener('click', function() {
        window.location.href = "{{ route('dashboard.get') }}";
    });
});

</script>