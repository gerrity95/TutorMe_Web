<?php
//include("backend/loginserv.php");

/*
The below is not an ideal sollution, would be better if we could reference the queries from query.php
This is so if the user is already in a session, they are still redirected to the correct page
*/

include("backend/connection.php");


if((isset($_SESSION['username']) != ''))
{
	$_SESSION['username'] = $user;
	$check_reg = "SELECT full_reg FROM users WHERE username='$user'";
	$result = $conn->query($check_reg)->fetch_object()->full_reg;

	if ($result == "false")
	{
		header("Location: register_full.php");
	}
	else {
		header("Location: tutor_pages/home.php"); // Redirect to another page
	}
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap stylesheets -->
    <title>TutorMe - Find the perfect Tutor</title>
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

</head>
<body style="background:#dbdfe5">
	<div style="margin-bottom:0px;background-image: url('images/jez-timms-4728.jpg');background-size:cover;min-height:700px" class="jumbotron">

			<?php include($root . "content_pages/menus/default_menu.php"); ?>

    <div  class="container-fluid">
	<div style="border-bottom:0px;" class="page-header" style="padding-top:20px">
		<h2 style="color:white" class="white_text">404 Error: The page can not be found. <small class="white_text"></small></h2>
	</div><br>
				<p style="color:white" class="lead">It looks like the page you were looking for doesn't exist.</p>
        <p><a href="index.php" class="btn btn-success btn-lg">Go back home</a></p>
    </div>
</div>

<div class="container-fluid" style="margin-bottom:20px;">
  <?php include($root . "content_pages/footer.html"); ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/bootstrap-select.js"></script>
<script type="text/javascript">
function getForm() {
$( "#search_form" ).load("forms/index_search.php");
}

</script>
</body>

</html>
