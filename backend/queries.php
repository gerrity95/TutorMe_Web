<?php
include("connection.php");
//include("check.php");

//Login Queries
$user_check = "SELECT * FROM users WHERE password='$pass' and username='$user'";
$check_reg = "SELECT full_reg FROM users WHERE password='$pass' and username='$user'";

$login = mysqli_query($conn, "SELECT * FROM users WHERE password='$pass' and username='$user'");
//$result = $conn->query($check_reg)->fetch_object()->full_reg;

//Initial Register Queries
$userCheck = mysqli_query($conn, "SELECT username FROM users WHERE username='$user'");
$emailCheck = mysqli_query($conn, "SELECT email FROM users WHERE email='$email'");
$user_insert = "INSERT INTO users (email, username, password, user_type) VALUES ('$email', '$user', '$pass', '$user_type')";

?>
