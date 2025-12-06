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
  
  <!-- Floating Icons Mobile Touch Support -->
  <script>
    $(document).ready(function() {
      // Check if device is touch-enabled
      var isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
      
      if (isTouchDevice) {
        var $floatingIcons = $('.floating-icon-email, .floating-icon-whatsapp, .floating-icon-phone');
        var touchHandled = false;
        
        // Handle touch start
        $floatingIcons.on('touchstart', function(e) {
          touchHandled = false;
          var $this = $(this);
          
          // Remove active from other icons
          $floatingIcons.not($this).removeClass('active');
          
          // If icon is not active, expand it on first tap
          if (!$this.hasClass('active')) {
            $this.addClass('active');
            touchHandled = true;
            e.preventDefault();
            e.stopPropagation();
            return false;
          }
        });
        
        // Handle touch end
        $floatingIcons.on('touchend', function(e) {
          var $this = $(this);
          
          // If we prevented default on touchstart (first tap), prevent navigation
          if (touchHandled) {
            e.preventDefault();
            e.stopPropagation();
            return false;
          }
          
          // If icon is already active (second tap), allow navigation
          // Don't prevent default - let the link work
        });
        
        // Handle click events (for devices that fire both touch and click)
        // Use a small delay to distinguish between touch-initiated clicks and actual clicks
        $floatingIcons.on('click', function(e) {
          var $this = $(this);
          
          // If this click was preceded by a touch event, ignore it
          if (touchHandled) {
            touchHandled = false;
            e.preventDefault();
            e.stopPropagation();
            return false;
          }
          
          // If icon is not active, expand it and prevent navigation
          if (!$this.hasClass('active')) {
            $this.addClass('active');
            e.preventDefault();
            e.stopPropagation();
            return false;
          }
          
          // If icon is active, allow navigation (don't prevent default)
        });
        
        // Close icon when clicking outside
        $(document).on('touchend click', function(e) {
          if (!$(e.target).closest('.floating-icon').length) {
            $floatingIcons.removeClass('active');
            touchHandled = false;
          }
        });
      }
    });
  </script>
  
  @yield('js')