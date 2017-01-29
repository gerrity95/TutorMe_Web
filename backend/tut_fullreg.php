<!-- This is the backend for the student full registration form. -->
<?php

$error=""; //variable to store error message;

if(isset($_POST['tutorreg-submit']))
{
	if(empty($_POST['firstname']) || empty($_POST['surname']) || empty($_POST['location']) || empty($_POST['phone']) || empty($_POST['price']) || empty($_POST['jc_subjects']) || empty($_POST['lc_subjects']) || empty($_POST['tl_subjects']))
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
		$jc_subjects = $_POST['jc_subjects'];
		$lc_subjects = $_POST['lc_subjects'];
		$tl_subjects = $_POST['tl_subjects'];


    //Get the username by getting $userSession from check.php
    //Insert into the user, user_student and change value of full_reg

		$get_id = "SELECT user_id FROM users WHERE username = '$userSession'";

		$theUserID = $conn->query($get_id)->fetch_object()->user_id;


		$tutor_insert = "INSERT INTO user_tutor (user_id, price, jc_subjects, lc_subjects, 3l_subjects) VALUES ((SELECT user_id FROM users WHERE username = '$userSession'), '$price', '$jc_subjects', '$lc_subjects', '$tl_subjects')";
		$general_insert = "UPDATE `users` SET first_name='$firstname', surname='$surname', location='$location', phone_number='$phoneNum', full_reg='true' WHERE username='$userSession'";

		$location_insert = "UPDATE users SET location = (SELECT location_name FROM Location WHERE location_id='$location') WHERE username='$userSession'";

		$jc_insert = "UPDATE user_tutor SET jc_subjects = (SELECT subject_name FROM Subjects WHERE subject_id='$jc_subjects') WHERE user_id='$theUserID'";
		$lc_insert = "UPDATE user_tutor SET lc_subjects = (SELECT subject_name FROM Subjects WHERE subject_id='$lc_subjects') WHERE user_id='$theUserID'";
		$tl_insert = "UPDATE user_tutor SET 3l_subjects = (SELECT subject_name FROM Subjects WHERE subject_id='$tl_subjects') WHERE user_id='$theUserID'";

		mysqli_query($conn, $general_insert);
		mysqli_query($conn, $tutor_insert);
		mysqli_query($conn, $location_insert);
		mysqli_query($conn, $jc_insert);
		mysqli_query($conn, $lc_insert);
		mysqli_query($conn, $tl_insert);

		echo "<script language='javascript'>
			alert('Your account has been created succesfully');
			window.location = 'tutor_pages/home.php';
		</script>";
	}
}

?>
