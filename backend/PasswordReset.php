<?php
$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
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

//Function to Change Password
function change_password($user_id, $password) {
  $user_id = (int)$user_id;
  $password = md5($password);

  mysql_db_query ("UPDATE 'users' SET 'password' = '$NewPassword' WHERE 'user_id' = $user_id");

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
