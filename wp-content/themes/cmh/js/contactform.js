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
        contactnumber: {
          required: true,
          //phoneUS: true

        },
        contactcontent: {
          required: true
        },
        message: {
          required: true,
          
        }
      }
    });
})