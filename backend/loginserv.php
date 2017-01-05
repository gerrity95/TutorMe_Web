<?php

session_start();
include("connection.php"); //Establising connection with the database
//include("queries.php");

$error=""; //variable to store error message;

if(isset($_POST['submit']))
{
	if(empty($_POST['username']) || empty($_POST['password']))
	{
		$error = "Both fields are required";
		echo "<script language='javascript'>
		alert('Both fields required');
	</script>";
	}
	else
	{
		//Define $user and $pass
		$user = $_POST['username'];
		$pass = $_POST['password'];

		//SQL Query to fetch info of registered users and find a match

		//Used to check if the user is fully registered:
		$check_reg = "SELECT full_reg FROM users WHERE password='$pass' and username='$user'";

		$result = $conn->query($check_reg)->fetch_object()->full_reg;

		$login = mysqli_query($conn, "SELECT * FROM users WHERE password='$pass' and username='$user'");


		$rows = mysqli_num_rows($login);
		if ($rows == 1)
		{
			$_SESSION['username'] = $user;

			if ($result == "false")
			{
				header("Location: register_full.php"); //This means the user hasn't fully registered, will be directed to here
			}
			else {
				header("Location: ./tutor_pages/home.php"); // Redirect to another page - It's at tutor_pages for test purposes
			}
		}
		else
		{
			$error = "Username or Password is invalid";
		}


	}
}


?>
