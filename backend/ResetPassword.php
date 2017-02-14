<?php
$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = mysqli_real_escape_string($conn, $_POST['password']);
}

// EMAIL
if (empty($_POST["NewPassword"])) {
    $errorMSG .= "New password is required ";
} else {
    $email = mysqli_real_escape_string($conn, $_POST['password']);
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = mysqli_real_escape_string($conn, $_POST['message']);
}

$EmailTo = "tutormeire@gmail.com";
$Subject = "New Message Received: Contact Form";

// prepare email body text
$Body = "Name: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page (This is in the script.js (ajax function))
if ($success && $errorMSG == ""){
   echo "success";
}else{
  if($errorMSG == ""){
    echo "Something went wrong!";
  } else {
    echo $errorMSG;
  }
}

?>
