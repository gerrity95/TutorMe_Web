<?php

include("connection.php");
session_start();
$user_check=$_SESSION['username'];

$sql = mysqli_query($conn, "SELECT username FROM users WHERE username = '$user_check'");

$row=mysqli_fetch_array($sql, MYSQLI_ASSOC);

$login_user=$row['user'];

if(!isset($user_check))
{
	header("Location: login.php");
}

?>
