<?php

include("connection.php");
session_start();
$userSession=$_SESSION['username'];

$sql = mysqli_query($conn, "SELECT username FROM users WHERE username = '$userSession'");

$row=mysqli_fetch_array($sql, MYSQLI_ASSOC);

$check_reg = "SELECT user_type FROM users WHERE username = '$userSession'";
$check_id = "SELECT user_id FROM users WHERE username = '$userSession'";
$check_full_member = "SELECT full_reg FROM users WHERE username = '$userSession'";
$get_fullname = "SELECT first_name, surname FROM users WHERE username = '$userSession'";

$userType = $conn->query($check_reg)->fetch_object()->user_type;

$current_user_id = $conn->query($check_id)->fetch_object()->user_id;
$current_user_type = $conn->query($check_reg)->fetch_object()->user_type;
$current_full_member = $conn->query($check_full_member)->fetch_object()->full_reg;
$get_firstname = $conn->query($get_fullname)->fetch_object()->first_name;
$get_surname = $conn->query($get_fullname)->fetch_object()->surname;


$login_user=$row['username'];

if(!isset($userSession))
{
	header("Location: /TutorMe_Web/index.php");
}


/*

Will be slightly different for each user so won't work as a function

function checkUser()
{
	if ($current_user_type == "student")
	{
	  if ($current_full_member == "false")
	  {
	    header("Location: /TutorMe_Web/register_full.php");
	  }
	  else {
	    header("Location: /TutorMe_Web/student_pages/home.php");
	  }
	}
	else {
	  if ($current_full_member == "false")
	  {
	    header("Location: /TutorMe_Web/register_full.php");
	  }
		else {
			header("Location: /TutorMe_Web/tutor_pages/home.php");
		}
	}
}
*/

?>
