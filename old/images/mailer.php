

<?php
if(isset($_POST['submit'])) {
$to = "gregorycullen@gmail.com";
$subject = "Form Tutorial";
$thankyou = "thankyou.php";
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$message = $_POST['message'];

 
$body = "From: $name_field\n E-Mail: $email_field\n Message:\n $message";
 
echo "Data has been submitted to $to!";
mail($to, $subject, $body);
header( "Location: http://www.gregorycullendesign.com/thankyou.html" );
} else {
echo "blarg!";
}

?>

