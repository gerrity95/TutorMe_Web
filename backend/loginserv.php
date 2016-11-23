<?php

session_start();
include("connection.php"); //Establising connection with the database

$error=""; //variable to store error message;

if(isset($_POST['submit']))
{
	if(empty($_POST['user']) || empty($_POST['pass']))
	{
		$error = "Both fields are required";
	}
	else
	{
		//Define $user and $pass
		$user = $_POST['user'];
		$pass = $_POST['pass'];
			
		//SQL Query to fetch info of registered users and find a match
		
		$query = mysqli_query($conn, "SELECT * FROM users WHERE password='$pass' and username='$user'"); 

		$rows = mysqli_num_rows($query);
		if ($rows == 1)
		{
			$_SESSION['username'] = $user;
			header("Location: welcome.php"); // Redirect to another page
		}
		else
		{
			$error = "Username or Password is invalid";
		}
		
		//mysqli_close($conn); //Closing the connection
		
	}
}


?>
