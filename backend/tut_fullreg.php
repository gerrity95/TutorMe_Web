<!-- This is the backend for the student full registration form. -->
<?php

$error=""; //variable to store error message;

if(isset($_POST['tutorreg-submit']))
{
	if(empty($_POST['firstname']) || empty($_POST['surname']) || empty($_POST['location']) || empty($_POST['phone']) || empty($_POST['price']))
	{
		$error = "All fields are required";
	}
	else
	{
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $location = $_POST['location'];
    $phoneNum = $_POST['phone'];
    $price = $_POST['price'];


    //Get the username by getting $userSession from check.php
    //Insert into the user, user_student and change value of full_reg

		$get_id = "SELECT user_id FROM users WHERE username = '$userSession'";

		$theUserID = $conn->query($get_id)->fetch_object()->user_id;


		$tutor_insert = "INSERT INTO user_tutor (user_id, price) VALUES ((SELECT user_id FROM users WHERE username = '$userSession'), '$price')";
		$general_insert = "UPDATE `users` SET first_name='$firstname', surname='$surname', location='$location', phone_number='$phoneNum', full_reg='true' WHERE username='$userSession'";

		$location_insert = "UPDATE users SET location = (SELECT location_name FROM Location WHERE location_id='$location') WHERE username='$userSession'";


		mysqli_query($conn, $general_insert);
		mysqli_query($conn, $tutor_insert);
		mysqli_query($conn, $location_insert);

		echo "<script language='javascript'>
			alert('Your account has been created succesfully');
			window.location = 'tutor_pages/home.php';
		</script>";
	}
}

?>
