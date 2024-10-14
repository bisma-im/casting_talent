@extends('users.layouts.layout')

@section('title', 'Casting Talent | Talent Details')

@section('main-content')
<!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <style>
        /* Header styling */
        .header {
            background-color: #DAD7B1;
            padding: 1em;
            color: #d9480f;
            border-bottom: 2px solid rgb(233, 171, 88);
        }

        .name {
            font-size: 28px;
            font-weight: bolder;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-download button {
            font-size: 14px;
        }

        /* Image slider styling */
        .image-slider {
            display: flex;
            overflow-x: auto;
            gap: 10px;
            padding: 1em 0;
        }

        .slide {
            flex: 0 0 auto;
            width: calc(100% / 3 - 10px);
            /* Adjust based on desired number of images visible */
        }

        .slide img {
            width: 100%;
            display: block;
            border-radius: 5px;
        }

        /* Details styling */
        .details {
            border: 2px solid rgb(233, 171, 88);
            border-radius: 5px;
            background-color: #DAD7B1;
            padding: 1em;
            color: #d9480f;
            margin-top: 20px;
        }

        .age-gender {
            display: flex;
            justify-content: space-between;
        }

        .age,
        .gender {
            width: 48%;
        }

        .blurb {
            margin-top: 20px;
        }

        .filmography {
            margin-top: 20px;
        }
        
        .castimg img{
            height: 550px;
        }
    </style>
    
<style>
    .user-profile-section {
  padding: 20px;
  background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.user-details-card {
  background: linear-gradient(135deg, #ffffff 0%, #f1f1f1 100%);
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  padding: 25px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  margin-bottom: 20px;
}

.user-details-card:hover {
  transform: scale(1.02);
  box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
}

.user-info p {
  font-size: 17px;
  line-height: 1.8;
  color: #333;
  margin-bottom: 10px;
}

.user-info p strong {
  font-weight: 700;
  color: #007bff;
}

.user-info i {
  margin-right: 8px;
  color: #007bff;
}

.profile-divider {
  margin-top: 25px;
  margin-bottom: 25px;
  border-top: 2px solid #ddd;
}

.user-biography h5 {
  font-weight: 700;
  margin-bottom: 15px;
  color: #333;
}

.user-biography p {
  font-size: 16px;
  line-height: 1.7;
  color: #555;
  padding: 10px;
  background: rgba(0, 123, 255, 0.05);
  border-left: 4px solid #007bff;
  border-radius: 6px;
}

.user-biography h5 i {
  margin-right: 8px;
  color: #007bff;
}

@media (max-width: 768px) {
  .user-info p {
    font-size: 16px;
    line-height: 1.6;
  }
  .user-details-card {
    padding: 20px;
  }
} 

</style>
<?php

function convertToTitleCaseWithPunctuation($items) {
    // Array to hold the converted strings
    $convertedItems = [];

    // Loop through each item in the input array
    foreach ($items as $item) {
        // Split the string by underscores
        $words = explode('_', $item);

        // Capitalize the first letter of each word
        $capitalizedWords = array_map('ucwords', $words);

        // Join the words with a space
        $convertedItems[] = implode(' ', $capitalizedWords);
    }

    // Add comma to all except the last item and add a period at the end of the last item
    $lastIndex = count($convertedItems) - 1;
    foreach ($convertedItems as $index => $convertedItem) {
        if ($index === $lastIndex) {
            // Last item, add period
            $convertedItems[$index] = $convertedItem . '.';
        } else {
            // Add comma to all other items
            $convertedItems[$index] = $convertedItem . ',';
        }
    }

    // Return the array as a string with each item separated by a space
    return implode(' ', $convertedItems);
}
?>

    <section class="innerpages">
        <div class="container">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="innertext">
                    <h1>MODEL <span>DETAILS</span></h1>
                </div>
            </div>
        </div>
    </section>

    @php
        // Parsing the musician categories from JSON string
        $musicianCategories = json_decode($details['musician_categories'], true);
        // Extracting the first profile image
        $profileImages = json_decode($details['profile_images']);
        $firstImage = $profileImages[0] ?? 'default.png'; // Default image if no profile image is available
        // Calculating age from the date of birth
        $birthDate = new DateTime($details['date_of_birth']);
        $currentDate = new DateTime();
        $age = $currentDate->diff($birthDate)->y;
        // Default values for filmography or other dynamic content
        $filmography = 'No filmography available.';
        
        // Assuming $details['user_id'] is an integer or a numeric value
        $userId = $details['user_id']; // e.g., 1
        $timestamp = time();
        function generateUniqueId($userId, $prefix = 'CP-') {
            $formattedId = str_pad($userId, 5, '0', STR_PAD_LEFT);
            return $prefix . $formattedId;
        }
        $uniqueId = generateUniqueId($userId);
    @endphp

    <div class="container my-4" >
        <div class="row d-flex align-items-center" id="getSS">
            <div class="col-md-4">
                <!-- Display the first image -->
                <div class="castbox">
                    <a href="{{ url('uploads/models/profiles/' . $firstImage) }}" data-fancybox="gallery" data-caption="Model Image">
                        <div class="castimg">
                            <img src="{{ url('uploads/models/profiles/' . $firstImage) }}" class="img-fluid" alt="Model Image">
                        </div>
                    </a>
                </div>
            </div>
            <!-- Add the rest of the images to FancyBox gallery -->
            @foreach(array_slice($profileImages, 1) as $image)
                <a href="{{ url('uploads/models/profiles/' . $image) }}" data-fancybox="gallery" data-caption="Model Image" style="display: none;">
                    <img src="{{ url('uploads/models/profiles/' . $image) }}" alt="Gallery Image">
                </a>
            @endforeach
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 py-2">
                        <div class="header py-3">
                            <div class="name">
                                <!--{{ $details['first_name'] }} {{ $details['last_name'] }} => -->
                                <span>{{ $uniqueId }}</span>
                                <!--{{ route('download.model.details', $details['id']) }} {{ url('/download-all-model-images/' . $details['id']) }}  id="captureButton" -->
                                <button id="captureButton" class="btn btn-success">Download</button>
                            </div>
                        </div>
                    </div>
                    <!-- Second Row: Other Information -->
                    <div class="row user-profile-section">
    <div class="col-md-12 user-details-card">
        <div class="row">
            <div class="col-md-6 user-info">
                <p><i class="fas fa-birthday-cake"></i> <strong>Age:</strong> {{ $age }}</p>
                <p><i class="fas fa-venus-mars"></i> <strong>Gender:</strong> {{ $details['gender'] }}</p>
                <p><i class="fas fa-flag"></i> <strong>Nationality:</strong> {{ $details['nationality'] }}</p>
                <p><i class="fas fa-language"></i> <strong>Languages Spoken:</strong> {{ implode(', ', json_decode($details['languages_spoken'], true)) }}</p>
                <p><i class="fas fa-users"></i> <strong>Ethnicity:</strong> {{ $details['ethnicity'] }}</p>
                <p><i class="fas fa-map-marker-alt"></i> <strong>Location:</strong> {{ $details['location'] }}</p>
                <p><i class="fas fa-arrows-alt-v"></i> <strong>Height:</strong> {{ $details['height'] }} cm</p>
                <p><i class="fas fa-ruler-vertical"></i> <strong>Bust:</strong> {{ $details['bust'] }} cm</p>
                <p><i class="fas fa-ruler-combined"></i> <strong>Waist:</strong> {{ $details['waist'] }} cm</p>
                <p><i class="fas fa-ruler-horizontal"></i> <strong>Hip:</strong> {{ $details['hip'] }} cm</p>
            </div>

            <div class="col-md-6 user-info">
                <p><i class="fas fa-weight"></i> <strong>Weight:</strong> {{ $details['weight'] }} kg</p>
                <p><i class="fas fa-eye"></i> <strong>Eye Color:</strong> {{ $details['eye_color'] }}</p>
                <p><i class="fas fa-tint"></i> <strong>Hair Color:</strong> {{ $details['hair_color'] }}</p>
                <p><i class="fas fa-cut"></i> <strong>Hair Length:</strong> {{ $details['hair_length'] }}</p>
                <p><i class="fas fa-shoe-prints"></i> <strong>Shoe Size:</strong> {{ $details['shoe_size'] }}</p>
                <p><i class="fas fa-tshirt"></i> <strong>Dress Size:</strong> {{ $details['dress_size'] }}</p>
                <p><i class="fas fa-dollar-sign"></i> <strong>Hourly Rate:</strong> ${{ $details['hourly_rate'] }}</p>
                <p><i class="fas fa-briefcase"></i> <strong>Categories:</strong> {{ convertToTitleCaseWithPunctuation($musicianCategories) }}</p>
            </div>
        </div>
        <hr class="profile-divider">

        <!-- Biography Section -->
        <div class="user-biography">
            <h5><i class="fas fa-pen-alt"></i> <strong>Description</strong></h5>
            <p>{{ $details['biography'] }}</p>
        </div>
    </div>
</div>


                </div>
            </div>
        </div>
    </div>

    
    <!-- Fancybox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <script>
        $(document).ready(function() {
            $('[data-fancybox="gallery"]').fancybox({
                // Optional: Customize Fancybox options here
                loop: true,
                buttons: ['zoom', 'close'],
            });
        });
    </script>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script>
    document.getElementById('captureButton').addEventListener('click', function() {
        // Hide the capture button
        var captureButton = document.getElementById('captureButton');
        captureButton.style.display = 'none';

        // Capture the screenshot
        html2canvas(document.getElementById('getSS')).then(function(canvas) {
            // Create the download link
            var link = document.createElement('a');
            link.href = canvas.toDataURL();
            link.download = 'screenshot.png';
            link.click();

            // Show the capture button again after download
            captureButton.style.display = 'block';
        }).catch(function(error) {
            console.error('Error capturing screenshot:', error);
            // If there's an error, show the button again
            captureButton.style.display = 'block';
        });
    });
</script>

@endsection
