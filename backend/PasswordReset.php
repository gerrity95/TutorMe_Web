<?php
$errorMSG = "";


include("backend/connection.php");
include("check.php");

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

$EmailTo = "tutormeire@gmail.com";
$Subject = "New TutorMe Password";

// prepare email body text
$Body = "Name: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

//Generates New Password
$NewPassword = substr(md5(rand(999, 999999)), 0, 8)

// send email
$success = mail($Email, $Subject, 'Hello' .$name . "\n\nYour new password is: " . $NewPassword, "From:".$emailTo);

//Need to add new row for whether password changed or not. ********************************************************

// Function to Change Password
  function change_password($email, $password) {
  $email = (Var)$email;
  $password = md5($NewPassword);

  mysqli_query ($conn, "UPDATE 'users' SET 'password' = '$NewPassword' WHERE 'email' = $email");

}



// redirect to success page (This is in the script.js (ajax function))
if ($success && $errorMSG == ""){
   echo "Please check your Email inbox in order to retrieve your new password.";
}else{
  if($errorMSG == ""){
    echo "Something went wrong!";
  } else {
    echo $errorMSG;
  }
}

?>
