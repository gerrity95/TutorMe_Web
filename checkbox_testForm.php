<?php

include("backend/connection.php");

if(isset($_POST['submit']))
{
  if(empty($_POST['checkso']))
  {
    echo "<script language='javascript'>
    alert('all fields are required');
    </script>";
  }
  $answer = $_POST['checkso'];
  $count = count($answer);
  $theUserID = "2";
  $userSession = "joe_bloggs";

  for($i=0;$i <= count; $i++)
  {
    $addthem = "INSERT INTO tutor_subjects (user_id, cycle_id, subject_id) VALUES ((SELECT user_id FROM users WHERE username = '$userSession'), '1', '$answer')";
  }

  //$jc_insert = "UPDATE user_tutor SET jc_subjects = (SELECT subject_name FROM Subjects WHERE subject_id='$answer') WHERE user_id='$theUserID'";

  //mysqli_query($conn, $jc_insert);

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap stylesheets -->
    <title>TutorMe Login</title>
	<!-- To incorporate Lato - a Google font -->
	 <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet'  type='text/css'>

	<!-- For social media buttons -->
	<!-- The stylesheet where we add our own stylings -->

  <link rel='stylesheet prefetch' href='http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>


  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/bootstrap-select.css">
  <link rel="stylesheet" href="css/my_style.css">
  <link rel="stylesheet" href="social_media/css/button_style.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/checkbox.css">


</head>
<body style="background:#dbdfe5">


<form action="" method="POST" style="">
<?php include("checkbox_test.php");
 ?>

<center><input onClick="" type="submit" value="Submit" name="submit"></center>
</form>

<script>
var sauce = "<?php echo $test; ?>";

function check()
{
  alert(sauce);
}
</script>

</body>
