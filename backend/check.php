<?php

include("connection.php");
session_start();
$userSession=$_SESSION['username'];

$sql = mysqli_query($conn, "SELECT username FROM users WHERE username = '$userSession'");

$row=mysqli_fetch_array($sql, MYSQLI_ASSOC);

$check_reg = "SELECT user_type FROM users WHERE username = '$userSession'";
$check_id = "SELECT user_id FROM users WHERE username = '$userSession'";


$userType = $conn->query($check_reg)->fetch_object()->user_type;

$current_user_id = $conn->query($check_id)->fetch_object()->user_id;

$login_user=$row['username'];

if(!isset($userSession))
{
	header("Location: login.php");
}

?>
