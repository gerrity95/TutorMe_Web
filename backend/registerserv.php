<?php

session_start();
include("connection.php"); //Establising connection with the database
//include("queries.php");


$error=""; //variable to store error message;

if(isset($_POST['register-submit']))
{
	if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['optradio']))
	{
		$error = "All fields are required";
	}
	else
	{

		//Define $email, $user and $pass
		$user_type = mysqli_real_escape_string($conn, $_POST['optradio']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$user = mysqli_real_escape_string($conn, $_POST['username']);
		$pass = mysqli_real_escape_string($conn, $_POST['password']);
		$pass = md5($_POST['password']);
		$pass = sha1($_POST['password']);

		//We will need 3 queries, the insert query, a query to check against other emails and a query to check against other usernames

		$userCheck = mysqli_query($conn, "SELECT username FROM users WHERE username='$user'");
		$emailCheck = mysqli_query($conn, "SELECT email FROM users WHERE email='$email'");

		$user_insert = "INSERT INTO users (email, username, password, user_type) VALUES ('$email', '$user', '$pass', '$user_type')";

		//Variables to check if there is anything in the corresponding DB
		$userRows = mysqli_num_rows($userCheck);
		$emailRows = mysqli_num_rows($emailCheck);

		$count = 1;

		if ($userRows == 0)
		{
			if ($emailRows == 0)
			{
				mysqli_query($conn, $user_insert);

				echo "<script language='javascript'>
					alert('Your account has been created succesfully');

				</script>";

				/*
				$to = $email;
				$subject = 'Welcome to TutorMe';
				$message = 'Welcome to TutorMe. Lets get started.';
				$headers = 'From: tutormeire@gmail.com' . "\r\n" .
						'Reply-To: From: tutormeire@gmail.com' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();

				mail($to, $subject, $message, $headers);

				*/

				$_SESSION['username'] = $user;
				header("Location: ./register_full.php");

			}
			else
			{
				$error = "Sorry but that email is already in use!";
				echo "<script language='javascript'>
					alert('Sorry but that email is already in use!');

				</script>";
			}
		}
		else
		{
			$error = "Sorry but that username is already in use!";
			echo "<script language='javascript'>
				alert('Sorry but that username is already in use!');

			</script>";

		}


	}
}
