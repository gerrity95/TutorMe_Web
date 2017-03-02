<?php

include("connection.php");

$errorMSG = "";

// NAME

  if (empty($_POST["name"])) {
      $errorMSG = "Name is required ";
  } else {
      $name = mysqli_real_escape_string($conn, $_POST['name']);
  }

  // EMAIL
  if (empty($_POST["email"])) {
      $errorMSG .= "Email is required ";
  } else {
      $email = mysqli_real_escape_string($conn, $_POST['email']);
  }

  // DATE
  if (empty($_POST["date"])) {
      $errorMSG .= "Date is required ";
  } else {
      $message = mysqli_real_escape_string($conn, $_POST['date']);
  }

  // TIME
  if (empty($_POST["time"])) {
      $errorMSG .= "Time is required ";
  } else {
      $message = mysqli_real_escape_string($conn, $_POST['time']);
  }

  $EmailTo = "tutormeire@gmail.com"; //This has to be changed to the tutor's email address
  $Subject = "TutorMe: Grind Request Received";

  // prepare email body text
  $Body = "Name: ";
  $Body .= $name;
  $Body .= "\n";

  $Body .= "Email: ";
  $Body .= $email;
  $Body .= "\n";

  $Body .= "Grind has been requested for: ";
  $Body .= "\n";
  $Body .= $date;
  $Body .= " ";
  $Body .= "$time";

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
