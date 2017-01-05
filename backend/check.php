<?php

include("connection.php");
session_start();
$user_check=$_SESSION['username'];

$sql = mysqli_query($conn, "SELECT username FROM users WHERE username = '$user_check'");

$row=mysqli_fetch_array($sql, MYSQLI_ASSOC);

$check_reg = "SELECT user_type FROM users WHERE username = '$userSession'";

$userType = $conn->query($check_reg)->fetch_object()->user_type;

$login_user=$row['user'];

if(!isset($user_check))
{
	header("Location: login.php");
}

?>
