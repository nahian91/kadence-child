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
  });