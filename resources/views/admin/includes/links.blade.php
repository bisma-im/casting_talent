<!-- plugins:css -->
<script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.googlemaps.api_key') }}&callback=initMap&libraries=places&v=weekly" defer></script>
<link rel="stylesheet" href="{{ url('admin-assets') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="{{ url('admin-assets') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" href="{{ url('admin-assets') }}/assets/vendors/css/vendor.bundle.base.css">
<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="{{ url('admin-assets') }}/assets/vendors/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet"
    href="{{ url('admin-assets') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
<!-- End plugin css for this page -->
<!-- inject:css -->
<!-- endinject -->
<!-- Layout styles -->
<link rel="stylesheet" href="{{ url('admin-assets') }}/assets/css/style.css">
<!-- End layout styles -->
<link rel="shortcut icon" href="{{ url('admin-assets') }}/assets/images/favicon.png" />
