<?php
    include_once 'config.php';
    ?>
<?php

class ContactFormHandler {

     function handleContactForm() {

       if($this->isFormSubmitted() && $this->isNonceSet()) {
        if($this->isFormValid()) {
           $this->sendContactForm();
        } else {
            $this->displayContactForm();
        }
    } else {
        $this->displayContactForm();
    }

   }

   public function sendContactForm() {


        $contactName = $_POST['contactname'] ;
        $contactEmail = $_POST['contactemail'];
        $contactNumber = $_POST['contactnumber'];
        $contactSub = $_POST['contactsub'];
        $contactContent = $_POST['contactcontent'];
    


        $emailTo = "pearlin@madebyfire.com";

        $subject = 'New contact from  From '.$contactName;
        $body = "Contact Name: $contactName \n\nContact Email: $contactEmail \n\nContact number: $contactNumber \n\nContact subject: $contactSub \n\nContact contents: $contactContent";
        $headers = 'From: '.$contactName.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $contactEmail;

         mail($emailTo, $subject, $body, $headers);

        $emailTo1="$contactEmail";
        $subject1 = 'New contact from  From '.$contactName;
        $body1 = "Contact Name: $contactName \n\nContact Email: $contactEmail \n\nContact number: $contactNumber \n\nContact subject: $contactSub \n\nContact contents: $contactContent";
        $headers1 = 'From: '.$contactName.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $contactEmail;

         mail($emailTo1, $subject, $body, $headers);
       
         echo "Contact Us sent. We will reply to your query soon.";


        $con = mysql_connect('localhost', 'root', 'root') or die(mysql_error());
        $db = mysql_select_db('chmc', $con) or die(mysql_error());
        $query= "INSERT INTO cm_contact_info (contactname,contactemail,contactnumber,contactsub,contactcontent) VALUES ('".$contactName."', '".$contactEmail."', '".$contactNumber."', '".$contactSub."', '".$contactContent."')";
        $rq = mysql_query($query, $con);
       if (!$rq) {
          echo " the sql query faiiled to work ";
            } else {
          echo "the query executed sucessfully";
}
   }

   function isNonceSet() {
    if( isset( $_POST['nonce_field_for_submit_contact_form'] )  &&
      wp_verify_nonce( $_POST['nonce_field_for_submit_contact_form'], 'submit_contact_form' ) ) return true;
    else return false;
   }

   function isFormValid() {
    $hasError=null;
    //Check all mandatory fields are present.
    if ( trim( $_POST['contactname'] ) === '' ) {
        $error = 'Please enter your name.';
        $hasError = true;
    } else if (!filter_var($_POST['contactemail'], FILTER_VALIDATE_EMAIL)  ) {
        $error = 'Please enter a valid email.';
        $hasError = true;
    } else if (!filter_var($_POST['contactnumber'], FILTER_VALIDATE_INT)  ) {
        $error = 'Please enter a valid email.';
        $hasError = true;
    } else if ( trim( $_POST['contactcontent'] ) === '' ) {
        $error = 'Please enter the content.';
        $hasError = true;
    } else if ( trim( $_POST['contactsub'] ) === '' ) {
        $error = 'Please enter the content.';
        $hasError = true;
    }

    //Check if any error was detected in validation.
    if($hasError == true) {
        echo $error;
        return false;
    }
    return true;
   }

    function isFormSubmitted() {
    if( isset( $_POST['submitContactForm'] ) ) return true;
    else return false;
   }

    //This function displays the Contact form.
    public function displayContactForm() {
        ?>
      
    <div class="container">
        <div class="row contact-details">
            <div class="col-6 form-section contact">
                <div class="contact-us">
                 
                    <form action="" id="contactForm" method="POST" enctype="multipart/form-data">

                        <div class="form-row">
                            <label class="floating-item">

                                <input type="text" name="contactname" id="contactname" class="floating-item-input input-item" />
                                <span class="floating-item-label">Your name</span>
                            </label>
                        </div>

                        <div class="form-row">
                            <label class="floating-item">

                                <input type="text" name="contactemail" id="contactemail" class="floating-item-input input-item" />
                                <span class="floating-item-label">Your email</span>
                            </label>
                        </div>

                        <div class="form-row">
                            <label class="floating-item">

                                <input type="text" name="contactnumber" id="contactnumber" class="floating-item-input input-item" />
                                <span class="floating-item-label">Contact number</span>
                            </label>
                        </div>

                        <div class="form-row">
                            <label class="floating-item">

                                <input type="text" name="contactsub" id="contactsub" class="floating-item-input input-item" />
                                <span class="floating-item-label">Subject</span>
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="floating-item">

                                <textarea name="contactcontent" id="contactcontent" rows="10" cols="35" class="floating-item-input input-item"></textarea>
                                <span class="floating-item-label">Your message</span>
                            </label>
                        </div>

                        <fieldset>
                           <input class="submit" name="submitContactForm" type="submit" value="Insert">
                        </fieldset>

                        <?php wp_nonce_field( 'submit_contact_form' , 'nonce_field_for_submit_contact_form'); ?>

                   
                </div>
            </div>
        </div>
    </div>

    <?php
    }

}

?>