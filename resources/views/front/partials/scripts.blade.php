  <!-- BACK TO TOP BUTTON -->
  <button id="back-to-top-btn" title="Back to Top"></button>
  <script src="{{ asset('assets/front/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/front/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/front/js/owl.carousel.js') }}"></script>
  <script src="{{ asset('assets/front/js/contact-form.js') }}"></script>
  <script src="{{ asset('assets/front/js/video-popup.js') }}"></script>
  <script src="{{ asset('assets/front/js/video-section.js') }}"></script>
  <script src="{{ asset('assets/front/js/jquery.validate.js') }}"></script>
  <script src="{{ asset('assets/front/js/wow.js') }}"></script>
  <script src="{{ asset('assets/front/js/counter.js') }}"></script>
  <script src="{{ asset('assets/front/js/custom.js') }}"></script>
  <script src="{{ asset('assets/front/js/search.js') }}"></script>
  
  <!-- Newsletter Subscription Script -->
  <script>
    $(document).ready(function() {
      $('#newsletterForm').on('submit', function(e) {
        e.preventDefault();
        
        var $form = $(this);
        var $submitBtn = $('#newsletter_submit_btn');
        var $message = $('#newsletter_message');
        var $emailInput = $('#newsletter_email');
        var email = $emailInput.val();
        
        // Hide previous messages
        $message.hide().removeClass('text-success text-danger');
        
        // Validate email
        if (!email || !isValidEmail(email)) {
          $message.addClass('text-danger').text('Please enter a valid email address.').fadeIn();
          return;
        }
        
        // Disable submit button
        $submitBtn.prop('disabled', true);
        var originalHtml = $submitBtn.html();
        $submitBtn.html('<i class="fa fa-spinner fa-spin"></i>');
        
        // AJAX request
        $.ajax({
          url: '{{ route("newsletter.subscribe") }}',
          type: 'POST',
          data: {
            _token: '{{ csrf_token() }}',
            email: email
          },
          success: function(response) {
            if (response.status === 'success') {
              $message.removeClass('text-danger').addClass('text-success').text(response.message || 'Thank you for subscribing to our newsletter!').fadeIn();
              $emailInput.val('');
              
              // Hide message after 5 seconds
              setTimeout(function() {
                $message.fadeOut();
              }, 5000);
            } else {
              $message.removeClass('text-success').addClass('text-danger').text(response.message || 'Something went wrong. Please try again.').fadeIn();
            }
          },
          error: function(xhr) {
            var errorMessage = 'Something went wrong. Please try again.';
            if (xhr.responseJSON && xhr.responseJSON.message) {
              errorMessage = xhr.responseJSON.message;
            } else if (xhr.responseJSON && xhr.responseJSON.data) {
              // Handle validation errors
              var errors = xhr.responseJSON.data;
              if (errors.email) {
                errorMessage = errors.email[0];
              }
            }
            $message.removeClass('text-success').addClass('text-danger').text(errorMessage).fadeIn();
          },
          complete: function() {
            // Re-enable submit button
            $submitBtn.prop('disabled', false);
            $submitBtn.html(originalHtml);
          }
        });
      });
      
      function isValidEmail(email) {
        var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
      }
    });
  </script>