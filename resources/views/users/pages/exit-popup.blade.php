<!-- Modal -->
<style>
   .modal {
        z-index: 1500;
    }
   .modal-content {
      background: linear-gradient(135deg, #00798C, #002b27);
      /* Gradient from #00798C to a lighter shade */
      color: white;
      /* Set the text color to white for contrast */
      border-radius: 10px;
      padding: 20px;
   }

   .modal-header,
   .modal-footer {
      border: none;
      /* Remove default borders */
   }

   .modal-title {
      font-weight: bold;
      text-align: center;
   }

   .modal-body {
      font-size: 16px;
      text-align: center;
      /* Center content */
   }

   /* Customize the buttons in the modal */
   .modal-body button {
      border-radius: 30px;
      padding: 10px 20px;
      margin: 5px;
      font-weight: bold;
      background-color: #ffffff;
      /* White buttons */
      color: #00798C;
      /* Button text color to match the theme */
      border: 1px solid #00798C;
      /* Border for button */
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
   .modal-open .modal {
      filter: none; /* Ensure the modal itself is not blurred */
   }

</style>


<div class="modal fade show" id="inquiryModal" role="dialog" tabindex="-1" aria-modal="true">

   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h2 class="modal-title text-center" id="modalLabel">Let's Start Now!</h2>
            <button type="button" id="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <button id="generalInquiryBtn" class="btn btn-primary">General Inquiry</button>
            <button id="clientInquiryBtn" class="btn btn-secondary">Client Inquiry</button>
         </div>
      </div>
   </div>
</div>
<script>
   document.addEventListener('DOMContentLoaded', function() {
      // Initialize and show the modal
      var myModal = new bootstrap.Modal(document.getElementById('inquiryModal'), {
         keyboard: false,
         backdrop: 'static'
      });

      $("#inquiryModal").appendTo("body");
      myModal.show();

      // Function to show the selected form and hide the other one
      function showForm(formType) {
         const generalForm = document.getElementById('generalInquiryForm');
         const clientForm = document.getElementById('clientInquiryForm');

         if (formType === 'general') {
            generalForm.style.display = 'block';
            clientForm.style.display = 'none';
         } else if (formType === 'client') {
            generalForm.style.display = 'none';
            clientForm.style.display = 'block';
         }

         // Remove blur effect from the page content
         document.getElementById('pageContent').classList.remove('blurred');
         myModal.hide();
      }

      // Show the General Inquiry form when the button is clicked
      document.getElementById('generalInquiryBtn').addEventListener('click', function() {
         showForm('general');
      });

      // Show the Client Inquiry form when the button is clicked
      document.getElementById('clientInquiryBtn').addEventListener('click', function() {
         showForm('client');
      });

      // Remove blur effect if the modal is closed without selection
      document.getElementById('closeModal').addEventListener('click', function() {
         document.getElementById('pageContent').classList.remove('blurred');
         myModal.hide();
      });
   });
</script>









<!-- <script>
   document.addEventListener('DOMContentLoaded', function() {
      // Add blur effect to the main content when the modal is shown
      var myModal = new bootstrap.Modal(document.getElementById('inquiryModal'), {
            keyboard: false,
            backdrop: 'static'
        });
        $("#inquiryModal").appendTo("body");
        myModal.show();
      document.getElementById('generalInquiryBtn').addEventListener('click', function() {
         document.getElementById('pageContent').classList.remove('blurred');
         myModal.hide();
      });
      document.getElementById('closeModal').addEventListener('click', function() {
         document.getElementById('pageContent').classList.remove('blurred');
      });
      document.getElementById('clientInquiryBtn').addEventListener('click', function() {
         window.location.href = "{{ route('dashboard.get') }}";
      });
});

</script> -->