@extends('users.layouts.layout')

@section('title', 'Casting Talent | Location Scounting')

@section('main-content')




   

    <section class="modalagencysec" id="locations-permit">
        <div class="container">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-5">
                <div class="innertext pt-3">
                    <!-- <h1>Location <span>Scouting</span></h1> -->

                </div>
            </div>
            <div class="row align-items-center justify-content-center text-center mx-0">
  <!-- Centered Image -->
  <div class="col-12 d-flex justify-content-center">
    <div class="modalimg">
      <img src="{{ url('user-assets') }}/images/filim_4.png" alt="Casting Image" class="img-fluid">
    </div>
  </div>

  <!-- Centered Text Content -->
  <div class="col-12 d-flex justify-content-center">
    <div class="modaltext2 text-center">
      <h2 class="modaltext2 text-dark">
        Locations / <span style="color: rgba(216, 31, 38, 1);">Permit</span>
      </h2>
      <p class="text-dark"><b>CAST TALENTS Location Scout: Premier Film Locations and Production Support in the UAE</b></p>
      <p>
        At CAST TALENTS Location Scout, we specialize in providing top-tier film locations and comprehensive
        production support across the UAE. Our experienced team excels in location scouting, permitting, and
        sourcing local crews, along with a range of other production resources to meet all your needs.
      </p>
      <p>
        With a keen eye for breathtaking locations, we facilitate film permits and location services for both
        public and private properties. Our offerings include location scouting, location management, and full
        production services for film, commercials, television, photography, and print advertising.
      </p>
      <p>
        With years of industry experience, CAST TALENTS Location Scout is dedicated to ensuring your production's
        success from start to finish.
      </p>
    </div>
  </div>
</div>

        </div>
    </section>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var section = "{{ $section }}";
            if (section) {
                var element = document.getElementById(section);
                if (element) {
                    element.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        });
    </script>

@endsection
