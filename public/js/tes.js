$(document).ready(function() {
    
    $('.dropdown-content').on('click', 'a', function(event) {
        // Prevent default link behavior
        event.preventDefault();
      
        // Remove active class from all links
        $('.dropdown-content a').removeClass('active');
      
        // Add active class to clicked link
        $(this).addClass('active');
      });      

    // Add click event listener to save button
    $('.savecontinue').click(function() {
        console.log('Save & Continue button clicked!');
      // Use the clickedValue variable here
      var clickedValue = $('.dropdown-content a.active').data('value');
      console.log('Clicked value:', clickedValue);
    });
  });
