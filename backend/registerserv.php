<?php

session_start();
include("connection.php"); //Establising connection with the database

$error=""; //variable to store error message;

if(isset($_POST['submit']))
{
	if(empty($_POST['user']) || empty($_POST['pass']) || empty($_POST['email']))
	{
		$error = "All fields are required";
	}
	else
	{
		
		//Define $email, $user and $pass
		$email = $_POST['email'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		
		//We will need 3 queries, the instert query, a query to check against other emails and a query to check against other usernames

		$userCheck = mysqli_query($conn, "SELECT username FROM users WHERE username='$user'");
		$emailCheck = mysqli_query($conn, "SELECT email FROM users WHERE email='$email'");
		
		$insert = "INSERT INTO users (email, username, password) VALUES  ($email, $user, $pass)";
		
		//Variables to check if there is anything in the corresponding DB
		$userRows = mysqli_num_rows($userCheck);
		$emailRows = mysqli_num_rows($emailCheck);

		$count = 1;
		
		if ($userRows == 0)
		{
			if ($emailRows == 0)
			{
				mysqli_query($conn, "INSERT INTO users (email, username, password) VALUES  ('$email', '$user', '$pass')");
				echo "<script language='javascript'>
					alert('Your account has been created succesfully');
					window.location = 'login.php';
					
				</script>";
			}
			else
			{
				$error = "Sorry but that email address is already in use!";
			}
		}
		else
		{
			$error = "Sorry but that username is already in use!";
		}


	}	
}
