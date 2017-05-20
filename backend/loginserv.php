<?php

session_start();
include("connection.php"); //Establising connection with the database
//include ("query.php");

$error=""; //variable to store error message;

if( (isset($_POST['login-submit'])))
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
		$user = mysqli_real_escape_string($conn, $_POST['username']);
		$pass = md5($_POST['password']);
		$pass = sha1($_POST['password']);


		//Used to check if the user has fully registered.
		$check_reg = "SELECT full_reg FROM users WHERE password='$pass' and username='$user'";

		$result = $conn->query($check_reg)->fetch_object()->full_reg;

		$login = mysqli_query($conn, "SELECT * FROM users WHERE password='$pass' and username='$user'");


		$rows = mysqli_num_rows($login);
		if ($rows == 1)
		{
			$_SESSION['username'] = $user;

			$check_userType = "SELECT user_type FROM users WHERE username = '$user'";

			$userType = $conn->query($check_userType)->fetch_object()->user_type;

			if ($result == "false")
			{
				header("Location: ./register_full.php");
			}
			else {

				if($userType == "student")
				{
						header("Location: ./student_pages/home.php"); // Redirect to another page
				} else {
						header("Location: ./tutor_pages/home.php"); // Redirect to another page
				}
			}
		}
		else
		{
			$error = "Username or Password is invalid";
			echo "<script language='javascript'>
				alert('Username or Password is invalid.');
			</script>";
		}


	}
}
else if(isset($_POST['login-form']))
{
	echo "<script language='javascript'>
		alert('waaxxa or Password is invalid.');
	</script>";
}


?>
