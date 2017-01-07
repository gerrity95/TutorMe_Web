<!-- This is the backend for the student full registration form. -->
<?php
 //Establising connection with the database


$error=""; //variable to store error message;


if(isset($_POST['stu-register_submit']))
{

	if(empty($_POST['firstname']) || empty($_POST['surname']) || empty($_POST['location']) || empty($_POST['phone']) || empty($_POST['school']) || empty($_POST['cycle']) || empty($_POST['subjects']))
	{
		$error = "All fields are required";
		echo "<script language='javascript'>
			alert('Empty Fields');

		</script>";

	}
	else
	{
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $location = $_POST['location'];
    $phoneNum = $_POST['phone'];
    $schoolName = $_POST['school'];
    $cycle = $_POST['cycle'];
		$subjects = $_POST['subjects'];

    //Get the username by getting $userSession from check.php
    //Insert into the user, user_student and change value of full_reg

		//$student_insert = "INSERT INTO user_student (user_id, school, cycle, subjects) VALUES ((SELECT user_id FROM users WHERE username = '$userSession'), '$schoolName', (SELECT cycle_name FROM Cycle WHERE cycle_id = '$cycle'), (SELECT subject_name FROM Subjects WHERE subject_id = '$subjects'))";
$student_insert = "INSERT INTO user_student (user_id, school, cycle, subjects) VALUES ((SELECT user_id FROM users WHERE username = '$userSession'), '$schoolName', '$cycle', '$subjects')";

		$general_insert = "UPDATE `users` SET first_name='$firstname', surname='$surname', location='$location', phone_number='$phoneNum', full_reg='true' WHERE username='$userSession'";

		//$location_insert = "UPDATE users SET location = (SELECT location_name FROM Location WHERE location_id='$location') WHERE username='$userSession'";


		mysqli_query($conn, $general_insert);
		mysqli_query($conn, $student_insert);
		//mysqli_query($conn, $location_insert);

		echo "<script language='javascript'>
			alert('Your account has been created succesfully');
			window.location = 'student_pages/home.php';
		</script>";
	}
}

?>
