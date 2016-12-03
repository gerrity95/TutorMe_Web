<!-- PHP script necessary for form functionality -->
<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

$EmailTo = "tutormeire@gmail.com";
$Subject = "Contact Form Submission"

//Preparation for the body of the email

$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";

$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

//send email
$success = mail($EmailTo $Subject, $Body, "From:".$email);

//redirect to sucess page
if ($success)
{
  echo "Success!";
} else {
  echo "invalid";
}

?>
