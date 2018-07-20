<?php
global $wpdb;
require_once('../../../../wp-load.php');
$connection = mysql_connect("localhost", "root", "root"); // Establishing Connection with Server
$db = mysql_select_db("chmc", $connection); // Selecting Database from Server

   

    if ( isset( $_POST["submit"] ) && $_POST["contactname"] != "" ) {
        $table = $wpdb->"contact_form_info";
        $contactName = strip_tags($_POST["contactname"], "");
        $contactEmail = strip_tags($_POST["contactname"], "");
        $contactNumber = strip_tags($_POST["contactnumber"], "");
        $contactSub = strip_tags($_POST["contactsub"], "");
        $contactContent = strip_tags($_POST["contactcontent"], "");

                $wpdb->insert( 
            $table, 
            array( 
                'contactname' => $contactName,
                'contactname' => $contactEmail,
                'contactnumber' => $contactNumber,
                'contactsub' => $contactSub,
                'contactcontent' => $contactContent
            )
        );
        $html = "<p>Your name <strong>$name</strong> was successfully recorded. Thanks!!</p>";
    }


/*if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL

var_dump($_POST['submit']);
exit;
$contactName = $_POST['contactname'] ;
$contactEmail = $_POST['contactname'];
$contactNumber = $_POST['contactnumber'];
$contactSub = $_POST['contactsub'];
$contactContent = $_POST['contactcontent'];

if($contactName !=''|| $contactEmail !='')
{
       echo $sql ="INSERT INTO contact_form_info (contactname,contactemail,contactnumber,contactsub,contactcontent) VALUES ('$contactName','$contactEmail','$contactNumber','$contactSub','$contactContent')";
        
        echo "Thank you for Submitting.";
    }
else{
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}


}
mysql_close($connection); 


if($db){
echo "yes";
}else{
    echo "no";
} */
?>

