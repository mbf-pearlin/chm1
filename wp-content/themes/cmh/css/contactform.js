jQuery(document).ready(function($) {
      $( "#contactForm" ).validate({
      rules: {
          contactname: {
          required: true
        },
        contactemail: {
          required: true,
          email: true
        },
        contactcontent: {
          required: true
        }
      }
    });
})