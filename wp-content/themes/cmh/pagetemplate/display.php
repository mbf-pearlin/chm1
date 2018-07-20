 <html>
 <body>
<?php
session_start();

echo $_SESSION['contactname'];
echo $_SESSION['contactemail'];
echo $_SESSION['contactnumber'];
echo $_SESSION['contactsub'];
echo $_SESSION['contactcontent'];

?>
 </body>
 </html> 