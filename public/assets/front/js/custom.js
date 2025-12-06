var btn = $('#button');

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});
btn.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({
    scrollTop: 0
  }, '300');
});


$(window).on('load', function () {
  // Preloader
  $('.loader').fadeOut();
  $('.loader-mask').delay(350).fadeOut('slow');
});


// wow js
new WOW().init();


// Get the button
var backButton = document.getElementById("back-to-top-btn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    backButton.style.display = "block";
  } else {
    backButton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
backButton.addEventListener("click", function () {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
});


function carouselHeight() {
  var maxHeight = $('.carousel-focus-item:nth-of-type(2)').outerHeight()
  $('.carousel-focus-inner').css('height', maxHeight);
}

$(document).ready(function () {
  carouselHeight();
})

$(window).resize(function () {
  carouselHeight();
});

function changeSlide(index, step = 'next') {
  var total = $('.carousel-focus-item').length;
  var temp = step == 'next' ? (index + 1) : (index - 1);
  if (temp < 1) {
    temp = total;
  }

  if (temp > total) {
    temp = 1;
  }

  $('.carousel-focus-item').removeClass('active').hide();
  $('.carousel-focus-item:nth-of-type(' + temp + ')').addClass('active').show();
}

$(document).on('click', '.carousel-focus-controls > .prev', function () {
  var width = $(document).outerWidth();
  if (width <= 767) {
    var activeItem = $('.carousel-focus-item.active');
    var index = activeItem.index() + 1;

    changeSlide(index, 'prev');
  } else {
    $(this).closest('.carousel-focus-inner').find('.carousel-focus-item').first().hide().appendTo('.carousel-focus-items').show();
    $('.carousel-focus-item iframe').detach();
  }

  // getThumbnail()
});

$(document).on('click', '.carousel-focus-controls > .next', function () {
  var width = $(document).outerWidth();
  if (width <= 767) {
    var activeItem = $('.carousel-focus-item.active');
    var index = activeItem.index() + 1;

    changeSlide(index);
  } else {
    $(this).closest('.carousel-focus-inner').find('.carousel-focus-item').last().hide().prependTo('.carousel-focus-items').show();
    $('.carousel-focus-item iframe').detach();
  }
  // getThumbnail()
});

$(document).on('click', '.carousel-focus-item:nth-of-type(1) img', function () {
  $(this).closest('.carousel-focus-item ').insertAfter('.carousel-focus-item:nth-of-type(2)');
});

$(document).on('click', '.carousel-focus-item:nth-of-type(3) img', function () {
  $(this).closest('.carousel-focus-item ').insertBefore('.carousel-focus-item:nth-of-type(2)');
});

// comingsoon page countdown js
(function () {
  if (document.getElementById("days") !== null) {
    const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

    let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = '2024',
      dayMonth = "09/14/",
      birthday = dayMonth + yyyy;

    today = mm + "/" + dd + "/" + yyyy;
    if (today > birthday) {
      birthday = dayMonth + nextYear;
    }
    //end

    const countDown = new Date(birthday).getTime(),
      x = setInterval(function () {
        const now = new Date().getTime(),
          distance = countDown - now;

        let days = Math.floor(distance / (day));
        let hours = Math.floor((distance % (day)) / (hour));
        let minutes = Math.floor((distance % (hour)) / (minute));
        let seconds = Math.floor((distance % (minute)) / second);

        document.getElementById("days").innerText = days,
          document.getElementById("hours").innerText = hours,
          document.getElementById("minutes").innerText = minutes,
          document.getElementById("seconds").innerText = seconds;

        //do something later when date is reached
        if (distance < 0) {
          clearInterval(x);
          var items = document.querySelectorAll(".compaign_countdown");
          for (var i = 0; i <= items.length; i++) {
            if (typeof items[i] !== 'undefined') {
              items[i].style.display = "none";
            }
          }
        }
        //seconds
      }, 0)
  }
}());

$(document).ready(function () {
  var owl = $('.testimonial-review-con .owl-carousel');
  owl.owlCarousel({
    margin: 30,
    nav: false,
    loop: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 4500,
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 1
      },
      768: {
        items: 2
      },
      992: {
        items: 2
      }
    }
  })
})

// Close mobile navbar when clicking outside
$(document).ready(function() {
  var $navbar = $('#navbarSupportedContent');
  var $navbarToggler = $('.navbar-toggler');
  var $navbarContainer = $('.navbar');
  
  // Function to check if we're on mobile
  function isMobile() {
    return $(window).width() <= 991; // Bootstrap lg breakpoint
  }
  
  // Close navbar function
  function closeNavbar() {
    if ($navbar.hasClass('show')) {
      $navbar.collapse('hide');
      $navbarToggler.addClass('collapsed');
      $navbarToggler.attr('aria-expanded', 'false');
    }
  }
  
  // Handle clicks outside navbar
  $(document).on('click', function(e) {
    // Only handle on mobile devices
    if (!isMobile()) {
      return;
    }
    
    // Check if navbar is open
    if ($navbar.hasClass('show')) {
      // Check if click is outside navbar and navbar toggler
      var isClickInsideNavbar = $(e.target).closest($navbar).length > 0;
      var isClickOnToggler = $(e.target).closest($navbarToggler).length > 0;
      
      // If click is outside both navbar and toggler, close it
      if (!isClickInsideNavbar && !isClickOnToggler) {
        closeNavbar();
      }
    }
  });
  
  // Also close navbar when clicking on a nav link (optional - for better UX)
  $navbar.find('.nav-link').on('click', function() {
    if (isMobile()) {
      // Small delay to allow navigation to happen first
      setTimeout(function() {
        closeNavbar();
      }, 100);
    }
  });
  
  // Close navbar immediately when scrolling on mobile
  var lastScrollTop = 0;
  
  $(window).on('scroll', function() {
    // Only handle on mobile devices
    if (!isMobile()) {
      lastScrollTop = $(window).scrollTop();
      return;
    }
    
    // Check if navbar is open
    if ($navbar.hasClass('show')) {
      var currentScrollTop = $(window).scrollTop();
      var scrollDifference = Math.abs(currentScrollTop - lastScrollTop);
      
      // Close immediately when user scrolls (with minimum 3px movement to avoid false triggers)
      if (scrollDifference > 3) {
        // Close immediately without any delay
        closeNavbar();
      }
      
      lastScrollTop = currentScrollTop;
    } else {
      // Update lastScrollTop even when menu is closed
      lastScrollTop = $(window).scrollTop();
    }
  });
})