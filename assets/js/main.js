jQuery(document).ready(function($) {
    // Initial setup
    $(".price-content:first").addClass("active-tab");
    $(".price-button:first").addClass("active-button");

    // Tab click event
    $(".price-button").on("click", function() {
      var tabId = $(this).data("tab");

      // Hide all tab content
      $(".price-content").removeClass("active-tab");
      $(".price-button").removeClass("active-button");

      // Show the selected tab content
      $("#" + tabId).addClass("active-tab");

      // Show the selected tab content
      $(".price-button" + tabId).addClass("active-tab");
      $(this).addClass("active-button");
    });

    // TODO - Make common tab for whole website

    // Initial setup
    $(".forms-tab-content:first").addClass("active-tab");
    $(".tab-button:first").addClass("active-button");

    // Tab click event
    $(".tab-button").on("click", function() {
      var tabId = $(this).data("tab");

      // Hide all tab content
      $(".forms-tab-content").removeClass("active-tab");
      $(".tab-button").removeClass("active-button");

      // Show the selected tab content
      $("#" + tabId).addClass("active-tab");

      // Show the selected tab content
      $(".tab-button" + tabId).addClass("active-tab");
      $(this).addClass("active-button");
    });


    var scrollToTopButton = $('#scroll-to-top');

        // Show/hide the button based on scroll position
        $(window).scroll(function() {
            if ($(this).scrollTop() > 200) { // Adjust the scroll position threshold as needed
                scrollToTopButton.addClass('visible');
            } else {
                scrollToTopButton.removeClass('visible');
            }
        });

        // Smooth scroll to top when the button is clicked
        scrollToTopButton.click(function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 500); // Adjust the animation speed as needed
        });

  });


  window.addEventListener('scroll', function() {
    var header = document.querySelector('header');
    var scrollPosition = window.scrollY;

    if (scrollPosition > 500) { // Adjust the scroll position threshold as needed
        header.classList.add('sticky');
    } else {
        header.classList.remove('sticky');
    }
});